<html>
<head>

    <meta charset="UTF-8"/>
    <title>F2C</title>
    <script src="resources/js/jquery.js"></script>
    <script src="resources/js/inputmask/jquery.inputmask.bundle.min.js"></script>

    <script src="resources/js/slider.js"></script>
    <script src="resources/js/map.js"></script>

    <script src="resources/js/baron.js"></script>
    <script src="resources/js/my.js"></script>
    <script src="resources/js/wrap.baron.min.js"></script>

    <link rel="stylesheet" href="resources/styles/fonts.css">
    <link rel="stylesheet" href="resources/styles/style.css">
    <link rel="stylesheet" href="resources/styles/scroll.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<?php require_once "tpl/menu.tpl"; ?>

<!-- data user ON-->
<div class="dataUserContainer pagesBg">
    <div class="generalWidth">
        <div class="headerText">
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
                            <div class="cell">Объем сделки:</div>
                            <div class="cell">50-100 ETH</div>
                        </div>
                    </div>
                    <div class="column">
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
                            <div class="cell">Подтверждение личности:</div>
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
                        <div class="functionSwitchSearchTable dataUserSwitch" data-active-switch-search-deal="true" data-system-toggle-id="user_page" data-system-toggle-handler="open_deal">
                            <div class="dataSwitch">Открытые сделки</div>
                        </div>
                        <div class="functionSwitchSearchTable dataUserSwitch" data-active-switch-search-deal="false" data-system-toggle-id="user_page" data-system-toggle-handler="reviews">
                            <div class="dataSwitch">Отзывы</div>
                        </div>
                    </div>
                    <!-- reviews -->
                    <div class="switchSearchTableContainer paddingSwitchDataUser" data-system-toggle-id="user_page" data-system-toggle-content="reviews">
                            <div class="reviewsContainer tableForScrollDataUser">

                                <div class="reviewContainer" data-review-comments-show="false">
                                    <div class="generalReviewHeader clearAfter">

                                        <div class="column">
                                            <div class="photoUserContainer">
                                                <img src="/resources/images/userPhoto.jpg" alt="user"/>
                                            </div>
                                            <div class="nameUserData">cryptoguy23</div>
                                        </div>
                                        <div class="column">
                                            <div class="countReviewsInfo">Пока сообщений нет — <span>+1 positive</span></div>
                                            <div class="columnUserLink">Amazon Gift Card</div>
                                            <div class="dateReviews"> Окт 2, 2018</div>
                                        </div>

                                    </div>

                                    <div class="commentsContainer">
                                        <div class="commentContainer">
                                            <div class="dataComment">26 августа 2018   20.00</div>
                                            <div class="textComment">
                                                <span>Zikasy: </span> Все сделки норма
                                            </div>
                                        </div>
                                        <div class="commentContainer">
                                            <div class="dataComment">26 августа 2018   20.00</div>
                                            <div class="textComment">
                                                <span>Zikasy: </span> Все сделки норма
                                            </div>
                                        </div>
                                        <div class="commentContainer">
                                            <div class="dataComment">26 августа 2018   20.00</div>
                                            <div class="textComment">
                                                <span>Zikasy: </span> Все сделки норма
                                            </div>
                                        </div>
                                        <div class="commentContainer">
                                            <div class="dataComment">26 августа 2018   20.00</div>
                                            <div class="textComment">
                                                <span>Zikasy: </span> Все сделки норма
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reviewContainerArrow" data-user-page-review-handler></div>
                                </div>
                                <div class="reviewContainer" data-review-comments-show="false">
                                    <div class="generalReviewHeader clearAfter">

                                        <div class="column">
                                            <div class="photoUserContainer">
                                                <img src="/resources/images/userPhoto.jpg" alt="user"/>
                                            </div>
                                            <div class="nameUserData">cryptoguy23</div>
                                        </div>
                                        <div class="column">
                                            <div class="countReviewsInfo">Пока сообщений нет — <span>+1 positive</span></div>
                                            <div class="columnUserLink">Amazon Gift Card</div>
                                            <div class="dateReviews"> Окт 2, 2018</div>
                                        </div>

                                    </div>

                                    <div class="commentsContainer">
                                        <div class="commentContainer">
                                            <div class="dataComment">26 августа 2018   20.00</div>
                                            <div class="textComment">
                                                <span>Zikasy: </span> Все сделки норма
                                            </div>
                                        </div>
                                        <div class="commentContainer">
                                            <div class="dataComment">26 августа 2018   20.00</div>
                                            <div class="textComment">
                                                <span>Zikasy: </span> Все сделки норма
                                            </div>
                                        </div>
                                        <div class="commentContainer">
                                            <div class="dataComment">26 августа 2018   20.00</div>
                                            <div class="textComment">
                                                <span>Zikasy: </span> Все сделки норма
                                            </div>
                                        </div>
                                        <div class="commentContainer">
                                            <div class="dataComment">26 августа 2018   20.00</div>
                                            <div class="textComment">
                                                <span>Zikasy: </span> Все сделки норма
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reviewContainerArrow" data-user-page-review-handler></div>
                                </div>
                                <div class="reviewContainer" data-review-comments-show="false">
                                    <div class="generalReviewHeader clearAfter">

                                        <div class="column">
                                            <div class="photoUserContainer">
                                                <img src="/resources/images/userPhoto.jpg" alt="user"/>
                                            </div>
                                            <div class="nameUserData">cryptoguy23</div>
                                        </div>
                                        <div class="column">
                                            <div class="countReviewsInfo">Пока сообщений нет — <span>+1 positive</span></div>
                                            <div class="columnUserLink">Amazon Gift Card</div>
                                            <div class="dateReviews"> Окт 2, 2018</div>
                                        </div>

                                    </div>

                                    <div class="commentsContainer">
                                        <div class="commentContainer">
                                            <div class="dataComment">26 августа 2018   20.00</div>
                                            <div class="textComment">
                                                <span>Zikasy: </span> Все сделки норма
                                            </div>
                                        </div>
                                        <div class="commentContainer">
                                            <div class="dataComment">26 августа 2018   20.00</div>
                                            <div class="textComment">
                                                <span>Zikasy: </span> Все сделки норма
                                            </div>
                                        </div>
                                        <div class="commentContainer">
                                            <div class="dataComment">26 августа 2018   20.00</div>
                                            <div class="textComment">
                                                <span>Zikasy: </span> Все сделки норма
                                            </div>
                                        </div>
                                        <div class="commentContainer">
                                            <div class="dataComment">26 августа 2018   20.00</div>
                                            <div class="textComment">
                                                <span>Zikasy: </span> Все сделки норма
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reviewContainerArrow" data-user-page-review-handler></div>
                                </div>
                                <div class="reviewContainer" data-review-comments-show="false">
                                    <div class="generalReviewHeader clearAfter">

                                        <div class="column">
                                            <div class="photoUserContainer">
                                                <img src="/resources/images/userPhoto.jpg" alt="user"/>
                                            </div>
                                            <div class="nameUserData">cryptoguy23</div>
                                        </div>
                                        <div class="column">
                                            <div class="countReviewsInfo">Пока сообщений нет — <span>+1 positive</span></div>
                                            <div class="columnUserLink">Amazon Gift Card</div>
                                            <div class="dateReviews"> Окт 2, 2018</div>
                                        </div>

                                    </div>

                                    <div class="commentsContainer">
                                        <div class="commentContainer">
                                            <div class="dataComment">26 августа 2018   20.00</div>
                                            <div class="textComment">
                                                <span>Zikasy: </span> Все сделки норма
                                            </div>
                                        </div>
                                        <div class="commentContainer">
                                            <div class="dataComment">26 августа 2018   20.00</div>
                                            <div class="textComment">
                                                <span>Zikasy: </span> Все сделки норма
                                            </div>
                                        </div>
                                        <div class="commentContainer">
                                            <div class="dataComment">26 августа 2018   20.00</div>
                                            <div class="textComment">
                                                <span>Zikasy: </span> Все сделки норма
                                            </div>
                                        </div>
                                        <div class="commentContainer">
                                            <div class="dataComment">26 августа 2018   20.00</div>
                                            <div class="textComment">
                                                <span>Zikasy: </span> Все сделки норма
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reviewContainerArrow" data-user-page-review-handler></div>
                                </div>
                                <div class="reviewContainer" data-review-comments-show="false">
                                    <div class="generalReviewHeader clearAfter">

                                        <div class="column">
                                            <div class="photoUserContainer">
                                                <img src="/resources/images/userPhoto.jpg" alt="user"/>
                                            </div>
                                            <div class="nameUserData">cryptoguy23</div>
                                        </div>
                                        <div class="column">
                                            <div class="countReviewsInfo">Пока сообщений нет — <span>+1 positive</span></div>
                                            <div class="columnUserLink">Amazon Gift Card</div>
                                            <div class="dateReviews"> Окт 2, 2018</div>
                                        </div>

                                    </div>

                                    <div class="commentsContainer">
                                        <div class="commentContainer">
                                            <div class="dataComment">26 августа 2018   20.00</div>
                                            <div class="textComment">
                                                <span>Zikasy: </span> Все сделки норма
                                            </div>
                                        </div>
                                        <div class="commentContainer">
                                            <div class="dataComment">26 августа 2018   20.00</div>
                                            <div class="textComment">
                                                <span>Zikasy: </span> Все сделки норма
                                            </div>
                                        </div>
                                        <div class="commentContainer">
                                            <div class="dataComment">26 августа 2018   20.00</div>
                                            <div class="textComment">
                                                <span>Zikasy: </span> Все сделки норма
                                            </div>
                                        </div>
                                        <div class="commentContainer">
                                            <div class="dataComment">26 августа 2018   20.00</div>
                                            <div class="textComment">
                                                <span>Zikasy: </span> Все сделки норма
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reviewContainerArrow" data-user-page-review-handler></div>
                                </div>
                                <div class="reviewContainer" data-review-comments-show="false">
                                    <div class="generalReviewHeader clearAfter">

                                        <div class="column">
                                            <div class="photoUserContainer">
                                                <img src="/resources/images/userPhoto.jpg" alt="user"/>
                                            </div>
                                            <div class="nameUserData">cryptoguy23</div>
                                        </div>
                                        <div class="column">
                                            <div class="countReviewsInfo">Пока сообщений нет — <span>+1 positive</span></div>
                                            <div class="columnUserLink">Amazon Gift Card</div>
                                            <div class="dateReviews"> Окт 2, 2018</div>
                                        </div>

                                    </div>

                                    <div class="commentsContainer">
                                        <div class="commentContainer">
                                            <div class="dataComment">26 августа 2018   20.00</div>
                                            <div class="textComment">
                                                <span>Zikasy: </span> Все сделки норма
                                            </div>
                                        </div>
                                        <div class="commentContainer">
                                            <div class="dataComment">26 августа 2018   20.00</div>
                                            <div class="textComment">
                                                <span>Zikasy: </span> Все сделки норма
                                            </div>
                                        </div>
                                        <div class="commentContainer">
                                            <div class="dataComment">26 августа 2018   20.00</div>
                                            <div class="textComment">
                                                <span>Zikasy: </span> Все сделки норма
                                            </div>
                                        </div>
                                        <div class="commentContainer">
                                            <div class="dataComment">26 августа 2018   20.00</div>
                                            <div class="textComment">
                                                <span>Zikasy: </span> Все сделки норма
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reviewContainerArrow" data-user-page-review-handler></div>
                                </div>
                                <div class="reviewContainer" data-review-comments-show="false">
                                    <div class="generalReviewHeader clearAfter">

                                        <div class="column">
                                            <div class="photoUserContainer">
                                                <img src="/resources/images/userPhoto.jpg" alt="user"/>
                                            </div>
                                            <div class="nameUserData">cryptoguy23</div>
                                        </div>
                                        <div class="column">
                                            <div class="countReviewsInfo">Пока сообщений нет — <span>+1 positive</span></div>
                                            <div class="columnUserLink">Amazon Gift Card</div>
                                            <div class="dateReviews"> Окт 2, 2018</div>
                                        </div>

                                    </div>

                                    <div class="commentsContainer">
                                        <div class="commentContainer">
                                            <div class="dataComment">26 августа 2018   20.00</div>
                                            <div class="textComment">
                                                <span>Zikasy: </span> Все сделки норма
                                            </div>
                                        </div>
                                        <div class="commentContainer">
                                            <div class="dataComment">26 августа 2018   20.00</div>
                                            <div class="textComment">
                                                <span>Zikasy: </span> Все сделки норма
                                            </div>
                                        </div>
                                        <div class="commentContainer">
                                            <div class="dataComment">26 августа 2018   20.00</div>
                                            <div class="textComment">
                                                <span>Zikasy: </span> Все сделки норма
                                            </div>
                                        </div>
                                        <div class="commentContainer">
                                            <div class="dataComment">26 августа 2018   20.00</div>
                                            <div class="textComment">
                                                <span>Zikasy: </span> Все сделки норма
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reviewContainerArrow" data-user-page-review-handler></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--  -->

                    <!-- open deal -->
                    <div class="switchSearchTableContainer paddingSwitchFastDeals"  data-system-toggle-id="user_page" data-system-toggle-content="open_deal">
                        <div class="openDealContainer">

                            <!-- open sale -->
                            <div class="title titleMobile">Покупка эфириумов</div>
                            <!-- title table ON-->
                            <div class="rowTitleTableResult openSaleMobile clearAfter">
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
                                <div class="rowResultTable  openDealsRowTable clearAfter">
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
                                        <div class="actionButton viewButton">
                                            <div class="text">ПРОСМОТР СДЕЛКИ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rowResultTable openDealsRowTable clearAfter">
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
                                        <div class="actionButton viewButton">
                                            <div class="text">ПРОСМОТР СДЕЛКИ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rowResultTable openDealsRowTable clearAfter">
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
                                        <div class="actionButton viewButton">
                                            <div class="text">ПРОСМОТР СДЕЛКИ</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- title table OFF-->
                            <!-- -->

                            <!-- open buy-->
                            <div class="title marginTitle">Продажа эфириумов</div>
                            <!-- title table ON-->
                            <div class="rowTitleTableResult openBuyMobile clearAfter">
                                <div class="cellTitleTableResult">#</div>
                                <div class="cellTitleTableResult">
                                    <div class="subTitleTable clearAfter">
                                        <div class="cellSubTitleTable">Покупатель</div>
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
                                <div class="rowResultTable openDealsRowTable clearAfter">
                                    <div class="noOpenDeals">Открытых сделок нет</div>
                                </div>
                            </div>
                            <!-- title table OFF-->
                            <!-- -->
                        </div>
                    </div>
                    <!-- -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- data user OFF-->

<?php require_once "tpl/footer.tpl"; ?>

</body>
</html>
















