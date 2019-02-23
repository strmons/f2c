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

<div class="createAdvPage">
    <div class="generalWidth">
        <div class="createAdvPageHeader">
            Создать объявление
        </div>
        <div class="createAdvPageSubHeader">
            Правила и требования к объявлению.
        </div>
        <div class="createAdvPageRules">
            <div class="createAdvPageRuleItem">
                Для отображения объявлений вам необходимо иметь биткоины в кошельке Flat2Crypto. Для объявлений со способами оплаты онлайн необходимо располагать суммой в размере 0,04 ETH или более, а для местных объявлений (за наличные) — суммой в размере 0,04 ETH или более.
            </div>
            <div class="createAdvPageRuleItem">
                Чтобы иметь возможность использовать определенные способы оплаты, необходимо пройти проверку личности. Только после этого ваши объявления станут видимыми.
            </div>
            <div class="createAdvPageRuleItem">
                Сбор с разместивших объявление пользователей за каждую совершенную сделку составляет 1% от общей суммы сделки. <a href="" class="createAdvPageRuleItemLink">Информация обо всех сборах приводится на соответствующей странице нашего сайта.</a>
            </div>
            <div class="createAdvPageRuleItem">
                После открытия сделки изменить цену нельзя, за исключением случаев явной ошибки в цене.
            </div>
            <div class="createAdvPageRuleItem">
                Вам не разрешается покупать или продавать биткоины от имени других лиц (брокерство).
            </div>
            <div class="createAdvPageRuleItem">
                Вы можете пользоваться лишь счетами для оплаты, зарегистрированными на ваше собственное имя (платежи от третьих сторон запрещены!).
            </div>
            <div class="createAdvPageRuleItem">
                Вы должны указывать свои платежные реквизиты в объявлении или чате по сделке.
            </div>
            <div class="createAdvPageRuleItem">
                Весь обмен информацией должен происходить на сайте Flat2Crypto.
            </div>
            <div class="createAdvPageRuleItem">
                Способы оплаты, отмеченные как "С высокой степенью риска" сопряжены со значительным риском мошенничества. Будьте осмотрительны и всегда проверяйте личность ваших партнеров по сделке, если вы используете способ оплаты с высокой степенью риска.
            </div>
        </div>
        <div class="createAdvPageLimitDataCheckboxData boxClearAfter">
            <input type="checkbox"/>
            <span></span>
            Активно
        </div>
        <div class="createAdvPageSubHeader">
            Тип сделки
        </div>

        <div class="createAdvPageDealType">
            <div class="createAdvPageDealTypeItem clearAfter">
                <div class="createAdvPageDealTypeItemLeft">
                    <div class="newSelectCover">
                        <div class="newInputName">Я хочу</div>
                        <div class="newSelectCoverData" data-change-select-container>
                            <input type="text" class="newInputElement" data-change-select-value placeholder="Продать ETH"/>
                            <select class="newSelectElement" data-change-select>
                                <option>Продать ETH1</option>
                                <option>Продать ETH 2</option>
                                <option>Продать ETH 3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="createAdvPageDealTypeItemRight">
                    Какой тип объявления вы хотите создать? Если вы хотите продать криптовалюту, убедитесь, что в <a href="" class="createAdvPageDealTypeItemLink">вашем кошельке</a> Fiat2Crypto есть эфириумы.
                </div>
            </div>
            <div class="createAdvPageDealTypeItem clearAfter">
                <div class="createAdvPageDealTypeItemLeft">
                    <div class="newSelectCover">
                        <div class="newInputName">Местоположение</div>
                        <div class="newSelectCoverData" data-change-select-container>
                            <input type="text" class="newInputElement" data-change-select-value placeholder="Russia"/>
                            <select class="newSelectElement" data-change-select>
                                <option>Russia 1</option>
                                <option>Russia 2</option>
                                <option>Russia 3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="createAdvPageDealTypeItemRight">
                    Укажите страну, в рамках которой вы можете осуществлять платежи.
                </div>
            </div>
        </div>

        <div class="createAdvPageSubHeader">
            Дополнительная информация
        </div>

        <div class="createAdvPagePayType">
            <div class="newSelectCover">
                <div class="newInputName">Основной способ оплаты</div>
                <div class="newSelectCoverData" data-change-select-container>
                    <input type="text" class="newInputElement" data-change-select-value placeholder="Solid Trust Pay"/>
                    <select class="newSelectElement" data-change-select>
                        <option>Russia</option>
                        <option>Russia</option>
                        <option>Russia</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="clear"></div>

        <div class="createAdvPagePaySystem">
            <div class="newInputCover">
                <div class="newInputName">Банк платежной системы</div>
                <div class="inputErrorContainer" data-error="false">
                    <div class="inputErrorMessage">Ошибка</div>
                    <input type="text" class="newInputElement inputErrorElement" placeholder="Банк платежной системы"/>
                </div>
            </div>
        </div>
        <div class="clear"></div>

        <div class="createAdvPageAdditionCover">
            <div class="createAdvPageDealTypeItem clearAfter">
                <div class="createAdvPageDealTypeItemLeft">
                    <div class="newInputCover">
                        <div class="newInputName">Рыночная цена за 1 Eth в Rub</div>
                        <div class="inputErrorContainer" data-error="false">
                            <div class="inputErrorMessage">Ошибка</div>
                            <input type="text" class="newInputElement inputErrorElement" placeholder="897876"/>
                        </div>
                    </div>
                </div>
                <div class="createAdvPageDealTypeItemRight">
                    Поле определяет цену сделки. более подробная информация о расчете цены сделки приводится
                    в <a href="" class="createAdvPageDealOftenQuestion"> часто задаваемых вопросах</a>
                    в разделе по установлению цены
                </div>
            </div>
            <div class="createAdvPageDealTypeItem clearAfter">
                <div class="createAdvPageDealTypeItemLeft">
                    <div class="newInputCover">
                        <div class="newInputName">Прибыль</div>
                        <div class="createAdvPageRevenueCover inputErrorContainer" data-input-number-cover data-error="false">
                            <div class="inputErrorMessage">Ошибка</div>
                            <input type="text" class="newInputElement inputErrorElement" data-mask="numbers" data-input-number-input placeholder="897876"/>
                            <span class="createAdvPageRevenueArrowTop" data-input-number-hand="increase"></span>
                            <span class="createAdvPageRevenueArrowBottom" data-input-number-hand="decrease"></span>
                        </div>
                    </div>
                </div>
                <div class="createAdvPageDealTypeItemRight">
                    Размер прибыли, которую вы хотите получить сверх рыночной цены. Используйте отрицательное значение для покупки или продажи ниже рыночной цены, чтобы осуществить больше сделок. Для более сложного ценообразования используйте уравнение установления цены.
                </div>
            </div>
        </div>

        <div class="createAdvPagePrice">
            <div class="createAdvPagePriceItem clearAfter">
                <div class="createAdvPagePriceItemLeft">
                    Цена которую вы получите:
                </div>
                <div class="createAdvPagePriceItemRight">
                    21012.66 Rub / Eth
                </div>
            </div>
            <div class="createAdvPagePriceItem clearAfter">
                <div class="createAdvPagePriceItemLeft">
                    Цена что видна покупятелям:
                </div>
                <div class="createAdvPagePriceItemRight">
                    21012.66 Rub / Eth
                </div>
            </div>
        </div>

        <div class="createAdvPageLimit">
            <div class="createAdvPageSubHeader">
                Ограничение
            </div>

            <div class="createAdvPageLimitDataItem">
                <div class="newSelectCover">
                    <div class="newInputName">Валюта</div>
                    <div class="newSelectCoverData" data-change-select-container>
                        <input type="text" class="newInputElement" data-change-select-value placeholder="RUB"/>
                        <select class="newSelectElement" data-change-select>
                            <option>RUB 1</option>
                            <option>RUB 2</option>
                            <option>RUB 3</option>
                            <option>RUB</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="clear"></div>

            <div class="createAdvPageLimitDataCheckbox clearAfter">
                <div class="createAdvPageLimitDataCheckboxData">
                    <input type="checkbox"/>
                    <span></span>
                    Следить за ликвидностью
                </div>
                <div class="createAdvPageLimitDataCheckboxText">
                    Этот параметр ограничивает ликвидность этого объявления до максимального лимита транзакции. Покупатели не могут открыть и завершить сделки на сумму свыше указанной.
                </div>
            </div>

            <div class="createAdvPageDealTypeItem clearAfter createAdvPageLimitItemOffset">
                <div class="createAdvPageDealTypeItemLeft">
                    <div class="newInputCover">
                        <div class="newInputName">Минимальная сумма</div>
                        <div class="createAdvPageInputButton inputErrorContainer" data-error="false">
                            <div class="inputErrorMessage">Ошибка</div>
                            <input type="text" class="newInputElement inputErrorElement" data-mask="numbers" placeholder="897876"/>
                            <span class="createAdvPageInputButtonText">RUB</span>
                        </div>
                    </div>
                </div>
                <div class="createAdvPageDealTypeItemRight">
                    По выбору. Минимальная сумма одной транзакции.
                </div>
            </div>

            <div class="createAdvPageDealTypeItem clearAfter createAdvPageLimitItemOffset">
                <div class="createAdvPageDealTypeItemLeft">
                    <div class="newInputCover">
                        <div class="newInputName">Максимальная сумма</div>
                        <div class="createAdvPageInputButton inputErrorContainer" data-error="false">
                            <div class="inputErrorMessage">Ошибка</div>
                            <input type="text" class="newInputElement inputErrorElement" data-mask="numbers" placeholder="897876"/>
                            <span class="createAdvPageInputButtonText">RUB</span>
                        </div>
                    </div>
                </div>
                <div class="createAdvPageDealTypeItemRight">
                    По выбору. Максимальный сумма одной транзакции. Для продажи онлайн, ваш баланс Fiat2Crypto может также ограничить максимальный сумму сделки, подлежающую фондированию.
                </div>
            </div>

        </div>

        <div class="createAdvPagePayment">
            <div class="createAdvPageSubHeader">
                Информация платежей
            </div>
            <div class="createAdvPagePaymentText">
                Дополнительная информация о вашей торговле.
                <div>Пример 1: Эта реклама предназначена только для сделок с наличными.
                    Если вы хотите совершить оплату онлайн, свяжитесь с Fiat2Crypto.com/ad/1234.</div>
                <div>Пример 2: Делайте запрос только тогда, когда вы можете осуществить платеж наличными в течение 12 часов</div>
            </div>
        </div>

        <div class="createAdvPageAdditionInfo">
            <div class="newInputName">Дополнительная информация</div>
            <textarea class="createAdvPageAdditionInfoText"></textarea>
            <div class="createAdvPageAdditionInfoButton">
                <input type="submit" class="byPageSendFormButtonElement" value="РАЗМЕСТИТЬ ОБЪЯВЛЕНИЕ"/>
            </div>
        </div>

    </div>
</div>

<?php require_once "tpl/footer.tpl"; ?>

</body>
</html>
















