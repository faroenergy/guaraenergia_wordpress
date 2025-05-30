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
    $passo_6 = get_field('passo_6', $page_id);
    $texto_privacidade = get_field('texto_privacidade', $page_id);
?>

<div class="gra-step-form__content-inner" step-side="2" step-side-inner="3" step="6">
    <div class="gra-title"><?php echo $passo_6['titulo']; ?></div>
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
        <div class="gra-col">
            <input required class="jsField jsSameField jsPassword2" minlength="4" type="password" />
            <label>Confirme sua senha*</label>
        </div>
    </div>
    <?php get_template_part('templates/quero-economizar/footer', null, array('botao' => 'Confirmar', 'texto_privacidade' => $texto_privacidade))?>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vanilla-masker.min.js"></script>
<script>
    (function() {
        const baseUrl = 'https://api.guaraenergia.com';
        // const baseUrl = 'http://localhost:8007';
        const Container = document.querySelector('.gra-step-form__content-inner');

        let installationId = null;
        let email = null;

        document.addEventListener('DOMContentLoaded', async function() {
            const params = new URLSearchParams(window.location.search);
            const hash = params.get('hash');
            
            if (hash) {
                const response = await fetch(`${baseUrl}/confirmation-code/decode/?hash=${hash}`, {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                });

                if (await response.ok){
                    const { code, installation_id, email: emailResponse } = await response.json();

                    installationId = installation_id;
                    email = emailResponse;

                    const codeEl = document.querySelector('.jsVerificationCode');
                    codeEl.value = code;
                    codeEl.disabled = true;
                }
            }

            const btnConfirmar = document.querySelector('.jsNextStep');
            btnConfirmar.addEventListener('click', async function() {
                const password1El = document.querySelector('.jsPassword1');
                const password2El = document.querySelector('.jsPassword2');
                const codeEl = document.querySelector('.jsVerificationCode');

                if (password1El.value === '' || password2El.value === '' || codeEl.value === '') {
                    alert('Por favor, preencha todos os campos');
                } else if (password1El.value !== password2El.value) {
                    alert('As senhas não coincidem');
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
                                verification_code: codeEl.value
                            })
                        });
                        
                        Container.classList.remove('gra-loading');

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
