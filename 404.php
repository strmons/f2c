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

<!-- 404 page ON-->
<div class="errorPageContainer">
    <div class="generalWidth">
        <div class="errorPageContent clearAfter">
            <div class="cellErrorPage"></div>
            <div class="cellErrorPage">
                <div class="headerImageError"></div>
                <div class="errorPageHeader">Страница не найдена</div>
                <div class="errorPageText">
                    Возможно Вы попытались загрузить несуществующую или удаленную страницу. Попробуйте верхнюю навигацию или нажмите кнопку возврата.
                </div>
                <div class="errorPageButtonContainer">
                    <div class="buttonSend">ВЕРНУТЬСЯ</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 404 page OFF-->

<?php require_once "tpl/footer.tpl"; ?>

</body>
</html>
















