<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Ваша заявка принята в обработку.</title>
    <!--[if lte IE 9]><script src="oldies/oldies.js" charset="utf-8"></script><![endif]-->
    <link rel="stylesheet" href="css/main.css">
    <meta charset="utf-8">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <?
        include 'php/url-params.php';
    ?>
</head>

<body class="page page_thanks">
    
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NRBXHS6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    

        <header class="first-screen__header header">
            <div class="container">
                <div class="header__in">
                    <a href="https://www.binbank.ru" target="_blank" class="header__logo">
                        <img src="img/global/logo.png" alt="" class="header__logo-img">
                    </a>
                    <div class="header__right">
                        <p class="header__phone-out">
                            <a href="tel:88005555577" class="header__phone">8 800 555 5577</a>
                        </p>
                        <div class="header__links">
                            <a href="https://www.binbank.ru/branches/offices/list/" target="_blank" class="header__departments">
                                Офисы
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="thanks">
            <div class="container">
                <p class="thanks__title1">
                    <span class="thanks__title1-name"><? echo $gender_in_russian.' '.$user_name; ?></span>,
                    <br>спасибо за заявку!
                </p>
                <p class="thanks__title2">
                    Персональный менеджер банка в ближайшее время свяжется с вами
                </p>
            </div>
        </section>



        <div class="page-thanks-bottom">
            <section class="socials">
                <div class="container">
                    <p class="socials__title1">Делитесь с друзьями своим&nbsp;опытом</p>
                    <div class="socials__items">
                        <a href="http://facebook.com/binbank.ru" target="_blank" class="socials__item socials__item_fb"></a>
                        <a href="https://twitter.com/binbank_ru" target="_blank" class="socials__item socials__item_tw"></a>
                        <a href="https://instagram.com/binbank_ru/" target="_blank" class="socials__item socials__item_ig"></a>
                        <a href="http://vk.com/binbank" target="_blank" class="socials__item socials__item_vk"></a>
                        <a href="http://ok.ru/binbank" target="_blank" class="socials__item socials__item_ok"></a>
                    </div>
                </div>
            </section>


            <footer class="footer">
                <div class="container">
                    <div class="footer__container">
                        <div class="footer__left">
                            <a href="#" target="_blank" class="footer__tarrifs">
                                Тарифы и документы
                            </a>
                        </div>
                        <div class="footer__center">
                            <p class="footer__copyright">
                                ПАО &laquo;БИНБАНК&raquo;. Генеральная лицензия Банка России на&nbsp;осуществление банковских операций &#8470;&nbsp;323 от&nbsp;18.11.2016
                            </p>
                        </div>
                        <div class="footer__right">
                            <a href="tel:88005555577" class="footer__phone">8 800 555 5577</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>






    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
