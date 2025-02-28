<div class="gra-btns-footer">
    <button class="gra-btn-back jsPrevStep">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/quero-economizar/arrow-back.svg" alt="">
    </button>
    <button class="gra-btn-link green gra-uppercase jsNextStep">
        <?php echo $args['botao'] ?>
        <span>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-right.svg" alt="">
        </span>
    </button>
</div>

<div class="gra-step-footer">
    <div class="gra-step-footer__text"><?php echo $args['texto_privacidade']; ?></div>
    <div class="gra-step-footer__links">
        <a>Precisa de ajuda?</a>
        <a href="/#faq">FAQ</a>
    </div>
</div>