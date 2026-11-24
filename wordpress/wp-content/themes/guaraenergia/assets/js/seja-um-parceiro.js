(function () {
    var form = document.getElementById('partner-lead-form');
    if (!form) return;

    var isLocal = window.location.hostname === 'localhost' || window.location.hostname === '127.0.0.1';
    var baseUrl = isLocal ? 'http://localhost:8007' : 'https://api.guaraenergia.com';

    var statusBox = document.getElementById('partner-lead-status');
    var button = form.querySelector('input[type="submit"]');
    var REQUIRED = ['company_name', 'cnpj', 'responsible_name', 'email', 'phone', 'state'];
    var FIELDS = REQUIRED.concat('message');
    var GENERIC_ERROR = 'Erro ao enviar seu cadastro. Por favor, tente novamente.';
    var sending = false;

    function digits(value) {
        return value.replace(/\D/g, '');
    }

    function field(name) {
        return form.elements[name];
    }

    function maskInput(name, pattern) {
        field(name).addEventListener('input', function () {
            var value = digits(this.value);
            this.value = value ? VMasker.toPattern(value, pattern(value)) : '';
        });
    }

    maskInput('cnpj', function () { return '99.999.999/9999-99'; });
    maskInput('phone', function (value) { return value.length > 10 ? '(99) 99999-9999' : '(99) 9999-9999'; });

    function isValidCnpj(value) {
        if (value.length !== 14 || /^(\d)\1+$/.test(value)) return false;

        return [12, 13].every(function (length) {
            var sum = 0;
            var weight = length - 7;
            for (var i = 0; i < length; i++) {
                sum += Number(value[i]) * weight;
                weight = weight === 2 ? 9 : weight - 1;
            }
            var digit = sum % 11 < 2 ? 0 : 11 - (sum % 11);
            return digit === Number(value[length]);
        });
    }

    function setError(name, message) {
        form.querySelector('[data-error="' + name + '"]').textContent = message || '';
        field(name).setAttribute('aria-invalid', message ? 'true' : 'false');
    }

    function setStatus(message, success) {
        statusBox.textContent = message || '';
        statusBox.classList.toggle('success', !!success);
    }

    function focusFirstError() {
        var invalid = form.querySelector('[aria-invalid="true"]');
        if (invalid) invalid.focus();
    }

    function validate(data) {
        var errors = {};
        REQUIRED.forEach(function (name) {
            if (!data[name]) errors[name] = 'Campo obrigatório.';
        });
        if (!errors.cnpj && !isValidCnpj(data.cnpj)) errors.cnpj = 'CNPJ inválido.';
        if (!errors.email && !/^\S+@\S+\.\S+$/.test(data.email)) errors.email = 'E-mail inválido.';
        if (!errors.phone && !/^\d{10,11}$/.test(data.phone)) errors.phone = 'Telefone inválido, informe DDD e número.';
        return errors;
    }

    // 422 da API: detail = [{ field: "body -> cnpj", message: "CNPJ inválido" }]
    function showApiErrors(detail) {
        var shown = false;
        (Array.isArray(detail) ? detail : []).forEach(function (item) {
            var name = String(item.field || '').split(' -> ').pop();
            if (FIELDS.indexOf(name) === -1) return;
            setError(name, name === 'email' ? 'E-mail inválido.' : item.message);
            shown = true;
        });
        return shown;
    }

    form.addEventListener('submit', async function (event) {
        event.preventDefault();
        if (sending) return;

        var data = {};
        FIELDS.forEach(function (name) { data[name] = field(name).value.trim(); });
        data.cnpj = digits(data.cnpj);
        data.phone = digits(data.phone);

        var errors = validate(data);
        FIELDS.forEach(function (name) { setError(name, errors[name]); });
        if (Object.keys(errors).length) {
            setStatus('Confira os campos destacados.');
            focusFirstError();
            return;
        }

        sending = true;
        button.disabled = true;
        button.value = 'Enviando...';
        setStatus('');

        try {
            var response = await fetch(baseUrl + '/lead-partners/', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(data)
            });

            if (response.status === 201) {
                form.reset();
                setStatus('Recebemos seus dados. Nossa equipe comercial vai falar com você em breve.', true);
                // Conversão das campanhas (GTM). Nunca incluir dados pessoais aqui.
                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({ event: 'partner_lead_success' });
                return;
            }

            var body = response.status === 422 ? await response.json() : {};
            if (showApiErrors(body.detail)) {
                setStatus('Confira os campos destacados.');
                focusFirstError();
            } else {
                setStatus(GENERIC_ERROR);
            }
        } catch (e) {
            setStatus(GENERIC_ERROR);
        } finally {
            sending = false;
            button.disabled = false;
            button.value = 'Enviar';
        }
    });
})();
