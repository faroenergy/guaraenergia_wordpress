<header class="gra-header">
    <div class="gra-container gra-container--flex">
        <a href="" class="gra-header__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="">
        </a>
        <button class="gra-header__menu-btn jsHeaderMenuBtn">
            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" fill="currentColor"><path d="M 3 8 A 2.0002 2.0002 0 1 0 3 12 L 47 12 A 2.0002 2.0002 0 1 0 47 8 L 3 8 z M 3 23 A 2.0002 2.0002 0 1 0 3 27 L 47 27 A 2.0002 2.0002 0 1 0 47 23 L 3 23 z M 3 38 A 2.0002 2.0002 0 1 0 3 42 L 47 42 A 2.0002 2.0002 0 1 0 47 38 L 3 38 z"/></svg>
        </button>
        <nav class="gra-header__nav">
            <div class="gra-header__dropdown jsDropdown">
                <button class="gra-header__dropdown-btn gra-header__link">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/building.svg" alt="">
                    Nossas Soluções
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/chevron-down.svg" alt="">
                </button>
                <ul class="gra-header__dropdown-list">
                    <li class="gra-header__dropdown-item">
                        <a class="gra-header__dropdown-link" href="/para-casa-e-empresa">
                            Para casa ou negócio
                        </a>
                    </li>
                    <li class="gra-header__dropdown-item">
                        <a class="gra-header__dropdown-link" href="/guara-colab">
                            Guará Colab
                        </a>
                    </li>
                </ul>
            </div>
            <div class="gra-separator gra-desktop-hide"></div>
            <a class="gra-header__link" href="/parceiro">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/flash.svg" alt="">
                Seja um parceiro
            </a>
            <div class="gra-separator gra-desktop-hide"></div>
            <a class="gra-header__btn-link gra-btn-link white bd-green-mobile" href="#">
                Quero economizar
                <span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-right.svg" alt="">
                </span>
            </a>
            <a class="gra-header__btn-link gra-btn-link yellow bd-yellow-mobile" href="#">
                Área do cliente
                <span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/profile.svg" alt="">
                </span>
            </a>
        </nav>
    </div>
</header>