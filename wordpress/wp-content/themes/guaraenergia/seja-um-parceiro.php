<!-- Template Name: Parceiro -->

<?php get_template_part('head', null, 
 array( 
    'title' => "Seja um parceiro",
    'css' => 'seja-um-parceiro'
))?>

<?php get_template_part('header')?>

<?php
    $page_id = 17;
?>

<?php
    $bloco_1 = get_field('bloco_1', $page_id);
?>

<style>
    @media (min-width: 1012px) {
        .gra-section-1 {
            background-image:url(<?php echo $bloco_1['imagem'] ?>)       
        }
    }
    @media (max-width: 1011px) {
        .gra-section-1 {
            background-image:url(<?php echo $bloco_1['imagem_mobile'] ?>)       
        }
    }
</style>

<section class="gra-section-1">

    <div class="gra-container">
        <h1 class="gra-section-1__title">
            <?php echo $bloco_1['titulo'] ?>
        </h1>
        <p class="gra-section-1__subtitle">
            <?php echo $bloco_1['subtitulo'] ?>
        </p>
        <button data-scroll-btn=".gra-section-5" class="gra-btn-link yellow gra-uppercase">
            <?php echo $bloco_1['botao'] ?>
            <span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-tright-dk.svg" alt="">
            </span>
        </button>
    </div>
</section>

<div class="gra-container gra-desktop-hide">
    <div class="gra-separator"></div>
</div>

<section class="gra-section-2">
    <?php
        $bloco_2 = get_field('bloco_2', $page_id);
    ?>
    <div class="gra-container">
        <div class="gra-section-2__painel">
            <div class="gra-section-2__left">
                <div class="gra-section-2__left-title">
                    <?php echo $bloco_2['titulo'] ?>
                </div>

                <?php echo $bloco_2['texto'] ?>
                
                <div class="gra-text-center-mb gra-mobile-hide">
                    <button data-scroll-btn=".gra-section-5" class="gra-btn-link green gra-uppercase">
                        <?php echo $bloco_2['botao'] ?>
                        <span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-right.svg" alt="">
                        </span>
                    </button>
                </div>
            </div>
            <div class="gra-section-2__right">
                <div class="gra-section-2__right-title">
                    <?php echo $bloco_2['bloco_direita']['titulo'] ?>
                </div>
                <ul class="gra-section-2__right-list">
                    <li  class="gra-section-2__right-item">
                        <span class="gra-section-2__right-number">01</span>
                        <?php echo $bloco_2['bloco_direita']['item_1'] ?>
                    </li>
                    <li  class="gra-section-2__right-item">
                        <span class="gra-section-2__right-number">02</span>
                        <?php echo $bloco_2['bloco_direita']['item_2'] ?>
                    </li>
                    <li  class="gra-section-2__right-item">
                        <span class="gra-section-2__right-number">03</span>
                        <?php echo $bloco_2['bloco_direita']['item_3'] ?>
                    </li>
                    <li  class="gra-section-2__right-item">
                        <span class="gra-section-2__right-number">04</span>
                        <?php echo $bloco_2['bloco_direita']['item_4'] ?>
                    </li>
                </ul>
            </div>
            <div class="gra-text-center-mb gra-desktop-hide">
                <button data-scroll-btn=".gra-section-5" class="gra-btn-link green gra-uppercase">
                    <?php echo $bloco_2['botao'] ?>
                    <span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-right.svg" alt="">
                    </span>
                </button>
            </div>
        </div>
    </div>
</section>


<?php if (get_field('video_ativo', $page_id) === true): ?>
<div class="gra-container">
    <div class="gra-separator"></div>
</div>

<section class="gra-section-3">
    <?php
        $bloco_3 = get_field('bloco_3', $page_id);
    ?>
    <div class="gra-container">
        <div class="gra-section-3__video jsVideoPlayer" data-video-id="<?php echo do_shortcode('[wpcode id="181"]') ?>"></div>
        <?php echo $bloco_3['titulo'] ?>
    </div>
</section>
<?php endif ?>

<?php
    $bloco_4 = get_field('bloco_4', $page_id);
?>

<?php if ($bloco_4['depoimentos_ativo'] === true): ?>
    <div class="gra-container">
        <div class="gra-separator"></div>
    </div>
<section class="gra-section-4">
    <div class="gra-container">
        <div class="gra-section-4__top">
            
            <?php echo $bloco_4['titulo'] ?>
            <div class="gra-section-4__btns jsSliderDepoimentosBtns">
                <button type="button">
                    <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M28.8618 18.4995L8.13785 18.4995" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17.0195 27.3818L8.13783 18.5001L17.0195 9.61844" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <button type="button">
                    <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.13818 18.5005H28.8621" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M19.9805 9.61816L28.8622 18.4999L19.9805 27.3816" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>
        <div class="jsSliderDepoimentos gra-section-4__slider">
            <?php
                $start = 1;
                $end = 7;
                for ( $i = $start; $i <= $end; $i++ ):
                    if ($bloco_4['depoimento_' . $i]['ativo'] === true):
                        $blocoDepoimento = $bloco_4['depoimento_' . $i];
                ?>
                <div>
                    <div class="gra-section-4__slider-item">
                        <?php echo $blocoDepoimento['texto']; ?>
                        <div class="gra-section-4__slider-user">
                            <img width="60" src="<?php echo $blocoDepoimento['imagem_pessoa']; ?>" alt="">
                            <p>
                                <b><?php echo $blocoDepoimento['nome']; ?></b>
                                <span>
                                    <?php echo $blocoDepoimento['cidade']; ?><br>
                                    <small>Parceiro(a) desde <?php echo $blocoDepoimento['data']; ?></small>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            <?php
                endif;
                endfor;
            ?>
        </div>
    </div>
</section>
<?php
    endif;
?>
<section class="gra-section-5">
    <div class="gra-container">
        <div class="gra-section-5__title">
            Formulário
        </div>
        <div class="gra-separator"></div>
        <div>
            <!-- Grava em POST /lead-partners/ (guaraenergia_api); ver assets/js/seja-um-parceiro.js -->
            <form id="partner-lead-form" class="gra-contact-form" novalidate>
                <div class="gra-contact-form__field full">
                    <label><span>Nome da empresa</span><input name="company_name" aria-describedby="erro-company_name" type="text" maxlength="255" autocomplete="organization" required></label>
                    <div class="gra-contact-form__error" id="erro-company_name" data-error="company_name"></div>
                </div>
                <div class="gra-contact-form__field">
                    <label><span>CNPJ</span><input name="cnpj" aria-describedby="erro-cnpj" type="text" inputmode="numeric" placeholder="00.000.000/0000-00" required></label>
                    <div class="gra-contact-form__error" id="erro-cnpj" data-error="cnpj"></div>
                </div>
                <div class="gra-contact-form__field">
                    <label><span>Nome do responsável</span><input name="responsible_name" aria-describedby="erro-responsible_name" type="text" maxlength="255" autocomplete="name" required></label>
                    <div class="gra-contact-form__error" id="erro-responsible_name" data-error="responsible_name"></div>
                </div>
                <div class="gra-contact-form__field">
                    <label><span>E-mail</span><input name="email" aria-describedby="erro-email" type="email" maxlength="255" autocomplete="email" required></label>
                    <div class="gra-contact-form__error" id="erro-email" data-error="email"></div>
                </div>
                <div class="gra-contact-form__field">
                    <label><span>Telefone / Whatsapp</span><input name="phone" aria-describedby="erro-phone" type="text" inputmode="tel" autocomplete="tel-national" placeholder="(11) 90000-0000" required></label>
                    <div class="gra-contact-form__error" id="erro-phone" data-error="phone"></div>
                </div>
                <div class="gra-contact-form__field full">
                    <label><span>Estado</span>
                        <select name="state" aria-describedby="erro-state" required>
                            <option value="">Selecione</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                    </label>
                    <div class="gra-contact-form__error" id="erro-state" data-error="state"></div>
                </div>
                <div class="gra-contact-form__field full">
                    <label><span>Mensagem (opcional)</span><textarea name="message" rows="10" maxlength="2000" aria-describedby="erro-message"></textarea></label>
                    <div class="gra-contact-form__error" id="erro-message" data-error="message"></div>
                </div>
                <div class="gra-contact-form__field full">
                    <input type="submit" value="Enviar">
                </div>
            </form>
            <div id="partner-lead-status" class="gra-contact-form__status" role="status" aria-live="polite"></div>
        </div>
    </div>
</section>

<?php get_template_part('footer', null,  
 array( 
    'name' => 'seja-um-parceiro'
))?>