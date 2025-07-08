<div class="gra-btns-footer" style="display: flex;">
    <?php if ($args['go_back'] === true): ?>
        <button class="gra-btn-back jsPrevStep" type="button">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/quero-economizar/arrow-back.svg" alt="">
        </button>
    <?php endif; ?>


    <?php if ($args['baixar_proposta'] === true): ?>
        <div style="margin-left: auto">
            <button class="gra-btn-download-proposta" type="button">                
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 19.25C15.5563 19.25 19.25 15.5563 19.25 11C19.25 6.44365 15.5563 2.75 11 2.75C6.44365 2.75 2.75 6.44365 2.75 11C2.75 15.5563 6.44365 19.25 11 19.25Z" stroke="#002E25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8.25 11.9167L11 14.6667M11 14.6667L13.75 11.9167M11 14.6667L11 7.33337" stroke="#002E25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>
                    Baixar proposta
                </span>
            </button>
            <button class="gra-btn-link green gra-uppercase gra-right-corner jsNextStep" type="button">
                <?php echo $args['botao'] ?>
                <span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-right.svg" alt="">
                </span>
            </button>
        </div>

    <?php else: ?>
        <button class="gra-btn-link green gra-uppercase gra-right-corner jsNextStep" type="button">
            <?php echo $args['botao'] ?>
            <span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-right.svg" alt="">
            </span>
        </button>
        
    <?php endif; ?>
    
</div>

<?php if ($args['texto_privacidade'] === true): ?>
    <div class="gra-step-footer">
        <div class="gra-step-footer__text" style="display: flex; flex-direction: column; gap: 10px; align-items: flex-start; font-size: 12px; font-weight: 500; max-width: 580px;">
            <div style="display: flex; align-items: start; gap: 8px;">
                <input style="width: min-content;" class="jsField" id="cookie-checkbox" type="checkbox" required> Estou ciente de que a Guará utiliza cookies para melhorar minha experiência e oferecer conteúdo adequado aos meus interesses;
            </div>
            <div style="display: flex; align-items: start; gap: 8px;">
                <input style="width: min-content;" class="jsField" id="data-checkbox" type="checkbox" required> Aceito ceder meus dados pessoais para elaboração da proposta;
            </div> 
            <div style="display: flex; align-items: start; gap: 8px;">
                <input style="width: min-content;" class="jsField" id="terms-checkbox" type="checkbox" required> Aceito os <a id="terms-link" href="https://s3.us-east-1.amazonaws.com/guara.terms/Pol%C3%ADtica+de+Privacidade+-+Guara+Energia.pdf" target="_blank">Termos de Privacidade</a> e os <a id="conditions-link" href="https://s3.us-east-1.amazonaws.com/guara.terms/T%26C_Plataforma+-+Guara+Energia.pdf" target="_blank">Termos e Condições.</a>
            </div>
        </div>
        <?php get_template_part('templates/quero-economizar/footer-links'); ?>
    </div>
<?php else: ?>
    <div class="gra-step-footer" style="align-items: end; justify-content: flex-end;">
        <div class="gra-step-footer__text" style="max-width: none; margin: 0 auto;">
            <?php get_template_part('templates/quero-economizar/footer-links'); ?>
        </div>
    </div>
<?php endif; ?>