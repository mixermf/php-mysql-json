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
                        Стабильность сегодня, 
                        <br>уверенность завтра
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
                      <path fill="none" stroke="#fff" stroke-width="2" stroke-miterlimit="10" d="M42.58.82l-21 14.84L.58.82"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>


    <section class="what section" id="what">
        <div class="container">
            <h2 class="what__title1 title1">
                Инвестиционное страхование жизни (ИСЖ)
            </h2>
            <p class="what__text">
                &mdash;&nbsp;это финансовый инструмент, сочетающий в&nbsp;себе возможность получения инвестиционного дохода выше, чем по&nbsp;вкладам, 100% возврат суммы инвестиций и&nbsp;страховую защиту лиц, указанных в&nbsp;договоре страхования. Это инструмент для приумножения капитала клиента и&nbsp;использования налоговых и&nbsp;юридических преимуществ договора страхования.
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
                        <span class="programs-item__title-in">КАПИТАЛ В&nbsp;ПЛЮС</span>
                    </p>
                    <div class="programs-item__body">
                        <ul class="programs-item__list">
                            <li>Срок вложения: 3&nbsp;года&nbsp;/&nbsp;5&nbsp;лет</li>
                            <li>Валюта: рубли</li>
                            <li>Размер единовременного взноса: от&nbsp;50&nbsp;тыс.&nbsp;руб.</li>
                        </ul>
                        <button class="programs-item__btn" data-toggle="modal" data-target="#programm-modal-capital-plus">
                            <i class="programs-item__btn-plus"></i>
                            <span class="programs-item__btn-text">Подробнее</span>
                        </button>
                    </div>
                </div>
                <div class="programs-item">
                    <p class="programs-item__title">
                        <span class="programs-item__title-in">УПРАВЛЕНИЕ КАПИТАЛОМ&nbsp;ПЛЮС</span>
                    </p>
                    <div class="programs-item__body">
                        <ul class="programs-item__list">
                            <li>Срок вложения: 3&nbsp;года&nbsp;/&nbsp;5&nbsp;лет</li>
                            <li>Валюта: рубли&nbsp;/&nbsp;доллары США</li>
                            <li>Размер единовременного взноса: от&nbsp;100&nbsp;тыс.&nbsp;руб.</li>
                        </ul>
                        <button class="programs-item__btn" data-toggle="modal" data-target="#programm-modal-capital-management">
                            <i class="programs-item__btn-plus"></i>
                            <span class="programs-item__btn-text">Подробнее</span>
                        </button>
                    </div>
                </div>
                <div class="programs-item">
                    <p class="programs-item__title">
                        <span class="programs-item__title-in">ЛИНИЯ РОСТА</span>
                    </p>
                    <div class="programs-item__body">
                        <ul class="programs-item__list">
                            <li>Срок вложения: 3&nbsp;года&nbsp;/&nbsp;5&nbsp;лет</li>
                            <li>Валюта: рубли</li>
                            <li>Размер единовременного <br class="visible-md visible-lg">взноса: от&nbsp;100&nbsp;тыс.&nbsp;руб.</li>
                        </ul>
                        <button class="programs-item__btn" data-toggle="modal" data-target="#programm-modal-line-growth">
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
                Принципы работы инвестиционного <br class="hidden-xs">страхования жизни
            </h2>
            <div class="principles__items">
                <div class="principles-item principles-item_1">
                    <p class="principles-item__title">
                        Средства делятся на&nbsp;две части:
                    </p>
                    <p class="principles-item__number">
                        I часть
                    </p>
                    <p class="principles-item__text">
                        Размещается в&nbsp;консервативные инвестиционные инструменты с&nbsp;фиксированной доходностью
                    </p>
                    <div class="principles-item__multi"></div>
                </div>
                <div class="principles-item principles-item_2">
                    <p class="principles-item__number">
                        II часть
                    </p>
                    <p class="principles-item__text">
                        Размещается в&nbsp;высокодоходные инвестиционные инструменты c&nbsp;неограниченной инвестиционной доходностью
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
                    <p class="advantages__text">
                        <span class="advantages__text-big">100%</span>
                        <br>возврат вложенных средств
                    </p>
                </div>
                <div class="advantages__item">
                    <div class="advantages__icon-out">
                        <img src="img/advantages/icons/2.svg" alt="" class="advantages__icon">
                    </div>
                    <p class="advantages__text">
                        Гибкость в&nbsp;выборе программ инвестирования
                    </p>
                </div>
                <div class="advantages__item">
                    <div class="advantages__icon-out">
                        <img src="img/advantages/icons/3.svg" alt="" class="advantages__icon">
                    </div>
                    <p class="advantages__text">
                        Возможная доходность сравнима с&nbsp;лучшими депозитными предложениями на&nbsp;рынке
                    </p>
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


    <div class="modal fade programm-modal" id="programm-modal-capital-plus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close modal-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <div class="modal-body">
                    <p class="programm-modal__title">
                        Капитал в&nbsp;плюс. СК&nbsp;&laquo;АльфаСтрахование-Жизнь&raquo;
                    </p>
                    <div class="programm-modal__paragraph">
                        <p class="programm-modal__text">
                            Инновационная для российского рынка программа &laquo;Капитал в&nbsp;плюс&raquo; позволяет сохранить и&nbsp;заработать больше. Это уникальный инструмент, который совмещает доходность самых выгодных инвестиций и&nbsp;100% сохранность вложенных средств.
                        </p>
                    </div>
                    <div class="programm-modal__paragraph">
                        <p class="programm-modal__paragraph-title">
                            Преимущества:
                        </p>
                        <ul class="programm-modal__list">
                            <li class="programm-modal__list-item">100-процентный возврат вложенных средств гарантирован размером страховой суммы в&nbsp;договоре страхования (ст. 934&nbsp;ГК РФ).</li>
                            <li class="programm-modal__list-item">Высокий коэффициент участия увеличивает доходность при росте рынка.</li>
                            <li class="programm-modal__list-item">Корзина активно управляемых фондов подобрана лучшими инвестиционными специалистами Credit Suisse. Активы стратегии распределены следующим образом: 75%&nbsp;&mdash; инструменты с&nbsp;фиксированным доходом, преимущественно облигации; 25%&nbsp;&mdash; акции крупнейших международных компаний.</li>
                            <li class="programm-modal__list-item">Простая и&nbsp;понятная формула расчета доходности прописана в&nbsp;вашем договоре.</li>
                        </ul>
                    </div>
                    <div class="programm-modal__paragraph">
                        <p class="programm-modal__paragraph-title">
                            Как работает программа
                        </p>
                        <p class="programm-modal__text">
                            Пример работы программы &laquo;КАПИТАЛ В&nbsp;ПЛЮС&raquo; со&nbsp;взносом 100&nbsp;000&nbsp;руб. при росте рынка на&nbsp;30% за&nbsp;3&nbsp;года и&nbsp;коэффициенте участия&nbsp;137%.
                        </p>
                    </div>

                    <div class="chart-capital-plus programm-modal__chart programm-modal__chart_capital-plus">
                        <img src="img/programs/capital-plus/chart/xs.svg" alt="" class="chart-capital-plus__img chart-capital-plus__img_xs programm-modal__chart-img">
                        <img src="img/programs/capital-plus/chart/sm.svg" alt="" class="chart-capital-plus__img chart-capital-plus__img_sm programm-modal__chart-img">
                    </div>


                    <div class="programm-modal__paragraph">
                        <ul class="programm-modal__list">
                            <li class="programm-modal__list-item">При росте рынка на&nbsp;30% ваши деньги вырастут на&nbsp;41,2%. Вы&nbsp;получите 141&nbsp;200&nbsp;руб.</li>
                            <li class="programm-modal__list-item">При падении рынка на&nbsp;30% вы&nbsp;гарантированно сохраните 100% ваших денег и&nbsp;получите обратно 100&nbsp;000&nbsp;руб.</li>
                        </ul>
                    </div>

                    
                    <div class="programm-modal__paragraph">
                        <p class="programm-modal__paragraph-title">
                            Условия программы
                        </p>
                        <ul class="programm-modal__list">
                            <li class="programm-modal__list-item">Срок вложения (на&nbsp;выбор): 3&nbsp;года, 5&nbsp;лет.</li>
                            <li class="programm-modal__list-item">Валюта: рубли.</li>
                            <li class="programm-modal__list-item">Периодичность взносов: единовременно.</li>
                            <li class="programm-modal__list-item">Размер взноса: от&nbsp;50&nbsp;000 рублей</li>
                            <li class="programm-modal__list-item">Возраст участника программы (на&nbsp;дату оформления, включительно): от&nbsp;18&nbsp;до&nbsp;70&nbsp;лет</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade programm-modal" id="programm-modal-capital-management" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close modal-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-body">
                    <p class="programm-modal__title">
                        Управление капиталом плюс. СК&nbsp;&laquo;РГС-Жизнь&raquo;
                    </p>
                    <div class="programm-modal__paragraph">
                        <div class="programm-modal__text">
                            БИНБАНК совместно с&nbsp;СК&nbsp;&laquo;РГС-Жизнь&raquo; разработал инновационный продукт &laquo;Управление капиталом+&raquo; для наиболее эффективного управления сбережениями. Программа позволяет получать повышенный доход от&nbsp;инвестирования на&nbsp;фондовом рынке при 100% гарантии возврата взноса по&nbsp;окончанию программы.
                        </div>
                    </div>
                    <div class="programm-modal__paragraph">
                        <p class="programm-modal__paragraph-title">
                            Преимущества:
                        </p>
                        <ul class="programm-modal__list">
                            <li class="programm-modal__list-item">Высокий инвестиционный доход</li>
                            <li class="programm-modal__list-item">100% возврат средств</li>
                            <li class="programm-modal__list-item">4&nbsp;направления инвестирования:</li>
                            
                            <li class="programm-modal__sublist-out">
                                <ul class="programm-modal__sublist">
                                    <li class="programm-modal__sublist-item">Фондовый рынок США</li>
                                    <li class="programm-modal__sublist-item">Уверенный выбор</li>
                                    <li class="programm-modal__sublist-item">Фармацевтика и&nbsp;биоинженерия</li>
                                    <li class="programm-modal__sublist-item">Сбалансированные инвестиции</li>
                                </ul>
                            </li>
                            <li class="programm-modal__list-item">Защита от&nbsp;непредвиденных обстоятельств, связанных с&nbsp;жизнью застрахованного лица</li>
                            <li class="programm-modal__list-item">Налоговые льготы: наследственные выплаты и&nbsp;сумма дохода в&nbsp;конце срока* не&nbsp;подлежат налогообложению</li>
                            <li class="programm-modal__list-item">Возможность гибкого управления своими инвестициями</li>
                        </ul>
                    </div>
                    <div class="programm-modal__paragraph">
                        <p class="programm-modal__paragraph-title">Как это работает?</p>
                        <div class="programm-modal__text">Вложенные в&nbsp;программу &laquo;Управление капиталом+&raquo; средства распределяются между консервативными и&nbsp;агрессивными инструментами.</div>
                    </div>
                    <div class="programm-modal__paragraph">
                        <p class="programm-modal__paragraph-title">КОНСЕРВАТИВНАЯ ЧАСТЬ</p>
                        <div class="programm-modal__text">Средства инвестируются в&nbsp;инструменты с&nbsp;фиксированной доходностью и&nbsp;обеспечивают возврат 100% вклада к&nbsp;моменту окончания программы.</div>
                    </div>
                    <div class="programm-modal__paragraph">
                        <p class="programm-modal__paragraph-title">ИНВЕСТИЦИОННАЯ ЧАСТЬ</p>
                        <div class="programm-modal__text">Для того чтобы получить потенциально неограниченный доход, часть средств размещаются в&nbsp;высокодоходные финансовые инструменты, привязанные к&nbsp;динамике базового актива.</div>
                    </div>
                    <div class="chart-capital-management chart-capital-management_xs programm-modal__chart programm-modal__chart_capital-management">
                        <img src="img/programs/capital-management/chart/xs/1.png" alt="" class="chart-capital-management__img chart-capital-management__img_1 programm-modal__chart-img">
                        <img src="img/programs/capital-management/chart/xs/2.png" alt="" class="chart-capital-management__img chart-capital-management__img_2 programm-modal__chart-img">
                    </div>
                    <div class="chart-capital-management chart-capital-management_sm programm-modal__chart programm-modal__chart_capital-management">
                        <img src="img/programs/capital-management/chart/sm.png" alt="" class="chart-capital-management__img chart-capital-management__img_sm programm-modal__chart-img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade programm-modal" id="programm-modal-line-growth" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close modal-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-body">
                    <p class="programm-modal__title">
                        Линия роста. СК&nbsp;&laquo;ВСК&nbsp;&mdash; Линия жизни&raquo;
                    </p>
                    <div class="programm-modal__paragraph">
                        <div class="programm-modal__text">
                            &laquo;Линия Роста&raquo;&nbsp;&mdash; это два базовых актива на&nbsp;выбор (&laquo;Стабильный Рост&raquo;, &laquo;Гиганты Фармацевтики&raquo;), гарантирующие стабильный рост накоплений, благодаря работе выбранной стратегии, страховую защиту (как по&nbsp;договорам классического страхования жизни), а&nbsp;также 100% защиту вложенного капитала.
                        </div>
                    </div>
                    <div class="programm-modal__paragraph">
                        <p class="programm-modal__paragraph-title">
                            Преимущества:
                        </p>
                        <ul class="programm-modal__list">
                            <li class="programm-modal__list-item">Потенциально высокий дополнительный доход</li>
                            <li class="programm-modal__list-item">Две стратегии на&nbsp;выбор:</li>
                            <li class="programm-modal__sublist-out">
                                <ul class="programm-modal__sublist">
                                    <li class="programm-modal__sublist-item">Стабильный рост. Сбалансированное финансовое решение, которое обеспечивает стабильный рост индекса практически при любых рыночных условиях. Базовый актив &laquo;Стабильный рост&raquo;&nbsp;&mdash; корзина из&nbsp;7&nbsp;инвестиционных фондов от&nbsp;ведущих инвестиционных компаний, обладающих хорошим качеством управления и&nbsp;низкой волатильностью</li>
                                    <li class="programm-modal__sublist-item">Гиганты фармацевтики. Инвестирование в&nbsp;фармацевтический сектор, который является одним из&nbsp;стабильных и&nbsp;растущих секторов мировой экономики, показывая ежегодный рост свыше 7%. Базовый актив &laquo;Гиганты фармацевтики&raquo;&nbsp;&mdash; корзина из&nbsp;5&nbsp;глобальных фармацевтических корпораций.</li>
                                </ul>
                            </li>
                            <li class="programm-modal__list-item">100% защита капитала</li>
                            <li class="programm-modal__list-item">Налоговые льготы</li>
                            <li class="programm-modal__list-item">Юридические гарантии</li>
                        </ul>
                    </div>
                    <div class="programm-modal__paragraph">
                        <p class="programm-modal__paragraph-title">Страховая защита</p>
                        <ul class="programm-modal__list">
                            <li class="programm-modal__list-item">Смерть любая причина (немедленная выплата)</li>
                            <li class="programm-modal__list-item">Смерть в&nbsp;результате&nbsp;НС (немедленная выплата)</li>
                        </ul>
                    </div>
                    <div class="programm-modal__paragraph">
                        <p class="programm-modal__paragraph-title">Риски и&nbsp;покрытия</p>
                        <ul class="programm-modal__list">
                            <li class="programm-modal__list-item">Дожитие (до&nbsp;даты окончания программы): 100% первоначально уплаченного взноса + дополнительный доход</li>
                            <li class="programm-modal__list-item">Смерть любая причина: 100% первоначально уплаченного взноса</li>
                            <li class="programm-modal__list-item">Смерть в&nbsp;результате НС: 200% первоначально уплаченного взноса</li>
                        </ul>
                    </div>
                    <div class="programm-modal__paragraph">
                        <p class="programm-modal__paragraph-title">Параметры программы</p>
                        <ul class="programm-modal__list">
                            <li class="programm-modal__list-item">Срок программы: 3&nbsp;года, 5&nbsp;лет</li>
                            <li class="programm-modal__list-item">Валюта программы: рубли РФ</li>
                            <li class="programm-modal__list-item">Периодичность оплаты: единовременно</li>
                            <li class="programm-modal__list-item">Возраст Страхователя (на&nbsp;дату оформления, включительно): от&nbsp;18&nbsp;до&nbsp;70&nbsp;лет</li>
                        </ul>
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
