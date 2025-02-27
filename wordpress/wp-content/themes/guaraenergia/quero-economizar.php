<!-- Template Name: Quero Economizar -->

<?php get_template_part('head', null, 
 array( 
    'title' => "Quero Economizar",
    'css' => 'quero-economizar'
))?>

<?php
    $page_id = 407;
?>

<?php
    $passo_1 = get_field('passo_1', $page_id);
    $passo_2 = get_field('passo_2', $page_id);
    $passo_3 = get_field('passo_3', $page_id);
    $passo_4 = get_field('passo_4', $page_id);
    $passo_5 = get_field('passo_5', $page_id);
    $passo_6 = get_field('passo_6', $page_id);
    $passo_7 = get_field('passo_7', $page_id);
    $sem_usinas = get_field('sem_usinas', $page_id);
    $passos_lateral = get_field('passos_lateral', $page_id);
    $texto_privacidade = get_field('texto_privacidade', $page_id);
?>

<section class="gra-step-form">
    <div class="gra-step-form__wrapper">
        <div class="gra-step-form__side jsStepSide">
            <img class="gra-step-form__side-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" />
            <div step-side="1" style="display:none;background-image:url(<?php echo $passo_1['imagem'] ?>)"></div>
            <div step-side="2" step-side-inner style="display:none">
                <p class="gra-step-item">
                    Passo 01<br>
                    <span><?php echo $passos_lateral['01']; ?></span>
                </p>
                <p class="gra-step-item">
                    Passo 02<br>
                    <span><?php echo $passos_lateral['02']; ?></span>
                </p>
                <p class="gra-step-item">
                    Passo 03<br>
                    <span><?php echo $passos_lateral['03']; ?></span>
                </p>
                <p class="gra-step-item">
                    Passo 04<br>
                    <span><?php echo $passos_lateral['04']; ?></span>
                </p>
            </div>
            <div step-side="2.5" style="display:none;background-image:url(<?php echo $sem_usinas['imagem'] ?>)"></div>
            <div step-step="3" style="display:none;background-image:url(<?php echo $passo_7['imagem'] ?>)"></div>
        </div>
        <div class="gra-step-form__content jsStepContent">
            <div class="gra-step-form__content-inner" step-side="1" step="1" style="display:none">
                <div class="gra-title"><?php echo $passo_1['titulo']; ?></div>
                <div class="gra-subtitle"><?php echo $passo_1['subtitulo']; ?></div>
                <div class="gra-content">
                    <button class="gra-btn-option">
                        <?php echo $passo_1['opcao_1']; ?>
                    </button>
                    <button class="gra-btn-option">
                        <?php echo $passo_1['opcao_2']; ?>
                    </button>
                </div>
                <div style="text-align:right;width:100%">
                    <button class="gra-btn-link green gra-uppercase jsNextStep">
                        <?php echo $passo_1['botao'] ?>
                        <span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-right.svg" alt="">
                        </span>
                    </button>
                </div>
                <div class="gra-step-footer">
                    <div class="gra-step-footer__text"><?php echo $texto_privacidade; ?></div>
                    <div class="gra-step-footer__links">
                        <a>Precisa de ajuda?</a>
                        <a href="/#faq">FAQ</a>
                    </div>
                </div>
            </div>
            <div class="gra-step-form__content-inner" step-side="2" step-side-inner="0" step="2" style="display:none">
               <div class="gra-title"><?php echo $passo_2['titulo']; ?></div>
               <div style="text-align:right;width:100%">
                    <button class="gra-btn-link green gra-uppercase jsNextStep">
                        <?php echo $passo_2['botao'] ?>
                        <span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-right.svg" alt="">
                        </span>
                    </button>
                </div>
                <div class="gra-step-footer">
                    <div class="gra-step-footer__text"><?php echo $texto_privacidade; ?></div>
                    <div class="gra-step-footer__links">
                        <a>Precisa de ajuda?</a>
                        <a href="/#faq">FAQ</a>
                    </div>
                </div>
            </div>
            <div class="gra-step-form__content-inner" step-side="2.5" step="2.5" style="display:none">
               <div class="gra-title"><?php echo $sem_usinas['titulo']; ?></div>
               <div class="gra-subtitle"><?php echo $sem_usinas['subtitulo']; ?></div>
            </div>
            <div class="gra-step-form__content-inner" step-side="2" step-side-inner="1" step="3" style="display:none" data-validade="<?php echo $passo_3['validade']; ?>">
                <div class="gra-title"><?php echo $passo_3['titulo']; ?></div>
                <?php echo $passo_3['plano_1']; ?>
                <?php echo $passo_3['plano_2']; ?>
                <?php echo $passo_3['plano_3']; ?>
                <?php echo $passo_3['texto_extra']; ?>
                <?php echo $passo_3['botao']; ?>
                <div class="gra-step-footer">
                    <div class="gra-step-footer__text"><?php echo $texto_privacidade; ?></div>
                    <div class="gra-step-footer__links">
                        <a>Precisa de ajuda?</a>
                        <a href="/#faq">FAQ</a>
                    </div>
                </div>
            </div>
            <div class="gra-step-form__content-inner" step-side="2" step-side-inner="2" step="4" style="display:none">
                <?php echo $passo_4['titulo']; ?>
                <?php echo $passo_4['botao']; ?>
                <div class="gra-step-footer">
                    <div class="gra-step-footer__text"><?php echo $texto_privacidade; ?></div>
                    <div class="gra-step-footer__links">
                        <a>Precisa de ajuda?</a>
                        <a href="/#faq">FAQ</a>
                    </div>
                </div>
            </div>
            <div class="gra-step-form__content-inner" step-side="2" step-side-inner="2" step="5" style="display:none">
                <?php echo $passo_5['titulo']; ?>
                <?php echo $passo_5['botao']; ?>
            </div>
            <div class="gra-step-form__content-inner" step-side="2" step-side-inner="3" step="6" style="display:none">
                <?php echo $passo_6['titulo']; ?>
                <?php echo $passo_6['subtitulo']; ?>
                <?php echo $passo_6['botao']; ?>
            </div>
            <div class="gra-step-form__content-inner" step-side="3" step="7" style="display:none">
                <?php echo $passo_7['titulo']; ?>
                <?php echo $passo_7['subtitulo']; ?>
                <?php echo $passo_7['botao']; ?>
            </div>
        </div>
    </div>
    
</section>


 <script>
    const StepController = {
        start: 1,

        init: function() {
            const self = this;

            self.currentStep = self.start;
            self.lastStep = self.start;
            const initialStep = self.showStep(self.start);
        },

        showStep: function(step) {
            const self = this;

            if (step !== self.lastStep) self.constrolStepVisibity('none', self.lastStep);
            self.currentStep = step;
            self.lastStep = step;

            self.constrolStepVisibity('', step);
            self.startEvents(step);
        },

        startEvents: function(step) {
            const self = this;

            const nextStep = document.querySelectorAll('.jsNextStep');

            nextStep.forEach(function(item) {
                item.onclick = function() {
                    self.showStep(self.currentStep + 1);             
                };
            });
        },

        constrolStepVisibity: function(blockOrNone, step) {
            const stepEl = document.querySelector(`.jsStepContent [step="${step}"]`);
            
            const stepSide = stepEl.getAttribute('step-side');
            const stepElSide = document.querySelector(`.jsStepSide [step-side="${stepSide}"]`);

            const stepSideInner = stepEl.getAttribute('step-side-inner');
            
            if (stepSideInner !== null) {
                document.querySelector(`.jsStepSide [step-side="${step}"]`).setAttribute('step-side-inner', stepSideInner);
            }

            stepEl.style.display = blockOrNone;
            stepElSide.style.display = blockOrNone;
        },
    };

    StepController.init();
 </script>
 </body>