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

<!-- current balance ON-->
<div class="currentBalanceContainer pagesBg pageCoverSystem" data-popup-full-screen="false">
    <div class="generalWidth">
        <div class="headerText marginHeaderText">
            Текущий баланс
        </div>

        <div class="generalBoxShadowContainer">

            <div class="innerBoxShadowPadding">

                <div class="infocurrentBalanceContainer clearAfter">

                    <div class="actionCurrentBalance">

                        <div class="yourBalanceHeader">
                            <span>0 ETH</span> ≈ $0.00
                        </div>
                        <div class="infoCash currentBalancePosition clearAfter">

                            <div class="actionBalance">
                                <div class="codContainer">
                                    <img src="/resources/images/qr_cod.png" alt="qr-cod"/>
                                    <div class="codHoverContainer"></div>
                                </div>
                            </div>

                            <div class="actionBalance clearAfter">
                                <div class="text">
                                    Это ваш Эфириум-адрес для отправки средств<span></span>
                                </div>
                                <div class="addressCashContainer clearAfter">
                                    <div class="addressCash">
                                        3GKumFH5eGkj9caWimzbpQ4hgPuQCftyCj
                                    </div>
                                    <div class="cashLinks clearAfter">
                                        <div class="cashLinkContainer">
                                            <a href="">Скопировать адрес</a>
                                        </div>
                                        <div class="cashLinkContainer">
                                            <a href="">Получить новый адрес</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="buttonSend buttonActionBalanceContainer">ОТПРАВИТЬ ПЕРЕВОД</div>
                    </div>

                    <div class="actionCurrentBalance">

                        <div class="textHelp">
                            Баланс счета в базовой (фиатной) валюте пересчитывается по рыночному курсу.
                            При этом количество криптовалюты остается постоянным
                        </div>

                        <div class="helpLink">
                            <a href="">Помощь в использовании кошелька</a>
                        </div>

                    </div>

                </div>

                <!-- history -->
                <div class="historyTitle">
                    История
                </div>

                <div class="myCashPageMobileAddition myCashTabFiatEthCover clearAfter">
                    <div class="myCashTabFiatEth" data-history-toggle-active="false">
                        <span class="myCashTabFiatEth_left">FIAT</span>
                        <div class="myCashTabFiatEthToggle">
                            <input type="checkbox" class="myCashTabFiatEthCheckbox" data-history-toggle-element/>
                            <span class="myCashTabFiatEthToggleIcon"></span>
                        </div>
                        <span class="myCashTabFiatEth_right">ETH</span>
                    </div>
                </div>

                <div class="tableSearchDealContainer">
                    <div class="switchSearchDealTable clearAfter">
                        <div class="functionSwitchSearchTable myCashTabTransactionCover" data-system-toggle-id="history" data-system-toggle-handler="transactions" data-active-switch-search-deal="true">
                            <div class="myCashTabTransaction">
                                Транзакции
                            </div>
                        </div>
                        <div class="functionSwitchSearchTable myCashTabFiatEthCover" data-system-toggle-id="history" data-system-toggle-handler="fiat_eth" data-active-switch-search-deal="false">
                            <div class="myCashTabFiatEth" data-history-toggle-active="false">
                                <span class="myCashTabFiatEth_left">FIAT</span>
                                <div class="myCashTabFiatEthToggle">
                                    <input type="checkbox" class="myCashTabFiatEthCheckbox" data-history-toggle-element/>
                                    <span class="myCashTabFiatEthToggleIcon"></span>
                                </div>
                                <span class="myCashTabFiatEth_right">ETH</span>
                            </div>
                            <div class="myCashPaheForMobileHeader">История</div>
                        </div>
                    </div>

                    <div class="switchSearchTableContainer switchCurrentBalanceContainerTableContainer titleCashTableContainer" data-system-toggle-id="history" data-system-toggle-content="transactions">

                        <!-- title table ON-->
                        <div class="titleCurrentBalanceTable clearAfter">
                            <div class="cellTitleCashTable">
                                #
                            </div>
                            <div class="cellTitleCashTable clearAfter">
                                <div class="subCellTitleCashTable tableButtonCover">Тип операции<span class="tableButtonArrow tableButtonArrowHidden"></span></div>
                                <div class="subCellTitleCashTable tableButtonCover">Сумма Eth<span class="tableButtonArrow tableButtonArrowHidden"></span></div>
                            </div>
                            <div class="cellTitleCashTable">Адрес отправки</div>
                            <div class="cellTitleCashTable">Адрес получения</div>
                            <div class="cellTitleCashTable tableButtonCover">Дата <span class="tableTextHidden">операции</span><span class="tableButtonArrow"></span></div>
                        </div>
                        <!-- title table OFF-->

                        <!-- result table ON-->
                        <div class="resultCurrentBalanceContainer scrollContainer tableForScrollOne">

                            <div class="resultCashTableContainer resultCurrentTableContainer">

                                <div class="resultCashTable clearAfter">
                                    <div class="cellResultCashTable">1</div>
                                    <div class="cellResultCashTable clearAfter">
                                        <div class="subCellResultCashTable">Зачисление 1</div>
                                        <div class="subCellResultCashTable">0.568</div>
                                    </div>
                                    <div class="cellResultCashTable">0xqSCkArUsrzgwEdvNoTfgthyjuioujyhgf</div>
                                    <div class="cellResultCashTable">0xqSCkArUsrzgwEdvNoTdfghyuiouyh</div>
                                    <div class="cellResultCashTable">
                                        16.09.2018<span>19:12</span>
                                    </div>
                                </div>

                                <div class="resultCashTable clearAfter">
                                    <div class="cellResultCashTable">1</div>
                                    <div class="cellResultCashTable clearAfter">
                                        <div class="subCellResultCashTable">Зачисление</div>
                                        <div class="subCellResultCashTable">0.568</div>
                                    </div>
                                    <div class="cellResultCashTable">0xqSCkArUsrzgwEdvNodfghyuioiuyhtg</div>
                                    <div class="cellResultCashTable">0xqSCkArUsrzgwEdvNowertyuioplikujhygf</div>
                                    <div class="cellResultCashTable">
                                        16.09.2018<span>19:12</span>
                                    </div>
                                </div>

                                <div class="resultCashTable clearAfter">
                                    <div class="cellResultCashTable">1</div>
                                    <div class="cellResultCashTable clearAfter">
                                        <div class="subCellResultCashTable">Зачисление</div>
                                        <div class="subCellResultCashTable">0.568</div>
                                    </div>
                                    <div class="cellResultCashTable">0xqSCkArUsrzgwEdvNoTnjkdfjgdfgh</div>
                                    <div class="cellResultCashTable">0xqSCkArUsrzgwEdvNoTdfghjkdfghj</div>
                                    <div class="cellResultCashTable">
                                        16.09.2018<span>19:12</span>
                                    </div>
                                </div>

                                <div class="resultCashTable clearAfter">
                                    <div class="cellResultCashTable">1</div>
                                    <div class="cellResultCashTable clearAfter">
                                        <div class="subCellResultCashTable">Зачисление</div>
                                        <div class="subCellResultCashTable">0.568</div>
                                    </div>
                                    <div class="cellResultCashTable">0xqSCkArUsrzgwEdvNoTfgthyjuioujyhgf</div>
                                    <div class="cellResultCashTable">0xqSCkArUsrzgwEdvNoTdfghyuiouyh</div>
                                    <div class="cellResultCashTable">
                                        16.09.2018<span>19:12</span>
                                    </div>
                                </div>

                                <div class="resultCashTable clearAfter">
                                    <div class="cellResultCashTable">1</div>
                                    <div class="cellResultCashTable clearAfter">
                                        <div class="subCellResultCashTable">Зачисление</div>
                                        <div class="subCellResultCashTable">0.568</div>
                                    </div>
                                    <div class="cellResultCashTable">0xqSCkArUsrzgwEdvNodfghyuioiuyhtg</div>
                                    <div class="cellResultCashTable">0xqSCkArUsrzgwEdvNowertyuioplikujhygf</div>
                                    <div class="cellResultCashTable">
                                        16.09.2018<span>19:12</span>
                                    </div>
                                </div>

                                <div class="resultCashTable clearAfter">
                                    <div class="cellResultCashTable">1</div>
                                    <div class="cellResultCashTable clearAfter">
                                        <div class="subCellResultCashTable">Зачисление</div>
                                        <div class="subCellResultCashTable">0.568</div>
                                    </div>
                                    <div class="cellResultCashTable">0xqSCkArUsrzgwEdvNoTnjkdfjgdfgh</div>
                                    <div class="cellResultCashTable">0xqSCkArUsrzgwEdvNoTdfghjkdfghj</div>
                                    <div class="cellResultCashTable">
                                        16.09.2018<span>19:12</span>
                                    </div>
                                </div>

                                <div class="resultCashTable clearAfter">
                                    <div class="cellResultCashTable">1</div>
                                    <div class="cellResultCashTable clearAfter">
                                        <div class="subCellResultCashTable">Зачисление</div>
                                        <div class="subCellResultCashTable">0.568</div>
                                    </div>
                                    <div class="cellResultCashTable">0xqSCkArUsrzgwEdvNoTfgthyjuioujyhgf</div>
                                    <div class="cellResultCashTable">0xqSCkArUsrzgwEdvNoTdfghyuiouyh</div>
                                    <div class="cellResultCashTable">
                                        16.09.2018<span>19:12</span>
                                    </div>
                                </div>

                                <div class="resultCashTable clearAfter">
                                    <div class="cellResultCashTable">1</div>
                                    <div class="cellResultCashTable clearAfter">
                                        <div class="subCellResultCashTable">Зачисление</div>
                                        <div class="subCellResultCashTable">0.568</div>
                                    </div>
                                    <div class="cellResultCashTable">0xqSCkArUsrzgwEdvNodfghyuioiuyhtg</div>
                                    <div class="cellResultCashTable">0xqSCkArUsrzgwEdvNowertyuioplikujhygf</div>
                                    <div class="cellResultCashTable">
                                        16.09.2018<span>19:12</span>
                                    </div>
                                </div>

                                <div class="resultCashTable clearAfter">
                                    <div class="cellResultCashTable">1</div>
                                    <div class="cellResultCashTable clearAfter">
                                        <div class="subCellResultCashTable">Зачисление</div>
                                        <div class="subCellResultCashTable">0.568</div>
                                    </div>
                                    <div class="cellResultCashTable">0xqSCkArUsrzgwEdvNoTnjkdfjgdfgh</div>
                                    <div class="cellResultCashTable">0xqSCkArUsrzgwEdvNoTdfghjkdfghj</div>
                                    <div class="cellResultCashTable">
                                        16.09.2018<span>19:12</span>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- result table OFF-->

                        <div class="uploadExcelContainer clearAfter">
                            <a href="">Выгрузить в Excel</a>
                        </div>

                    </div>

                    <div class="switchSearchTableContainer switchCurrentBalanceContainerTableContainer titleCashTableContainer togglePageContentHidden" data-system-toggle-id="history" data-system-toggle-content="fiat_eth">

                        <!-- title table ON-->
                        <div class="titleCurrentBalanceTable clearAfter">
                            <div class="cellTitleCashTable">
                                #
                            </div>
                            <div class="cellTitleCashTable clearAfter">
                                <div class="subCellTitleCashTable tableButtonCover">Тип операции<span class="tableButtonArrow tableButtonArrowHidden"></span></div>
                                <div class="subCellTitleCashTable tableButtonCover">Сумма Eth<span class="tableButtonArrow tableButtonArrowHidden"></span></div>
                            </div>
                            <div class="cellTitleCashTable">Адрес отправки</div>
                            <div class="cellTitleCashTable">Адрес получения</div>
                            <div class="cellTitleCashTable tableButtonCover">Дата <span class="tableTextHidden">операции</span><span class="tableButtonArrow"></span></div>
                        </div>
                        <!-- title table OFF-->

                        <!-- result table ON-->
                        <div class="resultCurrentBalanceContainer tableForScrollTwo">

                            <div class="resultCashTableContainer resultCurrentTableContainer">

                                <div class="resultCashTable clearAfter">
                                    <div class="cellResultCashTable">1</div>
                                    <div class="cellResultCashTable clearAfter">
                                        <div class="subCellResultCashTable">Зачисление 2</div>
                                        <div class="subCellResultCashTable">0.568</div>
                                    </div>
                                    <div class="cellResultCashTable">0xqSCkArUsrzgwEdvNoTfgthyjuioujyhgf</div>
                                    <div class="cellResultCashTable">0xqSCkArUsrzgwEdvNoTdfghyuiouyh</div>
                                    <div class="cellResultCashTable">
                                        16.09.2018<span>19:12</span>
                                    </div>
                                </div>

                                <div class="resultCashTable clearAfter">
                                    <div class="cellResultCashTable">1</div>
                                    <div class="cellResultCashTable clearAfter">
                                        <div class="subCellResultCashTable">Зачисление</div>
                                        <div class="subCellResultCashTable">0.568</div>
                                    </div>
                                    <div class="cellResultCashTable">0xqSCkArUsrzgwEdvNodfghyuioiuyhtg</div>
                                    <div class="cellResultCashTable">0xqSCkArUsrzgwEdvNowertyuioplikujhygf</div>
                                    <div class="cellResultCashTable">
                                        16.09.2018<span>19:12</span>
                                    </div>
                                </div>

                                <div class="resultCashTable clearAfter">
                                    <div class="cellResultCashTable">1</div>
                                    <div class="cellResultCashTable clearAfter">
                                        <div class="subCellResultCashTable">Зачисление</div>
                                        <div class="subCellResultCashTable">0.568</div>
                                    </div>
                                    <div class="cellResultCashTable">0xqSCkArUsrzgwEdvNoTnjkdfjgdfgh</div>
                                    <div class="cellResultCashTable">0xqSCkArUsrzgwEdvNoTdfghjkdfghj</div>
                                    <div class="cellResultCashTable">
                                        16.09.2018<span>19:12</span>
                                    </div>
                                </div>

                                <div class="resultCashTable clearAfter">
                                    <div class="cellResultCashTable">1</div>
                                    <div class="cellResultCashTable clearAfter">
                                        <div class="subCellResultCashTable">Зачисление</div>
                                        <div class="subCellResultCashTable">0.568</div>
                                    </div>
                                    <div class="cellResultCashTable">0xqSCkArUsrzgwEdvNoTfgthyjuioujyhgf</div>
                                    <div class="cellResultCashTable">0xqSCkArUsrzgwEdvNoTdfghyuiouyh</div>
                                    <div class="cellResultCashTable">
                                        16.09.2018<span>19:12</span>
                                    </div>
                                </div>

                                <div class="resultCashTable clearAfter">
                                    <div class="cellResultCashTable">1</div>
                                    <div class="cellResultCashTable clearAfter">
                                        <div class="subCellResultCashTable">Зачисление</div>
                                        <div class="subCellResultCashTable">0.568</div>
                                    </div>
                                    <div class="cellResultCashTable">0xqSCkArUsrzgwEdvNodfghyuioiuyhtg</div>
                                    <div class="cellResultCashTable">0xqSCkArUsrzgwEdvNowertyuioplikujhygf</div>
                                    <div class="cellResultCashTable">
                                        16.09.2018<span>19:12</span>
                                    </div>
                                </div>

                                <div class="resultCashTable clearAfter">
                                    <div class="cellResultCashTable">1</div>
                                    <div class="cellResultCashTable clearAfter">
                                        <div class="subCellResultCashTable">Зачисление</div>
                                        <div class="subCellResultCashTable">0.568</div>
                                    </div>
                                    <div class="cellResultCashTable">0xqSCkArUsrzgwEdvNoTnjkdfjgdfgh</div>
                                    <div class="cellResultCashTable">0xqSCkArUsrzgwEdvNoTdfghjkdfghj</div>
                                    <div class="cellResultCashTable">
                                        16.09.2018<span>19:12</span>
                                    </div>
                                </div>

                                <div class="resultCashTable clearAfter">
                                    <div class="cellResultCashTable">1</div>
                                    <div class="cellResultCashTable clearAfter">
                                        <div class="subCellResultCashTable">Зачисление</div>
                                        <div class="subCellResultCashTable">0.568</div>
                                    </div>
                                    <div class="cellResultCashTable">0xqSCkArUsrzgwEdvNoTfgthyjuioujyhgf</div>
                                    <div class="cellResultCashTable">0xqSCkArUsrzgwEdvNoTdfghyuiouyh</div>
                                    <div class="cellResultCashTable">
                                        16.09.2018<span>19:12</span>
                                    </div>
                                </div>

                                <div class="resultCashTable clearAfter">
                                    <div class="cellResultCashTable">1</div>
                                    <div class="cellResultCashTable clearAfter">
                                        <div class="subCellResultCashTable">Зачисление</div>
                                        <div class="subCellResultCashTable">0.568</div>
                                    </div>
                                    <div class="cellResultCashTable">0xqSCkArUsrzgwEdvNodfghyuioiuyhtg</div>
                                    <div class="cellResultCashTable">0xqSCkArUsrzgwEdvNowertyuioplikujhygf</div>
                                    <div class="cellResultCashTable">
                                        16.09.2018<span>19:12</span>
                                    </div>
                                </div>

                                <div class="resultCashTable clearAfter">
                                    <div class="cellResultCashTable">1</div>
                                    <div class="cellResultCashTable clearAfter">
                                        <div class="subCellResultCashTable">Зачисление</div>
                                        <div class="subCellResultCashTable">0.568</div>
                                    </div>
                                    <div class="cellResultCashTable">0xqSCkArUsrzgwEdvNoTnjkdfjgdfgh</div>
                                    <div class="cellResultCashTable">0xqSCkArUsrzgwEdvNoTdfghjkdfghj</div>
                                    <div class="cellResultCashTable">
                                        16.09.2018<span>19:12</span>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- result table OFF-->

                        <div class="uploadExcelContainer clearAfter">
                            <a href="">Выгрузить в Excel</a>
                        </div>

                    </div>



                </div>
                <!-- -->
            </div>
        </div>
    </div>
</div>
<!-- current balance OFF-->

<!-- zoom qr-cod popup ON-->
<div class="popupBgCod qrCodPopup" data-popup data-popup-full-screen="false">
    <div class="clickHidePopup">
        <div class="popupContainer">

            <div class="closePopupIcon"></div>

            <div class="titlePopup">Запрос</div>

            <div class="contentPopupContainer clearAfter">

                <div class="contentPopup">
                    <div class="text">
                        Чтобы обеспечить конфиденциальность, каждый раз отправляйте средства на
                        новый эфириум-адрес. После отправки средств на адрес ниже мы создадим для
                        вас новый адрес.
                        Старый адрес все еще будет работать.
                    </div>
                    <div class="textAddress">
                        3GKumFH5eGkj9caWimzbpQ4hgPuQCftyCj
                    </div>
                    <div class="linkPopupContainer">
                        <a href="" class="linkPopup">Скопировать адрес</a>
                    </div>
                </div>

                <div class="contentPopup">
                    <img src="/resources/images/qr.jpg" alt="cod"/>
                </div>
            </div>

            <div class="buttonReturn">
                <div class="buttonSend buttonReturnCod">ВЕРНУТЬСЯ</div>
            </div>

        </div>
    </div>
</div>
<!-- zoom qr-cod popup OFF-->

<?php require_once "tpl/footer.tpl"; ?>

</body>
</html>
















