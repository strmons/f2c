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

<!-- Our clear commissions ON -->
<div class="ourCommissionContainer">
    <div class="generalWidth">
        <div class="title">Прозрачные комиссии</div>
        <div class="text">
            Сделки и регистрация
        </div>
        <span class="freeAbsolute">БЕСПЛАТНЫ</span>
        <div class="buttonLogContainer clearAfter">
            <div class="buttonSend sendMessage">
                Регистрация
            </div>
        </div>
    </div>
</div>
<!-- Our commissions OFF -->

<!-- Commissions ON-->
<div class="generalWidth">
    <div class="commissionContainer">

        <div class="title">
            Комиссии
        </div>
        <div>
            <div class="tabCommission clearAfter">
                <div class="item">
                    Комиссия на выставление сделки
                </div>
                <div class="item">1%</div>
            </div>
            <div class="tabCommission bottomBorderCommission clearAfter">
                <div class="item">
                    До 1 апреля 2019 года
                </div>
                <div class="item">Бесплатно</div>
            </div>
        </div>

        <div class="titleFree">
            Транзакции в кошельки пользователей <span>БЕСПЛАТНЫ</span>
        </div>

        <div>
            <div class="tabCommission bottomBorderCommission clearAfter">
                <div class="item">
                    За транзакции в другие кошельки поддерживающие блокчейн Etherium взимается комиссия:
                </div>
                <div class="item">Eth — сети</div>
            </div>
        </div>

       <!-- <div class="titleCom">
            Другие <span></span> комиссии
        </div>
        <div>
            <div class="tabCommission clearAfter">
                <div class="item">
                    За использование инфраструктуры взимается сбор в размере:
                </div>
                <div class="item">0.5%</div>
            </div>
            <div class="tabCommission bottomBorderCommission clearAfter">
                <div class="item">
                    В момент тестового периода <span></span>(3 месяца) комиссии:
                </div>
                <div class="item">не взимаются</div>
            </div>
        </div>
-->
    </div>
</div>
<!-- Commissions OFF -->

<!-- create ON -->
<div class="startBuySellContainer">
    <div class="generalWidth">

        <div class="buttonCreatePurse">
            <div class="buttonSend sendMessage buttonCreatePurseNew">
                Создать кошелек на F2C
            </div>
        </div>
    </div>
</div>
<!-- create OFF -->


<?php require_once "tpl/footer.tpl"; ?>

</body>
</html>

