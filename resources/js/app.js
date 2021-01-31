require("./bootstrap");

require("alpinejs");

$(document).ready(function () {
    $(".hidden-1").removeClass("hidden-1").addClass("fade-in");
    setTimeout(() => {
        $(".hidden-2").removeClass("hidden-2").addClass("fade-in");
        setTimeout(() => {
            $(".hidden-3").removeClass("hidden-3").addClass("fade-in");
            $("#hero-wrapper").addClass("hasBorder");
            setTimeout(() => {
                $("#action").removeClass("hidden-4").addClass("fade-in");
            }, 300);
            // setTimeout(() => {
            //     $(".hidden-4").removeClass("hidden-4").addClass("fade-in");
            // }, 500);
        }, 1000);
    }, 1000);
});
