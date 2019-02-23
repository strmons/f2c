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

<!-- data user ON-->
<div class="dataUserContainer pagesBg">
    <div class="generalWidth">
        <div class="headerText marginHeaderText">
            Данные о пользователе
        </div>
        <div class="generalBoxShadowContainer">
            <div class="innerBoxShadowPadding">
                <div class="generalUserInfo clearAfter">
                    <div class="column">
                        <div class="rowGeneralInfo clearAfter">
                            <div class="cell">Имя пользователя:</div>
                            <div class="cell">Basadorovich</div>
                        </div>
                        <div class="rowGeneralInfo clearAfter">
                            <div class="cell">Статус:</div>
                            <div class="cell">Онлайн</div>
                        </div>
                        <div class="rowGeneralInfo clearAfter">
                            <div class="cell">Рейтинг доверия</div>
                            <div class="cell"><span>100%</span></div>
                        </div>
                        <div class="rowGeneralInfo clearAfter">
                            <div class="cell">Первая сделка:</div>
                            <div class="cell">1 год 2 месяца</div>
                        </div>
                        <div class="rowGeneralInfo clearAfter">
                            <div class="cell">Количество сделок:</div>
                            <div class="cell">26</div>
                        </div>
                        <div class="rowGeneralInfo clearAfter">
                            <div class="cell">Подтвержденных сделок:</div>
                            <div class="cell">
                                <span>7999+</span>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="rowGeneralInfo clearAfter">
                            <div class="cell">Объем сделки:</div>
                            <div class="cell">50-100 ETH</div>
                        </div>
                        <div class="rowGeneralInfo clearAfter">
                            <div class="cell">Количество Eth</div>
                            <div class="cell">
                                <span>3000+</span>
                            </div>
                        </div>
                        <div class="rowGeneralInfo clearAfter">
                            <div class="cell">Учетной запись создана:</div>
                            <div class="cell">24 Авг. 2018</div>
                        </div>
                        <div class="rowGeneralInfo clearAfter">
                            <div class="cell">Удостоверение личности:</div>
                            <div class="cell">Подтвержден</div>
                        </div>
                        <div class="rowGeneralInfo clearAfter">
                            <div class="cell">Номер телефона:</div>
                            <div class="cell">Подтвержден</div>
                        </div>
                        <div class="rowGeneralInfo clearAfter">
                            <div class="cell">Email:</div>
                            <div class="cell">Подтвержден</div>
                        </div>
                    </div>
                </div>

                <div class="tableSearchDealContainer">

                    <div class="switchSearchDealTable clearAfter">
                        <div class="functionSwitchSearchTable" data-active-switch-search-deal="true" data-system-toggle-id="user_page" data-system-toggle-handler="fast_sel">
                            <div class="text">Быстрая продажа</div>
                        </div>
                        <div class="functionSwitchSearchTable" data-active-switch-search-deal="false" data-system-toggle-id="user_page" data-system-toggle-handler="fast_bought">
                            <div class="text">Быстрая покупка</div>
                        </div>
                    </div>

                    <div class="switchSearchTableContainer" data-system-toggle-id="user_page" data-system-toggle-content="fast_sel">
                        <!-- title table ON-->
                        <div class="rowTitleTableResult clearAfter">
                            <div class="cellTitleTableResult">#</div>
                            <div class="cellTitleTableResult mobSellTabResult">
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
                        <div class="resultTableContainer resultTableContainerMobNew">
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
                                    <div class="actionButton changeButton">
                                        <div class="text">ИЗМЕНИТЬ</div>
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

                    <div class="switchSearchTableContainer display_none" data-system-toggle-id="user_page" data-system-toggle-content="fast_bought">
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
                        <div class="resultTableContainer resultTableContainerMobNew">
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
                                    <div class="actionButton changeButton">
                                        <div class="text">ИЗМЕНИТЬ</div>
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
</div>
<!-- data user OFF-->

<?php require_once "tpl/footer.tpl"; ?>

</body>
</html>
















