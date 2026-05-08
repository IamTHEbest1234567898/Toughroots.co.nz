<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="
            Tough Roots Gardening & Landscaping provides professional garden
            maintenance, lawn mowing, hedge trimming, storm clean-ups, weed
            spraying, and drainage clearing in Wellington, New Zealand.
            Reliable, fast, and affordable outdoor solutions." />
        <meta name="keywords" content="
            gardening services Wellington, landscaping Wellington New Zealand,
            lawn mowing services, hedge cutting, tree trimming, weed control,
            property maintenance, storm damage cleanup, garden cleanup,
            drain and gutter clearing, overgrown section clearing,
            residential landscaping, commercial landscaping NZ,
            affordable gardeners Wellington, Tough Roots landscaping" />
        <meta name="author" content="<?= htmlspecialchars(include('/snipt.co.nz/api/v1/author/author_v1.php')); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> Tough Roots | Home </title>

        <link rel="stylesheet" href="toughroots.co.nz/css/master.css">
        <link rel="icon" type="image/png" href="toughroots.co.nz/img/favicon.ico">
    </head>
    <body>
        <!-- Header -->
        <?php include "toughroots.co.nz/inc/header.php"; ?>

        <!-- Body -->
        <section id="hero">
            <div id="hero-images">
                <div id="hero-image-1" class="hero-images">
                    <img src="toughroots.co.nz/img/hero_1.jpg">
                </div>
                <div id="hero-image-2" class="hero-images">
                    <img src="toughroots.co.nz/img/hero_2.jpg">
                </div>
                <div id="hero-image-3" class="hero-images">
                    <img src="toughroots.co.nz/img/hero_3.jpg">
                </div>
                <div id="hero-image-4" class="hero-images">
                    <img src="toughroots.co.nz/img/hero_4.jpg">
                </div>
            </div>
            <div id="hero-container">
                <div id="hero-container-inner">
                    <div id="hero-text">
                        <h1>Tough Roots Gardening & Landscaping</h1>
                        <br>
                        <h2>Professional Gardening & Landscaping in Wellington</h2>
                    </div>
                </div>
            </div>
        </section>

        <section id="services">
            <div class="progress">
            <div id="mowed-lawn" class="progress-fill"></div>
            </div>
            <img src="toughroots.co.nz/img/lawn_mower.png" id="lawn-mower">
            <div id="services-grass-top"></div>
            <div id="services-container">
                <div id="services-inner">
                    <h2>From overgrown sections to regular maintenance, we handle it all.</h2>
                    <div id="services-grid">
                        <div id="services-carrousel" class="services-grid-element">
                            <div id="services-carrousel-image"></div>
                        </div>
                        <div class="services-grid-element">
                            <ul>
                                <li>
                                    <h4>Lawn mowing</h4>
                                </li>
                                <li>
                                    <h4>Hedge trimming</h4>
                                </li>
                                <li>
                                    <h4>Storm clean-ups</h4>
                                </li>
                                <li>
                                    <h4>Section clearing</h4>
                                </li>
                                <li>
                                    <h4>Weed spraying</h4>
                                </li>
                                <li>
                                    <h4>Drain & gutter clearing</h4>
                                </li>
                            </ul>

                            <span id="services-buttons">
                                <button class="button-28" role="button" type="button" name="button" onclick="window.location.href='toughroots.co.nz/#contact'">
                                    Enquire Now
                                </button>

                                <button class="button-28" role="button" type="button" name="button" onclick="window.location.href='toughroots.co.nz/services/'">
                                    Services
                                </button>
                            </span>
                        </div>
                    </div>
                    <h2>Fast, reliable service that gets your property back under control.</h2>
                </div>
            </div>
            <script type="text/javascript" src="toughroots.co.nz/inc/service.js">

            </script>
        </section>

        <section id="reviews">
            <div id="reviews-container">
                <h1>Reviews</h1>
                <div id="reviews-grid">
                    <div class="reviews-grid-element review-card">
                        <span class="review-header">
                            <img src="toughroots.co.nz/img/review_1.png" alt="">
                            <h3 class="review-name">Sunny Loomba</h3>
                        </span>
                        <span class="review-stars">
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                        </span>
                        <p class="review-description">David is a hard working,
                        friendly and passionate guy who always takes initiative
                        to help others. He has keen eye on detail. Team has a
                        good experience of landscaping and gardening.
                        <br><br>
                        I wish him good luck for his current and future
                        endeavours.</p>
                    </div>

                    <div id="reviews-inner-grid" class="reviews-grid-element">
                        <div class="reviews-grid-element review-card">
                            <span class="review-header">
                                <img src="toughroots.co.nz/img/review_2.png" alt="">
                                <h3 class="review-name">Sarah BCManagement</h3>
                            </span>
                            <span class="review-stars">
                                <span class="material-symbols-outlined">star</span>
                                <span class="material-symbols-outlined">star</span>
                                <span class="material-symbols-outlined">star</span>
                                <span class="material-symbols-outlined">star</span>
                                <span class="material-symbols-outlined">star</span>
                            </span>
                            <p class="review-description">Tough Roots did a
                            great job on our garden. Trimmed our hedge and
                            planted some flaxes- we are very pleased.</p>
                        </div>

                        <div class="reviews-grid-element review-card">
                            <span class="review-header">
                                <img src="toughroots.co.nz/img/review_3.png" alt="">
                                <h3 class="review-name">Laura EGC</h3>
                            </span>
                            <span class="review-stars">
                                <span class="material-symbols-outlined">star</span>
                                <span class="material-symbols-outlined">star</span>
                                <span class="material-symbols-outlined">star</span>
                                <span class="material-symbols-outlined">star</span>
                                <span class="material-symbols-outlined">star</span>
                            </span>
                            <p class="review-description">David is a gem,
                            cleared my property in record time, very
                            professional and doesn't muck around. Will be
                            getting David back again in future.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact">
            <div id="contact-container">
                <h1>Get In Touch</h1>
                <div id="contact-grid">
                    <div class="contact-grid-element contact-form">
                        <p>
                            <br>
                            Ready to get your property sorted?
                            <br><br>
                            Call us on
                            <a href="tel:+642108354313">
                                +64 021 083 54313
                            </a>
                            <br>
                            Email
                            <a href="mailto:toughroots1@gmail.com">
                                toughroots1@gmail.com
                            </a>
                            <br><br>
                            Or fill out the contact form below and we’ll get
                            back to you as soon as possible.
                        </p>

                        <iframe src="toughroots.co.nz/inc/contact-form.php"></iframe>
                    </div>
                    <div class="contact-grid-element">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d140468.63512153988!2d174.70932512224107!3d-41.24656080449648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xad35e2af6b2d7ba7%3A0x9c9d2abdd9f2f1b3!2sTough%20Roots%20Gardening%20and%20landscaping!5e1!3m2!1sen!2snz!4v1777018057114!5m2!1sen!2snz"
                            width="100%"
                            height="100%"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

            </div>
        </section>

        <!-- Footer -->
        <?php include "toughroots.co.nz/inc/footer.php"; ?>
    </body>
</html>
