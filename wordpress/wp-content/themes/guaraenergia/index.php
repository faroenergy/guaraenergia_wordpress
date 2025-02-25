<!-- Template Name: Home -->

<?php get_template_part('head', null, 
 array( 
    'title' => "Home",
    'css' => 'home'
))?>
<?php get_template_part('header')?>

<?php
    $page_id = 2;
?>

<section class="gra-section-1">
    <div class="gra-container">
        <div class="gra-section__left">
            <?php
                $tag = get_field('tag', $page_id);
                $bloco_1 = get_field('bloco_1', $page_id);
            ?>
            <h1 class="gra-tag"><?php echo $tag ?></h1>
            <h2><?php echo $bloco_1['titulo'] ?></h2>
            <h3><?php echo $bloco_1['subtitulo'] ?></h3>
            <a href="<?php echo do_shortcode('[wpcode id="166"]') ?>" class="gra-btn-link green gra-uppercase">
                <?php echo $bloco_1['botao'] ?>
                <span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-right.svg" alt="">
                </span>
            </a>
        </div>
        <div class="gra-section__right">
            <img src="<?php echo $bloco_1['imagem'] ?>" alt="">
        </div>
    </div>
</section>
<div class="gra-container">
    <div class="gra-separator"></div>
</div>


<?php
    $bloco_2 = get_field('bloco_2', $page_id);
?>
<section class="gra-section-2">
    <div class="gra-container">
        <div class="gra-section-2__wrapper" style="background-image:url(<?php echo $bloco_2['imagem'] ?>)">
            <div class="gra-section-2__content">
                <p class="gra-section-2__content-title"><?php echo $bloco_2['titulo']; ?></p>
                <?php echo $bloco_2['subtitulo']; ?>
                <a href="<?php echo do_shortcode('[wpcode id="166"]') ?>" class="gra-btn-link green gra-uppercase">
                    <?php echo $bloco_2['botao']; ?>
                    <span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-right.svg" alt="">
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="gra-section-3">
    <div class="gra-section-3__bg">
        <div class="gra-container">

            <?php
                $bloco_3 = get_field('bloco_3', $page_id);
            ?>

            <div class="gra-section-3__title">
                <?php echo $bloco_3['titulo']; ?>
            </div>
            <div class="gra-section-3__content">
                <div class="gra-section-3__content-block white">
                    <div class="gra-section-3__content-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/flag-2.svg" alt="">
                    </div>
                    <?php echo $bloco_3['bloco_esquerda']['titulo']; ?>
                    <p class="gra-section-3__content-text"><?php echo $bloco_3['bloco_esquerda']['texto']; ?></p>
                </div>
                <div class="gra-section-3__content-block green">
                    <div class="gra-section-3__content-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/eye.svg" alt="">
                    </div>
                    <?php echo $bloco_3['bloco_direita']['titulo']; ?>
                    <p class="gra-section-3__content-text"><?php echo $bloco_3['bloco_direita']['texto']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="gra-section-4">

    <?php
        $bloco_4 = get_field('bloco_4', $page_id);
    ?>
    
    <div class="gra-container gra-section-4__content">
        <div class="gra-section-4__content-block">
            <div class="gra-section-4__content-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/cloud-cross.svg" alt="">
            </div>
            <?php echo $bloco_4['item_1']['texto'] ?>
        </div>
        <div class="gra-section-4__content-block">
            <div class="gra-section-4__content-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/money-recive.svg" alt="">
            </div>
            <?php echo $bloco_4['item_2']['texto'] ?>
        </div>
        <div class="gra-section-4__content-block">
            <div class="gra-section-4__content-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/tree.svg" alt="">
            </div>
            <?php echo $bloco_4['item_3']['texto'] ?>
        </div>
    </div>
</section>

<section class="gra-section-5">
    <?php
        $bloco_5 = get_field('bloco_5', $page_id);
    ?>

    <div class="gra-container">
        <div class="gra-section-5__content">
            <p class="gra-section-5__content-title"><?php echo $bloco_5['titulo'] ?></p>
            <?php echo $bloco_5['texto'] ?>
        </div>
        <div class="gra-section-5__map" style="background-image:url(<?php echo $bloco_5['mapa'] ?>)"></div>
    </div>
</section>

<section class="gra-section-6">
    <?php
        $bloco_6 = get_field('bloco_6', $page_id);
    ?>
    <div class="gra-container">
        <div class="gra-section-6__content">
            <?php echo $bloco_6['titulo'] ?>
            <div class="gra-section-6__content-imgs">
                <div class="gra-section-6__content-img">
                    <img src="<?php echo $bloco_6['bloco_1']['imagem'] ?>" alt="">
                    <?php echo $bloco_6['bloco_1']['texto'] ?>
                </div>
                <div class="gra-section-6__content-img">
                    <img src="<?php echo $bloco_6['bloco_2']['imagem'] ?>" alt="">
                    <?php echo $bloco_6['bloco_2']['texto'] ?>
                </div>
                <div class="gra-section-6__content-img">
                    <img src="<?php echo $bloco_6['bloco_3']['imagem'] ?>" alt="">
                    <?php echo $bloco_6['bloco_3']['texto'] ?>
                </div>
                <div class="gra-section-6__content-img">
                    <img src="<?php echo $bloco_6['bloco_4']['imagem'] ?>" alt="">
                    <?php echo $bloco_6['bloco_4']['texto'] ?>
                </div>
            </div>
        </div>
        <div style="text-align:center">
            <a href="<?php echo do_shortcode('[wpcode id="157"]') ?>" class="gra-btn-link gra-uppercase yellow icon-green">
                <?php echo $bloco_6['botao'] ?>
                <span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-right.svg" alt="">
                </span>
            </a>
        </div>
    </div>
</section>

<section class="gra-section-7" id="faq">
    <?php
        $bloco_7 = get_field('bloco_7', $page_id);
    ?>
    <div class="gra-container">
        <?php echo $bloco_7['titulo']; ?>

        <div class="gra-separator"></div>
        <?php
            $start = 1; // Starting value for the loop
            $end = 20;   // Final value to reach
            $flag = false;
            $count = 0;
            for ( $i = $start; $i <= $end; $i++ ):
                if ($bloco_7['faq_' . $i]['ativo'] === true):
                    $count++;
                    $blocoFaq = $bloco_7['faq_' . $i];
            ?>
                
            <details class="jsHomeFaq" <?php if($count > 3): ?> style="display:none" <?php endif; ?>>
                <summary><?php echo $blocoFaq['titulo']; ?></summary>
                <?php echo $blocoFaq['texto']; ?>
            </details>

        <?php
            endif;
            endfor;
        ?>

        <?php if ($count > 3): ?>
            <?php $flag = true; ?>
            <div style="text-align:center">
                <button class="gra-btn jsShowMoreHomeFaq">
                    <span class="gra-btn-faq-more jsFaqMoreText">Ver mais perguntas</span>
                    <span class="gra-btn-faq-less jsFaqLessText" style="display:none">Ver menos</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/chevron-down4.svg" />
                </button>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php get_template_part('footer')?>