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

<style>
    @media (max-width: 1011px) {
        .gra-step-form__side [step-side="3"] {
            background-image: url(<?php echo $passo_7['imagem_mobile'] ?>)
        }
    }
    @media (min-width: 1012px) {
        .gra-step-form__side [step-side="3"] {
            background-image: url(<?php echo $passo_7['imagem'] ?>)
        }
    }
    @media (min-width: 1012px) {
        .gra-step-form__side [step-side="4"] {
            background-image: url(<?php echo $sem_usinas['imagem'] ?>)
        }
    }
    @media (max-width: 1011px) {
        .gra-step-form__side [step-side="4"] {
            background-image: url(<?php echo $sem_usinas['imagem_mobile'] ?>)
        }
    }
</style>

<section class="gra-step-form">
    <header class="gra-header">
        <div class="gra-container gra-container--flex">
            <a href="/" class="gra-header__logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="">
            </a>
        </div>
    </header>
    <form class="gra-step-form__wrapper jsFormStep" onsubmit="return false;">
        <div class="gra-step-form__side jsStepSide">
            <a href="/" class="gra-step-form__side-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" /></a>
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
            <div step-side="3" style="display:none"></div>
            <div step-side="4" style="display:none"></div>
        </div>
        <div class="gra-step-form__content jsStepContent">
            <div class="gra-step-form__content-inner" step-side="1" step="1" style="display:none">
                <div class="gra-title"><?php echo $passo_1['titulo']; ?></div>
                <div class="gra-subtitle"><?php echo $passo_1['subtitulo']; ?></div>
                <div class="gra-content">
                    <button class="gra-btn-option jsContratacaoOption" data-type="cpf">
                        <?php echo $passo_1['opcao_1']; ?>
                    </button>
                    <button class="gra-btn-option jsContratacaoOption" data-type="cnpj">
                        <?php echo $passo_1['opcao_2']; ?>
                    </button>
                </div>
                <?php get_template_part('templates/quero-economizar/footer', null, array('botao' => $passo_1['botao'], 'texto_privacidade' => $texto_privacidade))?>
            </div>

            <div class="gra-step-form__content-inner" step-side="2" step-side-inner="0" step="2" style="display:none" data-type="cpf">
               <div class="gra-title"><?php echo $passo_2['titulo']; ?></div>
               <hr class="gra-separator" />           
               <div class="gra-content">
                    <div class="gra-col gra-col--half">
                        <input class="jsField jsFieldFirstName" type="text" minlength="3" />
                        <label>Nome*</label>
                    </div>
                    <div class="gra-col gra-col--half">
                        <input class="jsField jsFieldLastName" type="text" minlength="3" />
                        <label>Sobrenome*</label>
                    </div>
                    <div class="gra-col gra-col--half">
                        <input class="jsField jsSameField jsFieldEmail" type="email" />
                        <label>E-mail*</label>
                    </div>
                    <div class="gra-col gra-col--half">
                        <input class="jsField jsSameField" type="email" />
                        <label>Confirme o e-mail*</label>
                    </div>
                    <div class="gra-col gra-col--half">
                        <input class="jsField jsFieldSearchCEP" type="text" mask-cep />
                        <label>CEP*</label>
                        <div class="lds-ring" style="display:none"><div></div><div></div><div></div><div></div></div>
                    </div>
                    <div class="gra-col gra-col--half">
                        <input class="jsField jsFieldPhone" type="text" mask-phone />
                        <label>Telefone*</label>
                    </div>
                    <div class="gra-col">
                        <input class="jsField jsFieldCodePartner" type="text" />
                        <label>Código do Parceiro/Cupom Promocional*</label>
                        <div class="gra-tooltip-icon gra-tooltip-icon--info"></div>
                        <span class="gra-tooltip">Caso você tenha nos conhecido através de um parceiro comercial coloque neste campo o código do parceiro.</span>
                    </div>
                    <div class="gra-col">
                        <input class="jsField jsFieldAverage" type="text" minlength="4" mask-money />
                        <label class="gra-label-small">Média do Valor em R$ pago na fatura de energia*</label>
                    </div>
                </div>
                <?php get_template_part('templates/quero-economizar/footer', null, array('botao' => $passo_2['botao'], 'go_back' => true, 'texto_privacidade' => $texto_privacidade))?>
            </div>

            <div class="gra-step-form__content-inner" step-side="2" step-side-inner="0" step="2" style="display:none" data-type="cnpj">
               <div class="gra-title"><?php echo $passo_2['titulo']; ?></div>
               <hr class="gra-separator" />           
               <div class="gra-content">
                    <div class="gra-col">
                        <input class="jsField jsFieldFirstName" type="text" minlength="3" />
                        <label>Nome do representante legal da empresa*</label>
                    </div>
                    <div class="gra-col gra-col--half">
                        <input class="jsField jsFieldCNPJ" mask-cnpj type="text" />
                        <label>CNPJ da empresa*</label>
                    </div>
                    <div class="gra-col gra-col--half">
                        <input class="jsField jsContractFile" type="file" placeholder="Contrato social/Cartão CNPJ" />
                        <!-- social_contract_file -->
                        <label>
                            <div class="gra-tooltip-icon gra-tooltip-icon--clip"></div>
                            Contrato social/Cartão CNPJ*
                        </label>
                    </div>
                    <div class="gra-col gra-col--half">
                        <input class="jsField jsFieldEmail" type="email" />
                        <label>E-mail*</label>
                    </div>
                    <div class="gra-col gra-col--half">
                        <input class="jsField jsFieldSearchCEP" type="text" mask-cep />
                        <label>CEP*</label>
                        <div class="lds-ring" style="display:none"><div></div><div></div><div></div><div></div></div>
                    </div>
                    <div class="gra-col">
                        <input class="jsField jsFieldCodePartner" type="text" />
                        <label>Código do Parceiro/Cupom Promocional*</label>
                        <div class="gra-tooltip-icon gra-tooltip-icon--info"></div>
                        <span class="gra-tooltip">Caso você tenha nos conhecido através de um parceiro comercial coloque neste campo o código do parceiro.</span>
                    </div>
                    <div class="gra-col">
                        <input class="jsField jsFieldAverage" type="text" minlength="4" mask-money />
                        <label class="gra-label-small">Média do Valor em R$ pago na fatura de energia*</label>
                    </div>
                </div>
                <?php get_template_part('templates/quero-economizar/footer', null, array('botao' => $passo_2['botao'], 'go_back' => true, 'texto_privacidade' => $texto_privacidade))?>
            </div>

            <div class="gra-step-form__content-inner" step-side="2" step-side-inner="1" step="3" style="display:none">
                <div class="gra-title gra-hide-print"><?php echo $passo_3['titulo']; ?></div>
                <div class="gra-title gra-show-print"><?php echo $passo_3['titulo_print']; ?></div>
                <div>
                    <div class="gra-info-header-top">
                        <p class="gra-info-header"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/quero-economizar/user.svg" alt="">Cliente: <b class="jsFieldFullName"></b></p>
                        <p class="gra-info-header"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/quero-economizar/bulb.svg" alt="">Distribuidora: <b class="jsFieldDistribuidora"></b></p>
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
                <div class="gra-planos jsPlanoItemWrapper">
                    <div class="gra-planos__item gray jsPlanoItem">
                        <div>
                            <p class="gra-planos__item-title"><?php echo $passo_3['plano_1']; ?></p>
                            <p class="gra-planos__item-valor">Economize até <br><b>R$<span class="jsPlanoYearEconomy"></span>/ano</b></p>
                        </div>
                        <p class="gra-planos__item-desconto"><span>Tenha</span> <b><span class="jsPlanoDiscount"></span>% de economia</b></p>
                    </div>
                    <div class="gra-planos__item yellow jsPlanoItem">
                        <div>
                            <p class="gra-planos__item-title"><?php echo $passo_3['plano_2']; ?></p>
                            <p class="gra-planos__item-valor">Economize até <br><b>R$<span class="jsPlanoYearEconomy"></span>/ano</b></p>
                        </div>
                        <p class="gra-planos__item-desconto"><span>Tenha</span> <b><span class="jsPlanoDiscount"></span>% de economia</b></p>
                    </div>
                    <div class="gra-planos__item green jsPlanoItem">
                        <div>
                            <p class="gra-planos__item-title"><?php echo $passo_3['plano_3']; ?></p>
                            <p class="gra-planos__item-valor">Economize até <br><b>R$<span class="jsPlanoYearEconomy"></span>/ano</b></p>
                        </div>
                        <p class="gra-planos__item-desconto"><span>Tenha</span> <b><span class="jsPlanoDiscount"></span>% de economia</b></p>
                    </div>
                </div>
                <p class="gra-texto-extra"><?php echo $passo_3['texto_extra']; ?></p>
                <div class="gra-hide-print">
                    <?php get_template_part('templates/quero-economizar/footer', null, array('botao' => $passo_3['botao'], 'go_back' => true, 'texto_privacidade' => $texto_privacidade, 'baixar_proposta' => true))?>
                </div>
            </div>
            
            <div class="gra-step-form__content-inner" step-side="2" step-side-inner="2" step="4" style="display:none">
                <div class="gra-title"><?php echo $passo_4['titulo']; ?></div>
                <hr class="gra-separator" />           
                <div class="gra-content">
                    <div class="gra-col">
                        <input class="jsField jsFieldFullName" type="text" disabled />
                        <label>Nome Completo*</label>
                        <div class="gra-tooltip-icon gra-tooltip-icon--lock"></div>
                    </div>
                    <div class="gra-col gra-col--half">
                        <input class="jsField jsFieldCPF" mask-cpf type="text" />
                        <label>CPF*</label>
                    </div>
                    <div class="gra-col gra-col--half">
                        <input class="jsField jsClientCEP" type="text" disabled />
                        <label>CEP*</label>
                    </div>
                    <div class="gra-col gra-col--half">
                        <input class="jsField jsInstallationName" type="text" disabled />
                        <label>Distribuidora*</label>
                        <div class="gra-tooltip-icon gra-tooltip-icon--lock"></div>
                    </div>
                    <div class="gra-col gra-col--half">
                        <input class="jsField jsInstallationNumber" type="text" minlength="1" />
                        <label>Nº de instalação*</label>
                        <div class="gra-tooltip-icon gra-tooltip-icon--info"></div>
                    </div>
                    <div class="gra-col gra-col--half">
                        <input class="jsField jsBillFile" type="file" placeholder="Anexe sua última fatura" />
                        <label>
                            <div class="gra-tooltip-icon gra-tooltip-icon--clip"></div>
                            Anexe sua última fatura
                        </label>
                    </div>
                    <div class="gra-col gra-col--half">
                        <input class="jsField jsIdFile" type="file" placeholder="Anexe seu documento" />
                        <label>
                            <div class="gra-tooltip-icon gra-tooltip-icon--clip"></div>
                            Anexe seu documento
                        </label>
                    </div>
                </div>
                <?php get_template_part('templates/quero-economizar/footer', null, array('botao' => $passo_4['botao'], 'go_back' => true, 'texto_privacidade' => $texto_privacidade))?>
            </div>
            <div class="gra-step-form__content-inner" step-side="2" step-side-inner="2" step="5" style="display:none">
                <div class="gra-title"><?php echo $passo_5['titulo']; ?></div>
                <hr class="gra-separator" />           
                <div class="gra-content"></div>
                <?php get_template_part('templates/quero-economizar/footer', null, array('botao' => $passo_5['botao'], 'go_back' => true, 'texto_privacidade' => $texto_privacidade))?>
            </div>
            <div class="gra-step-form__content-inner" step-side="2" step-side-inner="3" step="6" style="display:none">
                <div class="gra-title"><?php echo $passo_6['titulo']; ?></div>
                <div class="gra-subtitle jsApplyEmailOnText"><?php echo $passo_6['subtitulo']; ?></div>
                <hr class="gra-separator" />           
                <div class="gra-content">
                    <div class="gra-col">
                        <input class="jsField" minlength="4" type="text" mask-number />
                        <label>Digite o código enviado para seu email*</label>
                    </div>
                    <div class="gra-col">
                        <a href="#" class="gra-col-resend-code">Reenviar código</a>
                    </div>
                    <div class="gra-col">
                        <input class="jsField jsSameField" minlength="4" type="password" />
                        <label>Crie sua senha*</label>
                    </div>
                    <div class="gra-col">
                        <input class="jsField jsSameField" minlength="4" type="password" />
                        <label>Confirme sua senha*</label>
                    </div>
                </div>
                <?php get_template_part('templates/quero-economizar/footer', null, array('botao' => $passo_6['botao'], 'go_back' => true, 'texto_privacidade' => $texto_privacidade))?>
            </div>
            <div class="gra-step-form__content-inner" step-side="3" step="7" style="display:none">
                <div class="gra-content">
                    <div class="gra-step-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/quero-economizar/tick-circle.svg" alt="">
                    </div>
                    <div class="gra-title"><?php echo $passo_7['titulo']; ?></div>
                    <div class="gra-subtitle"><?php echo $passo_7['subtitulo']; ?></div>
                    <a class="gra-btn-link yellow gra-uppercase icon-green" href="<?php echo do_shortcode('[wpcode id="164"]') ?>">
                        <?php echo $passo_7['botao']; ?>
                        <span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-right.svg" alt="">
                        </span>
                    </a>
                    <div class="gra-step-footer">
                        <?php get_template_part('templates/quero-economizar/footer-links'); ?>
                    </div>
                </div>
            </div>
            <div class="gra-step-form__content-inner" step-side="4" step="8" style="display:none">
                <div class="gra-content">
                    <div class="gra-step-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/quero-economizar/tick-circle.svg" alt="">
                    </div>
                    <div class="gra-title"><?php echo $sem_usinas['titulo']; ?></div>
                    <div class="gra-subtitle"><?php echo $sem_usinas['subtitulo']; ?></div>
                    <a class="gra-link" href="<?php echo do_shortcode('[wpcode id="490"]'); ?>" target="_blank">
                        <span class="gra-link-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/quero-economizar/instagram.svg" alt="">
                        </span>
                        Siga a Guará no Instagram
                    </a>
                </div>
            </div>
        </div>
    </form>
</section>
<div class="gra-popup jsPopUpAlert jsClosePopUpAlert" style="display:none">
    <div class="gra-popup__info">
        <button class="gra-popup__info-close jsClosePopUpAlert"></button>
        <div class="gra-popup__info-title">
            Atenção
        </div>
        <p class="gra-popup__info-text jsPopUpAlertTxt"></p>
    </div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vanilla-masker.min.js"></script>
 <script>
    (function() {
        
        const StepController = {
            dev: false,

            stepStart: 1,
            stepContainer: null,
            stepStarted: [],
            stepType: null,
            stepNewPlano: true,
            stepStep1_popUp: false,
            
            installation: null,
            client: null,
            utility_id: null,
            distribuidora: null,

            firstName: null,
            lastName: null,
            fullName: null,
            email: null,
            cep: null,
            cnpj: null,
            phone: null,
            codePartner: null,
            averageConsumption: null,
            social_contract: null,

            planosText: [
                '<?php echo $passo_3['plano_1']; ?>',
                '<?php echo $passo_3['plano_2']; ?>',
                '<?php echo $passo_3['plano_3']; ?>'
            ],
    
            init: function() {
                const self = this;
    
                self.currentStep = self.stepStart;
                self.lastStep = self.stepStart;
                const initialStep = self.showStep(self.stepStart);
                self.startEvents();
            },
    
            startEvents: function() {
                const self = this;
    
                const NextStep = document.querySelectorAll('.jsNextStep');
                const PrevStep = document.querySelectorAll('.jsPrevStep');
    
                NextStep.forEach(function(item) {
                    item.onclick = function() {
                        item.blur();
                        
                        if (self.dev) {
                            self.showStep(self.currentStep + 1);   

                        } else if (!this.classList.contains('disabled')) {
                            self.stepEventsBeforeNextStep(self.currentStep, function() {
                                self.showStep(self.currentStep + 1);
                            });
                        }
                    };
                });
    
                PrevStep.forEach(function(item) {
                    item.onclick = function() {
                        item.blur();
                        self.showStep(self.currentStep - 1);             
                    };
                });

                document.querySelectorAll('.jsField').forEach(function(item) {
                    item.addEventListener('focus', function() {
                        item.classList.remove('gra-error');

                        if (item.parentElement.querySelector('.gra-error-msg')) {
                            item.parentElement.querySelector('.gra-error-msg').remove();
                        }
                    });
                });

                document.querySelectorAll('.jsClosePopUpAlert').forEach(function(item) {
                    item.onclick = function(e) {
                        var itemTarget = e.target;
                        if (itemTarget.classList.contains('jsClosePopUpAlert')) {
                            CustomAlert();
                        }
                    }
                });
            },

            showStep: function(step) {
                const self = this;
    
                if (step !== self.lastStep) self.constrolStepVisibity('none', self.lastStep);
                self.currentStep = step;
                self.lastStep = step;
    
                self.constrolStepVisibity('', step);
                self.stepEvents(step);

                self.stepStarted.push(step);
            },

            constrolStepVisibity: function(blockOrNone, step) {
                const self = this;
    
                self.stepContainer = document.querySelector(`.jsStepContent [step="${step}"]`);

                if (self.stepType !== null && self.stepContainer.getAttribute('data-type')) {
                    self.stepContainer = document.querySelector(`.jsStepContent [step="${step}"][data-type="${self.stepType}"]`);
                }
                
                const stepSide = self.stepContainer.getAttribute('step-side');
                const stepElSide = document.querySelector(`.jsStepSide [step-side="${stepSide}"]`);
    
                const stepSideInner = self.stepContainer.getAttribute('step-side-inner');
                
                if (stepSideInner !== null) {
                    document.querySelector(`.jsStepSide [step-side="${stepSide}"]`).setAttribute('step-side-inner', stepSideInner);
                }
    
                self.stepContainer.style.display = blockOrNone;
                stepElSide.style.display = blockOrNone;
            },

            stepEvents: function(step) {
                const self = this;
    
                if (step === 1) {
                    (function() {
                        if (!self.stepStep1_popUp) {
                            self.stepStep1_popUp = true;
                            
                            CustomAlert(true, 'Durante o preenchimento do cadastro, pediremos os dados do titular da conta de energia. Por isso, solicitamos que o cadastro seja feito pelo próprio titular.')
                        }
                    })();
                    
                    (function() {
                        if (!self.stepContainer.querySelector('.jsContratacaoOption.active')) {
                            self.stepContainer.querySelector('.jsNextStep').classList.add('disabled');
                        }
                    })();

                    (function() {
                        const contratacaoItem = self.stepContainer.querySelectorAll('.jsContratacaoOption');
                        let contratacaoActive = null;
    
                        contratacaoItem.forEach(item => {
                            item.onclick = function() {
                                if (!this.classList.contains('active')) {
                                    contratacaoActive = self.stepContainer.querySelector('.jsContratacaoOption.active');
        
                                    if (contratacaoActive) {
                                        contratacaoActive.classList.remove('active');
                                    }
        
                                    this.classList.add('active');
                                    self.stepContainer.querySelector('.jsNextStep').classList.remove('disabled');
                                }
                            }
                        });
                    })();

                } else if (step === 2 || step === 4) {
                    if (self.stepStarted.indexOf(step) === -1) {
                        CreateMaskForFields();

                        if (step === 2) {
                            // self.stepContainer.querySelector('.jsFieldFirstName').value = '233';
                            // self.stepContainer.querySelector('.jsFieldLastName').value = '233';
                            self.stepContainer.querySelector('.jsFieldEmail').value = 'fbebber1@gmail.com';
                            // self.stepContainer.querySelector('.jsSameField:not(.jsFieldEmail)').value = 'fbebber1@gmail.com';
                            // self.stepContainer.querySelector('.jsFieldSearchCEP').value = '86.460-000';
                            self.stepContainer.querySelector('.jsFieldPhone').value = '(11) 11111-1111';
                            self.stepContainer.querySelector('.jsFieldCodePartner').value = '123';
                            self.stepContainer.querySelector('.jsFieldAverage').value = '10,00';

                            let value = null, valueLength = null, btn = null;

                            let customError = false;
                            
                            self.stepContainer.querySelector('.jsFieldSearchCEP').oninput = async function() {
                                btn = this;
                                value = this.value;
                                valueLength = value.length;
                                
                                if (valueLength === 10) {
                                    btn.disabled = true;
                                    value = value.replaceAll('.', '').replaceAll('-', '');

                                    const queryParams = new URLSearchParams({
                                        zip_code: value
                                    }).toString();

                                    const url = `https://api.guaraenergia.com/utility-address?${queryParams}`;

                                    try {
                                        const response = await fetch(url, {
                                            method: "GET",
                                            headers: {
                                                'Content-Type': 'application/json'
                                            }
                                        });
                                        
                                        if (!response.ok) {
                                            btn.disabled = false;

                                            if (response.status == 404 || response.status == 400) {
                                                const data = await response.json();
                                                
                                                if (data) {
                                                    if (typeof data.detail !== 'undefined') {
                                                        customError = true;
                                                        CustomAlert(true, data.detail);
                                                    }
                                                }
                                            } else {
                                                throw new Error(`Response status: ${response.status}`);
                                            }
                                        }
                                        
                                        const data = await response.json();
                                        
                                        self.utility_id = data.utility_id;
                                        btn.disabled = false;
                                        btn.focus();
                                        
                                    } catch (error) {
                                        btn.disabled = false;

                                        if (!customError) {
                                            CustomAlert(true, 'Não foi possível encontrar o CEP. Por favor, verifique se digitou corretamente.');
                                            customError = false;
                                        }
                                    }

                                }
                            }

                        }
                    }
                       
                    if (step === 4) {
                        self.stepContainer.querySelector('.jsFieldFullName').value = `${self.fullName}`;
                        self.stepContainer.querySelector('.jsInstallationName').value = `${self.installation.utility.name}`;
                        self.stepContainer.querySelector('.jsClientCEP').value = `${self.cep}`;  
                    }

                } else if (step === 3) {

                    self.stepContainer.classList.add('gra-loading');

                    const planoItemActive = self.stepContainer.querySelector('.jsPlanoItem.active');
                    
                    if (self.stepStarted.indexOf(step) === -1) {
                        document.querySelector('.gra-btn-download-proposta').addEventListener('click', async function() {
                            try {
                                const response = await fetch('https://api.guaraenergia.com/qualify-lead/', {
                                    method: "POST",
                                    headers: {
                                        'Content-Type': 'application/json'
                                    },
                                    body: JSON.stringify({
                                        installation_id: self.installation.id
                                    })
                                });
                                
                                if (!response.ok) {
                                    throw new Error(`Response status: ${response.status}`);
                                }
                                
                                const data = await response.json();
                                
                            } catch (error) {
                                console.log(error);
                            }
                        });
                    };

                    (function() {
                        if (!planoItemActive) {
                            self.stepContainer.querySelector('.jsNextStep').classList.add('disabled');
                        }

                        self.stepContainer.querySelector('.jsFieldFullName').textContent = `${self.fullName}`;
                        self.stepContainer.querySelector('.jsFieldDistribuidora').textContent = self.distribuidora;
                    })();

                    if (self.stepNewPlano) {
                        self.stepContainer.querySelector('.jsNextStep').classList.add('disabled');
                        
                        if (planoItemActive) {
                            
                            planoItemActive.classList.remove('active');
                            planoItemActive.parentElement.classList.remove('gra-item-active');
                        };

                        (function() {
                            const dataPropostaEl = self.stepContainer.querySelector('.jsDataProposta');
                            const dataValidadeEl = self.stepContainer.querySelector('.jsDataValidade');
    
                            function valueToBr(num) {
                                return num < 1000 ? num.toString() : (num / 1000).toFixed(3);
                            };
    
                            function dataAtualFormatada(date){
                                var data = new Date(date),
                                dia  = data.getDate().toString().padStart(2, '0'),
                                mes  = (data.getMonth()+1).toString().padStart(2, '0'),
                                ano  = data.getFullYear();
                                return dia + "/" + mes + "/" + ano;
                            };

                            (async function() {

                                const url = `https://api.guaraenergia.com/propose/?installation_id=${self.installation.id}`;
    
                                try {
                                    const response = await fetch(url, {
                                        method: "GET",
                                        headers: {
                                            'Content-Type': 'application/json'
                                        }
                                    });
                                    
                                    if (!response.ok) {
    
                                        if (response.status == 404 || response.status == 400) {
                                            const data = await response.json();
                                            
                                            if (data) {
                                                if (response.status == 400) {
                                                    self.showStep(8);
                                                }
                                            }
                                        } else {
                                            throw new Error(`Response status: ${response.status}`);
                                        }
                                    }
                                    
                                    const data = await response.json();
                                    
                                    dataPropostaEl.textContent = dataAtualFormatada(data.emission_date);
                                    dataValidadeEl.textContent = dataAtualFormatada(data.due_date);
        
                                    const installationDiscount = data.installation_discount.find(function(el) {
                                        return el.is_default === true;
                                    });

                                    const discountValue = Object.values(installationDiscount.discounts);
                                    const yearlyValue = Object.values(installationDiscount.yearly_economy);
                                    const contract_proposes = data.contract_proposes;
                                    
                                    document.querySelectorAll(`.jsPlanoItem .jsPlanoDiscount`).forEach(function(item, i) {
                                        item.textContent = Math.floor(discountValue[i] * 100);
                                    });
                                    
                                    document.querySelectorAll(`.jsPlanoItem .jsPlanoYearEconomy`).forEach(function(item, i) {
                                        item.textContent = valueToBr(yearlyValue[i]);
                                    });
                                    
                                    document.querySelectorAll(`.jsPlanoItem`).forEach(function(item, i) {
                                        item.setAttribute('data-id', contract_proposes[i].id);
                                    });

                                    self.stepNewPlano = false;

                                    self.stepContainer.classList.remove('gra-loading');
                                        
                                } catch (error) {
                                    // btn.disabled = false;
                                    // if (!customError) {
                                    //     CustomAlert(true, 'Não foi possível encontrar o CEP. Por favor, verifique se digitou corretamente.');
                                    //     customError = false;
                                    // }
                                    self.stepContainer.classList.remove('gra-loading');
                                }
                            })();
                        })();

                    } else {
                        self.stepContainer.classList.remove('gra-loading');
                    };

                    (function() {
                        const planosItem = self.stepContainer.querySelectorAll('.jsPlanoItem');
                        let planoActive = null;
    
                        planosItem.forEach(item => {
                            item.onclick = function() {
                                if (!this.classList.contains('active')) {
                                    planoActive = self.stepContainer.querySelector('.jsPlanoItem.active');
        
                                    if (planoActive) {
                                        planoActive.classList.remove('active');
                                    }
        
                                    this.classList.add('active');
                                    this.parentElement.classList.add('gra-item-active');
                                    
                                    self.stepContainer.querySelector('.jsNextStep').classList.remove('disabled');
                                }
                            }
                        });
                    })();
                    
                } else if (step === 6) {
                    const fields = self.stepContainer.querySelectorAll('.jsField');

                    fields.forEach(el => {
                        if (el.hasAttribute('mask-number')) {
                            VMasker(el).maskNumber();
                        }
                    });

                    const subtitleEl = self.stepContainer.querySelector('.jsApplyEmailOnText');
                    const subtitleText = subtitleEl.textContent.replace('{{email}}', self.email);
                    subtitleEl.textContent = subtitleText;
                }
            },

            stepEventsBeforeNextStep: function(step, callback) {
                const self = this;
                const Container = self.stepContainer;

                if (step === 1) {
                    const type = self.stepContainer.querySelector('.jsContratacaoOption.active').getAttribute('data-type');

                    if (self.stepType !== null) {
                        if (self.stepType !== type) {
                            document.querySelector('.jsFormStep').reset();
                        }
                    }

                    self.stepType = type;

                    callback();
                    
                } else if (step === 2) {
                    if (ValidateWrongFields()) {
    
                        if (self.utility_id !== null) {

                            Container.classList.add('gra-loading');
                            
                            const field_firstName = Container.querySelector('.jsFieldFirstName').value;
                            const field_email = Container.querySelector('.jsFieldEmail').value;
                            const field_cep = Container.querySelector('.jsFieldSearchCEP').value.replaceAll('.', '').replaceAll('-', '');
        
                            const field_codePartner = Container.querySelector('.jsFieldCodePartner').value;
                            const field_averageConsumption = Container.querySelector('.jsFieldAverage').value.replaceAll('.', '').replaceAll(',', '.');
    
                            let field_lastName = null;
                            let field_phone = null;
                            let field_cnpj = null;
                            let field_social_contract = null;
        
                            function checkFields(type) {
                                if (self.stepType === "cpf") {
    
                                    field_lastName = Container.querySelector('.jsFieldLastName').value;
                                    field_phone = Container.querySelector('.jsFieldPhone').value.replaceAll('(', '').replaceAll(')', '').replaceAll(' ', '').replaceAll('-', '');
    
                                    return self.firstName !== field_firstName || self.lastName !== field_lastName || self.email !== field_email || self.cep !== field_cep || self.phone !== field_phone || self.codePartner !== field_codePartner || self.averageConsumption !== field_averageConsumption;
    
                                } else if (self.stepType === "cnpj") {
                                    
                                    field_cnpj = Container.querySelector('.jsFieldCNPJ').value.replaceAll('.', '').replaceAll('-', '').replaceAll('/', '');
                                    field_social_contract = Container.querySelector('.jsContractFile').files[0];
                                    
                                    return self.firstName !== field_firstName || self.cnpj !== field_cnpj || self.email !== field_email || self.cep !== field_cep || self.social_contract !== field_social_contract || self.codePartner !== field_codePartner || self.averageConsumption !== field_averageConsumption;
                                }
                            }
    
                            if(checkFields(self.stepType)) {

                                self.firstName = field_firstName;
                                self.email = field_email;
                                self.cep = field_cep;
                                self.codePartner = field_codePartner;
                                self.averageConsumption = field_averageConsumption;

                                let obj = {
                                    type: self.stepType,
                                    email: self.email,
                                    zip_code: self.cep,
                                    average_consumption: parseFloat(self.averageConsumption),
                                    partner_code: self.codePartner,
                                };

                                if (self.stepType === "cpf") {
                                    self.fullName = field_firstName + ' ' + field_lastName;

                                    self.lastName = field_lastName;
                                    self.phone = field_phone;
                                    
                                    obj.phone = field_phone;
                                    
                                } else if (self.stepType === "cnpj") {
                                    self.fullName = field_firstName;

                                    self.cnpj = field_cnpj;
                                    self.social_contract = field_social_contract;
                                    
                                    obj.cnpj = field_cnpj;
                                    obj.social_contract = field_social_contract;
                                }

                                obj.name = self.fullName;
    
                                (async function() {
                                    try {
                                        const response = await fetch('https://api.guaraenergia.com/client/register/', {
                                            method: "POST",
                                            headers: {
                                                'Content-Type': 'application/json'
                                            },
                                            body: JSON.stringify(obj)
                                        });
                                        
                                        if (!response.ok) {
                                            Container.classList.remove('gra-loading');
                                            throw new Error(`Response status: ${response.status}`);
                                        }
                                        
                                        const data = await response.json();
                                        self.installation = data.installation;
                                        self.client = data.client;
    
                                        self.distribuidora = data.installation.utility.name;
    
                                        Container.classList.remove('gra-loading');
                                        
                                        self.stepNewPlano = true;
    
                                        callback();
                                        
                                    } catch (error) {
                                        Container.classList.remove('gra-loading');
                                    }
                                })();
                            } else {
                                Container.classList.remove('gra-loading');
                                callback();
                            }
    
                        } else {
                            setTimeout(() => {
                                self.showStep(8);
                            }, 1000);
                        }
                    }

                } else if (step === 3) {                    
                    Container.classList.add('gra-loading');
    
                    (async function() {
                        try {
                            const response = await fetch('https://api.guaraenergia.com/select-propose/', {
                                method: "POST",
                                headers: {
                                    'Content-Type': 'application/json'
                                },
                                body: JSON.stringify({
                                    installation_id: self.installation.id,
                                    propose_id: parseInt(Container.querySelector('.jsPlanoItem.active').getAttribute('data-id')),
                                })
                            });
                            
                            if (!response.ok) {
                                throw new Error(`Response status: ${response.status}`);
                            }
                            
                            const data = await response.json();
                            Container.classList.remove('gra-loading');
                            callback();
                            
                        } catch (error) {
                            console.log(error);
                            Container.classList.remove('gra-loading');
                        }
                    })();

                } else if (step === 4) {
                    if (ValidateWrongFields()) {
                        
                        // const field_lastName = Container.querySelector('.jsFieldLastName').value;
                        // const field_email = Container.querySelector('.jsFieldEmail').value;
                        const field_cpf = Container.querySelector('.jsFieldCPF').value.replaceAll('.', '').replaceAll('-', '');
                        const field_billfile = Container.querySelector('.jsBillFile').files[0];
                        const field_idfile = Container.querySelector('.jsIdFile').files[0];
                        const field_installationnumber = Container.querySelector('.jsInstallationNumber').value.trim();

                        // self.stepContainer.querySelector('.jsClientCEP').value = `${self.cep}`;
                        // jsFieldCPF

                        // `installation_id=${self.installation.id}&legal_representant_name=&legal_representant_cpf=${field_cpf}&installation_number=${field_installationnumber}&bill_file=${field_billfile}&id_file=${field_idfile}&social_contract_file=`
                        
                        if (isValidCPF(field_cpf)) {

                            Container.classList.add('gra-loading');

                            const formData = new FormData();
                            formData.append("installation_id", self.installation.id);
                            formData.append("legal_representant_name", self.fullName);
                            formData.append("legal_representant_cpf", field_cpf);
                            formData.append("installation_number", field_installationnumber);
                            formData.append("bill_file", field_billfile);
                            formData.append("id_file", field_idfile);

                            (async function() {
                                try {
                                    const response = await fetch('https://api.guaraenergia.com/cadastro/step-3/', {
                                        method: 'POST',
                                        headers: {
                                            'Content-Type': 'application/x-www-form-urlencoded'
                                        },
                                        body: formData
                                    });
                                    
                                    if (!response.ok) {
                                        throw new Error(`Response status: ${response.status}`);
                                    }
                                    
                                    const data = await response.json();
                                    Container.classList.remove('gra-loading');
                                    callback();
                                    
                                } catch (error) {
                                    console.log(error);
                                    Container.classList.remove('gra-loading');
                                }
                            })();

                            // callback();
                        } else {
                            CustomAlert(true, 'CPF inválido.')
                        }
                    }

                } else if (step === 6) {
                    if (ValidateWrongFields()) {
                        callback();
                    }

                } else {
                    callback();
                }
            },
        };

        function isValidCPF(cpf) {
            if (typeof cpf !== 'string') return false
            cpf = cpf.replace(/[^\d]+/g, '')
            if (cpf.length !== 11 || !!cpf.match(/(\d)\1{10}/)) return false
            cpf = cpf.split('').map(el => +el)
            const rest = (count) => (cpf.slice(0, count-12)
                .reduce( (soma, el, index) => (soma + el * (count-index)), 0 )*10) % 11 % 10
            return rest(10) === cpf[9] && rest(11) === cpf[10]
        }

        function isValidCNPJ(cnpj) {
            let cnpjRef = cnpj.replace(/[^\d]+/g,'');

            if(cnpjRef == '') return false;
            
            if (cnpjRef.length != 14)
                return false;

            // Elimina CNPJs invalidos conhecidos
            if (cnpjRef == "00000000000000" || 
                cnpjRef == "11111111111111" || 
                cnpjRef == "22222222222222" || 
                cnpjRef == "33333333333333" || 
                cnpjRef == "44444444444444" || 
                cnpjRef == "55555555555555" || 
                cnpjRef == "66666666666666" || 
                cnpjRef == "77777777777777" || 
                cnpjRef == "88888888888888" || 
                cnpjRef == "99999999999999")
                return false;
                
            // Valida DVs
            tamanho = cnpjRef.length - 2
            numeros = cnpjRef.substring(0,tamanho);
            digitos = cnpjRef.substring(tamanho);
            soma = 0;
            pos = tamanho - 7;
            for (i = tamanho; i >= 1; i--) {
            soma += numeros.charAt(tamanho - i) * pos--;
            if (pos < 2)
                    pos = 9;
            }
            resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
            if (resultado != digitos.charAt(0))
                return false;
                
            tamanho = tamanho + 1;
            numeros = cnpjRef.substring(0,tamanho);
            soma = 0;
            pos = tamanho - 7;
            for (i = tamanho; i >= 1; i--) {
            soma += numeros.charAt(tamanho - i) * pos--;
            if (pos < 2)
                    pos = 9;
            }
            resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
            if (resultado != digitos.charAt(1))
                return false;
                    
            return true;
            
        }

        function ValidateWrongFields() {
            const fields = StepController.stepContainer.querySelectorAll('.jsField');
            let valid = true;

            fields.forEach(el => {

                if (!el.classList.contains('jsOptional')) {
                    const parent = el.parentElement;

                    el.classList.remove('gra-error');

                    if (parent.querySelector('.gra-error-msg')) {
                        parent.querySelector('.gra-error-msg').remove();
                    }

                    if (el.value === '') {
                        addError(el, 'Campo obrigatório');
                        
                        
                    } else if (el.hasAttribute('mask-cpf')) {
                        if (el.value.length !== 14) {
                            addError(el, 'Campo com valor incorreto');
                        }
                        
                    } else if (el.hasAttribute('mask-cnpj')) {
                        if (el.value.length !== 18) {
                            addError(el, 'Campo com valor incorreto');
                        }
                        
                    } else if (el.hasAttribute('mask-cep')) {
                        if (el.value.length !== 10) {
                            addError(el, 'Campo com valor incorreto');
                        }
                    
                    } else if (el.hasAttribute('mask-phone')) {
                        if (el.value.length < 14) {
                            addError(el, 'Campo com valor incorreto');
                        }
                        
                    } else if (el.type === 'email') {
                        if (!el.checkValidity()) {
                            addError(el, 'Campo com valor incorreto');
                        } else if (el.classList.contains('jsSameField')) {
                            checkForSameField(el);
                        }

                    } else if (el.hasAttribute('minlength')) {
                        const count = parseInt(el.getAttribute('minlength'));
                        if (el.value.length < count) {
                            addError(el, 'Campo precisa de no mínimo ' + count + ' caracteres');
                            
                        } else if (el.classList.contains('jsSameField')) {
                            checkForSameField(el);
                        }
                        
                    } else if (el.classList.contains('jsSameField')) {
                        checkForSameField(el);
                    }

                } else {
                    return valid;
                }
            });

            function addError(el, msg) {
                valid = false;
                el.classList.add('gra-error');

                let errorDiv = document.createElement("div");
                errorDiv.append(msg);
                errorDiv.classList.add('gra-error-msg');

                el.parentElement.append(errorDiv);

                return valid;
            }

            function checkForSameField(el) {
                const itens = StepController.stepContainer.querySelectorAll('.jsSameField');
                const baseValue = itens[0].value;
                
                for (let i = 1; i < itens.length; i++) {
                    if (itens[i].value !== baseValue) {

                        if (itens[i].parentElement.querySelector('.gra-error-msg')) {
                            itens[i].parentElement.querySelector('.gra-error-msg').remove();
                        }
                        
                        addError(itens[i], 'Confirme o valor do campo');
                    }
                }
            }

            return valid;
        };

        function CreateMaskForFields() {
            const fields = StepController.stepContainer.querySelectorAll('.jsField');

            function inputHandler(masks, max, event) {
                var c = event.target;
                var v = c.value.replace(/\D/g, '');
                var m = c.value.length > max ? 1 : 0;
                VMasker(c).unMask();
                VMasker(c).maskPattern(masks[m]);
                c.value = VMasker.toPattern(v, masks[m]);
            }

            fields.forEach(el => {
                if (el.hasAttribute('mask-cpf')) {
                    VMasker(el).maskPattern("999.999.999-99");

                } else if (el.hasAttribute('mask-cnpj')) {
                    VMasker(el).maskPattern("99.999.999/9999-99");

                } else if (el.hasAttribute('mask-cep')) {
                    var maskCep = ['99.999-999', '99.999-999'];
                    VMasker(el).maskPattern(maskCep);
                    el.addEventListener('input', inputHandler.bind(undefined, maskCep, 0), false);

                } else if (el.hasAttribute('mask-phone')) {
                    var telMask = ['(99) 9999-99999', '(99) 99999-9999'];
                    VMasker(el).maskPattern(telMask[0]);
                    el.addEventListener('input', inputHandler.bind(undefined, telMask, 14), false);

                } else if (el.hasAttribute('mask-money')) {
                    VMasker(el).maskMoney({
                        precision: 2,
                        separator: ',',
                        delimiter: '.',
                    });
                }
            });
        };

        function CustomAlert(show = false, text = '') {
            if (show) {
                document.querySelector('.jsPopUpAlert').style.display = '';
                document.querySelector('.jsPopUpAlertTxt').textContent = text;
            } else {
                document.querySelector('.jsPopUpAlert').style.display = 'none';
                document.querySelector('.jsPopUpAlertTxt').textContent = '';
            }
        };
    
        StepController.init();
    })();
 </script>
 </body>