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

<section class="gra-section-1" style="background-image:url(<?php echo $bloco_1['imagem'] ?>)">

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
                
                <div class="gra-text-center-mb">
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
        </div>
    </div>
</section>

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

<div class="gra-container">
    <div class="gra-separator"></div>
</div>

<?php
    $bloco_4 = get_field('bloco_4', $page_id);
?>
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
<section class="gra-section-5">
    <div class="gra-container">
        <div class="gra-section-5__title">
            Formulário
        </div>
        <div class="gra-separator"></div>
        <div>
            <?php echo do_shortcode('[contact-form-7 id="96a75c3" title="Seja um parceiro"]') ?>
        </div>
    </div>
</section>

<?php get_template_part('footer', null,  
 array( 
    'name' => 'seja-um-parceiro'
))?>