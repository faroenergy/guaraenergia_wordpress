<?php
/*
Template Name: Confirmar Código
*/
?>

<?php get_template_part('head', null, 
 array( 
    'title' => "Confirmar Código",
    'css' => 'quero-economizar'
))?>

<?php
    $page_id = 407;
    $texto_privacidade = get_field('texto_privacidade', $page_id);
?>

<div class="gra-step-form__content-inner" step-side="2" step-side-inner="3" step="6">
    <div class="gra-title">Confirme o código de verificação e crie sua senha</div>
    <div class="gra-subtitle jsApplyEmailOnText">Enviamos um código de verificação para o e-mail cadastrado, confirme o código e crie uma senha forte para ter acesso a área do cliente.</div>
    <hr class="gra-separator" />           
    <div class="gra-content">
        <div class="gra-col">
            <input required class="jsField jsVerificationCode" minlength="4" type="text" mask-number />
            <label>Digite o código enviado para seu email*</label>
        </div>
        <div class="gra-col">
            <button type="button" class="gra-col-resend-code">Reenviar código</button>
        </div>
        <div class="gra-col">
            <input required class="jsField jsSameField jsPassword1" minlength="4" type="password" />
            <label>Crie sua senha*</label>
        </div>
        <div class="jsPasswordError" style="color: red; display: none; font-size: 12px; margin: -10px 0 10px 0; padding-left: 15px;"></div>
        <div class="gra-col">
            <input required class="jsField jsSameField jsPassword2" minlength="4" type="password" />
            <label>Confirme sua senha*</label>
        </div>
    </div>
    <?php get_template_part('templates/quero-economizar/footer', null, array('botao' => 'Finalizar', 'texto_privacidade' => $texto_privacidade))?>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vanilla-masker.min.js"></script>
<script>
    (function() {
        self.baseUrl = window.location.hostname === 'localhost' || window.location.hostname === '127.0.0.1' 
            ? 'http://localhost:8007'
            : 'https://api.guaraenergia.com';
            
        const Container = document.querySelector('.gra-step-form__content-inner');

        let installationId = null;
        let email = null;
        let validationCode = null;

        document.addEventListener('DOMContentLoaded', async function() {
            const params = new URLSearchParams(window.location.search);
            const hash = params.get('hash');
            
            if (hash) {
                const response = await fetch(`${baseUrl}/hash/decode/?hash=${hash}`, {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                });

                if (await response.ok){
                    const { code, installation_id, email: emailResponse } = await response.json();

                    installationId = installation_id;
                    email = emailResponse;
                    validationCode = code;

                    const codeEl = document.querySelector('.jsVerificationCode');
                    codeEl.value = code;
                    codeEl.disabled = true;
                }
            }

            const btnConfirmar = document.querySelector('.jsNextStep');
            const passwordErrorLabel = document.querySelector('.jsPasswordError');
            
            function validarSenhaForte(senha) {
                const regexSenhaForte = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
                return regexSenhaForte.test(senha);
            }

            function showPasswordError(show, message) {
                const password1El = document.querySelector('.jsPassword1');
                const password2El = document.querySelector('.jsPassword2');
                
                if (show) {
                    password1El.style.borderColor = 'red';
                    password2El.style.borderColor = 'red';
                    passwordErrorLabel.style.display = 'block';
                    passwordErrorLabel.innerHTML = message;
                } else {
                    password1El.style.borderColor = '';
                    password2El.style.borderColor = '';
                    passwordErrorLabel.style.display = 'none';
                    passwordErrorLabel.innerHTML = '';
                }
            }

            btnConfirmar.addEventListener('click', async function() {
                const password1El = document.querySelector('.jsPassword1');
                const password2El = document.querySelector('.jsPassword2');
                const codeEl = document.querySelector('.jsVerificationCode');

                if (password1El.value === '' || password2El.value === '' || codeEl.value === '') {
                    alert('Por favor, preencha todos os campos');
                    return;
                } else if (password1El.value !== password2El.value) {
                    showPasswordError(true, 'As senhas não coincidem');
                    return;
                } else if (!validarSenhaForte(password1El.value)) {
                    showPasswordError(true, 'A senha deve conter pelo menos 8 caracteres, incluindo uma letra maiúscula, uma minúscula, um número e um caractere especial (@$!%*?&)');
                    return;
                } else {
                    showPasswordError(false, '');
                }

                if (password1El.value === password2El.value) {
                    Container.classList.add('gra-loading');

                    try {
                        const response = await fetch(`${baseUrl}/confirm-email/`, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify({
                                installation_id: installationId,
                                email: email,
                                password: password1El.value,
                                confirm_password: password2El.value,
                                verification_code: validationCode
                            })
                        });
                        
                        Container.classList.remove('gra-loading');

                        if (response.status === 409) {
                            window.location.href = '<?php echo home_url(); ?>/feedback';
                            return;
                        }

                        if (response.ok) {
                            window.location.href = 'https://portal.guaraenergia.com/';
                        } else {
                            throw new Error(`Response status: ${response.status}`);
                        }
                    } catch (error) {
                        console.log(error);
                        Container.classList.remove('gra-loading');
                        alert('Erro ao enviar');
                    }
                }
            });
        });
    })();
</script>
