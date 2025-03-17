<div class="gra-btns-footer">
    <?php if ($args['go_back'] === true): ?>
        <button class="gra-btn-back jsPrevStep">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/quero-economizar/arrow-back.svg" alt="">
        </button>
    <?php endif; ?>


    <?php if ($args['baixar_proposta'] === true): ?>
        <div style="margin-left: auto">
            <button class="gra-btn-download-proposta" onclick="window.print()">                
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 19.25C15.5563 19.25 19.25 15.5563 19.25 11C19.25 6.44365 15.5563 2.75 11 2.75C6.44365 2.75 2.75 6.44365 2.75 11C2.75 15.5563 6.44365 19.25 11 19.25Z" stroke="#002E25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8.25 11.9167L11 14.6667M11 14.6667L13.75 11.9167M11 14.6667L11 7.33337" stroke="#002E25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Baixar proposta
            </button>
            <button class="gra-btn-link green gra-uppercase gra-right-corner jsNextStep">
                <?php echo $args['botao'] ?>
                <span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-right.svg" alt="">
                </span>
            </button>
        </div>

    <?php else: ?>
        <button class="gra-btn-link green gra-uppercase gra-right-corner jsNextStep">
            <?php echo $args['botao'] ?>
            <span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-right.svg" alt="">
            </span>
        </button>
        
    <?php endif; ?>
    
</div>

<div class="gra-step-footer">
    <div class="gra-step-footer__text"><?php echo $args['texto_privacidade']; ?></div>
    <?php get_template_part('templates/quero-economizar/footer-links'); ?>
</div>