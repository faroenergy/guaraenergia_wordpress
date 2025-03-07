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
                        <input class="jsField jsFieldFirstName" type="text" minlength="3" placeholder="Nome" />
                    </div>
                    <div class="gra-col gra-col--half">
                        <input class="jsField jsFieldLastName" type="text" minlength="3" placeholder="Sobrenome" />
                    </div>
                    <div class="gra-col gra-col--half">
                        <input class="jsField jsSameField" placeholder="E-mail" type="email" />
                    </div>
                    <div class="gra-col gra-col--half">
                        <input class="jsField jsSameField" placeholder="Confirme o e-mail" type="email" />
                    </div>
                    <div class="gra-col">
                        <input class="jsField" type="text" mask-cep placeholder="CEP" />
                    </div>
                    <div class="gra-col">
                        <input class="jsField jsOptional" type="text" placeholder="Código do Parceiro/Cupom Promocional (opcional)" />
                        <div class="gra-tooltip-icon gra-tooltip-icon--info"></div>
                        <span class="gra-tooltip">Caso você tenha nos conhecido através de um parceiro comercial coloque neste campo o código do parceiro.</span>
                    </div>
                    <div class="gra-col">
                        <input class="jsField" type="text" minlength="3" placeholder="Média do Valor em R$ pago na fatura de energia" />
                    </div>
                </div>
                <?php get_template_part('templates/quero-economizar/footer', null, array('botao' => $passo_2['botao'], 'go_back' => true, 'texto_privacidade' => $texto_privacidade))?>
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
                    <div class="gra-planos__item green jsPlanoItem">
                        <p class="gra-planos__item-title"><?php echo $passo_3['plano_1']; ?></p>
                        <p class="gra-planos__item-desconto"><span>Tenha</span> <b>10% de economia</b></p>
                        <p class="gra-planos__item-valor">Economize até <br><b>R$1.000/ano</b></p>
                    </div>
                    <div class="gra-planos__item yellow jsPlanoItem">
                        <p class="gra-planos__item-title"><?php echo $passo_3['plano_2']; ?></p>
                        <p class="gra-planos__item-desconto"><span>Tenha</span> <b>12% de economia</b></p>
                        <p class="gra-planos__item-valor">Economize até <br><b>R$1.200/ano</b></p>
                    </div>
                    <div class="gra-planos__item gray jsPlanoItem">
                        <p class="gra-planos__item-title"><?php echo $passo_3['plano_3']; ?></p>
                        <p class="gra-planos__item-desconto"><span>Tenha</span> <b>15% de economia</b></p>
                        <p class="gra-planos__item-valor">Economize até <br><b>R$1.500/ano</b></p>
                    </div>
                </div>
                <p class="gra-texto-extra"><?php echo $passo_3['texto_extra']; ?></p>
                <?php get_template_part('templates/quero-economizar/footer', null, array('botao' => $passo_3['botao'], 'go_back' => true, 'texto_privacidade' => $texto_privacidade))?>
            </div>
            <div class="gra-step-form__content-inner" step-side="2" step-side-inner="2" step="4" style="display:none">
                <div class="gra-title"><?php echo $passo_4['titulo']; ?></div>
                <hr class="gra-separator" />           
                <div class="gra-content">
                    <div class="gra-col">
                        <input class="jsField jsFieldFullName" type="text" placeholder="Nome Completo" disabled />
                        <div class="gra-tooltip-icon gra-tooltip-icon--lock"></div>
                    </div>
                    <div class="gra-col gra-col--half">
                        <input class="jsField" placeholder="CPF" mask-cpf type="text" />
                    </div>
                    <div class="gra-col gra-col--half">
                        <input class="jsField" placeholder="CEP" mask-cep type="text" />
                    </div>
                    <div class="gra-col gra-col--half">
                        <input class="jsField" type="text" disabled value="Distribuidora: Enel" />
                        <div class="gra-tooltip-icon gra-tooltip-icon--lock"></div>
                    </div>
                    <div class="gra-col gra-col--half">
                        <input class="jsField" type="text" minlength="3" placeholder="Nº de instalação" />
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
            <div class="gra-step-form__content-inner" step-side="2" step-side-inner="2" step="6" style="display:none">
                <div class="gra-title"><?php echo $passo_6['titulo']; ?></div>
                <div class="gra-subtitle"><?php echo $passo_6['subtitulo']; ?></div>
                <hr class="gra-separator" />           
                <div class="gra-content">
                    <div class="gra-col">
                        <input class="jsField" type="text" placeholder="Digite o código enviado para seu email" />
                    </div>
                    <div class="gra-col">
                        <a href="#" class="gra-col-resend-code">Reenviar código</a>
                    </div>
                    <div class="gra-col">
                        <input class="jsField jsSameField" placeholder="Crie sua senha" type="text" />
                    </div>
                    <div class="gra-col">
                        <input class="jsField jsSameField" placeholder="Confirme sua senha" type="text" />
                    </div>
                </div>
                <?php get_template_part('templates/quero-economizar/footer', null, array('botao' => $passo_6['botao'], 'go_back' => true, 'texto_privacidade' => $texto_privacidade))?>
            </div>
            <div class="gra-step-form__content-inner" step-side="3" step="7" style="display:none">
                <?php echo $passo_7['titulo']; ?>
                <?php echo $passo_7['subtitulo']; ?>
                <?php echo $passo_7['botao']; ?>
                <?php get_template_part('templates/quero-economizar/footer', null, array('botao' => $passo_7['botao'], 'go_back' => true, 'texto_privacidade' => $texto_privacidade))?>
            </div>
        </div>
    </div>
    
</section>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vanilla-masker.min.js"></script>
 <script>
    (function() {
        
        const StepController = {
            dev: false,
            start: 2,
            stepContainer: null,
            firstName: "Guará",
            lastName: "Energia",
    
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
                            if (typeof self.validationSteps[`${self.currentStep}`] !== 'undefined') {
                                self.validationSteps[`${self.currentStep}`](function() {
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

            validationSteps: {
                '2': function(callback) {
                    if (StepController.validateEmptyFields()) {
                        StepController.firstName = document.querySelector('.jsFieldFirstName').value;
                        StepController.lastName = document.querySelector('.jsFieldLastName').value;
                        callback();
                    }
                },
                '4': function(callback) {
                    if (StepController.validateEmptyFields()) {
                        callback();
                    }
                },
            },

            validateEmptyFields: function() {
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
                            
                            
                        } else if (el.classList.contains('jsSameField')) {
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
                                
                            }
    
                        } else if (el.hasAttribute('minlength')) {
                            const count = parseInt(el.getAttribute('minlength'));
                            if (el.value.length < count) {
                                addError(el, 'Campo precisa de no mínimo ' + count + ' caracteres');
                                
                            }
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
                        if (!self.stepContainer.querySelector('.jsContratacaoOption.active')) {
                            self.stepContainer.querySelector('.jsNextStep').classList.add('disabled');
                        }
                    }());

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
                        document.querySelector('.jsFieldFullName').value = `${self.firstName} ${self.lastName}`;
                    }

                } else if (step === 3) {
                    
                    (function() {
                        if (!self.stepContainer.querySelector('.jsPlanoItem.active')) {
                            self.stepContainer.querySelector('.jsNextStep').classList.add('disabled');
                        }
                    }());
    
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