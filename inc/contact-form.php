<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="toughroots.co.nz/css/master.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    </head>
    <body>
        <span id="success">
            <span class="material-symbols-outlined">
                check
            </span>
            <p>
                Thanks for contacting us! We’ll get back to you as soon as possible. <br>
                Want to submit another?
                <a href="#" onclick="hideSuccess(event)">Click Here</a>
            </p>
        </span>
        <span id="loader_container">
            <span id="loader" class="loader"></span>
        </span>
        <form id="contact-form-id" class="contact-form" action="toughroots.co.nz/inc/send.php" method="post">
            <br>
            <span class="contact-inner-grid contact-grid-top-spacer">
                <div class="input-container">
                    <input type="text" name="name" placeholder="Name*" required class="input-field">
                    <label for="input-field" class="input-label">Name</label>
                    <span class="input-highlight"></span>
                </div>

                <div class="input-container">
                    <input type="tel" name="phone" placeholder="Phone number*" required class="input-field">
                    <label for="input-field" class="input-label">Phone number</label>
                    <span class="input-highlight"></span>
                </div>
            </span>
            <br>
            <span class="contact-inner-grid contact-grid-top-spacer">
                <div class="input-container">
                    <input type="email" name="email" placeholder="Email address*" required class="input-field">
                    <label for="input-field" class="input-label">Email</label>
                    <span class="input-highlight"></span>
                </div>

                <div class="input-container">
                    <input type="text" name="location" placeholder="Address or suburb" class="input-field">
                    <label for="input-field" class="input-label">Location</label>
                    <span class="input-highlight"></span>
                </div>
            </span>
            <br>
            <div class="input-container contact-grid-top-spacer">
                <input type="text" name="service" placeholder="What services do you need?*" required class="input-field">
                <label for="input-field" class="input-label">Services</label>
                <span class="input-highlight"></span>
            </div>
            <br>
            <textarea class="input-field" name="message" placeholder="Tell us about the job...*" required></textarea>
            <br>
            <span class="contact-inner-grid contact-grid-top-spacer">
                <span></span>
                <button class="button-28" role="button" type="submit">Get a Free Quote</button>
            </span>
            <br>
            <h6>Fields marked with an asterisk (*) are required and must be completed before submitting the form.</h6>
        </form>

        <script type="text/javascript" src="toughroots.co.nz/inc/contact.js"></script>
    </body>
</html>
