<!-- Template Name: Quem Somos -->

<?php get_template_part('head', null, 
 array( 
    'title' => "Quem Somos",
    'css' => 'quem-somos'
))?>
<?php get_template_part('header')?>
<section class="gra-section-1">
    <div class="gra-container">
        <h1 class="gra-section-1__title">
            Para nós, energia limpa é sinônimo de transparência. <b>Para você, significa menor custo.</b>
        </h1>
        <p class="gra-section-1__subtitle">
            Guará Energia, nossa energia ilumina o futuro
        </p>
        <a href="" class="gra-btn-link yellow gra-uppercase">
            Quero energia limpa
            <span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-tright-dk.svg" alt="">
            </span>
        </a>
    </div>
</section>
<section class="gra-section-5">
    <div class="gra-container">
        <div class="gra-section-5__content">
            <p class="gra-section-5__content-title">Quem <b>somos</b></p>
            <p class="gra-section-5__content-list">
                <b>Nós somos a Guará Energia, empresa <br>comprometida em tornar</b> o acesso à energia limpa cada vez mais democrático para o maior número de pessoas e empresas, mas com um custo bem menor.
            </p>
        </div>
        <div class="gra-section-5__map"></div>
    </div>
</section>
<section class="gra-section-4">
    <div class="gra-container gra-section-4__content">
        <div class="gra-section-4__content-block">
            <div class="gra-section-4__content-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/quem-somos/location-tick.svg" alt="">
            </div>
            <p class="gra-section-4__content-text">
                Onde <b>atuamos <br>no Brasil</b>
            </p>
            <ul>
                <li>Maranhão</li>
                <li>Mato Grosso do Sul</li>
                <li>Paraná</li>
            </ul>
        </div>
        <div class="gra-section-4__content-block">
            <div class="gra-section-4__content-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/quem-somos/money-recive.svg" alt="">
            </div>
            <p class="gra-section-4__content-text">
                <b>7 mil endereços</b> pagando menos energia
            </p>
            <ul>
                <li>Domicílios</li>
                <li>Empresas</li>
            </ul>
        </div>
        <div class="gra-section-4__content-block">
            <div class="gra-section-4__content-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/quem-somos/cloud-cross.svg" alt="">
            </div>
            <p class="gra-section-4__content-text">
                <b>Emissão de<br></b> gases
            </p>
            <p>
                Evitamos XX toneladas de CO2 na atmosfera
            </p>
        </div>
        <div class="gra-section-4__content-block">
            <div class="gra-section-4__content-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/quem-somos/tree.svg" alt="">
            </div>
            <p class="gra-section-4__content-text">
                Reflorestamento
            </p>
            <p>
                Já plantamos XX árvores em XX anos de atuação
            </p>
        </div>
    </div>
</section>
<section class="gra-section-6">
    <div class="gra-container">
        <div class="gra-section-6__top">
            <p class="gra-section-6__title">
                Na Guará Energia <b>você vai encontrar:</b>
            </p>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/quem-somos/banner1.png" alt="">
        </div>
        <div class="gra-section-6__bottom">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/quem-somos/banner2.png" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/quem-somos/banner3.png" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/quem-somos/banner4.png" alt="">
        </div>
    </div>
</section>
<?php get_template_part('footer')?>