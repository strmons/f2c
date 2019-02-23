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
<!-- partner ON-->

<!-- header ON-->
<div class="headerPartnerContainer">
	<div class="generalWidth">
		<div class="title">
			Станьте нашим партнером
			<div>и</div>
			<span>зарабатывайте вместе с нами</span>
		</div>
		<a href="" class="joinButton buttonSend sendMessage">
			СТАТЬ ПАРТНЕРОМ
		</a>
	</div>
</div>
<!-- header OFF-->

<!-- content ON-->
<div class="partnerContentContainer">
	<div class="generalWidth">

		<div class="block">
			<div class="title">
				Ваша партнерская ссылка
			</div>
			<div class="content">
				<div class="inputContainer clearAfter">
					<input type="text" id="copyPartnerLink" readonly value="https://fiat2crypto.io/ru/placement/28/"/>
					<div data-copy-link-button class="copyButton buttonSend sendMessage">
						КОПИРОВАТЬ
					</div>
				</div>
				<div data-copy-link-button class="mobButtonCopy">Копировать</div>
			</div>
		</div>

		<div class="block">
			<div class="title statisticTitle">
				Статистика
			</div>
			<div class="content">
				<div class="text">
					На данный момент вы никого не привели и у вас <span>0</span> новых пользователей.
					<div></div>
					Общее число переходов по вашей ссылке <span>0</span>
				</div>
			</div>
		</div>

		<div class="block">
			<div class="title">
				Ваши выплаты
			</div>
			<div class="content">
				<div class="text">
					На данный момент выплат у вас еще нет.
					Все выплаты за приведенных пользователей выплачиваются по истечении совершения сделок партнером.
				</div>
			</div>
		</div>

		<div class="block">
			<div class="title">
				Приведенные пользователи
			</div>
			<div class="content">
				<div class="text">
					На данный момент количество приведенных вами пользователей <span>0</span>
				</div>
			</div>
		</div>

		<div class="block clearAfter">
			<div class="title bannerTitle">
				Рекламный баннер с вашим объявлением
			</div>
			<div class="imageContent">
				<img src="resources/images/banner.jpg" alt="banners"/>
			</div>
		</div>

	</div>
</div>
<!-- content OFF-->

<!-- search partner ON -->
<div class="searchPartnerContainer searchPartner">
	<div class="generalWidth">
		<div class="title">
			Площадка  <span></span> ищет партнеров заинтересованных в росте <div></div>криптоэкономики.
		</div>
	</div>
</div>
<!--  search pather OFF -->

<div class="aboutContainer aboutPartnerContainer">
	<div class="generalWidth">
		<div class="aboutPartnerWidth">
			<div class="headerText textAlingCenter forFuturePathers">
				Для партнеров
			</div>
			<div class="forPathersText">
				Стать нашим партнером просто заполните форму обратной связи
			</div>
			<div class="formContainer">
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
					<div class="buttonSendAboutPageContainer floatButtonPartner">
						<div class="buttonSend">
							ОТПРАВИТЬ
						</div>
					</div>
				</div>
				<div class="contactPart">
					<div class="smallHeader marginTopContactFooter">
						Контакты
					</div>
					<div class="contactDetailsRow addressAboutPage">
						123317, Москва,  Пресненская наб., 12,
					</div>
					<div class="contactDetailsRow phoneAboutPage">
						+7(800) 800 80 80
					</div>
					<div class="contactDetailsRow mailAboutPage">
						Hello@gmail.com
					</div>
					<div class="socialLinks">
						<a href="" class="socialLinkBg">
							<span></span>
						</a>
						<a href="" class="socialLinkBg">
							<span></span>
						</a>
						<a href="" class="socialLinkBg">
							<span></span>
						</a>
						<a href="" class="socialLinkBg">
							<span></span>
						</a>
						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</div>
<!-- about OFF -->

<div class="generalWidth"></div>
<!-- partner OFF-->

<?php require_once "tpl/footer.tpl"; ?>

</body>
</html>
