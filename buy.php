<html>
<head>

    <meta charset="UTF-8"/>
    <title>F2C</title>
    <script src="resources/js/jquery.js"></script>
    <script src="resources/js/inputmask/jquery.inputmask.bundle.min.js"></script>
    <script src="resources/js/my.js"></script>
    <script src="resources/js/slider.js"></script>
    <script src="resources/js/map.js"></script>
    <link rel="stylesheet" href="resources/styles/fonts.css">
    <link rel="stylesheet" href="resources/styles/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<?php require_once "tpl/menu.tpl"; ?>

<div class="buyPageBG">
    <div class="generalWidth">

        <div class="buyPageHeaderText">
            Покупка Эфира
        </div>
        <div class="buyPageContainer">
            <div class="buyPageSmallHeaderText">
                Пользователь eVerr хочет продать вам эфир
            </div>
            <div class="buyPageDetailTable clearAfter">
                <div class="buyPageDetailLeft">

                    <div class="buyPageDetailItem clearAfter">
                        <div class="buyPageDetailItemLeft">Способ оплаты</div>
                        <div class="buyPageDetailItemRight">Банк Тинькофф</div>
                    </div>
                    <div class="buyPageDetailItem clearAfter">
                        <div class="buyPageDetailItemLeft">Валюта</div>
                        <div class="buyPageDetailItemRight">Russian Ruble (Rub)</div>
                    </div>
                    <div class="buyPageDetailItem clearAfter">
                        <div class="buyPageDetailItemLeft">Цена</div>
                        <div class="buyPageDetailItemRight buyPageCurrencyExchange">453,000.00 RUB / ETH</div>
                    </div>
                    <div class="buyPageDetailItem clearAfter">
                        <div class="buyPageDetailItemLeft"><span class="pageUserOnlineBox" data-user-online="true">Пользователь</span></div>
                        <div class="buyPageDetailItemRight buyPageUserData"><a href="/data_user.php" class="pageBuyUserLink">eVerr</a> (<span class="pageBuyUserMobileHide">оценка отзывов 100%, </span><a href="/data_user.php" class="pageBuyUserReviews">смотреть отзывы</a>)</div>
                    </div>
                    <div class="buyPageDetailItem clearAfter">
                        <div class="buyPageDetailItemLeft">Ограничение по сделке</div>
                        <div class="buyPageDetailItemRight">90,000 — 93,341 RUB</div>
                    </div>
                    <div class="buyPageDetailItem clearAfter">
                        <div class="buyPageDetailItemLeft">Местоположение</div>
                        <div class="buyPageDetailItemRight">Russia<span class="pageBuyUserMobileHide">, Russian Federation</span></div>
                    </div>
                    <div class="buyPageDetailItem clearAfter">
                        <div class="buyPageDetailItemLeft">Платежное окно</div>
                        <div class="buyPageDetailItemRight buyPageBuyWindowTime">1час</div>
                    </div>

                </div>
                <div class="buyPageDetailRight">
                    <div class="buyPageDetailSubHeader">
                        Условия сделки с eVerr
                    </div>
                    <div class="buyPageDetailConditionsText">
                        <div class="buyPageDetailConditionsTextItem">
                            Актуальный способ пополнения в объявлении.
                            Альфа банк — cash in:
                        </div>
                        <div class="buyPageDetailConditionsTextItem">
                            — Время на сделку: не более 40 часов.
                        </div>
                        <div class="buyPageDetailConditionsTextItem">
                            — Необходимо указать номер банкомата.
                            Перевод с карты на карту того же банка:
                        </div>
                        <div class="buyPageDetailConditionsTextItem">
                            — У кого сделок меньше 100+, обязательно отправляют фото карты фато сделки. (можно закрыть номер пальцем, оставив последние 4 цифры).
                        </div>
                        <div class="buyPageDetailConditionsTextItem">
                            — Перевод без комментариев (за комментарии средства не возвращаются, bto не отправляется).
                        </div>
                        <div class="buyPageDetailConditionsTextItem">
                            — Время на сделку: не более 40 часов.
                        </div>
                    </div>
                </div>
            </div>

            <div class="buyPageSecondDetailTable clearAfter">
                <div class="buyPageSecondDetailLeft">
                    <div class="buyPageDetailSubHeader">
                        Сколько вы хотите купить?
                    </div>
                    <div class="buyPageDetailBoughtMoney clearAfter">
                        <div class="buyPageDetailBoughtMoneyCover clearAfter">
                            <div class="buyPageDetailBoughtMoneyLeft">
                                <div class="newInputCover">
                                    <div class="newInputName">Russian Ruble</div>
                                    <div class="inputErrorContainer" data-error="false">
                                        <div class="inputErrorMessage">Ошибка</div>
                                        <input type="text" class="newInputElement inputErrorElement"/>
                                    </div>
                                </div>
                            </div>
                            <div class="buyPageDetailBoughtMoneyRight">
                                <div class="newInputCover">
                                    <div class="newInputName">ETH</div>
                                    <div class="inputErrorContainer" data-error="false">
                                        <div class="inputErrorMessage">Ошибка</div>
                                        <input type="text" placeholder="ETH" class="newInputElement inputErrorElement"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="buyPageDetailBoughtComment">
                            <div class="newInputName">Сообщение трейдеру</div>
                            <textarea class="newTextareaElement" placeholder="Напишите трейдеру сообщение с контактной и другой информацией... (необязательно)"></textarea>
                        </div>
                    </div>
                    <div class="byPageSendFormButton">
                        <input type="submit" class="byPageSendFormButtonElement" value="ОТПРАВИТЬ"/>
                    </div>

                </div>
                <div class="buyPageSecondDetailRight">
                    <div class="buyPageDetailSubHeader">
                        Часто задаваемые вопросы
                    </div>
                    <div class="buyPageFAQ">
                        <div class="buyPageFAQItem">
                            <a href="" class="buyPageFAQLink">Как начать?</a>
                        </div>
                        <div class="buyPageFAQItem">
                            <a href="" class="buyPageFAQLink">Как связаться с трейдером?</a>
                        </div>
                        <div class="buyPageFAQItem">
                            <a href="" class="buyPageFAQLink">Как оплатить онлайн?</a>
                        </div>
                        <div class="buyPageFAQItem">
                            <a href="" class="buyPageFAQLink">Отмена сделки?</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="byPageSendFormButton">
                <input type="submit" class="byPageSendFormButtonElement" value="ОТПРАВИТЬ"/>
            </div>

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
                <!--<div class="buyPageAdditionInfoAttention">
                    <img src="/resources/images/attentionIcon.png" class="buyPageAdditionInfoAttentionIMG" alt=""/>
                    Обратите внимание: в настоящий момент вы можете запросить депонирование не больше, чем на 0,21 Eth.
                    Вы сможете покупать на большую сумму, как только у вас будет достаточный объем сделок и репутация.
                    Именно продавец устанавливает ограничения.
                </div>-->
                <div class="buyPageAdditionInfoText">
                    Депонирование платежей защищает и покупателя, и продовца в онлайн-сделках.
                </div>
            </div>

        </div>

    </div>
</div>

<?php require_once "tpl/footer.tpl"; ?>

</body>
</html>
















