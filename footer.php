<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link www.freshttheme.com
 * @package Fresh Theme
 */

?> 

        </main>

        <div class="controllers together">
            <a class="control_single totop" href="#0"></a>
            <a class="control_single backto" href="javascript:history.go(-1)"></a>
        </div>

        <footer>
            <div id="footer1">
                <div class="container">
                    <div class="row">
                        <div class="col-m-4">
                            <h3>Links</h3>
                            <div class="footer1_details">
                                <?php wp_nav_menu( array('theme_location' => 'links-menu' ));?>
                                <a target="_blank" href="http://pernod-ricard-nederland.com">pernod-ricard-nederland.com</a>
                            </div>
                            
                            <a href="http://drinkwijzer.info" class="button button_footer bt_red" target="_blank"><span>drink</span>wijzer.info</a>
                        </div>
                        <div class="col-m-4">
                            <h3>Contact gegevens</h3>
                            <div class="footer1_details">
                                <p>Pernod Ricard Nederland</p>
                                <p>NDSM-plein 34, 1033 WB AMSTERDAM</p>
                                <p>Tel.: 
                                    <a href="tel:+31 (0) 20-8000888">+31 (0) 20-8000888</a>
                                </p>
                                <p>pernod-ricard-nederland.com</p>
                                <p>E-mail: 
                                    <a href="mailto:infonl@pernod-ricard.com">infonl@pernod-ricard.com</a>
                                </p>
                                <p>KvK nr.: 18047333</p>
                            </div>
                        </div>
                        <div class="col-m-4">
                            <h3>Nieuwsbrief</h3>
                            <div class="footer1_details">
                                <a href="<?php bloginfo('url'); ?>/registreer-voor-onze-nieuwsbrief/" class="footer_newsletter">
                                    <div class="footer_newsletter_icon">
                                        <!-- <img src="./img/icon_envelope.svg" alt=""> -->
                                        <svg version="1.1" id="footer_envelope" 
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
                                    <p class="footer_newsletter_text">
                                        Registreer hier voor onze <b>nieuwsbrief</b>
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="footer2">
                <div class="container">
                    <div class="row">
                        <div class="col-m-4">
                            <div class="footer2_details">
                                Pernod Ricard <?php echo date('Y'); ?>. Alle rechten voorbehouden.
                            </div>
                        </div>
                        <div class="col-m-4">
                            <div class="footer2_details center">
                                <i>Geen 18, geen alcohol</i>
                            </div>
                        </div>
                        <div class="col-m-4">
                            <div class="footer2_details right"><?php wp_nav_menu( array('theme_location' => 'footer-menu' ));?></div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script>
            document.addEventListener("touchstart", function(){}, true);
        </script>

        <!-- Global Site Tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107087059-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments)};
            gtag('js', new Date());

            gtag('config', 'UA-107087059-1');
        </script>

        <?php wp_footer(); ?>
    </body>
</html>
