<!-- Template Name: Guará Colab -->

<?php get_template_part('head', null, 
 array( 
    'title' => "Guará Colab",
    'css' => 'guara-colab'
))?>
<?php get_template_part('header')?>

<?php
    $page_id = 13;
?>

<?php
    $bloco_1 = get_field('bloco_1', $page_id);
?>

<section class="gra-section-1" style="background-image:url(<?php echo $bloco_1['imagem'] ?>)">
    <div class="gra-container">
        <?php echo $bloco_1['titulo'] ?>
        <button data-scroll-btn=".gra-section-5" class="gra-btn-link yellow gra-uppercase">
            <?php echo $bloco_1['botao'] ?>
            <span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-tright-dk.svg" alt="">
            </span>
        </button>
    </div>
</section>

<?php
    $bloco_2 = get_field('bloco_2', $page_id);
    $bloco_2_direita = $bloco_2['bloco_direita'];
?>
<section class="gra-section-2">
    <div class="gra-container">
        <div class="gra-section-2__painel">
            <div class="gra-section-2__left">
                <div class="gra-section-2__left-title"><?php echo $bloco_2['titulo'] ?></div>
                <p class="gra-section-2__left-text">
                    <?php echo $bloco_2['texto'] ?>
                </p>
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
                    <?php echo $bloco_2_direita['titulo'] ?>
                </div>
                <ul class="gra-section-2__right-list">
                    <li  class="gra-section-2__right-item">
                        <span class="gra-section-2__right-number">01</span>
                        <?php echo $bloco_2_direita['item_1'] ?>
                    </li>
                    <li  class="gra-section-2__right-item">
                        <span class="gra-section-2__right-number">02</span>
                        <?php echo $bloco_2_direita['item_2'] ?>
                    </li>
                    <li  class="gra-section-2__right-item">
                        <span class="gra-section-2__right-number">03</span>
                        <?php echo $bloco_2_direita['item_3'] ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="gra-container">
    <div class="gra-separator"></div>
</div>

<?php
    $bloco_3 = get_field('bloco_3', $page_id);
?>

<section class="gra-section-3">
    <div class="gra-container">
        <div class="gra-section-3__title">
            <?php echo $bloco_3['titulo'] ?>
        </div>
        <div class="gra-section-3__subtitle">
            <?php echo $bloco_3['texto'] ?>
        </div>
        <div class="gra-section-3__content">
            <div class="gra-section-3__item yellow">
                <div class="gra-section-3__icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guara-colab/map.svg" alt="">
                </div>
                <p><?php echo $bloco_3['bloco_1_texto'] ?></p>
            </div>
            <div class="gra-section-3__item green">
                <div class="gra-section-3__icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guara-colab/tick-circle.svg" alt="">
                </div>
                <p><?php echo $bloco_3['bloco_2_texto'] ?></p>
            </div>
            <div class="gra-section-3__item green-dk">
                <div class="gra-section-3__item-wrapper">
                    <div class="gra-section-3__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guara-colab/crown.svg" alt="">
                    </div>
                    <?php echo $bloco_3['bloco_3_texto'] ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    $bloco_4 = get_field('bloco_4', $page_id);
?>

<section class="gra-section-4">
    <div class="gra-container">
        <div class="gra-section-4__title">
            <?php echo $bloco_4['titulo'] ?>
        </div>
        <ol class="gra-section-4__items">
            <li class="gra-section-4__item yellow">
                <div class="gra-section-4__item-ordem">01</div>
                <p class="gra-section-4__item-texto"><?php echo $bloco_4['item_1'] ?></p>
            </li>
            <li class="gra-section-4__arrow"></li>
            <li class="gra-section-4__item green">
                <div class="gra-section-4__item-ordem">02</div>
                <p class="gra-section-4__item-texto"><?php echo $bloco_4['item_2'] ?></p>
            </li>
            <li class="gra-section-4__arrow"></li>
            <li class="gra-section-4__item yellow">
                <div class="gra-section-4__item-ordem">03</div>
                <p class="gra-section-4__item-texto"><?php echo $bloco_4['item_3'] ?></p>
            </li>
            <li class="gra-section-4__arrow"></li>
            <li class="gra-section-4__item green">
                <div class="gra-section-4__item-ordem">04</div>
                <p class="gra-section-4__item-texto"><?php echo $bloco_4['item_4'] ?></p>
            </li>
        </ol>
        <div class="gra-text-center">
            <button data-scroll-btn=".gra-section-5" class="gra-btn-link yellow gra-uppercase">
                <?php echo $bloco_4['botao'] ?>
                <span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-tright-dk.svg" alt="">
                </span>
            </button>
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
            <?php echo do_shortcode('[contact-form-7 id="f003e47" title="Guará Colab"]') ?>
        </div>
    </div>
</section>

<?php get_template_part('footer', null,  
 array( 
    'name' => 'guara-colab'
))?>