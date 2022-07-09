<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <title><?php bloginfo( 'name' ); ?><?php wp_title( '&mdash;' ); ?></title>
    <?php wp_head(); ?>
  </head>
<body <?php body_class(); ?>>
<div class="header-blackout"></div>
<header class="header">
    <div class="container">
        <div class="header__wrapper"><a class="logotype" href="/">
            <svg class="icon icon--logotype">
                <use xlink:href="#logotype"></use>
            </svg>
        </a>
            <div class="header__nav">
                <nav><a href="#slide-1">Услуги</a><a href="#slide-2">Институт</a><a href="#slide-4">Достижения</a><a
                        href="#slide-5">Контакты</a></nav>
                <button class="header__lang">EN</button>
                <button class="header__open"><span></span><span></span><span></span></button>
            </div>
        </div>
    </div>
</header>
<div class="slides">
    <div class="slide slide-banner" id="slide-0">
        <div class="container">
            <div class="slide-banner__wrapper">
                <h1 class="slide-banner__title">Научно-исследовательский проектный институт</h1>
                <div class="slide-banner__mouse"><img src="<?=get_template_directory_uri()?>/public/images/mouse.gif"></div>
            </div>
        </div>
    </div>
    <div class="slide slide-service" id="slide-1">
        <div class="container slide-service__container">
            <div class="slide-service__center">
                <div>
                    <div class="slide-service__wrapper">
                        <div>
                            <h2 class="slide-service__title">Услуги института</h2>
                        </div>
                        <div class="slide-service__works">
                            <div class="slide-service__work">
                                <div class="slide-service__numbering">
                                    <p class="slide-service__list">1</p>
                                    <p class="slide-service__name">НИОКР</p>
                                </div>
                                <p class="slide-service__text">Выполнение НИОКР в области разработки составов
                                    тампонажных растворов и сухих смесей</p>
                            </div>
                            <div class="slide-service__work">
                                <div class="slide-service__numbering">
                                    <p class="slide-service__list">2</p>
                                    <p class="slide-service__name">Сертификация</p>
                                </div>
                                <p class="slide-service__text">Проведение независимых сертификационных испытаний</p>
                            </div>
                            <div class="slide-service__work">
                                <div class="slide-service__numbering">
                                    <p class="slide-service__list">3</p>
                                    <p class="slide-service__name">Надзор и сопровождение</p>
                                </div>
                                <p class="slide-service__text">Авторский и супервайзинговый надзор, научно-техническое
                                    сопровождение работ по цементированию обсадных колонн скважин</p>
                            </div>
                            <div class="slide-service__work">
                                <div class="slide-service__numbering">
                                    <p class="slide-service__list">4</p>
                                    <p class="slide-service__name">Проектирование</p>
                                </div>
                                <p class="slide-service__text">Проектирование технологического оборудования по получению
                                    минеральных добавок к цементным смесям</p>
                            </div>
                            <div class="slide-service__work">
                                <div class="slide-service__numbering">
                                    <p class="slide-service__list">5</p>
                                    <p class="slide-service__name">Экспертиза</p>
                                </div>
                                <p class="slide-service__text">Расследование инцидентов, аварий и брака при
                                    строительстве скважин</p>
                            </div>
                        </div>
                    </div>
                    <img class="slide-service__img" src="<?=get_template_directory_uri()?>/public/images/services.png">
                </div>
            </div>
        </div>
    </div>
    <div class="slide slide-about" id="slide-2">
        <div class="container">
            <div class="slide-about__center">
                <div>
                    <div class="slide-about__wrapper">
                        <div class="slide-about__institute">
                            <h2 class="slide-about__title"><span>Урал</span><span>НИПИнефть</span></h2>
                            <button class="btn btn--primary">об институте</button>
                        </div>
                        <div class="slide-about__directions">
                            <p class="slide-about__text">Организация, осуществляющая научно-исследовательскую, проектную
                                и надзорную деятельность по следующим направлениям:</p>
                            <ul class="slide-about__list">
                                <li><span>Разработка технологий получения минеральных добавок к тампонажным смесям и растворам;</span>
                                </li>
                                <li><span>Разработка составов сухих тампонажных смесей для различных термобаричесх и горно-геологических условий (АВПД, АНПД, ММП, наличие коррозионно активных сред и т.д.);</span>
                                </li>
                                <li><span>Экспертная работа в области крепления скважин;</span></li>
                                <li><span>Авторский и супервайзинговый надзор, научно-техническое сопровождение работ по цементированию обсадных колонн скважин;</span>
                                </li>
                                <li><span>Проведение сертификационных и проверочных испытаний.</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="slide-about__companies">
                        <div><a class="slide-about__logo" href="/">
                            <svg class="icon icon--logo">
                                <use xlink:href="#logo"></use>
                            </svg>
                        </a></div>
                        <div>
                            <p class="slide-about__partners">«УралНИПИнефть» входит в Группу компаний
                                «Гранула-СпецЦемент»</p>
                            <button class="btn btn--orange">Подробнее</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slide slide-groups" id="slide-3">
        <div class="container">
            <div class="slide-groups__wrapper">
                <div class="slide-groups__circle slide-groups__circle--orange">
                    <div class="slide-groups__circle-wrapper">
                        <h2 class="slide-groups__title">03</h2>
                        <p class="slide-groups__text">Три аккредитованных испытательных лабораторий цементных
                            растворов</p><img class="slide-groups__img" src="<?=get_template_directory_uri()?>/public/images/group-1.png">
                    </div>
                </div>
                <div class="slide-groups__circle slide-groups__circle--gray">
                    <div class="slide-groups__circle-wrapper">
                        <h2 class="slide-groups__title">02</h2>
                        <p class="slide-groups__text">Два инжиниринговых центра в г. Екатеринбург и г. Асбест</p><img
                            class="slide-groups__img" src="<?=get_template_directory_uri()?>/public/images/group-2.gif">
                    </div>
                </div>
                <div class="slide-groups__circle slide-groups__circle--white">
                    <div class="slide-groups__circle-wrapper">
                        <h2 class="slide-groups__title">Группа+</h2>
                        <p class="slide-groups__text">Группа сопровождения проектов по строительству скважин в г.
                            Сургут</p><img class="slide-groups__img" src="<?=get_template_directory_uri()?>/public/images/group-3.gif">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slide slide-benefits" id="slide-4">
        <div class="container">
            <div class="slide-benefits__center">
                <div class="slide-benefits__wrapper">
                    <div class="slide-benefits__list">
                        <div class="slide-benefits__top">
                            <h2 class="slide-benefits__title">15</h2>
                            <p class="slide-benefits__years">
                                <svg class="icon icon--years">
                                    <use xlink:href="#years"></use>
                                </svg>
                            </p>
                        </div>
                        <p class="slide-benefits__text">«УралНИПИнефть» более 15 лет на рынке нефтесервисных услуг</p>
                    </div>
                    <div class="slide-benefits__list">
                        <div class="slide-benefits__top">
                            <h2 class="slide-benefits__title">+50</h2>
                            <p class="slide-benefits__conclusion">
                                <svg class="icon icon--conclusion">
                                    <use xlink:href="#conclusion"></use>
                                </svg>
                            </p>
                        </div>
                        <p class="slide-benefits__text">С 2018 года подготовлено более 50-ти экспертных заключений по
                            расследованию инцидентов, аварий и брака при строительстве скважин</p>
                    </div>
                    <div class="slide-benefits__list">
                        <div class="slide-benefits__top">
                            <h2 class="slide-benefits__title">3000</h2>
                            <p class="slide-benefits__work">
                                <svg class="icon icon--work">
                                    <use xlink:href="#work"></use>
                                </svg>
                            </p>
                        </div>
                        <p class="slide-benefits__text">Под надзором инженерной службы выполнено более 3000 работ по
                            цементированию обсадных колонн скважин</p>
                    </div>
                    <div class="slide-benefits__list">
                        <div class="slide-benefits__top">
                            <h2 class="slide-benefits__title">45</h2>
                            <p class="slide-benefits__development">
                                <svg class="icon icon--development">
                                    <use xlink:href="#development"></use>
                                </svg>
                            </p>
                        </div>
                        <p class="slide-benefits__text">Разработок, защищенных авторским правом</p>
                    </div>
                    <div class="slide-benefits__list">
                        <div class="slide-benefits__top">
                            <h2 class="slide-benefits__title">+150</h2>
                            <p class="slide-benefits__mark">
                                <svg class="icon icon--mark">
                                    <use xlink:href="#mark"></use>
                                </svg>
                            </p>
                        </div>
                        <p class="slide-benefits__text">Разработано более 150 марок сухих тампонажных смесей</p>
                    </div>
                    <div class="slide-benefits__list">
                        <div class="slide-benefits__top slide-benefits__top--mb28">
                            <p class="slide-benefits__documentation-icon">
                                <svg class="icon icon--documentation">
                                    <use xlink:href="#documentation"></use>
                                </svg>
                            </p>
                            <h2 class="slide-benefits__documentation">Разработана проектная документация</h2>
                        </div>
                        <p class="slide-benefits__text">По обогащению и получению минеральных добавок: алюмосикатных
                            микросфер, расширяющих добавок, водо- и нефтенабухающих полимеров, растворимых элементов
                            технологической оснастки</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slide slide-contact" id="slide-5">
        <div class="slide-contact__content">
            <div class="slide-contact__wrapper">
                <div class="container slide-contact__container">
                    <h2 class="slide-contact__title">Контакты</h2>
                    <div class="slide-contact__contacts"><a class="slide-contact__phone" href="tel:+73432873693">+7
                        (343) 287 36 93</a>
                        <p class="slide-contact__address">
                            <svg class="icon icon--address">
                                <use xlink:href="#address"></use>
                            </svg>
                            620100, Екатеринбург, Сибирский тракт, дом 12, строение 4, помещение 8
                        </p>
                        <a class="slide-contact__mail" href="mailto:info@uralnipineft.ru">
                            <svg class="icon icon--mail">
                                <use xlink:href="#mail"></use>
                            </svg>
                            info@uralnipineft.ru</a>
                    </div>
                </div>
                <iframe class="slide-contact__map"
                        src="https://yandex.ru/map-widget/v1/?um=constructor%3Ab8de69a8fcc39a4bfb4a0bd9555faf373c04ce9e5f6f373232dd330a65990d06&amp;amp;source=constructor"
                        width="100%" height="400" frameborder="0"></iframe>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="slide-contact__wrapper">
                    <div class="footer__wrapper">
                        <div class="footer__politics">
                            <p class="footer__text">© 2022 «УралНИПИнефть»</p><a class="footer__policity" href="#">Политика
                            конфиденциальности</a>
                        </div>
                        <div class="slide-contact__cult"><a class="footer__cult" href="/">Сделано в
                            <svg class="icon icon--cult">
                                <use xlink:href="#cult"></use>
                            </svg>
                        </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>