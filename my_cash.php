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

<!-- my cash ON-->
<div class="myCashContainer pagesBg pageCoverSystem" data-popup-full-screen="false">
    <div class="generalWidth">
        <div class="headerText marginHeaderText">
            Мой кошелек
        </div>

        <div class="generalBoxShadowContainer">

            <div class="innerBoxShadowPadding">

                <div class="infoCurrencyContainer clearAfter">

                    <div class="actionCurrency">
                        <div class="yourBalance">
                            <span>0 ETH</span> ≈ $0.00
                        </div>
                        <div class="infoCash clearAfter">

                            <div class="actionInfoCash">
                                <div class="codContainer">
                                    <img src="/resources/images/qr_cod.png" alt="qr-cod"/>
                                    <div class="codHoverContainer"></div>
                                </div>
                            </div>

                            <div class="actionInfoCash clearAfter">
                                <div class="text">
                                    Это ваш Эфириум-адрес для отправки средств
                                </div>
                                <div class="addressCashContainer clearAfter">
                                    <div class="addressCash" id="copyAddressOnPage">3GKumFH5eGkj9caWimzbpQ4hgPuQCftyCj</div>
                                    <div class="cashLinks clearAfter">
                                        <div class="cashLinkContainer">
                                            <a href="javascript:void(0);" data-address-copy>Скопировать адрес</a>
                                        </div>
                                        <div class="cashLinkContainer">
                                            <a href="">Получить новый адрес</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="msg"></div>
                            </div>

                        </div>

                        <div class="buttonSend buttonActionCashContainer">ПОЛУЧИТЬ ПЕРЕВОД</div>
                    </div>

                    <div class="actionCurrency">
                        <div class="title">
                            Отправить эфир
                        </div>

                        <div class="sendCurrencyInfo">

                            <div class="mobileCurrencyContainer clearAfter">

                                <div class="sendCurrencyContainer floatSendCurrency">
                                    <div class="titleField">
                                        На адрес
                                    </div>
                                    <div class="inputErrorContainer" data-error="false">
                                        <div class="inputAddress inputErrorElement" data-completed-adress="true">
                                            <span></span>
                                            <div class="inputErrorMessage">Ошибка</div>
                                            <input type="text" class="formField textPlaceholder circlePadding" placeholder="Например “0х000...”"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="sendCurrencyContainer floatSendCurrency">
                                    <div class="countCurrencySend clearAfter">
                                        <div class="titleField">
                                            Количество ETH
                                        </div>
                                        <div class="sendAll">
                                            Отправить все
                                        </div>
                                    </div>
                                    <div class="inputErrorContainer" data-error="false">
                                        <div class="inputErrorMessage">Ошибка</div>
                                        <input type="text" class="formField textPlaceholder inputErrorElement" placeholder="Например “0.001”"/>
                                    </div>
                                </div>

                            </div>

                            <div class="sendCurrencyContainer fromAddress">
                                <div class="titleField">
                                    С адреса
                                </div>
                                <!--<div class="selectFilter myCashSelect mobileSelectAddress">
                                    <div class="text">Адреса с балансом не найдены</div>
                                    <select class="styleSelect fontCashSelect">
                                        <option>Адрес 1</option>
                                        <option>Адрес 2</option>
                                        <option>Адрес 3</option>
                                    </select>
                                </div>-->

                                <div class="selectFilter" data-change-select-container>
                                    <input type="text" class="formField" data-change-select-value value="Москва"/>
                                    <select class="styleSelect myAccountFont" data-change-select>
                                        <option>Москва 1</option>
                                        <option>Москва 2</option>
                                        <option>Москва 3</option>
                                    </select>
                                </div>

                            </div>

                        </div>

                        <div class="buttonSend buttonActionSendCashContainer">ОТПРАВИТЬ ПЕРЕВОД</div>
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

                    <div class="switchSearchTableContainer titleCashTableContainer" data-system-toggle-id="history" data-system-toggle-content="transactions">
                        <!-- title table ON-->
                       <div class="titleCashTable clearAfter">
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
                        <div class="resultCashTableContainer">

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
                        <!-- result table OFF-->

                        <!-- pagination ON -->
                        <div class="paginationContainer">

                            <span class="numberPage arrowPagination">1</span>

                            <span class="numberPage">1</span>
                            <span class="numberPage">2</span>
                            <span class="numberPage">3</span>
                            <span class="numberPage">...</span>
                            <span class="numberPage">20</span>

                            <span class="numberPage arrowPagination">1</span>

                        </div>
                        <!-- pagination OFF -->

                    </div>

                    <div class="togglePageContentHidden" data-system-toggle-id="history" data-system-toggle-content="fiat_eth"></div>


                </div>
                <!-- -->
            </div>
        </div>
    </div>
</div>
<!-- my cash OFF-->

<!-- zoom qr-cod popup ON-->
<div class="popupBg qrCodPopup" data-popup-full-screen="false">
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
<!-- zoom qr-cod popup OFF-->

<!-- get order popup ON-->
<div class="popupBg getOrderPopup" data-popup-full-screen="true">
    <div class="popupContainer getOrderPopupContent">

        <div class="closePopupIcon"></div>

        <div class="titlePopup">Получить эфиры</div>
        <div class="subtext">Используйте приведенные ниже эфир-адрес, чтобы получить эфиры</div>

        <div class="receiveOrderContainer clearAfter">
            <div class="receiveOrder clearAfter">
                <div class="receiveOrderText">
                    Это ваш Эфириум-адрес для отправки средств
                    <span></span>
                </div>
                <div class="addressReceiveContainer clearAfter">
                    <div class="addressReceive">
                        3GKumFH5eGkj9caWimzbpQ4hgPuQCftyCj
                    </div>
                    <div class="receiveLinks clearAfter">
                        <div class="receiveLinkContainer">
                            <a href="">Скопировать адрес</a>
                        </div>
                        <div class="receiveLinkContainer">
                            <a href="">Получить новый адрес</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="receiveOrder">
                <div class="codContainerPopup">
                    <img src="/resources/images/qr_cod.png" alt="qr-cod"/>
                    <div class="codHoverContainer"></div>
                </div>
            </div>
        </div>

        <!-- title table ON -->
        <div class="receiveOrderTableContainer">

            <div class="receiveOrderTitleTable clearAfter">
                <div class="cellReceiveTitleTable">Время</div>
                <div class="cellReceiveTitleTable">Подтверждено</div>
                <div class="cellReceiveTitleTable">Eth</div>
                <div class="cellReceiveTitleTable">Адрес</div>
            </div>

        </div>
        <!-- title table OFF -->

        <!-- result table ON -->
        <div class="receiveOrderResultTable clearAfter">
            <div class="cellReceiveTitleTable text">5:25 п.п.</div>
            <div class="cellReceiveTitleTable text">30 минут</div>
            <div class="cellReceiveTitleTable text">
                0.2215654
                <span></span>
            </div>
            <div class="cellReceiveTitleTable violettext"> LlkxFH5eGkj9caWimzbpQ4hgPuQCftyC</div>
        </div>
        <!-- result table OFF -->

        <div class="menuPopup clearAfter">
            <div class="partMenuPopup clearAfter">
                <div class="cellMenuPopup">
                    Входящие транзакции
                   <span>и комиссии</span>
                </div>
                <div class="cellMenuPopup">Старые адреса</div>
                <div class="cellMenuPopup">
                    QR-код
                    <div></div>
                    для мобильного
                </div>
            </div>
            <div class="partMenuPopup">
                <div class="buttonSend returnMenuPopup">ВЕРНУТЬСЯ</div>
            </div>
        </div>
    </div>
</div>
<!-- get order popup OFF-->

<?php require_once "tpl/footer.tpl"; ?>

</body>
</html>
















