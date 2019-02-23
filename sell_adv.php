<html>
<head>

    <meta charset="UTF-8"/>
    <title>F2C</title>
    <script src="resources/js/jquery.js"></script>
    <script src="resources/js/inputmask/jquery.inputmask.bundle.min.js"></script>

    <script src="resources/js/slider.js"></script>
    <script src="resources/js/map.js"></script>

    <script src="resources/js/baron.js"></script>
    <script src="resources/js/my.js"></script>
    <script src="resources/js/wrap.baron.min.js"></script>

    <link rel="stylesheet" href="resources/styles/fonts.css">
    <link rel="stylesheet" href="resources/styles/style.css">
    <link rel="stylesheet" href="resources/styles/scroll.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<?php require_once "tpl/menu.tpl"; ?>

<!-- info deal ON-->
<div class="infoDealContainer pagesBg">
    <div class="generalWidth">
        <div class="headerText marginHeaderText">
            Информация по сделке
        </div>
        <div class="generalBoxShadowContainer">
            <div class="innerBoxShadowPadding">
                <div class="titleInfo">
                    Контакт #27308093:<div></div>
                    Покупка 3.345 ETH за 2070,00 RUB
                </div>
                <div class="shortDealInfoText">
                    Продажа <span>по объявлению #819433</span> (Переведены через конкретный банк) продавцу <a href="">MomentTrader</a>
                    <div></div>по обменному курсу 448,500,36 RUB / ETH.
                </div>
            </div>
            <div class="statusDeal" data-status-action="completed">
                Статус сделки: Эфириумы отправлены из депонирования, сделка завершена.
            </div>
            <div class="innerBoxShadowPadding clearAfter">
                <div class="mainPartInfoDeal mainPartInfoDealSellAdv">
                    <div class="titleInfo">
                        Отправить сообщение
                    </div>
                    <div class="innerShadowContainer">
                        <div class="contactInfoUser clearAfter">
                            <div class="infoMessageBlock">
                                <div class="nameUser">Отправить сообщение
                                    <a href="">Zikasy</a>
                                </div>
                            </div>
                            <div class="infoMessageBlock">
                                <div class="status" data-user-status="online">
                                    <span class="online">Online</span>
                                    <span class="offline">Offline</span>
                                </div>
                            </div>
                        </div>
                        <div class="messageTextContainer inputErrorContainer" data-error="false">
                            <div class="inputErrorMessage">Ошибка</div>
                            <textarea class="messageText inputErrorElement" placeholder="Ваше сообщение ..."></textarea>
                        </div>
                        <div class="actionMessage clearAfter">
                            <div class="actionPart" data-attach-cover>
                                <span data-text-attach>Прикрепить документ</span>
                                <input type="file" class="uploadFile" data-add-file-input>
                                <span data-file-unload></span>
                            </div>
                            <div class="actionPart">
                                <div class="buttonSend sendMessage">
                                    ОТПРАВИТЬ
                                </div>
                            </div>
                        </div>
                        <div class="historyMessageContainer">
                            <div class="historyMessage">
                                <div class="messageContainer messageTo">
                                    <div class="timeMessage">
                                        26 августа 2018   20.00
                                    </div>
                                    <div class="messageDetails">
                                        <span>Zikasy:</span>  Жду перечесление
                                    </div>
                                </div>
                                <div class="messageContainer messageFrom">
                                    <div class="timeMessage">
                                        26 августа 2018   20.00
                                    </div>
                                    <div class="messageDetails">
                                        <span>Zikasy:</span>  Жду перечесление
                                    </div>
                                </div>
                                <div class="messageContainer messageTo">
                                    <div class="timeMessage">
                                        26 августа 2018   20.00
                                    </div>
                                    <div class="messageDetails">
                                        <span>Zikasy:</span>  Жду перечесление
                                    </div>
                                </div>
                                <div class="messageContainer messageFrom">
                                    <div class="timeMessage">
                                        26 августа 2018   20.00
                                    </div>
                                    <div class="messageDetails">
                                        <span>Zikasy:</span>  Жду перечесление
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mainPartInfoDeal mainPartInfoDealSellAdv">
                    <div class="titleInfo">
                        Шаг 1: Заплатите продавцу:
                    </div>
                    <div class="stepsTextSellPage">
                        <div>
                            Продавец: <span class="violetText">eVerr (100+; 100%)</span>
                        </div>
                        <div>
                            Сумма в депонировании: <span class="greyText">0,00275 Eth</span>
                        </div>
                        <div>
                            Сумма платежа: <span class="greyText">7 125,02 RUB</span>
                        </div>
                    </div>
                    <div class="titleInfo">
                        Шаг 2: Подтвердите платеж:
                    </div>
                    <div class="stepsTextSellPage">
                        Эфириумы удерживаются на счете эскроу в течение 81 минут,
                        за это время необходимо осуществить оплату. После оплаты
                        вам необходимо отметить платеж как завершенный,
                        нажав на кнопку "Я заплатил", в противном случае сделка
                        будет автоматически отменена.
                    </div>
                    <div class="clearAfter">
                        <div class="buttonPayContainer">
                            <div class="buttonSend sendMessage">
                                Я ЗАПЛАТИЛ
                            </div>
                        </div>
                    </div>
                    <div class="conditionsContainer" data-conditions-show="false">
                        <div class="title">
                            <span class="resolveSituation">Разрешение конфликтных ситуаций со сделками</span>
                            <div class="arrowTop arrowTopSellAdv" data-deal-condition-arrow></div>
                        </div>
                        <div class="conditionText">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Quis ipsum suspendisse ultrices gravida.
                        </div>
                        <div class="clearAfter">
                            <div class="buttonDisputeContainer">
                                <div class="buttonSend sendMessage redDisputeButton">
                                    НАЧАТЬ СПОР
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="moreAboutDealContainer">
                        <div class="text">
                            Смотрите "Подробнее о сделках" ниже для разрешения распространненых конфликтных ситуаций.
                        </div>
                        <div class="clearAfter">
                            <div class="buttonCancelContainer">
                                <div class="buttonSend sendMessage redDisputeButton">
                                    ОТМЕНА СДЕЛКИ
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="editReviewDealContainer">
                <div class="titleInfo">
                    Подробнее о сделках
                </div>
                <div class="buyPageFAQ">
                    <div class="sellPageMoreAboutDealItem">
                        <a href="" class="sellPageMoreAboutDealLink">
                            Где получить эфириумы?
                        </a>
                    </div>
                    <div class="sellPageMoreAboutDealItem">
                        <a href="" class="sellPageMoreAboutDealLink">
                            Я не знаю, как оплатить, и я непонимаю инструкций по осуществлению платежа.
                        </a>
                    </div>
                    <div class="sellPageMoreAboutDealItem">
                        <a href="" class="sellPageMoreAboutDealLink">
                            Я не могу оплатить в течение отведенного времени.
                        </a>
                    </div>
                    <div class="sellPageMoreAboutDealItem">
                        <a href="" class="sellPageMoreAboutDealLink">
                            Я не заплатил вовремя или забыл нажать на кнопку "Я заплатил".
                        </a>
                    </div>
                    <div class="sellPageMoreAboutDealItem">
                        <a href="" class="sellPageMoreAboutDealLink">
                            Продавец не отвечает и не отправляет эфириумы.
                        </a>
                    </div>
                    <div class="sellPageMoreAboutDealItem">
                        <a href="" class="sellPageMoreAboutDealLink">
                            Я нечаянно отметил платеж как завершенный, но не заплатил.
                        </a>
                    </div>
                    <div class="sellPageMoreAboutDealItem">
                        <a href="" class="sellPageMoreAboutDealLink">
                            Я не могу ввести ни номер транзакции, ни сообщение вместе с платежем.
                        </a>
                    </div>
                    <div class="sellPageMoreAboutDealItem">
                        <a href="" class="sellPageMoreAboutDealLink">
                            Почему моя цена эфириумов отличается от цены в объявлении?
                        </a>
                    </div>
                </div>
            </div>

            <div class="innerBoxShadowPadding">
                <div class="buyPageAdditionInfo">
                    <div class="buyPageAdditionInfoHeader">
                        Flat2Crypto обеспечивает вашу безопасность
                    </div>
                    <div class="buyPageAdditionInfoComment">
                        <img src="/resources/images/lockedIcon.png" class="buyPageAdditionInfoCommentIMG" alt=""/>
                        Эфириумы блокируются в депонировании платежа на Flat2Crypto, после того как вы отправили запрос.
                        Оплатите счет, отметьте его как оплаченный, и продавец отправит вам эфириумы,
                        огда перечисленный платеж отобразиться на его счете.
                    </div>
                    <div class="buyPageAdditionInfoAttention">
                        <img src="/resources/images/attentionIcon.png" class="buyPageAdditionInfoAttentionIMG" alt=""/>
                        Обратите внимание: в настоящий момент вы можете запросить депонирование не больше, чем на 0,21 Eth.
                        Вы сможете покупать на большую сумму, как только у вас будет достаточный объем сделок и репутация.
                        Именно продавец устанавливает ограничения.
                    </div>
                    <div class="buyPageAdditionInfoText">
                        Депонирование платежей защищает и покупателя, и продовца в онлайн-сделках.
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- info deal OFF-->

<?php require_once "tpl/footer.tpl"; ?>

</body>
</html>
















