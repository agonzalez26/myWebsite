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

$(function () {
    $(".slide-testimonials").click(function () {
        $("html, body").animate({
            scrollTop: $("#testimonials").offset().top - 50 }, "1000");
        return false
    })
});
$(function () {
    $(".slide-locations").click(function () {
        $("html, body").animate({
            scrollTop: $("#locations").offset().top - 50 }, "1000");
        return false
    })
});

var $animation_elements = $('.animation-element');
var $window = $(window);

function check_if_in_view() {
var window_height = $window.height();
var window_top_position = $window.scrollTop();
var window_bottom_position = (window_top_position + window_height);

$.each($animation_elements, function() {
var $element = $(this);
var element_height = $element.outerHeight();
var element_top_position = $element.offset().top;
var element_bottom_position = (element_top_position + element_height);

//check to see if this current container is within viewport
if ((element_bottom_position >= window_top_position) &&
(element_top_position <= window_bottom_position)) {
$element.addClass('in-view');
} else {
$element.removeClass('in-view');
}
});
}

$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');
