
$(document).ready(function () {

    $(document).on("click", "[data-big-slider-hand]", function () {
        var obj = $(this);
        var parent = obj.parents("[data-big-slider-container]");
        var dir = obj.attr("data-big-slider-hand");
        var current = +parent.attr("data-big-slider-active");
        var items = parent.find("[data-big-slider-item]");
        var next;
        if(items.length > 4){
            if(dir === "right"){
                next = (current + 1 <= items.length)? current + 1 : 1;
            }else{
                next = (current - 1 >= 1)? current - 1 : items.length;
            }
            parent.attr("data-big-slider-active", next);
            var change = 0;
            var end = (next + 4 <= items.length)? next + 4 : items.length + 1;
            var prev;
            var show = [];
            for(var i = next; i < end; i++){
                change += 1;
                if(dir === "right") prev = (i - 1 >= 1)? i - 1 : items.length;
                else prev = (i + 1 <= items.length)? i + 1 : 1;
                show.push(i);
            }
            for(i = 1; i <= 4 - change; i++){
                if(dir === "right") prev = (i - 1 >= 1)? i - 1 : items.length;
                else prev = (i + 1 <= items.length)? i + 1 : 1;

                show.push(i);
            }
            var item = 1;

            $(".bigSliderElement").removeClass("bigSliderElementFadeOut_right").removeClass("bigSliderElementFadeOut_left");

            if(dir === "right") $(".bigSliderElement_1").addClass("bigSliderElementFadeOut_right");
            else {
                if($("html").width() > 800) $(".bigSliderElement_4").addClass("bigSliderElementFadeOut_left");
                else $(".bigSliderElement_3").addClass("bigSliderElementFadeOut_left");
            }

            $(".bigSliderElement").removeClass("bigSliderElement_1").removeClass("bigSliderElement_2").removeClass("bigSliderElement_3").removeClass("bigSliderElement_4").removeClass("bigSliderElementDir_left").removeClass("bigSliderElementDir_right");

            for(i = 0; i < show.length; i++){
                /*if(dir === "right") prev = (show[i] - 1 >= 1)? show[i] - 1 : items.length;
                else prev = (show[i] + 1 <= items.length)? show[i] + 1 : 1;*/
                $(items[show[i] - 1]).addClass("bigSliderElement_"+item).addClass("bigSliderElementDir_" + dir);
                item++;
            }
            //$(".bigSliderElementFadeOut_right").removeClass("bigSliderElementFadeOut_right");
            //$(".bigSliderElementFadeOut_left").removeClass("bigSliderElementFadeOut_left");
        }
    });

    initSmallSlider();
    $(window).resize(initSmallSlider);

    $(document).on("click", "[data-small-slider-handler-index]", function () {
        var obj = $(this);
        var sliderCover = obj.parents("[data-small-slider-cover]");
        var currentSelectedSlide = Number($("[data-small-slider-handler-active=true]").attr("data-small-slider-handler-index"));
        var selectedSliderSlide = Number(obj.attr("data-small-slider-handler-index"));
        if(currentSelectedSlide !== selectedSliderSlide){
            var slideDir = (currentSelectedSlide < selectedSliderSlide)? "right" : "left";
            var selectedSliderItems = getShowSliderElements(selectedSliderSlide);

            $("[data-small-slider-handler-index]").attr("data-small-slider-handler-active", "false");
            $($("[data-small-slider-handler-index]")[selectedSliderSlide - 1]).attr("data-small-slider-handler-active", "true");
            sliderCover.attr("data-small-slider-active", selectedSliderItems.from);

            var activeElement = 1;
            $("[data-small-slider-element]").removeClass("partnersSliderItem_1").removeClass("partnersSliderItem_2").removeClass("partnersSliderItem_3").removeClass("partnersSliderItem_4").removeClass("partnersSliderItem_5").removeClass("partnersSliderSlide_left").removeClass("partnersSliderSlide_right").each(function (a, sliderElement) {
                if(a + 1 >= selectedSliderItems.from && a + 1 <= selectedSliderItems.to){
                    $(sliderElement).addClass("partnersSliderItem_"+activeElement).addClass("partnersSliderSlide_"+slideDir);
                    activeElement++;
                }
            });
        }
    });

});

function initSmallSlider() {
    var elementsOnSlide = ($("html").width() > 820)? 5 : 3;
    var elements = $("[data-small-slider-element]");
    var slides = Math.ceil(elements.length/elementsOnSlide);
    var activeElement = Number($("[data-small-slider-active]").attr("data-small-slider-active"));
    var activeSlide = getSliderActiveSlide(activeElement);

    var html = "";
    var activeUse = false;
    for(var i = 1; i <= slides; i++){
        if(i === activeSlide) activeUse = true;
        html += "<span data-small-slider-handler-index='"+i+"' data-small-slider-handler-active='"+((i === activeSlide || (i === slides && activeUse === false))? "true" : "false")+"'></span>";
    }
    $("[data-small-slider-points-cover]").html(html);
}

/*  возвращает активный слайд по номеру активного элемента  */
function getSliderActiveSlide(elementIndexActive) {
    var elementsOnSlide = ($("html").width() > 820)? 5 : 3;
    var elements = $("[data-small-slider-element]");
    var slides = Math.ceil(elements.length/elementsOnSlide);
    var activeSlideReturn = 0;
    var slideCurrentIndex = 1;
    for(var i = 0; i < elements.length; i += elementsOnSlide){
        if(i+1 <= elementIndexActive && i + elementsOnSlide >= elementIndexActive){
            activeSlideReturn = slideCurrentIndex;
            break;
        }
        slideCurrentIndex++;
    }
    return activeSlideReturn;
}

/*  возвращает элементы которые нужно показать по номеру слайда  */
function getShowSliderElements(selectedSliderSlide) {
    var elementsOnSlide = ($("html").width() > 820)? 5 : 3;
    var elements = $("[data-small-slider-element]");
    var activeSlideReturn = 0;
    var slideCurrentIndex = 1;
    var sliderShowElements;
    for(var i = 0; i < elements.length; i += elementsOnSlide){
        if(slideCurrentIndex === selectedSliderSlide){
            sliderShowElements = {from:i+1, to:i + elementsOnSlide};
            break;
        }
        slideCurrentIndex++;
    }
    return sliderShowElements;
}