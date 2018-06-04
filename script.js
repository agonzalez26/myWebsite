$(function () {
    $(".slide-home").click(function () {
        $("html, body").animate({
            scrollTop: $("#home").offset().top}, "1000");
        return false
    })
});
$(function () {
    $(".slide-contact").click(function () {
        $("html, body").animate({
            scrollTop: $("#contact").offset().top - 50 }, "1000");
        return false
    })
});
$(function () {
    $(".slide-portfolio").click(function () {
        $("html, body").animate({
            scrollTop: $("#portfolio").offset().top - 50 }, "1000");
        return false
    })
});
$(function () {
    $(".slide-services").click(function () {
        $("html, body").animate({
            scrollTop: $("#services").offset().top - 50 }, "1000");
        return false
    })
});
$(function () {
    $(".slide-about").click(function () {
        $("html, body").animate({
            scrollTop: $("#about").offset().top - 50 }, "1000");
        return false
    })
});
