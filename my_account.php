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

<!-- my account ON-->
<div class="myAccountContainer pagesBg">
    <div class="generalWidth">
        <div class="headerText marginHeaderText">
            Мой аккаунт
        </div>

        <div class="generalBoxShadowContainer">

            <div class="innerBoxShadowPadding myAccountPagePadding">

                <!-- profile -->
                <div class="partContainer">
                    <div class="header">Профиль</div>

                    <div class="inputsContainer">
                        <div class="rowInputs clearAfter">
                            <div class="dataUserInputContainer">
                                <div class="titleField">
                                    Имя
                                </div>
                                <div class="inputErrorContainer" data-error="false">
                                    <div class="inputErrorMessage">Ошибка</div>
                                    <input type="text" class="formField inputErrorElement" placeholder="Ваше имя"/>
                                </div>
                            </div>
                            <div class="dataUserInputContainer">
                                <div class="titleField">
                                    Фамилия
                                </div>
                                <div class="inputErrorContainer" data-error="false">
                                    <div class="inputErrorMessage">Ошибка</div>
                                    <input type="text" class="formField inputErrorElement" placeholder="Ваша фамилия"/>
                                </div>
                            </div>
                        </div>
                        <div class="rowInputs clearAfter">
                            <div class="dataUserInputContainer">
                                <div class="titleField">
                                    Страна
                                </div>
                                <div class="selectFilter" data-change-select-container>
                                    <input type="text" class="formField" data-change-select-value value="Россия"/>
                                    <select class="styleSelect myAccountFont" data-change-select>
                                        <option>Россия 1</option>
                                        <option>Россия 2</option>
                                        <option>Россия 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="dataUserInputContainer">
                                <div class="titleField">
                                    Город
                                </div>
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
                    </div>
                </div>
                <!-- -->

                <!-- contact -->
                <div class="partContainer">
                    <div class="header">Контакты</div>

                    <div class="inputsContainer">
                        <div class="rowInputs clearAfter">
                            <div class="dataUserInputContainer">
                                <div class="titleField">
                                    E-mail
                                </div>
                                <div class="inputErrorContainer" data-error="false">
                                    <div class="inputErrorMessage">Ошибка</div>
                                    <input type="text" class="formField inputErrorElement" placeholder="Ваш email"/>
                                </div>
                            </div>
                            <div class="dataUserInputContainer">
                                <div class="titleField">
                                    Телефон
                                </div>
                                <div class="inputErrorContainer" data-error="false">
                                    <div class="inputErrorMessage">Ошибка</div>
                                    <input type="text" data-mask="phone" class="formField inputErrorElement"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- -->

                <!-- safety -->
                <div class="partContainer">
                    <div class="header">Безопасность</div>
                    <div class="text">
                        Двухфакторная аутентификация обязательна на Flat2Crypto. Вы можете использовать ссылку,
                        отправленную на ваш электронный адрес, или ОТР приложение (например Google Authenticator).
                    </div>
                    <div class="inputsContainer">
                        <div class="rowInputs clearAfter">
                            <div class="dataUserInputContainer mobilePaddingSafety">

                                <div class="titleField">
                                    Пароль
                                </div>

                                <div class="showPasswordContainer inputErrorContainer" data-show-password="false" data-error="false">
                                    <span class="showPasswordCheck" data-show-password-handler></span>
                                    <div class="inputErrorMessage">Ошибка</div>
                                    <input type="password" class="formField passwordInput inputErrorElement" data-show-password-input placeholder="Создайте новый пароль"/>
                                </div>

                                <div class="buttonAccountChange clearAfter">
                                    <div class="widthButton">
                                        <div class="buttonSend buttonChangeDataAccount">ИЗМЕНИТЬ</div>
                                    </div>
                                </div>

                            </div>
                            <div class="dataUserInputContainer mobilePaddingSafety">

                                <div class="titleField">
                                    Аутентификатор
                                </div>

                                <div class="selectFilter" data-change-select-container>
                                    <input type="text" class="formField" data-change-select-value value="Email"/>
                                    <select class="styleSelect myAccountFont" data-change-select>
                                        <option>Email 1</option>
                                        <option>Email 2</option>
                                        <option>Email 3</option>
                                    </select>
                                </div>

                                <div class="buttonAccountChange clearAfter">
                                    <div class="widthButton">
                                        <div class="buttonSend buttonChangeDataAccount">СОХРАНИТЬ</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- -->

                <!-- exit -->
                <div class="partContainer">
                    <div class="header exitAccountPadding">Выход</div>
                    <div class="textExit">
                        После использования общего устройства не забывайте выходить из аккаунта.
                    </div>
                    <div class="buttonAccountChange clearAfter">
                        <div class="widthExitButton">
                            <div class="buttonSend buttonExitAccount">ВЫХОД</div>
                        </div>
                    </div>
                </div>
                <!-- -->
            </div>
        </div>
    </div>
</div>
<!-- my account OFF-->

<?php require_once "tpl/footer.tpl"; ?>

</body>
</html>
















