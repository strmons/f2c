$(document).ready(function () {


    $(document).on("click", "[data-popup]", function (e) {
        var el = $(e.target);
        var popup = (typeof el.attr("data-popup") !== "undefined")? el : el.parents("[data-popup]");
        if((typeof el.attr("class") !== "undefined" && el.attr("class") === "closePopupIcon") || el.parents(".clickHidePopup").length === 0){
            console.log("she");
            popup.hide();
        }
    });

    $(document).on("click", ".closePopupsContainer", function () {
        $(".exitSystemPopupContainer").fadeOut(200);
    });
    $(document).on("click", ".closePopupsContainer", function () {
        $(".succesfulLogPopupContainer").fadeOut(200);
    });

    $(document).scroll(function () {
        if($(window).scrollTop() > 0){
            $("body").removeClass("pageUnScroll").addClass("pageScroll");
        }else{
            $("body").removeClass("pageScroll").addClass("pageUnScroll");
        }
    });

    $("[data-mask=phone]").inputmask({"mask": "+7(999)999-99-99"});
    $("[data-mask=numbers]").inputmask({regex: "[0-9]*"});

    $(document).on("click", "[data-show-password-handler]", function () {
        var parent = $(this).parents("[data-show-password]");
        if(parent.attr("data-show-password") === "false"){
            parent.find("[data-show-password-input]").attr("type", "text");
            parent.attr("data-show-password", "true");
        }else{
            parent.find("[data-show-password-input]").attr("type", "password");
            parent.attr("data-show-password", "false");
        }
    });

    $(document).on("click", "[data-address-copy]", function (e) {
        copyToClipboardMsg($("#copyAddressOnPage")[0], "msg");
    });

    $(document).on("click", "[data-input-number-hand]", function (e) {
        var obj = $(this);
        var action = obj.attr("data-input-number-hand");
        var currentValue = Number(obj.parents("[data-input-number-cover]").find("[data-input-number-input]").val());
        var newValue = 0;
        if(action === "increase") newValue = currentValue + 1;
        else newValue = (currentValue - 1 >= 0)? (currentValue - 1) : 0;
        obj.parents("[data-input-number-cover]").find("[data-input-number-input]").val(newValue);
    });

    $(document).on("change", "[data-history-toggle-element]", function (e) {
        var obj = $(this);
        obj.parents("[data-history-toggle-active]").attr("data-history-toggle-active", (obj.prop("checked")? "true":"false"));
    });


    $(document).on("change", "[data-input-add-file]", function (e) {
        var obj = $(this);
        if(this.files.length !== 0){
            obj.parents(".fieldWithIcon").find("input[type=text]").val(this.files[0].name);
        }
    });

    $(document).on("click", "[data-deal-condition-arrow]", function (e) {
        var parent = $(this).parents("[data-conditions-show]");
        parent.attr("data-conditions-show", (parent.attr("data-conditions-show") === "true")? "false" : "true");
    });

    $(document).on("change", "[data-add-file-input]", function (e) {
        var obj = this;
        var files = this.files;
        if(files.length !== 0){
            $(obj).parents("[data-attach-cover]").find("[data-text-attach]").text(files[0].name);
        }
    });

    $(document).on("click", "[data-user-page-review-handler]", function (e) {
        var parent = $(this).parents("[data-review-comments-show]");
        parent.attr("data-review-comments-show", (parent.attr("data-review-comments-show") === "true")? "false" : "true");
    });

    $(document).on("click", "[data-system-toggle-handler]", function (e) {
        var obj = $(this);
        var toggleID = obj.attr("data-system-toggle-id");
        var handlerType = obj.attr("data-system-toggle-handler");
        var currentState = obj.attr("data-active-switch-search-deal") === "true";
        if(!currentState){
            var content = $("[data-system-toggle-id="+toggleID+"][data-system-toggle-content="+handlerType+"]");
            if(content.length !== 0){
                $("[data-system-toggle-id="+toggleID+"][data-system-toggle-content]").hide();
                content.show();
                $("[data-system-toggle-id="+toggleID+"][data-system-toggle-handler]").attr("data-active-switch-search-deal", "false");
                obj.attr("data-active-switch-search-deal", "true");


                if(handlerType === "fiat_eth"){
                    if($(".tableForScrollTwo")[0].classList.length === 2){
                        $(document).wrapFoBaron({
                            root: ".tableForScrollTwo",
                            barOnCls: 'baron'
                        });
                    }
                }else{
                    if($(".tableForScrollOne").length !== 0){
                        if($(".tableForScrollOne")[0].classList.length === 3){
                            $(document).wrapFoBaron({
                                root: ".tableForScrollOne",
                                barOnCls: 'baron'
                            });
                        }
                    }
                }

                if($(".tableForScrollDataUser").length !== 0){
                    if($(".tableForScrollDataUser")[0].classList.length === 2){
                        $(document).wrapFoBaron({
                            root: ".tableForScrollDataUser",
                            barOnCls: 'baron'
                        });
                    }
                }

            }
        }
    });

    $(document).on("click", ".mobileTopMenuSlide", function (e) {
        if(typeof $(e.target).attr("class") !== "undefined" && ($(e.target).attr("class") === "mobileTopMenuSlide" || $(e.target).attr("class") === "closeMobileMenuIcon")){
            $(".mobileTopMenuSlide").fadeOut(200);
            $(".mobileTopMenuSlideContent").animate({right:"-100%"},200);
        }
    });

    $(document).on("click", ".mobileBurgerMenuIcon", function () {
        $(".mobileTopMenuSlide").fadeIn(200);
        $(".mobileTopMenuSlideContent").animate({right:0},200);
    });

    $(document).on("click", document, function (e) {
        var obj = $(e.target);
        if(typeof obj.attr("data-menu-item") === "undefined" && obj.parents("[data-menu-item]").length === 0) $("[data-menu-item]").attr("data-active", "false");
    });

    $(document).on("click", "[data-clear-messages-confirm-close]", function (e) {
        $(this).parents("[data-clear-messages-confirm-popup]").hide();
    });

    $(document).on("click", "[data-clear-messages]", function (e) {
        var obj = $(this);
        obj.parents("[data-menu-item]").find("[data-clear-messages-confirm-popup]").show();
    });

    $(document).on("click", "[data-menu-item]", function (e) {
        if(typeof $(e.target).attr("data-menu-item") !== "undefined"){
            $("[data-menu-item][data-active=true]").attr("data-active", "false");
            $(e.target).attr("data-active", $(e.target).attr("data-active") === "true"? "false" : "true");
        }
    });


    var status = $(".status").attr("data-user-status");
    if($(".status").attr("data-user-status") == "online"){
        $(".offline").css({"display":"none"})
    }
    if($(".status").attr("data-user-status") == "offline"){
        $(".online").css({"display":"none"})
    }

    $(document).on("change",".uploadFile", function () {
        console.log($(this));
    });

    $(document).on("change","[data-change-select]", function () {
        var obj = $(this);
        obj.parents("[data-change-select-container]").find("[data-change-select-value]").val($.trim(obj.find("option:selected").text()));
        obj.blur();
    });

    $(document).on("click",".closePopupIcon", function () {
        $(".qrCodPopup").fadeOut(200);
        $("[data-popup-full-screen]").attr("data-popup-full-screen", "false");
    });

    $(document).on("click",".buttonReturnCod", function () {
        $(".qrCodPopup").fadeOut(200);
        $(".pageCoverSystem, .qrCodPopup").attr("data-popup-full-screen", "false");
    });

    $(document).on("click",".codHoverContainer", function () {
        $(".qrCodPopup").attr("data-popup-full-screen", "true").fadeIn(200);
        $(".pageCoverSystem").attr("data-popup-full-screen", "true");
    });

    /* scroll */
   var widthM =  $(window).width();
   if(+widthM >= 1440){

       if($(".tableForScrollOne").length !== 0){
           $(document).wrapFoBaron({
               root: ".tableForScrollOne",
               barOnCls: 'baron'
           });
       }

       /*$(document).wrapFoBaron({
           root: '.reviewsContainer',
           barOnCls: 'baron'
       });*/

   }
    (function ($) {
        $.fn.wrapFoBaron = function (options) {
            options = $.extend({
                root    : '.scroller_wrap',
                barOnCls: 'baron'
            }, options);

            var make = function () {

                $(document).ready(function () {

                    $(options.root).each(function () {
                        $(this).wrapInner('<div class="scroller__content"></div>');
                        $(this).wrapInner('<div class="scroller"></div>');
                        $(this).append('<div class="scroller__bar-wrapper"><div class="scroller__bar"></div></div>');
                    });

                    var params = {
                        root    : options.root,
                        scroller: '.scroller',
                        bar     : '.scroller__bar',
                        barOnCls: options.barOnCls
                    };

                    var scroll = baron(params);

                    check_size();
                    check_size();

                    function check_size() {
                        $(options.root).each(function () {
                            if ($(this).find('.scroller__content').height() <= $(this).height()) {
                                $(this).find('.scroller__bar-wrapper').hide();
                                $(this).find('.scroller').addClass('.with-scroll');
                            } else {
                                $(this).find('.scroller').removeClass('.with-scroll');
                            }
                        });
                    }
                })
            };

            return make();
        };
    })(jQuery);

    $(document).wrapFoBaron({
        root: '.historyMessage',
        barOnCls: 'baron'
    });

    $(document).on("click", "[data-resize-tutorial-image]", function () {
        $(".resizeTutorialPopup").fadeIn(200);
    });
    $(document).on("click", "[data-close-tutorial]", function () {
        $(".resizeTutorialPopup").fadeOut(200);
    })
    /* */

    /*
    $(document).on("change", "#fileUpload", function () {
        $(this).parents(".fieldContainer").find("[data-add-file-name]").val(this.files[0].name);
    });

    $(document).on("click", ".closePopup", function () {
        $("[data-portfolio-container]").fadeOut(200);
    });

    $(document).on("click", "[data-about-us-slider]", function () {
        $(".connectingBlockShow").removeClass("connectingBlockShow").addClass("connectingBlockUnShow");
        $("[data-about-us-slider-content="+$(this).attr("data-about-us-slider")+"]").addClass("connectingBlockShow");
    });

    $(document).on("click", "[data-portfolio-arrow]", function () {
        var obj = $(this);
        if(typeof window.portfolioItem !== "undefined"){
            var dir = obj.attr("data-portfolio-arrow");
            var nextElementIndex;
            if(dir === "right") nextElementIndex = (window.portfolioItem + 1 <= $("[data-portfolio-item]").length)? window.portfolioItem + 1 : 1;
            else nextElementIndex = (window.portfolioItem - 1 >= 1)? window.portfolioItem - 1 : $("[data-portfolio-item]").length;
            $("[data-portfolio-container]").find("[data-portfolio-small-logo]").attr("src", $("[data-portfolio-item="+nextElementIndex+"]").find(".portfolioItemIMG").attr("src"));
            $("[data-portfolio-container]").find(".popupText").text($("[data-portfolio-item="+nextElementIndex+"]").find(".portfolioItemContentText").text());
            window.portfolioItem = nextElementIndex;
        }
    });

    if($("html").width() <= 800){
        $(document).on("click", "[data-portfolio-item]", function () {
            var obj = $(this);
            window.portfolioItem = Number(obj.attr("data-portfolio-item"));
            $("[data-portfolio-container]").find("[data-portfolio-small-logo]").attr("src", obj.find(".portfolioItemIMG").attr("src"));
            $("[data-portfolio-container]").find(".popupText").text(obj.find(".portfolioItemContentText").text());
            $("[data-portfolio-container]").fadeIn(200);
        });
    }

    $(document).on("click", "[data-scroll-to]", function () {
        $("html,body").animate({scrollTop:(Number($("[data-scroll-to-block="+$(this).attr("data-scroll-to")+"]").offset().top - 100))},300);
    });

    pageScroll();
    $(document).scroll(pageScroll);


    /*var map;
    function initMap() {

        // В переменной map создаем объект карты GoogleMaps и вешаем эту переменную на <div id="map"></div>
        map = new google.maps.Map(document.getElementById('map'), {
            // При создании объекта карты необходимо указать его свойства
            // center - определяем точку на которой карта будет центрироваться
            center: {lat: 34.684547, lng: 33.0603694},
            // zoom - определяет масштаб. 0 - видно всю платнеу. 18 - видно дома и улицы города.
            zoom: 18
        });

        var marker = new google.maps.Marker({

            // Определяем позицию маркера
            position: {lat: 55.760186, lng: 37.618711},

            // Указываем на какой карте он должен появится. (На странице ведь может быть больше одной карты)
            map: map,
        });
    }*/
});

function pageScroll() {
    var changeNavItemTo = false;
    $("[data-scrolling-for-task]").each(function (a, item) {
        var blockScrollTo = $("[data-scroll-to-block="+$(item).attr("data-scroll-to")+"]");
        if(blockScrollTo.length !== 0){
            if($(window).scrollTop() + 400 + $(".topMenuBg").height() > blockScrollTo.offset().top){
                changeNavItemTo = $(item).attr("data-scroll-to");
            }
        }
    });
    //console.log(changeNavItemTo);
    if(changeNavItemTo){
        $("[data-scrolling-for-task]").attr("data-active", "false");
        $("[data-scrolling-for-task][data-scroll-to="+changeNavItemTo+"]").attr("data-active", "true");
    }else{
        $("[data-scrolling-for-task]").attr("data-active", "false");
        $("[data-scrolling-for-task]:nth-child(1)").attr("data-active", "true");
    }
}

function copyToClipboardMsg(elem, msgElem) {
    var succeed = copyToClipboard(elem);
    var msg;
    if (!succeed) {
        msg = "Copy not supported or blocked.  Press Ctrl+c to copy."
    } else {
        msg = "Text copied to the clipboard."
    }
    if (typeof msgElem === "string") {
        msgElem = document.getElementById(msgElem);
    }
    msgElem.innerHTML = msg;
    setTimeout(function() {
        msgElem.innerHTML = "";
    }, 2000);
}

function copyToClipboard(elem) {
    // create hidden text element, if it doesn't already exist
    var targetId = "_hiddenCopyText_";
    var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
    var origSelectionStart, origSelectionEnd;
    if (isInput) {
        // can just use the original source element for the selection and copy
        target = elem;
        origSelectionStart = elem.selectionStart;
        origSelectionEnd = elem.selectionEnd;
    } else {
        // must use a temporary form element for the selection and copy
        target = document.getElementById(targetId);
        if (!target) {
            var target = document.createElement("textarea");
            target.style.position = "absolute";
            target.style.left = "-9999px";
            target.style.top = "0";
            target.id = targetId;
            document.body.appendChild(target);
        }
        target.textContent = elem.textContent;
    }
    // select the content
    var currentFocus = document.activeElement;
    target.focus();
    target.setSelectionRange(0, target.value.length);

    // copy the selection
    var succeed;
    try {
        succeed = document.execCommand("copy");
    } catch(e) {
        succeed = false;
    }
    // restore original focus
    if (currentFocus && typeof currentFocus.focus === "function") {
        currentFocus.focus();
    }

    if (isInput) {
        // restore prior selection
        elem.setSelectionRange(origSelectionStart, origSelectionEnd);
    } else {
        // clear temporary content
        target.textContent = "";
    }
    return succeed;


}