<html>
<head>

    <meta charset="UTF-8"/>
    <title>F2C</title>
    <script src="resources/js/jquery.js"></script>
    <script src="resources/js/inputmask/jquery.inputmask.bundle.min.js"></script>
    <script src="resources/js/slider.js"></script>
    <script src="resources/js/map.js"></script>
    <link rel="stylesheet" href="resources/styles/fonts.css">
    <link rel="stylesheet" href="resources/styles/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="resources/js/inputmask/jquery.inputmask.bundle.min.js"></script>

    <script src="resources/js/my.js"></script>

</head>
<body>

<?php require_once "tpl/menu.tpl"; ?>

<!-- info panel ON-->
<div class="infoPanelContainer infoPanelContainerBottom pagesBg">
    <div class="generalWidth">
        <div class="headerText marginHeaderText">
            Информационная панель
        </div>

        <div class="generalBoxShadowContainer">
            <div class="innerBoxShadowPadding ">

                <div class="textInfoPanel paddingText">
                    На этой странице вы можете просматривать свои текущие объявления и сделки,
                    а также управлять ими.
                </div>

                <div class="balanceInfoContainer clearAfter">
                    <div class="balanceInfoItem">

                        <div class="headerContainer clearAfter">
                            <div class="textInfoPanel textPart mobilePadding">На вашем кошелке</div>
                            <div class="balanceCount">
                                <span>0 ETH</span> ≈ $0.00
                            </div>
                        </div>

                        <div class="infoPanelCheckboxCover">
                            <div class="infoPanelCheckboxItem">
                                <input type="checkbox"/>
                                <span></span>
                                Продажи временно приостановлены
                            </div>
                        </div>
                        <div class="infoPanelCheckboxCover">
                            <div class="infoPanelCheckboxItem">
                                <input type="checkbox"/>
                                <span></span>
                                Покупки временно приостановлены
                            </div>
                        </div>

                    </div>
                    <div class="balanceInfoItem">

                        <div class="headerContainer">
                            <div class="textInfoPanel">Условия</div>
                        </div>
                        <div class="textAdv">
                            Вы можете создать максимум 5 объявлений. Ограничение основано на объеме сделок,
                            совершенных вами в течение 30 дней, которые составляет 0.00000000 ETH.
                            Чтобы подробнее узнать об ограничениях на объявления, нажмите здесь.
                        </div>

                    </div>
                </div>

                <div class="tableSearchDealContainer">
                    <div class="switchSearchDealTable clearAfter">
                        <div class="functionSwitchPanelTable functionSwitchPanelNewWidthTable" data-active-switch-search-deal="true" data-system-toggle-id="user_page" data-system-toggle-handler="open_deal">
                            <div class="text">Открытые сделки <span>и объявления</span></div>
                        </div>
                        <div class="functionSwitchPanelTable" data-active-switch-search-deal="false" data-system-toggle-id="user_page" data-system-toggle-handler="close_deal">
                            <div class="text">Все закрытые сделки</div>
                        </div>
                        <div class="functionSwitchPanelTable" data-active-switch-search-deal="false" data-system-toggle-id="user_page" data-system-toggle-handler="cancel_deal">
                            <div class="text">Отмененные сделки</div>
                        </div>
                    </div>

                    <div class="switchSearchTableContainer titleInfoPanelTableContainer" data-system-toggle-id="user_page" data-system-toggle-content="open_deal">

                        <!-- title table ON-->
                        <div class="infoPanelTitleTableContainer">
                            <div class="rowInfoPanelTitleTable clearAfter">
                                <div class="cellInfoPanelTitleTable">#</div>
                                <div class="cellInfoPanelTitleTable clearAfter">
                                    <div class="subcellInfoPanelTable">Статус</div>
                                    <div class="subcellInfoPanelTable">Информация</div>
                                </div>
                                <div class="cellInfoPanelTitleTable clearAfter">
                                    <div class="subcellInfoPanelTable">Цена / Eth</div>
                                    <div class="subcellInfoPanelTable">Уравнение</div>
                                </div>
                                <div class="cellInfoPanelTitleTable">Создано</div>
                            </div>
                        </div>
                        <!-- title table OFF-->

                        <!-- result table ON-->
                        <div class="infoPanelTableContainer">

                            <div class="rowInfoPanelContainer clearAfter">
                                <div class="cellInfoPanelTable">1</div>
                                <div class="cellInfoPanelTable clearAfter">
                                    <div class="subCellInfoPanelTable">В работе 1</div>
                                    <div class="subCellInfoPanelTable">Nihilne te nocturnumghjkjhgdfgthjkjhgvc</div>
                                </div>
                                <div class="cellInfoPanelTable clearAfter">
                                    <div class="subCellInfoPanelTable">5,675.75 EUR</div>
                                    <div class="subCellInfoPanelTable">Уравнение</div>
                                </div>
                                <div class="cellInfoPanelTable">Создано в</div>
                            </div>

                        </div>
                        <!-- result table OFF-->
                    </div>


                    <div class="switchSearchTableContainer titleInfoPanelTableContainer display_none" data-system-toggle-id="user_page" data-system-toggle-content="close_deal">

                        <!-- title table ON-->
                        <div class="infoPanelTitleTableContainer">
                            <div class="rowInfoPanelTitleTable clearAfter">
                                <div class="cellInfoPanelTitleTable">#</div>
                                <div class="cellInfoPanelTitleTable clearAfter">
                                    <div class="subcellInfoPanelTable">Статус</div>
                                    <div class="subcellInfoPanelTable">Информация</div>
                                </div>
                                <div class="cellInfoPanelTitleTable clearAfter">
                                    <div class="subcellInfoPanelTable">Цена / Eth</div>
                                    <div class="subcellInfoPanelTable">Уравнение</div>
                                </div>
                                <div class="cellInfoPanelTitleTable">Создано</div>
                            </div>
                        </div>
                        <!-- title table OFF-->

                        <!-- result table ON-->
                        <div class="infoPanelTableContainer">

                            <div class="rowInfoPanelContainer clearAfter">
                                <div class="cellInfoPanelTable">1</div>
                                <div class="cellInfoPanelTable clearAfter">
                                    <div class="subCellInfoPanelTable">В работе 2</div>
                                    <div class="subCellInfoPanelTable">Nihilne te nocturnumghjkjhgdfgthjkjhgvc</div>
                                </div>
                                <div class="cellInfoPanelTable clearAfter">
                                    <div class="subCellInfoPanelTable">5,675.75 EUR</div>
                                    <div class="subCellInfoPanelTable">Уравнение</div>
                                </div>
                                <div class="cellInfoPanelTable">Создано в</div>
                            </div>

                        </div>
                        <!-- result table OFF-->
                    </div>



                    <div class="switchSearchTableContainer titleInfoPanelTableContainer display_none" data-system-toggle-id="user_page" data-system-toggle-content="cancel_deal">

                        <!-- title table ON-->
                        <div class="infoPanelTitleTableContainer">
                            <div class="rowInfoPanelTitleTable clearAfter">
                                <div class="cellInfoPanelTitleTable">#</div>
                                <div class="cellInfoPanelTitleTable clearAfter">
                                    <div class="subcellInfoPanelTable">Статус</div>
                                    <div class="subcellInfoPanelTable">Информация</div>
                                </div>
                                <div class="cellInfoPanelTitleTable clearAfter">
                                    <div class="subcellInfoPanelTable">Цена / Eth</div>
                                    <div class="subcellInfoPanelTable">Уравнение</div>
                                </div>
                                <div class="cellInfoPanelTitleTable">Создано</div>
                            </div>
                        </div>
                        <!-- title table OFF-->

                        <!-- result table ON-->
                        <div class="infoPanelTableContainer">

                            <div class="rowInfoPanelContainer clearAfter">
                                <div class="cellInfoPanelTable">1</div>
                                <div class="cellInfoPanelTable clearAfter">
                                    <div class="subCellInfoPanelTable">В работе 3</div>
                                    <div class="subCellInfoPanelTable">Nihilne te nocturnumghjkjhgdfgthjkjhgvc</div>
                                </div>
                                <div class="cellInfoPanelTable clearAfter">
                                    <div class="subCellInfoPanelTable">5,675.75 EUR</div>
                                    <div class="subCellInfoPanelTable">Уравнение</div>
                                </div>
                                <div class="cellInfoPanelTable">Создано в</div>
                            </div>

                        </div>
                        <!-- result table OFF-->
                    </div>



                </div>

                <div class="infoPanelPageButtons">
                    <button class="infoPanelPageButton">СОЗДАТЬ ПРЕДЛОЖЕНИЕ</button>
                    <button class="infoPanelPageButton">СОХРАНИТЬ</button>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- info panel OFF-->

<?php require_once "tpl/footer.tpl"; ?>

</body>
</html>
















