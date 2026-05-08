document.addEventListener("DOMContentLoaded", function () {

    const form = document.getElementById("contact-form-id");
    const loader = document.getElementById("loader_container");
    const success = document.getElementById("success");

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        // hide form, show loader
        form.style.display = "none";
        loader.style.display = "block";

        const formData = new FormData(form);

        fetch("toughroots.co.nz/inc/send.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.text())
        .then(data => {

            // hide loader
            loader.style.display = "none";

            // show success tick
            success.style.display = "block";

        })
        .catch(error => {

            console.error(error);

            loader.style.display = "none";
            form.style.display = "block";

            alert("Something went wrong. Please try again.");

        });
    });

});

function hideSuccess(event) {
    event.preventDefault(); // stop "#" jump

    const success = document.getElementById("success");
    const form = document.getElementById("contact-form-id");

    success.style.display = "none";
    form.style.display = "block";
}
