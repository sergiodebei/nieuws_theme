<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link www.freshttheme.com
 * @package Fresh Theme
 */

?><!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
<!--         <title>Pernod Ricard Nederland</title> -->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="icon" href="favicon.ico" type="image/x-icon"/> -->
        <link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/img/favicon.png" type="image/png">

        <script type="text/javascript">
            var templateUrl = '<?= get_bloginfo("template_url"); ?>';
        </script>

        <meta name="theme-color" content="#d3d3d3">
        <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet"> -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
          WebFont.load({
            google: {
              families: ['Roboto:300,300i,400,400i,600,600i,700,700i']
            }
          });
        </script>

        <?php wp_head(); ?>

    </head>
    <body <?php body_class(); ?>>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header id="header">
            <div class="container">
                <div class="header_inner">
                    <div class="header_branding" id="">
                        <a href="<?php bloginfo('url'); ?>" class="header_branding_logo"><img src="<?php bloginfo( 'template_url' ); ?>/img/pernod_ricard_nederland.svg" alt="" class="header_branding_logo"></a>
                    </div>
                    <a href="<?php bloginfo('url'); ?>/registreer-voor-onze-nieuwsbrief/" class="header_newsletter">
                        <p class="header_newsletter_text">
                            Registreer hier voor onze <span><b>nieuwsbrief</b></span>
                        </p>
                        <div class="header_newsletter_icon">
                            <!-- <img src="./img/icon_envelope.svg" alt=""> -->
                            <svg version="1.1" id="envelope"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 25 27" width="25" heigth="27"
                                 style="enable-background:new 0 0 25 27;" xml:space="preserve">
                                <g>
                                    <path d="M22,8.4V5c0-1.1-0.9-2-2-2h-4.1l-3.4-3L9.1,3H5C3.9,3,3,3.9,3,5v3.4L0,11v14c0,1.1,0.9,2,2,2h21
                                        c1.1,0,2-0.9,2-2V11L22,8.4z M22,9.7l1.5,1.3L22,12.3V9.7z M12.5,1.3L14.4,3h-3.9L12.5,1.3z M4,5c0-0.6,0.4-1,1-1h15
                                        c0.5,0,1,0.5,1,1v8.1L17.8,16H7.2L4,13.2V5z M16.6,17l-2.2,2H13l-2.4,0l-2.3-2H16.6z M3,9.7v2.7L1.5,11L3,9.7z M1.3,25.7
                                        C1.1,25.5,1,25.3,1,25v-6.5V12l8,7L1.3,25.7z M2.5,26l7-6h6l7,6H2.5z M24,18.5V25c0,0.3-0.1,0.5-0.3,0.7L16,19l8-7V18.5z"/>
                                    <rect x="6" y="10" width="13" height="1"/>
                                    <rect x="6" y="13" width="13" height="1"/>
                                    <rect x="6" y="7" width="13" height="1"/>
                                </g>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </header>

        <main>

