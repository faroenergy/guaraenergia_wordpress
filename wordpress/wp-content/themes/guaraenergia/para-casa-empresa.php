<!-- Template Name: Para casa e empresa -->

<?php get_template_part('head', null, 
 array( 
    'title' => "Para casa e empresa",
    'css' => 'para-casa-empresa'
))?>
<?php get_template_part('header')?>

<?php
    $page_id = 19;
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
        <?php echo $bloco_1['titulo'] ?>
        <p class="gra-section-1__subtitle">
            <?php echo $bloco_1['texto'] ?>
        </p>
        <a href="<?php echo do_shortcode('[wpcode id="166"]') ?>" class="gra-btn-link yellow">
            <?php echo $bloco_1['botao'] ?>
            <span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-tright-dk.svg" alt="">
            </span>
        </a>
    </div>
</section>
<section class="gra-section-2">
    <?php
        $bloco_2 = get_field('bloco_2', $page_id);
    ?>
    <div class="gra-container">
        <div class="gra-section-2__painel">
            <div class="gra-section-2__left">
                <div class="gra-section-2__left-title"><?php echo $bloco_2['titulo'] ?></div>
                <?php echo $bloco_2['texto'] ?>
            </div>
            <div class="gra-section-2__right">
                <ul class="gra-section-2__right-list">
                    <li  class="gra-section-2__right-list-item">
                        <span class="gra-section-2__right-list-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/cloud-cross.svg" alt="">
                        </span>
                        <?php echo $bloco_2['itens_direita']['item_1'] ?>
                    </li>
                    <li  class="gra-section-2__right-list-item">
                        <span class="gra-section-2__right-list-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/electricity.svg" alt="">
                        </span>
                        <?php echo $bloco_2['itens_direita']['item_2'] ?>
                    </li>
                    <li  class="gra-section-2__right-list-item">
                        <span class="gra-section-2__right-list-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/cloud-add.svg" alt="">
                        </span>
                        <?php echo $bloco_2['itens_direita']['item_3'] ?>
                    </li>
                </ul>
                <div class="gra-text-center-mb">
                    <a href="<?php echo do_shortcode('[wpcode id="166"]') ?>" class="gra-btn-link yellow gra-uppercase">
                        <?php echo $bloco_2['botao'] ?>
                        <span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-tright-dk.svg" alt="">
                        </span>
                    </a>
                </div>
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

<section class="gra-section-4">
    <?php
        $bloco_4 = get_field('bloco_4', $page_id);
    ?>
    <div class="gra-container">
        <div class="gra-section-4__title">
            <?php echo $bloco_4['titulo'] ?>
        </div>
        <div class="gra-section-4__subtitle">
            <?php echo $bloco_4['subtitulo'] ?>
        </div>
        <ol class="gra-section-4__items">
            <li class="gra-section-4__item yellow">
                <div class="gra-section-4__item-ordem">01</div>
                <p class="gra-section-4__item-texto">
                    <?php echo $bloco_4['passo_1_texto'] ?>
                </p>
            </li>
            <li class="gra-section-4__arrow"></li>
            <li class="gra-section-4__item white">
                <div class="gra-section-4__item-ordem">02</div>
                <p class="gra-section-4__item-texto">
                    <?php echo $bloco_4['passo_2_texto'] ?>
                </p>
            </li>
            <li class="gra-section-4__arrow"></li>
            <li class="gra-section-4__item yellow">
                <div class="gra-section-4__item-ordem">03</div>
                <p class="gra-section-4__item-texto">
                    <?php echo $bloco_4['passo_3_texto'] ?>
                </p>
            </li>
            <li class="gra-section-4__arrow"></li>
            <li class="gra-section-4__item white">
                <div class="gra-section-4__item-ordem">04</div>
                <p class="gra-section-4__item-texto">
                    <?php echo $bloco_4['passo_4_texto'] ?>
                </p>
            </li>
        </ol>
        <div class="gra-text-center">
            <a href="<?php echo do_shortcode('[wpcode id="166"]') ?>" class="gra-btn-link yellow gra-uppercase">
                <?php echo $bloco_4['botao'] ?>
                <span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-tright-dk.svg" alt="">
                </span>
            </a>
        </div>
    </div>
</section>

<div class="gra-container">
    <?php
        $bloco_5 = get_field('bloco_5', $page_id);
    ?>
    <section class="gra-section-5">
        <p class="gra-section-5__left-text">
            <?php echo $bloco_5['titulo'] ?>
        </p>
        <p class="gra-section-5__right-text">
            <span class="gra-section-5__anatel"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/casa-empresa/logo.svg" alt=""></span>
            <?php echo $bloco_5['texto'] ?>
        </p>
    </section>
</div>

<section class="gra-section-6">
    <?php
        $bloco_6 = get_field('bloco_6', $page_id);
    ?>
    <div class="gra-container">
        <?php echo $bloco_6['titulo'] ?>
        <div class="gra-section-6__content">
            <div class="gra-section-6__content-left">
                <span class="gra-section-6__content-icon yellow">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/casa-empresa/building.svg" alt="">
                </span>
                <p class="gra-section-6__content-title">
                    <?php echo $bloco_6['bloco_esquerda']['titulo'] ?>
                </p>
                <p class="gra-section-6__content-subtitle">
                    <?php echo $bloco_6['bloco_esquerda']['texto'] ?>
                </p>
                <a href="<?php echo do_shortcode('[wpcode id="162"]') ?>" class="gra-btn-link gra-uppercase yellow">
                    <?php echo $bloco_6['bloco_esquerda']['botao'] ?>
                    <span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-tright-dk.svg" alt="">
                    </span>
                </a>
            </div>
            <div class="gra-section-6__content-right">
                <span class="gra-section-6__content-icon green">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/casa-empresa/like.svg" alt="">
                </span>
                <p class="gra-section-6__content-title">
                    <?php echo $bloco_6['bloco_direita']['titulo'] ?>
                </p>
                <p class="gra-section-6__content-subtitle">
                    <?php echo $bloco_6['bloco_direita']['texto'] ?>
                </p>
                <a href="<?php echo do_shortcode('[wpcode id="160"]') ?>" class="gra-btn-link green gra-uppercase">
                    <?php echo $bloco_6['bloco_direita']['botao'] ?>
                    <span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-right.svg" alt="">
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>
<?php get_template_part('footer')?>