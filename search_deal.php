<html>
<head>

    <meta charset="UTF-8"/>
    <title>F2C</title>
    <script src="resources/js/jquery.js"></script>
    <script src="resources/js/inputmask/jquery.inputmask.bundle.min.js"></script>
    <script src="resources/js/my.js"></script>
    <script src="resources/js/slider.js"></script>
    <script src="resources/js/map.js"></script>
    <script src="resources/js/jquery.formstyler.js"></script>
    <link rel="stylesheet" href="resources/styles/fonts.css">

    <link rel="stylesheet" href="resources/styles/jquery.formstyler.css">
    <link rel="stylesheet" href="resources/styles/jquery.formstyler.theme.css">
    <link rel="stylesheet" href="resources/styles/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<?php require_once "tpl/menu.tpl"; ?>

<!-- popup exit ON -->
<div class="exitSystemPopupContainer">
    <div class="exitSystemPopup">
        <div class="generalWidth">
            <span class="title">Вы успешно вышли из системы.</span>
        </div>
    </div>
    <div class="closePopupsContainer"></div>
</div>
<!-- popup exit OFF -->

<!-- successful log ON -->
<div class="succesfulLogPopupContainer">
    <div class="succesfulLogPopup">
        <div class="generalWidth">
            <span class="title">Вы успешно зарегистрировались. На почту выслано подтверждение</span>
        </div>
    </div>
    <div class="closePopupsContainer"></div>
</div>
<!-- successful log OFF -->

<!-- Our clear commissions ON -->
<div class="ourCommissionContainerMain">
    <div class="generalWidth">
        <div class="title">Покупайте и продавайте эфиры <span></span>рядом с вами</div>
        <span class="freeAbsolute withOutBorder">Прозрачно. Безопасно. Быстро</span>
        <div class="buttonLogContainer clearAfter">
            <div class="buttonSend sendMessage">
                Регистрация
            </div>
        </div>
    </div>
</div>
<!-- Our commissions OFF -->

<!-- search deal ON-->
<div class="searchDealContainer">
    <div class="generalWidth">
        <div class="headerText">
            Поиск сделок
        </div>

        <!-- table and mobile search filter ON -->
        <div class="tabMobFilterSearchContainer">

            <div class="column clearAfter">
                <div class="tabMobSelectContainer">
                  <div class="selectFilter formFieldInSearchDeal" data-change-select-container>
                     <input type="text" class="formField" data-change-select-value value="Валюта"/>
                     <select class="styleSelect myAccountFont" data-change-select>
                         <option>Валюта 1</option>
                         <option>Валюта 2</option>
                         <option>Валюта 3</option>
                     </select>
                    </div>

                </div>
                <div class="tabMobSelectContainer">
                    <div class="selectFilter formFieldInSearchDeal" data-change-select-container>
                        <input type="text" class="formField" data-change-select-value value="Способ оплаты"/>
                        <select class="styleSelect myAccountFont" data-change-select>
                            <option>Способ оплаты 1</option>
                            <option>Способ оплаты 2</option>
                            <option>Способ оплаты 3</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="column clearAfter">
                <div class="tabMobInputContainer inputErrorContainer" data-error="false">
                    <div class="inputErrorMessage">Ошибка</div>
                    <input type="text" class="inputFilter" data-mask="numbers" placeholder="Минимум"/>
                </div>

                <div class="tabMobInputContainer inputErrorContainer" data-error="false">
                    <div class="inputErrorMessage">Ошибка</div>
                    <input type="text" class="inputFilter inputErrorElement" data-mask="numbers" placeholder="Максимум"/>
                </div>
            </div>

            <div class="column clearAfter">
                <div class="tabMobSearchButtonContainer">
                    <div class="buttonSend buttonSearchFilter">ПОИСК</div>
                </div>
            </div>

        </div>
        <!-- table and mobile search filter OFF -->

        <div class="tableSearchDealContainer">
            <div class="switchSearchDealTable clearAfter">
                <div class="functionSwitchSearchTable" data-system-toggle-id="history" data-system-toggle-handler="transactions" data-active-switch-search-deal="true">
                    <div class="text">Быстрая продажа</div>
                </div>
                <div class="functionSwitchSearchTable" data-system-toggle-id="history" data-system-toggle-handler="fiat_eth" data-active-switch-search-deal="false">
                    <div class="text">Быстрая покупка</div>
                </div>
            </div>

            <div class="switchSearchTableContainer">

                <!-- filter search ON-->
                <div class="filterPart clearAfter">
                    <div class="selectFilterContainer">
                        <div class="selectFilter formFieldInSearchDeal" data-change-select-container>
                            <select class="formField newSelectSearch">
                                <option>Валюта</option>
                                <option>Валюта 1</option>
                                <option>Валюта 2</option>
                                <option>Валюта 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="inputFilterContainer inputErrorContainer" data-error="false">
                        <div class="inputErrorMessage">Ошибка</div>
                        <input type="text" class="inputFilter" data-mask="numbers" placeholder="Минимум"/>
                    </div>
                    <div class="inputFilterContainer inputErrorContainer" data-error="false">
                        <div class="inputErrorMessage">Ошибка</div>
                        <input type="text" class="inputFilter inputErrorElement" data-mask="numbers" placeholder="Максимум"/>
                    </div>
                    <div class="selectFilterContainer">
                        <div class="selectFilter formFieldInSearchDeal" data-change-select-container>
                            <select class="formField newSelectSearch">
                                <option>Способ оплаты </option>
                                <option>Способ оплаты 1</option>
                                <option>Способ оплаты 2</option>
                                <option>Способ оплаты 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="buttonFilterContainer">
                        <div class="buttonSend buttonSearchFilter">ПОИСК</div>
                    </div>
                </div>
                <!-- filter search OFF-->

                <div data-system-toggle-id="history" data-system-toggle-content="transactions">

                    <!-- title table ON-->
                    <div class="rowTitleTableResult clearAfter">
                        <div class="cellTitleTableResult">#</div>
                        <div class="cellTitleTableResult">
                            <div class="subTitleTable clearAfter">
                                <div class="cellSubTitleTable">Продавец</div>
                                <div class="cellSubTitleTable">Способ оплаты</div>
                            </div>
                        </div>
                        <div class="cellTitleTableResult">
                            <div class="subTitleTable clearAfter">
                                <div class="cellSubTitleTable">Цена / Eth</div>
                                <div class="cellSubTitleTable">Лимит</div>
                            </div>
                        </div>
                        <div class="cellTitleTableResult"></div>
                    </div>
                    <!-- title table OFF-->

                    <!-- result table ON-->
                    <div class="resultTableContainer">
                        <div class="rowResultTable clearAfter">
                            <div class="cellResultTable">
                                <span data-active-number="true"></span>
                            </div>
                            <div class="cellResultTable">
                                <div class="subTitleTable clearAfter">
                                    <div class="cellSubTitleTable">
                                        <a href="">Kopilka</a>
                                    </div>
                                    <div class="cellSubTitleTable">Privat24</div>
                                </div>
                            </div>
                            <div class="cellResultTable">
                                <div class="subTitleTable clearAfter">
                                    <div class="cellSubTitleTable">5,675.75 EUR</div>
                                    <div class="cellSubTitleTable">0 - 300</div>
                                </div>
                            </div>
                            <div class="cellResultTable">
                                <div class="actionButton buyButton">
                                    <div class="text">КУПИТЬ</div>
                                </div>
                            </div>
                        </div>
                        <div class="rowResultTable clearAfter">
                            <div class="cellResultTable">
                                <span data-active-number="true"></span>
                            </div>
                            <div class="cellResultTable">
                                <div class="subTitleTable clearAfter">
                                    <div class="cellSubTitleTable">
                                        <a href="">Kopilka</a>
                                    </div>
                                    <div class="cellSubTitleTable">Privat24</div>
                                </div>
                            </div>
                            <div class="cellResultTable">
                                <div class="subTitleTable clearAfter">
                                    <div class="cellSubTitleTable">5,675.75 EUR</div>
                                    <div class="cellSubTitleTable">0 - 300</div>
                                </div>
                            </div>
                            <div class="cellResultTable">
                                <div class="actionButton changeButton">
                                    <div class="text">ИЗМЕНИТЬ</div>
                                </div>
                            </div>
                        </div>
                        <div class="rowResultTable clearAfter">
                            <div class="cellResultTable">
                                <span data-active-number="true"></span>
                            </div>
                            <div class="cellResultTable">
                                <div class="subTitleTable clearAfter">
                                    <div class="cellSubTitleTable">
                                        <a href="">Kopilka</a>
                                    </div>
                                    <div class="cellSubTitleTable">Privat24</div>
                                </div>
                            </div>
                            <div class="cellResultTable">
                                <div class="subTitleTable clearAfter">
                                    <div class="cellSubTitleTable">5,675.75 EUR</div>
                                    <div class="cellSubTitleTable">0 - 300</div>
                                </div>
                            </div>
                            <div class="cellResultTable">
                                <div class="actionButton buyButton">
                                    <div class="text">КУПИТЬ</div>
                                </div>
                            </div>
                        </div>
                        <div class="rowResultTable clearAfter">
                            <div class="cellResultTable">
                                <span data-active-number="true"></span>
                            </div>
                            <div class="cellResultTable">
                                <div class="subTitleTable clearAfter">
                                    <div class="cellSubTitleTable">
                                        <a href="">Kopilka</a>
                                    </div>
                                    <div class="cellSubTitleTable">Privat24</div>
                                </div>
                            </div>
                            <div class="cellResultTable">
                                <div class="subTitleTable clearAfter">
                                    <div class="cellSubTitleTable">5,675.75 EUR</div>
                                    <div class="cellSubTitleTable">0 - 300</div>
                                </div>
                            </div>
                            <div class="cellResultTable">
                                <div class="actionButton buyButton">
                                    <div class="text">КУПИТЬ</div>
                                </div>
                            </div>
                        </div>
                        <div class="rowResultTable clearAfter">
                            <div class="cellResultTable">
                                <span data-active-number="true"></span>
                            </div>
                            <div class="cellResultTable">
                                <div class="subTitleTable clearAfter">
                                    <div class="cellSubTitleTable">
                                        <a href="">Kopilka</a>
                                    </div>
                                    <div class="cellSubTitleTable">Privat24</div>
                                </div>
                            </div>
                            <div class="cellResultTable">
                                <div class="subTitleTable clearAfter">
                                    <div class="cellSubTitleTable">5,675.75 EUR</div>
                                    <div class="cellSubTitleTable">0 - 300</div>
                                </div>
                            </div>
                            <div class="cellResultTable">
                                <div class="actionButton buyButton">
                                    <div class="text">КУПИТЬ</div>
                                </div>
                            </div>
                        </div>
                        <div class="rowResultTable clearAfter">
                            <div class="cellResultTable">
                                <span data-active-number="true"></span>
                            </div>
                            <div class="cellResultTable">
                                <div class="subTitleTable clearAfter">
                                    <div class="cellSubTitleTable">
                                        <a href="">Kopilka</a>
                                    </div>
                                    <div class="cellSubTitleTable">Privat24</div>
                                </div>
                            </div>
                            <div class="cellResultTable">
                                <div class="subTitleTable clearAfter">
                                    <div class="cellSubTitleTable">5,675.75 EUR</div>
                                    <div class="cellSubTitleTable">0 - 300</div>
                                </div>
                            </div>
                            <div class="cellResultTable">
                                <div class="actionButton buyButton">
                                    <div class="text">КУПИТЬ</div>
                                </div>
                            </div>
                        </div>
                        <div class="rowResultTable clearAfter">
                            <div class="cellResultTable">
                                <span data-active-number="true"></span>
                            </div>
                            <div class="cellResultTable">
                                <div class="subTitleTable clearAfter">
                                    <div class="cellSubTitleTable">
                                        <a href="">Kopilka</a>
                                    </div>
                                    <div class="cellSubTitleTable">Privat24</div>
                                </div>
                            </div>
                            <div class="cellResultTable">
                                <div class="subTitleTable clearAfter">
                                    <div class="cellSubTitleTable">5,675.75 EUR</div>
                                    <div class="cellSubTitleTable">0 - 300</div>
                                </div>
                            </div>
                            <div class="cellResultTable">
                                <div class="actionButton buyButton">
                                    <div class="text">КУПИТЬ</div>
                                </div>
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



                <div class="display_none" data-system-toggle-id="history" data-system-toggle-content="fiat_eth">

                    <!-- title table ON-->
                    <div class="rowTitleTableResult clearAfter">
                        <div class="cellTitleTableResult">#</div>
                        <div class="cellTitleTableResult">
                            <div class="subTitleTable clearAfter">
                                <div class="cellSubTitleTable">Продавец</div>
                                <div class="cellSubTitleTable">Способ оплаты</div>
                            </div>
                        </div>
                        <div class="cellTitleTableResult">
                            <div class="subTitleTable clearAfter">
                                <div class="cellSubTitleTable">Цена / Eth</div>
                                <div class="cellSubTitleTable">Ограничения</div>
                            </div>
                        </div>
                        <div class="cellTitleTableResult"></div>
                    </div>
                    <!-- title table OFF-->

                    <!-- result table ON-->
                    <div class="resultTableContainer">
                        <div class="rowResultTable clearAfter">
                            <div class="cellResultTable">
                                <span data-active-number="true"></span>
                            </div>
                            <div class="cellResultTable">
                                <div class="subTitleTable clearAfter">
                                    <div class="cellSubTitleTable">
                                        <a href="">Kopilka</a>
                                    </div>
                                    <div class="cellSubTitleTable">Privat24</div>
                                </div>
                            </div>
                            <div class="cellResultTable">
                                <div class="subTitleTable clearAfter">
                                    <div class="cellSubTitleTable">5,675.75 EUR</div>
                                    <div class="cellSubTitleTable">0 - 300</div>
                                </div>
                            </div>
                            <div class="cellResultTable">
                                <div class="actionButton changeButton">
                                    <div class="text">ИЗМЕНИТЬ</div>
                                </div>
                            </div>
                        </div>
                        <div class="rowResultTable clearAfter">
                            <div class="cellResultTable">
                                <span data-active-number="true"></span>
                            </div>
                            <div class="cellResultTable">
                                <div class="subTitleTable clearAfter">
                                    <div class="cellSubTitleTable">
                                        <a href="">Kopilka</a>
                                    </div>
                                    <div class="cellSubTitleTable">Privat24</div>
                                </div>
                            </div>
                            <div class="cellResultTable">
                                <div class="subTitleTable clearAfter">
                                    <div class="cellSubTitleTable">5,675.75 EUR</div>
                                    <div class="cellSubTitleTable">0 - 300</div>
                                </div>
                            </div>
                            <div class="cellResultTable">
                                <div class="actionButton buyButton">
                                    <div class="text">ПРОДАТЬ</div>
                                </div>
                            </div>
                        </div>
                        <div class="rowResultTable clearAfter">
                            <div class="cellResultTable">
                                <span data-active-number="true"></span>
                            </div>
                            <div class="cellResultTable">
                                <div class="subTitleTable clearAfter">
                                    <div class="cellSubTitleTable">
                                        <a href="">Kopilka</a>
                                    </div>
                                    <div class="cellSubTitleTable">Privat24</div>
                                </div>
                            </div>
                            <div class="cellResultTable">
                                <div class="subTitleTable clearAfter">
                                    <div class="cellSubTitleTable">5,675.75 EUR</div>
                                    <div class="cellSubTitleTable">0 - 300</div>
                                </div>
                            </div>
                            <div class="cellResultTable">
                                <div class="actionButton buyButton">
                                    <div class="text">ПРОДАТЬ</div>
                                </div>
                            </div>
                        </div>
                        <div class="rowResultTable clearAfter">
                            <div class="cellResultTable">
                                <span data-active-number="true"></span>
                            </div>
                            <div class="cellResultTable">
                                <div class="subTitleTable clearAfter">
                                    <div class="cellSubTitleTable">
                                        <a href="">Kopilka</a>
                                    </div>
                                    <div class="cellSubTitleTable">Privat24</div>
                                </div>
                            </div>
                            <div class="cellResultTable">
                                <div class="subTitleTable clearAfter">
                                    <div class="cellSubTitleTable">5,675.75 EUR</div>
                                    <div class="cellSubTitleTable">0 - 300</div>
                                </div>
                            </div>
                            <div class="cellResultTable">
                                <div class="actionButton buyButton">
                                    <div class="text">ПРОДАТЬ</div>
                                </div>
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

            </div>
        </div>
    </div>
</div>
<!-- search deal OFF-->

<?php require_once "tpl/footer.tpl"; ?>

</body>
</html>
















