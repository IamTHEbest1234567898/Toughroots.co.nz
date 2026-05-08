<?php
http_response_code(404);
?>
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

        <title> Tough Roots | 404 Not Found </title>

        <link rel="stylesheet" href="toughroots.co.nz/css/master.css">
        <link rel="icon" type="image/png" href="toughroots.co.nz/img/favicon.ico">
    </head>
    <body>
        <!-- Header -->
        <?php "toughroots.co.nz/inc/header.php"; ?>

        <!-- Body -->
        <section id="error">
            <div id="error-inner">
                <h1>404</h1>
                <h2>Oops... Page not found.</h2>
                <br>
                <h2>Even tough roots don’t lead to dead ends - we’ll get you back on track.</h2>
                <br>
                <a href="toughroots.co.nz/">
                    <h2>Home</h2>
                </a>
            </div>
        </section>

        <!-- Footer -->
        <?php include "toughroots.co.nz/inc/footer.php"; ?>
    </body>
</html>
