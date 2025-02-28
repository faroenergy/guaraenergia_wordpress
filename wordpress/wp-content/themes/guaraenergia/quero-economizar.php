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
    $validade = $passo_3['validade'];
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
                <?php get_template_part('templates/quero-economizar/footer', null, array('botao' => $passo_1['botao'], 'texto_privacidade' => $texto_privacidade))?>
            </div>
            <div class="gra-step-form__content-inner" step-side="2" step-side-inner="0" step="2" style="display:none">
               <div class="gra-title"><?php echo $passo_2['titulo']; ?></div>
               <hr class="gra-separator" />           
               <div class="gra-content">
                    <div class="gra-col">
                        <input type="text" placeholder="Nome Completo" />
                    </div>
                    <div class="gra-col gra-col--half">
                        <input placeholder="E-mail" type="text" />
                    </div>
                    <div class="gra-col gra-col--half">
                        <input placeholder="Confirme o e-mail" type="text" />
                    </div>
                    <div class="gra-col">
                        <input type="text" placeholder="CEP" />
                    </div>
                    <div class="gra-col">
                        <input type="text" placeholder="Código do Parceiro/Cupom Promocional (opcional)" />
                        <div class="gra-tooltip-icon gra-tooltip-icon--info"></div>
                        <span class="gra-tooltip">Caso você tenha nos conhecido através de um parceiro comercial coloque neste campo o código do parceiro.</span>
                    </div>
                    <div class="gra-col">
                        <input type="text" placeholder="Média do Valor em R$ pago na fatura de energia" />
                    </div>
                </div>
                <?php get_template_part('templates/quero-economizar/footer', null, array('botao' => $passo_2['botao'], 'texto_privacidade' => $texto_privacidade))?>
            </div>
            <div class="gra-step-form__content-inner" step-side="2.5" step="2.5" style="display:none">
               <div class="gra-title"><?php echo $sem_usinas['titulo']; ?></div>
               <div class="gra-subtitle"><?php echo $sem_usinas['subtitulo']; ?></div>
            </div>
            <div class="gra-step-form__content-inner" step-side="2" step-side-inner="1" step="3" style="display:none">
                <div class="gra-title"><?php echo $passo_3['titulo']; ?></div>
                <div>
                    <div class="gra-info-header-top">
                        <p class="gra-info-header"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/quero-economizar/user.svg" alt="">Cliente: <b>Fabricio Silva</b></p>
                        <p class="gra-info-header"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/quero-economizar/bulb.svg" alt="">Distribuidora: <b>Enel</b></p>
                    </div>
                    <div class="gra-info-header-top2">
                        <div>
                            Data da proposta: <span class="jsDataProposta"></span>
                        </div>
                        <div>
                            Validade: <span class="jsDataValidade" data-validade="<?php echo $validade ?>"></span>
                        </div>
                    </div>
                </div>
                <hr class="gra-separator" />
                <div class="gra-planos">
                    <div class="gra-planos__item green">
                        <p class="gra-planos__item-title"><?php echo $passo_3['plano_1']; ?></p>
                        <p class="gra-planos__item-desconto"><span>Tenha</span> <b>10% de economia</b></p>
                        <p class="gra-planos__item-valor">Economize até <br><b>R$1.000/ano</b></p>
                    </div>
                    <div class="gra-planos__item yellow">
                        <p class="gra-planos__item-title"><?php echo $passo_3['plano_2']; ?></p>
                        <p class="gra-planos__item-desconto"><span>Tenha</span> <b>12% de economia</b></p>
                        <p class="gra-planos__item-valor">Economize até <br><b>R$1.200/ano</b></p>
                    </div>
                    <div class="gra-planos__item gray">
                        <p class="gra-planos__item-title"><?php echo $passo_3['plano_3']; ?></p>
                        <p class="gra-planos__item-desconto"><span>Tenha</span> <b>15% de economia</b></p>
                        <p class="gra-planos__item-valor">Economize até <br><b>R$1.500/ano</b></p>
                    </div>
                </div>
                <p class="gra-texto-extra"><?php echo $passo_3['texto_extra']; ?></p>
                <?php get_template_part('templates/quero-economizar/footer', null, array('botao' => $passo_3['botao'], 'texto_privacidade' => $texto_privacidade))?>
            </div>
            <div class="gra-step-form__content-inner" step-side="2" step-side-inner="2" step="4" style="display:none">
                <div class="gra-title"><?php echo $passo_4['titulo']; ?></div>
                <hr class="gra-separator" />           
                <div class="gra-content">
                    <div class="gra-col">
                        <input type="text" placeholder="Nome Completo" disabled />
                        <div class="gra-tooltip-icon gra-tooltip-icon--lock"></div>
                    </div>
                    <div class="gra-col gra-col--half">
                        <input placeholder="CPF" type="text" />
                    </div>
                    <div class="gra-col gra-col--half">
                        <input placeholder="CEP" type="text" />
                    </div>
                    <div class="gra-col gra-col--half">
                        <input type="text" disabled value="Distribuidora: Enel" />
                        <div class="gra-tooltip-icon gra-tooltip-icon--lock"></div>
                    </div>
                    <div class="gra-col gra-col--half">
                        <input type="text" placeholder="Nº de instalação" />
                        <div class="gra-tooltip-icon gra-tooltip-icon--info"></div>
                        <!-- <span class="gra-tooltip">Caso você tenha nos conhecido através de um parceiro comercial coloque neste campo o código do parceiro.</span> -->
                    </div>
                    <div class="gra-col gra-col--half">
                        <input type="text" placeholder="Anexe sua última fatura " />
                        <div class="gra-tooltip-icon gra-tooltip-icon--clip"></div>
                    </div>
                    <div class="gra-col gra-col--half">
                        <input type="text" placeholder="Anexe seu documento" />
                        <div class="gra-tooltip-icon gra-tooltip-icon--clip"></div>
                    </div>
                </div>
                <?php get_template_part('templates/quero-economizar/footer', null, array('botao' => $passo_4['botao'], 'texto_privacidade' => $texto_privacidade))?>
            </div>
            <div class="gra-step-form__content-inner" step-side="2" step-side-inner="2" step="5" style="display:none">
                <div class="gra-title"><?php echo $passo_5['titulo']; ?></div>
                <hr class="gra-separator" />           
                <div class="gra-content"></div>
                <?php get_template_part('templates/quero-economizar/footer', null, array('botao' => $passo_5['botao'], 'texto_privacidade' => $texto_privacidade))?>
            </div>
            <div class="gra-step-form__content-inner" step-side="2" step-side-inner="2" step="6" style="display:none">
                <div class="gra-title"><?php echo $passo_6['titulo']; ?></div>
                <div class="gra-subtitle"><?php echo $passo_6['subtitulo']; ?></div>
                <hr class="gra-separator" />           
                <div class="gra-content">
                    <div class="gra-col">
                        <input type="text" placeholder="Digite o código enviado para seu email" />
                    </div>
                    <div class="gra-col">
                        <a href="#" class="gra-col-resend-code">Reenviar código</a>
                    </div>
                    <div class="gra-col">
                        <input placeholder="Crie sua senha" type="text" />
                    </div>
                    <div class="gra-col">
                        <input placeholder="Confirme sua senha" type="text" />
                    </div>
                </div>
                <?php get_template_part('templates/quero-economizar/footer', null, array('botao' => $passo_6['botao'], 'texto_privacidade' => $texto_privacidade))?>
            </div>
            <div class="gra-step-form__content-inner" step-side="3" step="7" style="display:none">
                <?php echo $passo_7['titulo']; ?>
                <?php echo $passo_7['subtitulo']; ?>
                <?php echo $passo_7['botao']; ?>
                <?php get_template_part('templates/quero-economizar/footer', null, array('botao' => $passo_7['botao'], 'texto_privacidade' => $texto_privacidade))?>
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
            self.startEvents();
        },

        showStep: function(step) {
            const self = this;

            if (step !== self.lastStep) self.constrolStepVisibity('none', self.lastStep);
            self.currentStep = step;
            self.lastStep = step;

            self.constrolStepVisibity('', step);
            self.stepEvents(step);
        },

        startEvents: function() {
            const self = this;

            const NextStep = document.querySelectorAll('.jsNextStep');
            const PrevStep = document.querySelectorAll('.jsPrevStep');

            NextStep.forEach(function(item) {
                item.onclick = function() {
                    self.showStep(self.currentStep + 1);             
                };
            });

            PrevStep.forEach(function(item) {
                item.onclick = function() {
                    self.showStep(self.currentStep - 1);             
                };
            });
        },

        stepEvents: function(step) {

            if (step === 3) {
                const dataPropostaEl = document.querySelector('.jsDataProposta');
                const dataValidadeEl = document.querySelector('.jsDataValidade');

                const validade = parseInt(dataValidadeEl.getAttribute('data-validade')) - 1;

                if (validade < 0) {
                    validade = 0;
                }

                const today = new Date();
                const today_dd = String(today.getDate()).padStart(2, '0');
                const today_mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                const today_yyyy = today.getFullYear();

                const next = new Date();
                next.setDate(next.getDate() + validade)
                const next_dd = String(next.getDate()).padStart(2, '0');
                const next_mm = String(next.getMonth() + 1).padStart(2, '0'); //January is 0!
                const next_yyyy = next.getFullYear();

                let todayDate = today_dd + '/' + today_mm + '/' + today_yyyy;
                let nextDate = next_dd + '/' + next_mm + '/' + next_yyyy;

                dataPropostaEl.textContent = todayDate;
                dataValidadeEl.textContent = nextDate;
            }
        },

        constrolStepVisibity: function(blockOrNone, step) {
            const stepEl = document.querySelector(`.jsStepContent [step="${step}"]`);
            
            const stepSide = stepEl.getAttribute('step-side');
            const stepElSide = document.querySelector(`.jsStepSide [step-side="${stepSide}"]`);

            const stepSideInner = stepEl.getAttribute('step-side-inner');
            
            if (stepSideInner !== null) {
                document.querySelector(`.jsStepSide [step-side="${stepSide}"]`).setAttribute('step-side-inner', stepSideInner);
            }

            stepEl.style.display = blockOrNone;
            stepElSide.style.display = blockOrNone;
        },
    };

    StepController.init();
 </script>
 </body>