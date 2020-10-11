// on document ready
$(document).ready(function() {
    // scroll down smooth buttom
    $(".go_down_btn").click(function() {
        $("html, body").animate({ scrollTop: $("#about-us-section").offset().top - 111 },
            "slow"
        );
    });
    // change navbar menu icon on nave open/show
    $("#menu-btn").click(function() {
        let is_open = $(this).attr("aria-expanded");
        if (is_open == "true") {
            $("#menu-icon").addClass("menu-bar");
            $("#menu-icon").removeClass("menu-close");
        } else {
            $("#menu-icon").addClass("menu-close");
            $("#menu-icon").removeClass("menu-bar");
        }
    });
});

// on scroll change navbar color
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 30) {
        $("#navbar").addClass("navbar-color");
    } else {
        $("#navbar").removeClass("navbar-color");
    }
});

// on full page load functons
$(document).ready(function() {
    // add typewriter css classes
    $("#typewriter").addClass("heading-bottom typewriter heading-font");
    // hide the loader gif
    $(".loader").fadeOut();
});

// add active class dynamically
$(document).ready(function() {
    $("[href]").each(function() {
        if (this.href == window.location.href) {
            $(this).addClass("active");
        }
    });
});