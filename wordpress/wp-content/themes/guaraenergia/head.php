<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $args['title']; ?> | Guará Energia</title>
    <style>
        @font-face { 
            font-family: Graphik;
            src: url('<?php echo get_template_directory_uri(); ?>/assets/fonts/Graphik-Regular.ttf'); 
            font-weight: 400;
            font-display: swap;
        } 
        @font-face { 
            font-family: Graphik;
            src: url('<?php echo get_template_directory_uri(); ?>/assets/fonts/Graphik-Medium.ttf'); 
            font-weight: 500;
            font-display: swap;
        } 
        @font-face { 
            font-family: Graphik;
            src: url('<?php echo get_template_directory_uri(); ?>/assets/fonts/Graphik-Semibold.ttf'); 
            font-weight: 600;
            font-display: swap;
        } 
        @font-face { 
            font-family: Graphik;
            src: url('<?php echo get_template_directory_uri(); ?>/assets/fonts/Graphik-Bold.ttf'); 
            font-weight: 700;
            font-display: swap;
        } 

        body {
            font-family: "Graphik", sans-serif;
        }
    </style>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/core.css?v1">
    <?php if ($args['css'] == 'seja-um-parceiro'): ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <?php endif; ?>
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/favicon.svg">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/<?php echo $args['css']; ?>.css?v1" rel="stylesheet">
    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MNTX28WZ');
    </script>
    <!-- End Google Tag Manager -->
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-RB8551CLJ4');
    </script>
</head>
<body>