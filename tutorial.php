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

<!-- tutorial ON -->
<div class="tutorial">
	<div class="titleBlock">
		<div class="generalWidth">
			<div class="titleText">Руководство</div>
		</div>
	</div>
	<div class="generalWidth">
        <!-- steps tutorial ON -->
		<div class="mainPart">
			<div class="firstBlockContainer">
				<div class="line"></div>
				<div class="firstBlock">
					<div class="header">Регистрация</div>
					<div class="text">Заполните данные для регистрации.</div>
					<div class="text">Подтвердите электронную почту.</div>
					<div class="text">Поддержка 2 FA Google Authenticator.</div>
					<div class="text">Мы не требуем личную информацию.</div>
					<div class="button">
						<div class="buttonSend buttonChangeDataAccount">ЗАРЕГИСТРИРОВАТЬСЯ</div>
					</div>
				</div>
			</div>

			<div class="connectionLinesContainer">
				<div class="connectionLinesTop clearAfter">
					<div class="top"></div>
					<div class="top"></div>
				</div>
				<div class="connectionLinesBottom clearAfter">
					<div class="bottom"></div>
					<div class="bottom"></div>
				</div>
			</div>

			<div class="secondBlocksContainer clearAfter">
				<div class="second">
					<div class="header">Предложить сделку</div>
					<div class="text">Выберите предмет продажи и условия.</div>
					<div class="text">Укажите дополнительные условия.</div>
					<div class="text">Следуйте указаниям на странице.</div>
					<div class="text">Ожидайте покупателя.</div>
					<div class="text">При выставлении сделки средства блокируются.</div>
					<div class="text">F2C взимает комиссию с продавца.</div>
					<div class="button">
						<div class="buttonSend buttonChangeDataAccount">Создать СДЕЛКУ</div>
					</div>
				</div>
				<div class="second">
					<div class="header">Выбрать предложение</div>
					<div class="text">Выберете валюту для покупки.</div>
					<div class="text">Выберете способ оплаты.</div>
					<div class="text">Ознакомьтесь с условиями сделки.</div>
					<div class="text">Ознакомьтесь с репутацией продавца.</div>
					<div class="text">Выберите продавца.</div>
					<div class="text">Перейдите в окно для сделки.</div>
					<div class="text">F2C не взимает комиссию с покупателя.</div>
					<div class="button">
						<div class="buttonSend buttonChangeDataAccount">ТЕКУЩЕЕ ПРЕДЛОЖЕНИЕ</div>
					</div>
				</div>
			</div>

			<div class="connectionLinesPartTwoContainer">
				<div class="connectionLinesTop clearAfter">
					<div class="top"></div>
					<div class="top"></div>
				</div>
				<div class="connectionLinesBottom clearAfter">
					<div class="bottom"></div>
					<div class="bottom"></div>
				</div>
			</div>

			<div class="thirdBlockContainer clearAfter">
				<div class="block">
					<div class="header">Проведение сделки</div>
					<div class="text">Средства отправляются на отдельный счета
						для исключения мошенничества.
					</div>
					<div class="text">Координируйте действия в чате.</div>
					<div class="text">Переведите средства продавцу.</div>
					<div class="text">Проверьте перечисление средств.</div>
					<div class="text">Подтвердите взаимное исполнение
						обязательств.
					</div>
				</div>
				<div class="block">
                    <div class="button" data-resize-tutorial-image></div>
                </div>
			</div>
		</div>
        <!-- steps tutorial OFF -->

        <!-- dispute and help ON -->
        <div class="disputeHelpContainer clearAfter">
            <div class="block">
                <div class="header">Спор</div>
                <div class="text">
                    В случае если во время сделки возникают
                    разногласия, каждый из участников может нажать
                    на кнопку «начать спор»
                </div>
                <div class="text">
                    Независимый арбитр получает доступ к чату.</div>
                <div class="text">
                    Арбитр работает с двумя сторонами.
                </div>
                <div class="text">
                    Арбитр может запросить документы
                    подтверждающие транзакцию.
                </div>
                <div class="text">
                    После расследования арбитра принимается
                    решение о перечисление криптовалюты.
                </div>
                <div class="text">
                    Подтвердите взаимное исполнение обязательств.
                </div>
            </div>
            <div class="block">
                <div class="header">Служба поддержки</div>
                <div class="textSimple">
                    Задайте вопрос или опишите вашу проблему,
                    мы свяжемся с вами
                </div>
                <div class="contactPart">
                    <div class="titleField">
                        Ваше имя*
                    </div>
                    <div class="inputErrorContainer" data-error="false">
                        <div class="inputErrorMessage">Ошибка</div>
                        <input type="text" class="formField inputErrorElement"/>
                    </div>
                    <div class="titleField">
                        Email*
                    </div>
                    <div class="inputErrorContainer" data-error="false">
                        <div class="inputErrorMessage">Ошибка</div>
                        <input type="text" class="formField inputErrorElement"/>
                    </div>
                    <div class="titleField">
                        Message
                    </div>
                    <div class="inputErrorContainer" data-error="false">
                        <div class="inputErrorMessage">Ошибка</div>
                        <textarea class="formFieldText inputErrorElement"></textarea>
                    </div>
                    <div class="actionMessage clearAfter tutorialActionMessange">
                        <div class="actionPart tutorialActionPart" data-attach-cover>
                            <span data-text-attach>Прикрепить файл</span>
                            <input type="file" class="uploadFile" data-add-file-input>
                            <span data-file-unload></span>
                        </div>
                        <div class="actionPart tutorialActionPart">
                            <div class="buttonSend sendMessage">
                                ОТПРАВИТЬ
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- dispute and help OFF -->
	</div>
</div>
<!-- tutorial OFF-->

<!-- create ON -->
<div class="startBuySellContainer tutorialPAD">
    <div class="generalWidth">
        <div class="startBuySellHeader">
            Создайте кошелек <span>и начните </span> покупки-продажи
        </div>
        <div class="buttonCreatePurse">
            <div class="buttonSend sendMessage">
                Создать кошелек на F2C
            </div>
        </div>
    </div>
</div>
<!-- create OFF -->

<!-- resize tutorial popup ON -->
<div class="resizeTutorialPopup">
    <div class="generalWidth">
        <div class="popupContainer">
            <div class="closePopupIcon" data-close-tutorial></div>
        </div>
    </div>
</div>
<!-- resize tutorial popup OFF -->

<?php require_once "tpl/footer.tpl"; ?>

</body>
</html>
















