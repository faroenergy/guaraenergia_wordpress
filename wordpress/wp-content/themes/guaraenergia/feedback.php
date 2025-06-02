<?php
/*
Template Name: Feedback
*/
?>

<?php get_template_part('head', null, 
 array( 
    'title' => "Acessar Portal",
    'css' => 'quero-economizar'
))?>

<?php
    $page_id = 407;
    $texto_privacidade = get_field('texto_privacidade', $page_id);
?>

<style>
    @media (max-width: 768px) {
        .gra-step-form__content-inner {
            max-width: 80%;
            padding: 74px 0 0 !important;
        }

        .gra-subtitle {
            margin-bottom: 20px;
        }
    }

</style>

<div class="gra-step-form__content-inner py-5 px-3 px-md-5" step-side="2" step-side-inner="3" step="6">
    <div class="gra-title mb-4">Identificamos que você já possui uma conta!</div>
    <div class="gra-subtitle jsApplyEmailOnText">
        <p>Por favor, acesse o portal abaixo para continuar. Caso tenha esquecido sua senha, recupere-a através do link "Esqueceu a senha?".</p>
        <!-- <p></p> -->
    </div>
    <hr class="gra-separator mb-4" />           
    <div class="d-flex justify-content-center justify-content-md-end w-100 mt-4">
        <?php get_template_part('templates/quero-economizar/footer', null, array('botao' => 'Acessar', 'texto_privacidade' => $texto_privacidade))?>
    </div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vanilla-masker.min.js"></script>
<script>
    document.querySelector('.jsNextStep').addEventListener('click', function() {
        window.location.href = 'https://portal.guaraenergia.com/';
    });
</script>