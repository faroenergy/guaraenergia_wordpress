<footer class="gra-footer">
    <div class="gra-container">
        <div class="gra-footer__left">
            <div>
                <div class="gra-footer__title">Menu</div>
                <?php echo do_shortcode('[wpcode id="147"]'); ?>
            </div>
            <div>
                <div class="gra-footer__title">Guará Energia</div>
                <?php echo do_shortcode('[wpcode id="148"]'); ?>
            </div>
            <div>
                <div class="gra-footer__title">Siga-nos</div>
                <nav class="gra-footer__socials">
                    <?php echo do_shortcode('[wpcode id="149"]'); ?>
                    <?php echo do_shortcode('[wpcode id="150"]'); ?>
                    <?php echo do_shortcode('[wpcode id="153"]'); ?>
                    <?php echo do_shortcode('[wpcode id="154"]'); ?>
                </nav>
            </div>
            <div>
                <div class="gra-footer__title">Contato</div>
                <?php echo do_shortcode('[wpcode id="155"]') ?>
            </div>
        </div>
        <div class="gra-footer__right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="">
            <p>
                Copyright © <span class="jsCurrentYear"></span> Guará Energia<br>
                Todos os direitos reservados
            </p>
        </div>
    </div>
</footer>

<?php echo do_shortcode('[wpcode id="497"]'); ?>

<?php if ($args['name']): ?>
    <?php if ($args['name'] == 'seja-um-parceiro'): ?>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/tiny-slider.js"></script>

        <script>
            if (document.querySelector('.jsSliderDepoimentos')) {
                var slider = tns({
                    container: '.jsSliderDepoimentos',
                    items: 1,
                    slideBy: 1,
                    autoplay: false,
                    loop: false,
                    nav: false,
                    gutter: 16,
                    controlsContainer: '.jsSliderDepoimentosBtns',
                    mouseDrag: true,
                    responsive: {
                        595: {
                            items: 2
                        },
                        788: {
                            items: 3,
                            gutter: 32
                        }
                    }
                });
            }
        </script>
    <?php endif; ?>
    <?php if ($args['name'] == 'seja-um-parceiro' or $args['name'] == 'guara-colab'): ?>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vanilla-masker.min.js"></script>
        <script>
            function inputHandler(masks, max, event) {
                var c = event.target;
                var v = c.value.replace(/\D/g, '');
                var m = c.value.length > max ? 1 : 0;
                VMasker(c).unMask();
                VMasker(c).maskPattern(masks[m]);
                c.value = VMasker.toPattern(v, masks[m]);
            }

            var telMask = ['(99) 9999-99999', '(99) 9 9999-9999'];
            var tel = document.querySelector('.mask-telephone');
            VMasker(tel).maskPattern(telMask[0]);
            tel.addEventListener('input', inputHandler.bind(undefined, telMask, 14), false);
        </script>
    <?php endif; ?>
<?php endif; ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>

</body>
</html>