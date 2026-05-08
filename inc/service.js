const section = document.getElementById("services");

let isVisible = false;

// observe when section enters/leaves viewport
const observer = new IntersectionObserver((entries) => {
    isVisible = entries[0].isIntersecting;
}, {
    threshold: 0.1 // triggers when 10% is visible
});

observer.observe(section);

// scroll logic
window.addEventListener("scroll", function () {
    if (!isVisible) return; // do nothing if not visible

    const scrollY = window.scrollY;

    const progress = (scrollY / 1000) % 1;

    const mower = document.getElementById("lawn-mower");
    const mowerWidth = mower.offsetWidth;

    const movement = progress * window.innerWidth;
    mower.style.left = movement + "px";

    const front = movement + mowerWidth;
    const percent = (front / window.innerWidth) * 100;

    document.getElementById("mowed-lawn").style.width = percent + "%";
});

const images = [
    "toughroots.co.nz/img/service_1.jpg",
    "toughroots.co.nz/img/service_2.jpg",
    "toughroots.co.nz/img/service_3.jpg",
    "toughroots.co.nz/img/service_4.jpg",
    "toughroots.co.nz/img/service_5.jpg"
];

let index = 0;
const carousel = document.getElementById("services-carrousel-image");

// set initial image
carousel.style.backgroundImage = `url(${images[index]})`;

// change image every 3 seconds
setInterval(() => {
    index = (index + 1) % images.length;
    carousel.style.backgroundImage = `url(${images[index]})`;
}, 3000);
