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
    <div class="gra-step-form__wrapper">
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
                    <button class="gra-btn-option jsContratacaoOption">
                        <?php echo $passo_1['opcao_1']; ?>
                    </button>
                    <button class="gra-btn-option jsContratacaoOption">
                        <?php echo $passo_1['opcao_2']; ?>
                    </button>
                </div>
                <?php get_template_part('templates/quero-economizar/footer', null, array('botao' => $passo_1['botao'], 'texto_privacidade' => $texto_privacidade))?>
            </div>
            <div class="gra-step-form__content-inner" step-side="2" step-side-inner="0" step="2" style="display:none">
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
                    <div class="gra-col">
                        <input class="jsField" type="text" mask-cep />
                        <label>CEP*</label>
                    </div>
                    <div class="gra-col">
                        <input class="jsField jsOptional" type="text" />
                        <label>Código do Parceiro/Cupom Promocional</label>
                        <div class="gra-tooltip-icon gra-tooltip-icon--info"></div>
                        <span class="gra-tooltip">Caso você tenha nos conhecido através de um parceiro comercial coloque neste campo o código do parceiro.</span>
                    </div>
                    <div class="gra-col">
                        <input class="jsField" type="text" minlength="3" />
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
                    <div class="gra-planos__item gray jsPlanoItem">
                        <div>
                            <p class="gra-planos__item-title"><?php echo $passo_3['plano_1']; ?></p>
                            <p class="gra-planos__item-valor">Economize até <br><b>R$1.000/ano</b></p>
                        </div>
                        <p class="gra-planos__item-desconto"><span>Tenha</span> <b>10% de economia</b></p>
                    </div>
                    <div class="gra-planos__item yellow jsPlanoItem">
                        <div>
                            <p class="gra-planos__item-title"><?php echo $passo_3['plano_2']; ?></p>
                            <p class="gra-planos__item-valor">Economize até <br><b>R$1.200/ano</b></p>
                        </div>
                        <p class="gra-planos__item-desconto"><span>Tenha</span> <b>12% de economia</b></p>
                    </div>
                    <div class="gra-planos__item green jsPlanoItem">
                        <div>
                            <p class="gra-planos__item-title"><?php echo $passo_3['plano_3']; ?></p>
                            <p class="gra-planos__item-valor">Economize até <br><b>R$1.500/ano</b></p>
                        </div>
                        <p class="gra-planos__item-desconto"><span>Tenha</span> <b>15% de economia</b></p>
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
                        <input class="jsField" mask-cpf type="text" />
                        <label>CPF*</label>
                    </div>
                    <div class="gra-col gra-col--half">
                        <input class="jsField" mask-cep type="text" />
                        <label>CEP*</label>
                    </div>
                    <div class="gra-col gra-col--half">
                        <input class="jsField" type="text" disabled value="Enel" />
                        <label>Distribuidora*</label>
                        <div class="gra-tooltip-icon gra-tooltip-icon--lock"></div>
                    </div>
                    <div class="gra-col gra-col--half">
                        <input class="jsField" type="text" minlength="3" />
                        <label>Nº de instalação*</label>
                        <div class="gra-tooltip-icon gra-tooltip-icon--info"></div>
                        <!-- <span class="gra-tooltip">Caso você tenha nos conhecido através de um parceiro comercial coloque neste campo o código do parceiro.</span> -->
                    </div>
                    <div class="gra-col gra-col--half">
                        <input class="jsField" type="file" placeholder="Anexe sua última fatura " />
                        <div class="gra-tooltip-icon gra-tooltip-icon--clip"></div>
                    </div>
                    <div class="gra-col gra-col--half">
                        <input class="jsField" type="file" placeholder="Anexe seu documento" />
                        <div class="gra-tooltip-icon gra-tooltip-icon--clip"></div>
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
    </div>
</section>
<div class="gra-popup jsPopUpAlert jsClosePopUpAlert" style="display:none">
    <div class="gra-popup__info">
        <button class="gra-popup__info-close jsClosePopUpAlert"></button>
        <div class="gra-popup__info-title">
            Atenção
        </div>
        <p class="gra-popup__info-text">
            Durante o preenchimento do cadastro, pediremos os dados do titular da conta de energia. Por isso, solicitamos que o cadastro seja feito pelo próprio titular.
        </p>
    </div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vanilla-masker.min.js"></script>
 <script>
    (function() {
        
        const StepController = {
            dev: true,
            start: 1,
            stepContainer: null,
            firstName: "Guará",
            lastName: "Energia",
            email: "contato@guaraenergia.com.br",
            popUpStart: false,
    
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
                        
                        if (self.dev) {
                            self.showStep(self.currentStep + 1);   

                        } else if (!this.classList.contains('disabled')) {
                            if (typeof self.validationBeforeNextStep[`${self.currentStep}`] !== 'undefined') {
                                self.validationBeforeNextStep[`${self.currentStep}`](function() {
                                    self.showStep(self.currentStep + 1);
                                })
                            } else {
                                self.showStep(self.currentStep + 1);      
                            }
                        }
                    };
                });
    
                PrevStep.forEach(function(item) {
                    item.onclick = function() {
                        self.showStep(self.currentStep - 1);             
                    };
                });
            },

            validationBeforeNextStep: {
                '2': function(callback) {
                    let accept = false;

                    if (StepController.validateWrongFields()) {
                        StepController.firstName = StepController.stepContainer.querySelector('.jsFieldFirstName').value;
                        StepController.lastName = StepController.stepContainer.querySelector('.jsFieldLastName').value;
                        StepController.email = StepController.stepContainer.querySelector('.jsFieldEmail').value;

                        if (accept) {
                            callback();
                        } else {
                            StepController.showStep(8);
                        }
                    }
                },
                '4': function(callback) {
                    if (StepController.validateWrongFields()) {
                        callback();
                    }
                },
                '6': function(callback) {
                    if (StepController.validateWrongFields()) {
                        callback();
                    }
                }
             },

            validateWrongFields: function() {
                const self = this;

                const fields = self.stepContainer.querySelectorAll('.jsField');
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
                            
                        } else if (el.hasAttribute('mask-cep')) {
                            if (el.value.length !== 10) {
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
                    const itens = self.stepContainer.querySelectorAll('.jsSameField');
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
            },

            createMaskForFields() {
                const self = this;

                const fields = self.stepContainer.querySelectorAll('.jsField');

                fields.forEach(el => {
                    if (el.hasAttribute('mask-cpf')) {
                        VMasker(el).maskPattern("999.999.999-99")
                    } else if (el.hasAttribute('mask-cep')) {
                        VMasker(el).maskPattern("99.999-999")
                    }
                });
            },
    
            stepEvents: function(step) {
                const self = this;
    
                if (step === 1) {
                    (function() {
                        if (!self.popUpStart) {
                            self.popUpStart = true;
                            document.querySelector('.jsPopUpAlert').style.display = '';

                            document.querySelectorAll('.jsClosePopUpAlert').forEach(function(item) {
                                item.onclick = function(e) {
                                    var itemTarget = e.target;
                                    if (itemTarget.classList.contains('jsClosePopUpAlert')) {
                                        document.querySelector('.jsPopUpAlert').style.display = 'none';
                                    }
                                }
                            });
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
                    self.createMaskForFields();

                    if (step === 4) {
                        self.stepContainer.querySelector('.jsFieldFullName').value = `${self.firstName} ${self.lastName}`;
                    }

                } else if (step === 3) {
                    
                    (function() {
                        if (!self.stepContainer.querySelector('.jsPlanoItem.active')) {
                            self.stepContainer.querySelector('.jsNextStep').classList.add('disabled');
                        }

                        self.stepContainer.querySelector('.jsFieldFullName').textContent = `${self.firstName} ${self.lastName}`;
                    })();
    
                    (function() {
                        const dataPropostaEl = self.stepContainer.querySelector('.jsDataProposta');
                        const dataValidadeEl = self.stepContainer.querySelector('.jsDataValidade');
        
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
                    })();
    
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
                    const subtitleText = subtitleEl.textContent.replace('{{email}}', StepController.email);
                    subtitleEl.textContent = subtitleText;
                }
            },
    
            constrolStepVisibity: function(blockOrNone, step) {
                const self = this;
    
                self.stepContainer = document.querySelector(`.jsStepContent [step="${step}"]`);
                
                const stepSide = self.stepContainer.getAttribute('step-side');
                const stepElSide = document.querySelector(`.jsStepSide [step-side="${stepSide}"]`);
    
                const stepSideInner = self.stepContainer.getAttribute('step-side-inner');
                
                if (stepSideInner !== null) {
                    document.querySelector(`.jsStepSide [step-side="${stepSide}"]`).setAttribute('step-side-inner', stepSideInner);
                }
    
                self.stepContainer.style.display = blockOrNone;
                stepElSide.style.display = blockOrNone;
            },
        };
    
        StepController.init();
    })();
 </script>
 </body>