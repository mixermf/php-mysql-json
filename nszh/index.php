<?
    include './php/utm.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8">
    <title>БИНБАНК: Воплощаем мечты в жизнь!</title>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <!--[if lte IE 9]><script src="oldies/oldies.js" charset="utf-8"></script><![endif]-->
    <link rel="stylesheet" href="css/main.css?2">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1">
</head>

<body>


    <section class="first-screen" id="top">
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


        <div class="first-screen__main">
            <div class="container">
                <h1 class="first-screen__title1 first-animate" data-delay="500">
                    <span class="first-screen__title1-in">
                        Растим миллионеров
                        <br>в надежных условиях
                    </span>
                </h1>
                <div class="first-screen__btn-out first-animate" data-delay="500">
                    <button class="first-screen__btn btn btn_blue scroller" href="#contact">
                        <span class="btn__in">
                            Подать заявку
                        </span>
                    </button>
                </div>
            </div>

            <div class="first-screen__scroller-out">
                <a href="#what" class="first-screen__scroller scroller">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43.15 16.89">
                      <path fill="none" stroke="#6faedd" stroke-width="2" stroke-miterlimit="10" d="M42.58.82l-21 14.84L.58.82"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>


    <section class="what section" id="what">
        <div class="container">
            <h2 class="what__title1 title1">
                Накопительное страхование жизни (НСЖ)
            </h2>
            <p class="what__text">
                НСЖ идеально подойдет для тех, кто хочет накопить за&nbsp;долгий период определенную сумму, но&nbsp;боится, что из-за непредвиденных жизненных обстоятельств не&nbsp;сможет вносить платежи. БИНБАНК совместно с&nbsp;ведущими страховыми компаниями рынка предлагает программы для любых потребностей клиента.
            </p>
        </div>
    </section>

    <section class="programs section" id="programs">
        <div class="container">
            <h2 class="programs__title1 title1">
                Страховые программы
            </h2>
            <div class="programs__items">
                <div class="programs-item">
                    <p class="programs-item__title">
                        <span class="programs-item__title-in">
                            ЗАЩИТА СЕМЬИ
                        </span>
                    </p>
                    <div class="programs-item__body">
                        <ul class="programs-item__list">
                            <li class="programs-item__list-item">Выбор регулярности платежа</li>
                            <li class="programs-item__list-item">Ежегодный взнос от 25 тыс. до 200 тыс. руб.</li>
                            <li class="programs-item__list-item">Срок программы – 10 лет</li>
                            <li class="programs-item__list-item">Включены возмещения в случае ущерба здоровью.</li>
                        </ul>
                        <button class="programs-item__btn" data-toggle="modal" data-target="#programm-modal-family-protection">
                            <i class="programs-item__btn-plus"></i>
                            <span class="programs-item__btn-text">Подробнее</span>
                        </button>
                    </div>
                </div>
                
                <div class="programs-item">
                    <p class="programs-item__title">
                        <span class="programs-item__title-in">
                            ЗАЩИТА ЗДОРОВЬЯ
                        </span>
                    </p>
                    <div class="programs-item__body">
                        <ul class="programs-item__list">
                            <li class="programs-item__list-item">Ежегодный взнос от 400 тыс. рублей</li>
                            <li class="programs-item__list-item">Срок программы – 7 лет</li>
                            <li class="programs-item__list-item">Включено бесплатное ежегодное обследование и лечение в Израиле, Германии или России в случае диагностирования болезни</li>
                        </ul>
                        <button class="programs-item__btn" data-toggle="modal" data-target="#programm-modal-health-protection">
                            <i class="programs-item__btn-plus"></i>
                            <span class="programs-item__btn-text">Подробнее</span>
                        </button>
                    </div>
                </div>
                
                <div class="programs-item">
                    <p class="programs-item__title">
                        <span class="programs-item__title-in">
                            ЗАЩИТА <br class="xs-hidden">ЗДОРОВЬЯ ДЕТИ
                        </span>
                    </p>
                    <div class="programs-item__body">
                        <ul class="programs-item__list">
                            <li class="programs-item__list-item">Ежегодный взнос от 200 тыс. рублей</li>
                            <li class="programs-item__list-item">Срок программы – 7 лет</li>
                            <li class="programs-item__list-item">Включено бесплатное ежегодное обследование и лечение в Израиле, Германии или России в случае диагностирования болезни</li>
                        </ul>
                        <button class="programs-item__btn" data-toggle="modal" data-target="#programm-modal-protecting-children-health">
                            <i class="programs-item__btn-plus"></i>
                            <span class="programs-item__btn-text">Подробнее</span>
                        </button>
                    </div>
                </div>
                
                <div class="programs-item">
                    <p class="programs-item__title">
                        <span class="programs-item__title-in">
                            БИН СЕМЬЯ
                        </span>
                    </p>
                    <div class="programs-item__body">
                        <ul class="programs-item__list">
                            <li class="programs-item__list-item">Выбор регулярности платежа</li>
                            <li class="programs-item__list-item">Ежегодный взнос от 50 тыс. руб./год.</li>
                            <li class="programs-item__list-item">Срок программы от 10 до 40 лет</li>
                            <li class="programs-item__list-item">Включены возмещения в случае серьезного ущерба здоровью</li>
                            <li class="programs-item__list-item">Дополнительно: страхование от диагностирования смертельно опасных заболеваний</li>
                        </ul>
                        <button class="programs-item__btn" data-toggle="modal" data-target="#programm-modal-bin-family">
                            <i class="programs-item__btn-plus"></i>
                            <span class="programs-item__btn-text">Подробнее</span>
                        </button>
                    </div>
                </div>
                
                <div class="programs-item">
                    <p class="programs-item__title">
                        <span class="programs-item__title-in">
                            БИН ДЕТИ
                        </span>
                    </p>
                    <div class="programs-item__body">
                        <ul class="programs-item__list">
                            <li class="programs-item__list-item">Выбор регулярности платежа</li>
                            <li class="programs-item__list-item">Ежегодный взнос от 50 тыс. руб./год.</li>
                            <li class="programs-item__list-item">Срок программы от 7 до 22 лет</li>
                            <li class="programs-item__list-item">Включены возмещения в случае серьезного ущерба здоровью</li>
                            <li class="programs-item__list-item">Дополнительно: страхование от диагностирования смертельно опасных заболеваний, получения телесных повреждений</li>
                        </ul>
                        <button class="programs-item__btn" data-toggle="modal" data-target="#programm-modal-bin-children">
                            <i class="programs-item__btn-plus"></i>
                            <span class="programs-item__btn-text">Подробнее</span>
                        </button>
                    </div>
                </div>
                
                <div class="programs-item">
                    <p class="programs-item__title">
                        <span class="programs-item__title-in">
                            СЕМЕЙНЫЕ ЦЕННОСТИ
                        </span>
                    </p>
                    <div class="programs-item__body">
                        <ul class="programs-item__list">
                            <li class="programs-item__list-item">Ежегодный взнос от 200 тыс. рублей</li>
                            <li class="programs-item__list-item">Срок программы – 7 лет</li>
                            <li class="programs-item__list-item">Включено бесплатное ежегодное обследование и лечение в Израиле, Германии или России в случае диагностирования болезни</li>
                        </ul>
                        <button class="programs-item__btn" data-toggle="modal" data-target="#programm-modal-family-values">
                            <i class="programs-item__btn-plus"></i>
                            <span class="programs-item__btn-text">Подробнее</span>
                        </button>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <section class="principles section" id="principles">
        <div class="container">
            <h2 class="principles__title1 title1">
                Принципы работы на примере продукта 
                <br class="hidden-xs">«Семейные ценности»
            </h2>
            <div class="principles__items">
                <div class="principles-item principles-item_1">
                    <p class="principles-item__name">
                        Ежегодный взнос
                    </p>
                    <p class="principles-item__big">
                        100 000 <span class="icon-rouble">a</span>
                    </p>
                    <div class="principles-item__multi"></div>
                </div>
                <div class="principles-item principles-item_2">
                    <p class="principles-item__name">
                        Срок программы
                    </p>
                    <p class="principles-item__big">
                        10 лет
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="advantages section" id="advantages">
        <div class="container">
            <div class="advantages__items">
                <div class="advantages__item">
                    <div class="advantages__icon-out">
                        <img src="img/advantages/icons/1.svg" alt="" class="advantages__icon">
                    </div>
                    <div class="advantages__body">
                        <p class="advantages__title">
                            Гарантированная выплата
                            <br><span class="advantages__title-big">1 000 000 <span class="icon-rouble">a</span></span>
                        </p>
                        <p class="advantages__text">
                            В&nbsp;конце программы вы&nbsp;накопите существенную сумму для реализации намеченных планов. <br>Эта сумма прописана в&nbsp;договоре страхования
                        </p>
                    </div>
                </div>

                <div class="advantages__item">
                    <div class="advantages__icon-out">
                        <img src="img/advantages/icons/3.svg" alt="" class="advantages__icon">
                    </div>
                    <div class="advantages__body">
                        <p class="advantages__title">
                            Налоговый вычет
                            <br><span class="advantages__title-big">13%</span>
                        </p>
                        <p class="advantages__text">
                            Ежегодно вы&nbsp;имеете право на&nbsp;получение налогового вычета от&nbsp;каждого взноса. Порядок предоставления социального налогового вычета определен&nbsp;пп. 4&nbsp;п. 1&nbsp;ст.&nbsp;219 Налогового кодекса
                        </p>
                    </div>
                </div>

                <div class="advantages__item">
                    <div class="advantages__icon-out">
                        <img src="img/advantages/icons/2.svg" alt="" class="advantages__icon">
                    </div>
                    <div class="advantages__body">
                        <p class="advantages__title">
                            Страховая защита
                            <br><span class="advantages__title-big">40 раз</span>
                        </p>
                        <p class="advantages__text">
                            Уже с&nbsp;первого дня вы&nbsp;застрахованы на&nbsp;сумму, превышающую ваш взнос в&nbsp;программу. Пропорция страховой суммы к&nbsp;взносу фиксирована и&nbsp;не&nbsp;зависит от&nbsp;его размера
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="get section" id="get">
        <div class="container">
            <div class="get__inner">
                <h2 class="get__title1">
                    <span class="get__title1-line get__title1-line_1">При наступлении страхового случая вы&nbsp;получите</span>
                    <span class="get__title1-line get__title1-line_2 color-blue">от&nbsp;1&nbsp;000&nbsp;000&nbsp;<span class="icon-rouble">a</span>&nbsp;&mdash; до&nbsp;4&nbsp;000&nbsp;000&nbsp;<span class="icon-rouble">a</span><sup>*</sup></span>
                </h2>
                <p class="get__link-out">
                    <a href="#" data-toggle="modal" data-target="#advantages-price-modal" class="get__link">
                        <sup>*</sup>
                        <span class="get__link-text">Пример суммарных выплат</span>
                    </a>
                </p>
                <button class="btn btn_blue get__btn scroller" href="#contact">
                    <span class="btn__in">
                        подать заявку
                    </span>
                </button>
            </div>
        </div>
    </section>


    <section class="section contact" id="contact">
        <div class="container">
            <h2 class="contact__title1 title1">Получите бесплатную консультацию по&nbsp;страхованию</h2>
            <form class="horizontal-form contactform">
                
                <div class="horizontal-form__row">
                    <div class="horizontal-form__controls-group horizontal-form__col">
                        <div class="horizontal-form__input-out">
                            <input type="text" placeholder="Имя*" name="name" class="horizontal-form__input">
                        </div>
                    </div>

                    <div class="horizontal-form__controls-group horizontal-form__col">
                        <div class="horizontal-form__input-out">
                            <input type="tel" placeholder="Телефон*" name="phone" class="horizontal-form__input phonemask">
                        </div>
                    </div>
                </div>


                <div class="horizontal-form__row">
                    <div class="horizontal-form__controls-group horizontal-form__col">
                        <div class="horizontal-form__input-out">
                            <select name="city" id="city" class="horizontal-form_select" style="width:100%"></select>
                        </div>
                    </div>
                    
                    
                    <div class="horizontal-form__controls-group horizontal-form__col">
                        <div class="horizontal-form__input-out">
                            <select name="office" id="office" class="horizontal-form_select" style="width:100%" disabled="disabled"></select>
                        </div>
                        <p class="horizontal-form__offices-link-out">
                            <a href="http://premium.binbank.ru/branches/offices/map/" target="_blank" class="horizontal-form__offices-link">
                                Посмотреть офисы на карте
                            </a>
                        </p>
                    </div>
                </div>

                <div class="horizontal-form__row-line">
                    <div class="horizontal-form__controls-group horizontal-form__inline">
                        <div class="checkbox horizontal-form__checkbox">
                            <input id="personal-data" type="checkbox" class="checkbox__native" name="replenishcheck" checked="checked">    
                    
                            <label for="personal-data" class="checkbox__label horizontal-form__checkbox-label">
                                <i class="checkbox__icon"></i>
                                <p class="checkbox__text">
                                    <a href="#" class="checkbox__link" data-toggle="modal" data-target="#personal-data-modal">
                                        Я согласен на обработку персональных данных
                                    </a>
                                    <sup class="horizontal-form__sup">*</sup>
                                </p>
                            </label>
                        </div>
                    </div>
                    
                    <div class="horizontal-form__controls-group horizontal-form__inline">
                        <p class="horizontal-form__requires-text">
                            <sup class="horizontal-form__sup">*</sup>Поля обязательные для заполнения
                        </p>
                    </div>
                </div>

                <div class="horizontal-form__controls-group horizontal-form__controls-group">
                    <button type="submit" class="horizontal-form__btn btn btn_blue">
                        подать заявку
                    </button>
                </div>

                <input type="hidden" name="utm_source" value="<? echo $utm_source ?>">
                <input type="hidden" name="utm_medium" value="<? echo $utm_medium ?>">
                <input type="hidden" name="utm_campaign" value="<? echo $utm_campaign ?>">
                <input type="hidden" name="utm_term" value="<? echo $utm_term ?>">
                <input type="hidden" name="utm_content" value="<? echo $utm_content ?>">
            </form>
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


    <div class="modal fade personal-data-modal" id="personal-data-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close modal-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <div class="modal-body">
                    <p class="personal-data-modal__title">СОГЛАШЕНИЕ НА ОБРАБОТКУ
                        <br>ПЕРСОНАЛЬНЫХ ДАННЫХ</p>
                    <div class="personal-data-modal__text">
                        <div class="personal-data-modal__text-item">1. Я выражаю свое согласие на осуществление Банком, как оператором персональных данных (регистрационный номер — 08-0033159, на основании приказа Федеральной службы по надзору в сфере связи, информационных технологий и массовых коммуникаций (Роскомнадзор) № 303 от 30.12.2008; юридический адрес: г. Москва, ул. Гродненская д. 5а), обработки (включая сбор, запись, систематизацию, накопление, хранение, уточнение (обновление, изменение), извлечение, использование, передачу, включая трансграничную (распространение, предоставление, доступ), обезличивание, блокирование, удаление, уничтожение), как с использованием средств автоматизации (автоматизированная обработка), так и без использования таких средств (неавтоматизированная обработка), моих персональных данных, а именно: фамилия, имя, отчество (в т.ч. прежние); дата рождения; место рождения; паспортные данные или данные иного документа, удостоверяющего личность (в т.ч. серия, номер, дата выдачи, наименование органа, выдавшего документ) и гражданство; пол; адрес места жительства (по паспорту и фактический) и дата регистрации по месту жительства или по месту пребывания; данные миграционной карты, документа, подтверждающего право иностранного гражданина или лица без гражданства на пребывание (проживание) в Российской Федерации; контактная информация; сведения об образовании, трудовой деятельности, заработной плате и иных доходах и расходах, сведения о кредитной истории, воинском учете, семейном, социальном и имущественном положении, идентификационный номер налогоплательщика, сведения о номере и серии страхового свидетельства государственного пенсионного страхования, фото и видеоизображение, а также иная информация, необходимая для достижения указанных целей и предусмотренная действующим законодательством РФ, в соответствии с требованиями Федерального закона от 27.07.2006 № 152-ФЗ «О персональных данных». Указанные мной персональные данные предоставляются в целях предоставления услуг, получения кредита, заключения и исполнения договоров на предоставление услуг и выполнения работ, осуществления возложенных на Банк законодательством Российской Федерации функций, а также в целях информирования о других услугах Банка, ПАО «БИНБАНК кредитные карты», а также иных партнеров Банка (в целях продвижения товаров, работ, услуг на рынке путем осуществления прямых контактов со мной с помощью средств связи).</div>
                        <div class="personal-data-modal__text-item">2. Банк вправе поручить обработку моих персональных данных другому лицу, в том числе ПАО «БИНБАНК кредитные карты» (127299, г. Москва, ул. Космонавта Волкова, д. 14), а также иным лицам, в соответствии с чем настоящее согласие на обработку персональных данных считается данным мною этому лицу. Наименования и адреса данных лиц указаны на официальном сайте Банка, а также в офисах Банка по обслуживанию клиентов.</div>
                        <div class="personal-data-modal__text-item">3. Я выражаю свое согласие на обработку своих персональных данных в целях предоставления мне Банком, ПАО «БИНБАНК кредитные карты» и иными партнерами Банка (в том числе посредством привлечения Банком для этих целей третьих лиц) рекламной информации по услугам Банка, ПАО «БИНБАНК кредитные карты» и иных партнеров Банка посредством использования телефонной, факсимильной, подвижной радиотелефонной связи, электронных средств связи (включая SMS-сообщения), а также почтовой и других средств связи.</div>
                        <div class="personal-data-modal__text-item">4. Настоящее согласие действительно в течение 5 лет с даты его предоставления, в случае если иное не предусмотрено законодательством Российской Федерации. Согласие может быть отозвано мной при предоставлении в Банк заявления в простой письменной форме в соответствии с требованиями законодательства Российской Федерации.</div>
                        <div class="personal-data-modal__text-item">5. Я выражаю свое согласие на предоставление Банком в целях формирования моей кредитной истории всех необходимых сведений обо мне, о моих обязательствах по договору и иной информации, предусмотренной Федеральным законом от 30.12.2004 № 218-ФЗ «О кредитных историях», в одно или несколько бюро кредитных историй в порядке, предусмотренном указанным Федеральным законом. Право выбора бюро кредитных историй предоставляется мною Банку по его усмотрению и дополнительного согласования со мной не требует.</div>
                        <div class="personal-data-modal__text-item">6. Выражаю свое согласие на проверку моей кредитной истории, хранящейся в бюро кредитных историй, Банком, а также получение Банком кредитного отчета из одного или нескольких бюро кредитных историй. При этом предоставляю Банку право выбора без дополнительного согласования со мной кредитного бюро, в который (-ые) будет произведен запрос (-ы), а также поданы сведения по моей кредитной истории.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade programm-modal" id="programm-modal-family-values" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close modal-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <div class="modal-body">
                    <p class="programm-modal__title">
                        СЕМЕЙНЫЕ ЦЕННОСТИ СК&nbsp;&laquo;РГС-Жизнь&raquo;
                    </p>

                    <div class="programm-modal__paragraph">
                        <p class="programm-modal__paragraph-title">
                            ПРЕИМУЩЕСТВА
                        </p>
                        <ul class="programm-modal__list">
                            <li class="programm-modal__list-item">Дисциплина и&nbsp;накопления: возможность накопить нужную сумму и&nbsp;получить все в&nbsp;запланированный срок.</li>
                            <li class="programm-modal__list-item">Страховая защита: страхование действует круглосуточно по&nbsp;всему миру.</li>
                            <li class="programm-modal__list-item">Юридическая защита капитала: накопленные в&nbsp;рамках программы средства не&nbsp;подлежат разделу при имущественных спорах, конфискации или изъятию по&nbsp;решению суда. Страховые выплаты производятся только лицам, указанным в&nbsp;Договоре страхования.</li>
                            <li class="programm-modal__list-item">Налогообложение: возможность получения налогового вычета&nbsp;13% ежегодно. Порядок предоставления социального налогового вычета определен&nbsp;пп. 4&nbsp;п. 1&nbsp;ст.&nbsp;219 Налогового кодекса.</li>
                            <li class="programm-modal__list-item">Особый порядок наследования: средства не&nbsp;включаются в&nbsp;состав наследства, поэтому нет необходимости ожидать 6&nbsp;месяцев до&nbsp;момента их&nbsp;получения.</li>
                            <li class="programm-modal__list-item">Дополнительный доход: возможность получения дополнительного инвестиционного дохода. Клиент участвует в&nbsp;инвестиционном доходе страховой компании.</li>
                            <li class="programm-modal__list-item">Универсальное решение: отсутствие медицинского андеррайтинга делает доступным этот продукт для любого клиента&nbsp;&mdash; суммы взносов и&nbsp;страховых выплат фиксированные и&nbsp;подходят для любого пола и&nbsp;возраста Застрахованного.</li>
                        </ul>
                    </div>

                    <div class="programm-modal__paragraph">
                        <p class="programm-modal__paragraph-title">
                            ОСНОВНЫЕ ПАРАМЕТРЫ ПРОДУКТА
                        </p>
                        <ul class="programm-modal__list">
                            <li class="programm-modal__list-item">Фиксированный срок действия программы: 10&nbsp;лет.</li>
                            <li class="programm-modal__list-item">Вы&nbsp;сами выбираете комфортный размер ежегодного взноса, исходя из&nbsp;финансовых возможностей и&nbsp;суммы, которую планируете накопить.</li>
                            <li class="programm-modal__list-item">Ежегодные взносы фиксированные: от&nbsp;25&nbsp;до&nbsp;200&nbsp;тыс. рублей в&nbsp;год на&nbsp;выбор клиента с&nbsp;шагом в&nbsp;25&nbsp;тыс. руб. Валюта&nbsp;&mdash; рубли.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade programm-modal" id="programm-modal-bin-children" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close modal-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <div class="modal-body">
                    <p class="programm-modal__title">
                        БИН дети СК&nbsp;&laquo;РГС-Жизнь&raquo;
                    </p>
                    <div class="programm-modal__paragraph">
                        <p class="programm-modal__text">
                           Оформите полис страхования &laquo;БИН ДЕТИ&raquo;&nbsp;&mdash; и&nbsp;вам не&nbsp;о&nbsp;чем будет беспокоиться.
                        </p>
                    </div>

                    <div class="programm-modal__paragraph">
                        <p class="programm-modal__paragraph-title">
                            ПРЕИМУЩЕСТВА
                        </p>
                        <ul class="programm-modal__list">
                            <li class="programm-modal__list-item">Освобождение от&nbsp;регулярных уплат страховых взносов при потере трудоспособности (присвоении&nbsp;I группы инвалидности) или уходе из&nbsp;жизни.</li>
                            <li class="programm-modal__list-item">Вложения не&nbsp;подлежат разделу при имущественных спорах.</li>
                            <li class="programm-modal__list-item">Юридическая защита: страховые выплаты производятся только лицам, указанным в&nbsp;договоре страхования (вне зависимости от&nbsp;порядка наследования).</li>
                            <li class="programm-modal__list-item">В&nbsp;случае получения ребенком телесных повреждений&nbsp;&mdash; возмещение от&nbsp;10&nbsp;000 до&nbsp;1&nbsp;000&nbsp;000&nbsp;рублей, в&nbsp;зависимости от&nbsp;тяжести травм.</li>
                        </ul>
                    </div>

                    <div class="programm-modal__paragraph">
                        <p class="programm-modal__paragraph-title">
                            КАК ЭТО РАБОТАЕТ?
                        </p>
                        <ul class="programm-modal__list">
                            <li class="programm-modal__list-item">Вы&nbsp;приобретаете полис страхования на&nbsp;срок 7&ndash;22&nbsp;года.</li>
                            <li class="programm-modal__list-item">Ежегодно&nbsp;/ раз в&nbsp;полгода вносите определенный платеж.</li>
                            <li class="programm-modal__list-item">В&nbsp;конце срока вложения зачисляются на&nbsp;счет.</li>
                            <li class="programm-modal__list-item">В&nbsp;случае ухода из&nbsp;жизни выгодоприобретатели получают сумму досрочно.</li>
                            <li class="programm-modal__list-item">Если вы&nbsp;серьезно заболели, получили увечья&nbsp;&mdash; выплата происходит досрочно вместе со&nbsp;страховой суммой.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade programm-modal" id="programm-modal-bin-family" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close modal-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <div class="modal-body">
                    <p class="programm-modal__title">
                        БИН СЕМЬЯ СК&nbsp;&laquo;РГС-Жизнь&raquo;
                    </p>
                    <div class="programm-modal__paragraph">
                        <p class="programm-modal__text">
                           Создайте надежную финансовую базу с&nbsp;полисом страхования &laquo;БИН СЕМЬЯ&raquo;.
                        </p>
                    </div>
                    
                    <div class="programm-modal__paragraph">
                        <p class="programm-modal__paragraph-title">
                            ПРЕИМУЩЕСТВА
                        </p>
                        <ul class="programm-modal__list">
                            <li class="programm-modal__list-item">100% сохранность накоплений и&nbsp;дополнительный инвестиционный доход.</li>
                            <li class="programm-modal__list-item">В&nbsp;случае ухода из&nbsp;жизни&nbsp;&mdash; выплата 100% страховой суммы вашим близким.</li>
                            <li class="programm-modal__list-item">Дополнительное страхование рисков &laquo;Телесные повреждения&raquo; или &laquo;Тяжелые телесные повреждения&raquo;, получения инвалидности (I&nbsp;и&nbsp;II&nbsp;групп).</li>
                            <li class="programm-modal__list-item">Налоговые льготы и&nbsp;невозможность взыскания третьими лицами.</li>
                        </ul>
                    </div>

                    <div class="programm-modal__paragraph">
                        <p class="programm-modal__paragraph-title">
                            КАК ЭТО РАБОТАЕТ?
                        </p>
                        <ul class="programm-modal__list">
                            <li class="programm-modal__list-item">Вы&nbsp;приобретаете полис страхования на&nbsp;срок 10&ndash;40&nbsp;лет.</li>
                            <li class="programm-modal__list-item">Выбираете срок и&nbsp;регулярность, вносите определенный платеж (раз в&nbsp;полгода или ежегодно)&nbsp;&mdash; формируете финансовую подушку безопасности.</li>
                            <li class="programm-modal__list-item">Если вы&nbsp;серьезно заболели, получили увечья&nbsp;&mdash; выплата происходит досрочно вместе со&nbsp;страховой суммой. Вы&nbsp;приобретаете полис страхования на&nbsp;срок 10&ndash;40&nbsp;лет.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade programm-modal" id="programm-modal-protecting-children-health" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close modal-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <div class="modal-body">
                    <p class="programm-modal__title">
                        Защита здоровья дети. СК&nbsp;&laquo;АльфаСтрахование-Жизнь&raquo;
                    </p>
                    <div class="programm-modal__paragraph">
                        <p class="programm-modal__text">
                           &laquo;Защита здоровья Дети&raquo;&nbsp;&mdash; программа накопительного страхования жизни, позволяющая не&nbsp;только сформировать необходимый капитал на&nbsp;будущее, но&nbsp;и&nbsp;следить за&nbsp;здоровьем ребенка, обеспечить ему своевременное и&nbsp;качественное лечение. В&nbsp;рамках программы ваш ребенок будет каждый год проходить полное медицинское обследование всего организма (check-up) абсолютно бесплатно.
                        </p>
                    </div>
                    <div class="programm-modal__paragraph">
                        <p class="programm-modal__paragraph-title">
                            Преимущества:
                        </p>
                        <ul class="programm-modal__list programm-modal__list_num">
                            <li class="programm-modal__list-item">Ежегодный медицинский сheck-up за&nbsp;счет страховой компании.</li>
                            <li class="programm-modal__list-item">Лучшие детские диагностические центры России и&nbsp;самое современное оборудование.</li>
                            <li class="programm-modal__list-item">Личный консьерж подберет удобное время визита и&nbsp;запишет на&nbsp;check-up.</li>
                            <li class="programm-modal__list-item">По&nbsp;итогам обследования врач сформирует детальную оценку развития ребенка, даст рекомендации по&nbsp;правильному питанию, режиму отдыха индивидуально для вашего ребенка.</li>
                            <li class="programm-modal__list-item">Полный отчет и&nbsp;все анализы будут доступны в&nbsp;личном онлайн-кабинете в&nbsp;любое время.</li>
                            <li class="programm-modal__list-item">Если обнаружится критическое заболевание&nbsp;&mdash; ребенку будет организовано лечение за&nbsp;счет страховой компании в&nbsp;лучших клиниках Израиля и&nbsp;Германии.</li>
                            <li class="programm-modal__list-item">Компенсируются расходы на&nbsp;самое дорогостоящее лечение: лечение онкологических заболеваний&nbsp;&mdash; от&nbsp;химиотерапии до&nbsp;хирургических операций, операции на&nbsp;центральной и&nbsp;периферической нервной системе, трансплантация органов.</li>
                            <li class="programm-modal__list-item">В&nbsp;программу входит оплата авиабилетов для пациента и&nbsp;двух сопровождающих. Обеспечивается комфортное пребывание в&nbsp;стране, где будет проходить лечение: русскоговорящий координатор, трансферы, размещение родственников в&nbsp;отеле, оперативное решение всех вопросов.</li>
                        </ul>
                    </div>


                    <div class="programm-modal__paragraph">
                        <p class="programm-modal__paragraph-title">
                            Пример работы программы:
                        </p>
                        <ul class="programm-modal__list">
                            <li class="programm-modal__list-item">Ежегодный взнос&nbsp;&mdash; 400&nbsp;тыс. рублей</li>
                            <li class="programm-modal__list-item">Срок программы&nbsp;&mdash; 7&nbsp;лет</li>
                        </ul>
                    </div>

                    <div class="chart-how-works programm-modal__chart programm-modal__chart_how-works">
                        <img src="img/programs/how-works/chart/xs.svg" alt="" class="chart-how-works__img chart-how-works__img_xs programm-modal__chart-img">
                        <img src="img/programs/how-works/chart/sm.svg" alt="" class="chart-how-works__img chart-how-works__img_sm programm-modal__chart-img">
                    </div>


                    <div class="programm-modal__paragraph">
                        <p class="programm-modal__paragraph-title">
                            Условия и&nbsp;стоимость программы
                        </p>
                        <ul class="programm-modal__list">
                            <li class="programm-modal__list-item">Возраст застрахованного ребенка на&nbsp;момент начала страхования от&nbsp;3&nbsp;до&nbsp;17&nbsp;лет, на&nbsp;момент окончания срока страхования&nbsp;&mdash; не&nbsp;более 24&nbsp;лет.</li>
                            <li class="programm-modal__list-item">Срок программы&nbsp;&mdash; 7&nbsp;лет</li>
                            <li class="programm-modal__list-item">Организация check-up проходит при поддержке компании &laquo;Медоблако&raquo; (www.medoblako.ru)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade programm-modal" id="programm-modal-health-protection" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close modal-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <div class="modal-body">
                    <p class="programm-modal__title">
                        Защита здоровья. СК&nbsp;&laquo;АльфаСтрахование-Жизнь&raquo;
                    </p>
                    <div class="programm-modal__paragraph">
                        <p class="programm-modal__text">
                           &laquo;Защита здоровья&raquo;&nbsp;&mdash; программа накопительного страхования жизни, позволяющая не&nbsp;только накопить крупную сумму денег, но&nbsp;и&nbsp;заботиться о&nbsp;своем здоровье, проходя каждый год полное медицинское обследование (check-up) всего организма абсолютно бесплатно.
                        </p>
                    </div>
                    <div class="programm-modal__paragraph">
                        <p class="programm-modal__paragraph-title">
                            Преимущества:
                        </p>
                        <ul class="programm-modal__list programm-modal__list_num">
                            <li class="programm-modal__list-item">Ежегодный медицинский сheck-up за&nbsp;счет страховой компании.</li>
                            <li class="programm-modal__list-item">Лучшие российские клиники, специализирующиеся на&nbsp;комплексных медицинских обследованиях.</li>
                            <li class="programm-modal__list-item">Личный консьерж подберет удобное время визита и&nbsp;запишет на&nbsp;check-up.</li>
                            <li class="programm-modal__list-item">Обследование занимает всего 1&nbsp;день. Вам не&nbsp;придется приезжать в&nbsp;клинику повторно, все результаты будут готовы в&nbsp;день обследования.</li>
                            <li class="programm-modal__list-item">По&nbsp;итогам обследования личный врач обобщит все диагнозы, даст рекомендации исходя из&nbsp;особенностей вашего организма.</li>
                            <li class="programm-modal__list-item">Полный отчет и&nbsp;все анализы будут доступны в&nbsp;личном онлайн-кабинете в&nbsp;любое время.</li>
                            <li class="programm-modal__list-item">Если обнаружится критическое заболевание&nbsp;&mdash; вам будет организовано лечение за&nbsp;счет страховой компании (!) в&nbsp;лучших клиниках Израиля и&nbsp;Германии.</li>
                        </ul>
                    </div>


                    <div class="programm-modal__paragraph">
                        <p class="programm-modal__paragraph-title">
                            Пример работы программы:

                        </p>
                        <ul class="programm-modal__list">
                            <li class="programm-modal__list-item">Ежегодный взнос&nbsp;&mdash; 400&nbsp;тыс. рублей</li>
                            <li class="programm-modal__list-item">Срок программы&nbsp;&mdash; 7&nbsp;лет</li>
                        </ul>
                    </div>

                    <div class="chart-how-works programm-modal__chart programm-modal__chart_how-works">
                        <img src="img/programs/how-works/chart/xs.svg" alt="" class="chart-how-works__img chart-how-works__img_xs programm-modal__chart-img">
                        <img src="img/programs/how-works/chart/sm.svg" alt="" class="chart-how-works__img chart-how-works__img_sm programm-modal__chart-img">
                    </div>


                    <div class="programm-modal__paragraph">
                        <p class="programm-modal__paragraph-title">
                            Условия и&nbsp;стоимость программы
                        </p>
                        <ul class="programm-modal__list">
                            <li class="programm-modal__list-item">Возраст застрахованного на&nbsp;дату начала срока страхования&nbsp;&mdash; от&nbsp;18&nbsp;до&nbsp;55&nbsp;лет включительно, на&nbsp;дату окончания срока страхования&nbsp;&mdash; до&nbsp;65&nbsp;лет.</li>
                            <li class="programm-modal__list-item">Срок программы&nbsp;&mdash; 7&nbsp;лет</li>
                            <li class="programm-modal__list-item">Организация check-up проходит при поддержке компании &laquo;Медоблако&raquo; (www.medoblako.ru).</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <div class="modal fade programm-modal" id="programm-modal-family-protection" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close modal-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <div class="modal-body">
                    <p class="programm-modal__title">
                        Защита семьи. СК&nbsp;&laquo;АльфаСтрахование-Жизнь&raquo;
                    </p>
                    <div class="programm-modal__paragraph">
                        <p class="programm-modal__text">
                           &laquo;Защита семьи&raquo;&nbsp;&mdash; программа финансовой защиты от&nbsp;непредвиденных жизненных обстоятельств. С&nbsp;помощью программы возможно не&nbsp;только накопить крупную сумму, но&nbsp;и&nbsp;получить существенную страховую защиту. Программа позволяет накапливать деньги, избегая соблазна их&nbsp;потратить, и&nbsp;при этом быть спокойным за&nbsp;свою семью.
                        </p>
                    </div>
                    
                    <div class="programm-modal__paragraph">
                        <p class="programm-modal__paragraph-title">
                            Защитите своих близких и&nbsp;реализуйте намеченную цель:
                        </p>
                        <ul class="programm-modal__list">
                            <li class="programm-modal__list-item">Обеспечить будущее детям</li>
                            <li class="programm-modal__list-item">Накопить на&nbsp;мечту</li>
                            <li class="programm-modal__list-item">Защитить семью</li>
                        </ul>
                    </div>


                    <div class="programm-modal__paragraph">
                        <p class="programm-modal__paragraph-title">
                            Преимущества программы:
                        </p>
                        <ul class="programm-modal__list programm-modal__list_num">
                            <li class="programm-modal__list-item">Гарантированный возврат всех оплаченных взносов по&nbsp;окончании программы. Страховая компания гарантирует 100% возврат суммы ваших взносов. Это прописано в&nbsp;договоре страхования.</li>
                            <li class="programm-modal__list-item">Гарантированные денежные выплаты в&nbsp;крупном размере в&nbsp;случае непредвиденных ситуаций с&nbsp;жизнью и&nbsp;здоровьем&nbsp;&mdash; уже с&nbsp;первого дня вы&nbsp;застрахованы на&nbsp;сумму до&nbsp;40&nbsp;раз превышающую ваш платеж. Пропорция страховой суммы к&nbsp;взносу фиксирована и&nbsp;не&nbsp;зависит от&nbsp;его размера.</li>
                        </ul>
                    </div>

                    <div class="programm-modal__paragraph">
                        <table class="programm-modal__table">
                            <tr>
                                <td colspan="2">
                                    Единовременные выплаты по&nbsp;рискам (из&nbsp;расчета взноса 100&nbsp;тыс. рублей):
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Инвалидность в&nbsp;результате несчастного случая 1&nbsp;гр.
                                </td>
                                <td>
                                    1&nbsp;млн. рублей
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Уход из&nbsp;жизни по&nbsp;любой причине
                                </td>
                                <td>
                                    1&nbsp;млн. рублей
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Уход из&nbsp;жизни в&nbsp;результате несчастного случая
                                </td>
                                <td>
                                    2&nbsp;млн. рублей
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Уход из&nbsp;жизни в&nbsp;результате ДТП
                                </td>
                                <td>
                                    4&nbsp;млн. рублей
                                </td>
                            </tr>
                        </table>
                    </div>


                    <div class="programm-modal__paragraph">
                        <ul class="programm-modal__list programm-modal__list_num" style="counter-reset: item 2">
                            <li class="programm-modal__list-item">Налоговый вычет&nbsp;&mdash; 13% ежегодно. По&nbsp;данной программе предусмотрен налоговый вычет от&nbsp;государства&nbsp;&mdash; 13% от&nbsp;каждого взноса. Порядок предоставления социального налогового вычета определен&nbsp;пп. 4&nbsp;п. 1&nbsp;ст.&nbsp;219 Налогового кодекса.</li>
                            <li class="programm-modal__list-item">Дополнительный инвестиционный доход. Клиент участвует в&nbsp;инвестиционном доходе страховой компании.</li>
                        </ul>
                    </div>


                    
                    <div class="programm-modal__paragraph">
                        <p class="programm-modal__paragraph-title">
                            Пример: при ежегодном взносе 100&nbsp;тыс. руб.
                        </p>
                        <ul class="programm-modal__list">
                            <li class="programm-modal__list-item">в&nbsp;конце срока программы (10&nbsp;лет) клиент получит 1&nbsp;млн 290&nbsp;тыс. руб. (1&nbsp;млн руб. накопленных взносов + 130&nbsp;тыс. руб. налогового вычета + 160&nbsp;тыс. руб. дополнительного дохода*)</li>
                        </ul>
                    </div>

                    <div class="programm-modal__paragraph">

                        <p class="programm-modal__paragraph-title">
                            Условия и&nbsp;стоимость программы:
                        </p>
                        <p class="programm-modal__text">
                           Программа рассчитана на&nbsp;10&nbsp;лет. По&nbsp;окончанию программы клиент получает всю сумму, которую он&nbsp;внес на&nbsp;накопительный счет и&nbsp;дополнительный инвестиционный доход.
                        </p>
                    </div>


                    <div class="programm-modal__paragraph">
                        <p class="programm-modal__text">
                           Взносы в&nbsp;размере: от&nbsp;25&nbsp;до&nbsp;200&nbsp;тыс. рублей в&nbsp;год на&nbsp;выбор клиента с&nbsp;шагом в&nbsp;25&nbsp;тыс. руб. Валюта&nbsp;&mdash; рубли.
                            <br><sup>*</sup> Из&nbsp;расчета среднегодового размера инвестиционного дохода Страховой компании за&nbsp;2013-2014 8%.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="modal fade advantages-price-modal" id="advantages-price-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close modal-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <div class="modal-body">
                    <p class="advantages-price-modal__description">
                        <sup>*</sup>Пример суммарных выплат для договора с годовым взносом в&nbsp;100&nbsp;000&nbsp;руб. для клиента в возрасте от&nbsp;18&nbsp;до&nbsp;45 лет (включительно)
                    </p>
                    <div class="advantages-price-modal__item">
                        <p class="advantages-price-modal__price">4 000 000 <span class="icon-rouble">a</span></p>
                        <p class="advantages-price-modal__name">Уход из жизни в результате ДТП</p>
                    </div>
                    <div class="advantages-price-modal__item">
                        <p class="advantages-price-modal__price">2 000 000 <span class="icon-rouble">a</span></p>
                        <p class="advantages-price-modal__name">Уход из жизни в результате несчастного случая</p>
                    </div>
                    <div class="advantages-price-modal__item">
                        <p class="advantages-price-modal__price">1 000 000 <span class="icon-rouble">a</span></p>
                        <p class="advantages-price-modal__name">Уход из жизни по любой причине</p>
                    </div>
                    <div class="advantages-price-modal__item">
                        <p class="advantages-price-modal__price">1 000 000 <span class="icon-rouble">a</span></p>
                        <p class="advantages-price-modal__name">Инвалидность 1&nbsp;группы в результате несчастного случая</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade sms-modal" id="sms-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close modal-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <div class="modal-body">
                    <div class="sms-modal">
                        <p class="sms-modal__title">На номер <span class="sms-modal__title-phone-out"><a href="#" class="sms-modal__title-change-phone" id="change-phone">Изменить номер</a><span class="sms-modal__title-phone"></span></span> отправлено СМС c кодом</p>
                        <p class="sms-modal__description">Для подтверждения заявки необходимо ввести его <br>и&nbsp;нажать на&nbsp;кнопку "Подтвердить"</p>
                        <form action="" class="sms-modal-form">
                            <div class="sms-modal-form__controls-group sms-modal-form__controls-group_code">
                                <label class="sms-modal-form__label">
                                    <p class="sms-modal-form__label-text">Код подтверждения заявки<sup class="horizontal-form__sup">*</sup></p>
                                    <div class="sms-modal-form__input-out">
                                        <input type="text" pattern="\d*" name="varification_code" class="sms-modal-form__input">
                                        <label id="varification_code-error" class="error" for="varification_code" style="display: none"></label>
                                    </div>
                                </label>
                            </div>
                            <div class="sms-modal-form__controls-group sms-modal-form__controls-group_button">
                                <button type="submit" class="sms-modal-form__btn btn btn_blue">
                                    Подтвердить
                                </button>
                            </div>

                            <input type="hidden" name="utm_source" value="<? echo $utm_source ?>">
                            <input type="hidden" name="utm_medium" value="<? echo $utm_medium ?>">
                            <input type="hidden" name="utm_campaign" value="<? echo $utm_campaign ?>">
                            <input type="hidden" name="utm_term" value="<? echo $utm_term ?>">
                            <input type="hidden" name="utm_content" value="<? echo $utm_content ?>">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-2.2.4.min.js"><\/script>')</script>
    <script src="https://cdn.jsdelivr.net/jquery.suggestions/16.6/js/jquery.suggestions.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
