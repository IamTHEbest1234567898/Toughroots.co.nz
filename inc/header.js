document.getElementById("menu").addEventListener("click", function() {
    document.getElementById("menu").style.display = "none";
    document.getElementById("close").style.display = "block";
    document.getElementById("header-navigation-inner-mobile").style.display = "block";
});

document.getElementById("close").addEventListener("click", function() {
    document.getElementById("close").style.display = "none";
    document.getElementById("menu").style.display = "block";
    document.getElementById("header-navigation-inner-mobile").style.display = "none";
});
