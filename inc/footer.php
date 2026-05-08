<?php
ini_set('display_errors', 'Off');
ini_set('log_errors', 'On');
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <link rel="stylesheet" href="toughroots.co.nz/css/footer.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <footer>
        <div id="footer-grass-top"></div>
        <div id="footer-main">
            <div id="footer-main-container">
                <div id="footer-main-grid">

                    <div class="footer-grid-element">
                        <div id="footer-logo">
                            <a href="toughroots.co.nz/">
                                <img src="toughroots.co.nz/img/logo_transparent.png" alt="Tough Roots">
                            </a>
                        </div>

                        <br>
                        <p>Get your property back under control - contact us today</p>
                        <br>

                        <div id="footer-social-media-container">
                            <a href="https://www.instagram.com/tough_roots_/" target="_blank">
                                <img src="toughroots.co.nz/img/instagram-svgrepo-com.svg" alt="instagram">
                            </a>
                            <a href="https://www.facebook.com/profile.php?id=61565453338245" target="_blank">
                                <img src="toughroots.co.nz/img/facebook-svgrepo-com.svg" alt="facebook">
                            </a>
                        </div>
                    </div>

                    <div id="footer-secondary-grid" class="footer-grid-element">
                        <div id="footer-links" class="footer-grid-element">
                            <h2>Quick Links</h2>
                            <a href="toughroots.co.nz/">
                                <p>Home</p>
                            </a>
                            <a href="toughroots.co.nz/services/">
                                <p>Our Services</p>
                            </a>
                            <a href="toughroots.co.nz/about/">
                                <p>About Us</p>
                            </a>
                            <a href="toughroots.co.nz/#contact">
                                <p>Contact</p>
                            </a>
                        </div>

                        <div id="footer-contact" class="footer-grid-element">
                            <h2>Contact</h2>
                            <div class="footer-contact-element">
                                <span class="material-symbols-outlined">call</span>
                                <a href="tel:+642108354313">
                                    <p>+64 021 083 54313</p>
                                </a>
                            </div>

                            <div class="footer-contact-element">
                                <span class="material-symbols-outlined">mail</span>
                                <a href="mailto:toughroots1@gmail.com">
                                    <p>toughroots1@gmail.com</p>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <hr>
                <span id="footer-bottom-grid">
                    <div id="footer-copyright">
                        <p>© <?php echo date("Y"); ?> Tough Roots. All rights reserved.</p>
                    </div>
                    <span id="snipt">
                        <?php
                            $colour = "white";
                            include('/snipt.co.nz/api/v1/footer/footer_v1.php');
                        ?>
                    </span>
                </span>
            </div>
        </div>
    </footer>
</html>
