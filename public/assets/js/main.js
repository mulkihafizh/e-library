AOS.init();

$(document).ready(function () {
    let navbar = document.getElementById("navbar");
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $(".scrollup").fadeIn();
            navbar.classList.add("fixed-top", "py-4");
            navbar.classList.remove("py-8");
            $(".login-nav").removeClass("border-purple-500");
        } else {
            $(".scrollup").fadeOut();
            navbar.classList.remove("fixed-top", "py-4");
            navbar.classList.add("py-8");
            $(".login-nav").addClass("border-purple-500");
        }
    });
    let ficon = document.getElementsByClassName("footer-icon");
    for (let i = 0; i < ficon.length; i++) {
        ficon[i].addEventListener("mouseover", function () {
            console.log();
            const percentage1 = Math.floor(Math.random() * (75 - 25)) + 25;
            const percentage2 = Math.floor(Math.random() * (75 - 25)) + 25;
            const percentage3 = Math.floor(Math.random() * (75 - 25)) + 25;
            const percentage4 = Math.floor(Math.random() * (75 - 25)) + 25;
            var percentage11 = 100 - percentage1;
            var percentage21 = 100 - percentage2;
            var percentage31 = 100 - percentage3;
            var percentage41 = 100 - percentage4;
            var borderRadius = `${percentage1}% ${percentage11}% ${percentage21}% ${percentage2}% / ${percentage3}% ${percentage4}% ${percentage41}% ${percentage31}%`;
            ficon[i].style.borderRadius = borderRadius;
        });
    }
});
