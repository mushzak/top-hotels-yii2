<?php
/* @var $this \yii\web\View */

/* @var $content string */

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

?>

<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="en-US">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-param" content="_csrf">
        <meta name="csrf-token"
              content="337m2k7T4k57WNYdWLFGb6MkZ9GxyO_3z5hg3AzQ4iTtN76QPLmFDRI3u3pswws71FRUnoSiqcaoqyy5WoGDbw==">
        <title>TopHotels</title>
        <link rel="icon" href="i/favicon.png">
        <link href="/css/_lsfw/reset-lse46c.css?v=1544103235" rel="stylesheet">
        <link href="/css/_lsfw/atome46c.css?v=1544103235" rel="stylesheet">
        <link href="/css/_lsfw/fontse46c.css?v=1544103235" rel="stylesheet">
        <link href="/css/_lsfw/tabse46c.css?v=1544103235" rel="stylesheet">
        <link href="/css/vendor/font-awesome-5.0/css/fontawesome-all2b3f.css?v=1544103236" rel="stylesheet">
        <link href="/css/vendor/sumoselectd0bb.css?v=1544103234" rel="stylesheet">
        <link href="/css/vendor/th-sumoselectd0bb.css?v=1544103234" rel="stylesheet">
        <link href="/css/vendor/magnific-popupd0bb.css?v=1544103234" rel="stylesheet">
        <link href="/css/lib-ui-tour-filter/flagsd0bb.css?v=1544103234" rel="stylesheet">
        <link href="/css/lib-ui-tour-filter/lsfw-tour-filterd0bb.css?v=1544103234" rel="stylesheet">
        <link href="/css/lib-ui-tour-filter/lsfw-form-directiond0bb.css?v=1544103234" rel="stylesheet">
        <link href="/css/lib-ui-tour-filter/lsfw-date-widgetd0bb.css?v=1544103234" rel="stylesheet">
        <link href="/css/lib-ui-tour-filter/lsfw-adults-widgetd0bb.css?v=1544103234" rel="stylesheet">
        <link href="/css/lib-ui-tour-filter/lsfw-durability-widgetd0bb.css?v=1544103234" rel="stylesheet">
        <link href="/css/lib-ui-tour-filter/lsfw-price-widgetd0bb.css?v=1544103234" rel="stylesheet">
        <link href="/css/tophotels_site_html/main-cntd0bb.css?v=1544103234" rel="stylesheet">
        <link href="/css/tophotels_site_html/maind0bb.css?v=1544103234" rel="stylesheet">
        <link href="/css/tophotels_site_html/layouts/headere46c.css?v=1544103235" rel="stylesheet">
        <link href="/css/tophotels_site_html/layouts/header-mobilee46c.css?v=1544103235" rel="stylesheet">
        <link href="/css/tophotels_site_html/layouts/footere46c.css?v=1544103235" rel="stylesheet">
        <link href="/css/tophotels_site_html/layouts/left-menue46c.css?v=1544103235" rel="stylesheet">
        <link href="/css/tophotels_site_html/layouts/left-menu-mobilee46c.css?v=1544103235" rel="stylesheet">
        <link href="/css/tophotels_site_html/agree-ppd0bb.css?v=1544103234" rel="stylesheet">
        <link href="/css/tophotels_site_html/tabs-bar-mobiled0bb.css?v=1544103234" rel="stylesheet">
        <link href="/css/site6c74.css?v=1544103233" rel="stylesheet">
        <script src="/js/jquery.311.min47c0.js?v=1544103230"></script>
    </head>

    <body>
    <div class="page">
        <div class="headerMobile">
            <div class="headerMobile__flex js-serach-active-hide">
                <a href="http://html2.tophotels.site/tophotels/" class="headerMobile__logo">
                    <img src="i/th-logo.png" width="112" height="40" class="mr10">
                </a>

                <div class="headerMobile__right">
                    <div class="headerMobile__right-auth">
                        <i class="far fa-envelope"></i>
                        <a href="#" class="headerMobile__msg-icon "><span>989</span></a>
                    </div>

                    <div class="headerMobile__right-noAuth" style="display: none">
                        1 507 753 участников
                    </div>
                </div>
            </div>
            <div class="headerMobile__line">
                <div class="js-hide js-serach-active-hide">
                    <div class="headerMobile__bth headerMobile__bth--auth mr10" style="display: none">
                        <div class="headerMobile__key"></div>
                    </div>
                    <a href="#" class="headerMobile__user js-show-key-block">
                        <img src="i/user-ava-cat.jpg">
                    </a>
                    <div class="headerMobile__bth mr5">
                        <div class="headerMobile__burger"></div>
                    </div>

                    <div class="headerMobile__bth js-show-search">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
                <div class="headerMobile__right js-hide js-serach-active-hide">
                    <div class="header-lang">
                        <div class="header-lang__block">
                            <span class="header-lang__cnt">Rus</span>
                            <i class="fa fa-chevron-down header-lang__arr" aria-hidden="true"></i>
                        </div>
                        <div class="header-lang__dropdown">
                            <div class="header-lang__lang js-ru" style="display: none;">Rus</div>
                            <div class="header-lang__lang js-eng">Eng</div>
                        </div>
                    </div>
                </div>
                <div class="headerMobile__cross"></div>
            </div>
            <div class="headerMobile__registration">
                <div class="tabs-block">
                    <div class="tabs-bar tabs-bar--no-adaptive">
                        <div id="authorization" class="tab tab--reg active">Вход</div>
                        <div id="registration" class="tab tab--reg">Регистрация</div>

                        <div class="line--reg" style="width: 89.125px; left: 50.25px;"></div>
                    </div>
                    <div class="panel" id="authorizationPanel" style="display: none;">
                        <div class="headerMobile__registration-line">
                            <div class="bth__inp-block error">
                                <input type="text" class="bth__inp  js-input-label"
                                       id="regEmail">
                                <label for="regEmail" class="bth__inp-lbl ">email</label>
                                <div class="hint-block hint-block--abs">
                                    <i class="fa fa-question-circle question-error" aria-hidden="true"></i>
                                    <div class="hint">
                                        <p class="bth__cnt">Текст подсказки</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="headerMobile__registration-line">
                            <div class="bth__inp-block ">
                                <input type="password" class="bth__inp  js-input-label" id="regPass">
                                <label for="regPass" class="bth__inp-lbl">Пароль</label>
                                <i class="headerMobile__registration-eye js-open-eye"></i>
                            </div>
                        </div>
                        <button class="bth__btn bth__btn--fill ">Войти</button>
                        <button class="bth__btn  js-show-remind headerMobile__registration-abs-btn">Напомнить пароль
                        </button>
                        <div class="registration-form__remind" style="display: none">
                            <div class="pass-step1">
                                <div class="headerMobile__registration-line">
                                    <div class="bth__inp-block ">
                                        <input type="text" class="bth__inp  js-input-label" id="regRemindEmail">
                                        <label for="regRemindEmail" class="bth__inp-lbl">E-mail</label>
                                    </div>
                                </div>
                                <button class="bth__btn bth__btn--fill  jsPassStep2 mt20">Напомнить</button>
                            </div>
                            <div class="pass-step2" style="display:none;">
                                <p class="bth__cnt bth__cnt--big">Остался один шаг!</p>
                                <p class="bth__cnt bth__cnt--big mt20">Проверьте e-mail и подтвердите регистрацию на
                                    проекте.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel" id="registrationPanel" style="">
                        <div class="headerMobile__registration-line">
                            <div class="bth__inp-block ">
                                <input type="text" class="bth__inp  js-input-label" id="regName">
                                <label for="regName" class="bth__inp-lbl ">Имя</label>
                            </div>
                        </div>
                        <div class="headerMobile__registration-line mt15">
                            <div class="rbt-block d-ib mr20">
                                <input type="radio" name="male" class="rbt" id="male1">
                                <label class="label-rbt" for="male1">
                                    <span class="rbt-cnt uppercase">Мужчина</span>
                                </label>
                            </div>
                            <div class="rbt-block  d-ib">
                                <input type="radio" name="male" class="rbt" id="male2">
                                <label class="label-rbt" for="male2">
                                    <span class="rbt-cnt uppercase">Женщина</span>
                                </label>
                            </div>
                        </div>
                        <div class="headerMobile__registration-line headerMobile__registration-line--border">
                            <div class="bth__inp-block">
                                <input type="text" class="bth__inp  js-input-label" id="regEmailOsn">
                                <label for="regEmailOsn" class="bth__inp-lbl ">E-mail регистрации </label>
                            </div>
                        </div>
                        <div class="headerMobile__registration-line">
                            <div class="bth__inp-block ">
                                <input type="password" class="bth__inp  js-input-label" id="regPassNew">
                                <label for="regPassNew" class="bth__inp-lbl">Пароль</label>
                                <i class="headerMobile__registration-eye js-open-eye"></i>
                            </div>
                        </div>
                        <div class="headerMobile__registration-line">
                            <div class="bth__inp-block ">
                                <input type="password" class="bth__inp  js-input-label" id="regPassNewRep">
                                <label for="regPassNewRep" class="bth__inp-lbl">Повторный пароль</label>
                                <i class="headerMobile__registration-eye js-open-eye"></i>
                            </div>
                        </div>
                        <div class="relative">
                            <button class="bth__btn bth__btn--fill jsRegStep2 ">Продолжить*</button>
                            <div class="headerMobile__registration-text-abs">
                                <p class="bth__cnt bth__cnt--sm">*Нажимая на кнопку "продолжить", я принимаю <a
                                            href="#">Соглашение
                                        об обработке личных данных</a> и <a href="#">Правила
                                        сайта</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?= $this->render('partial/header') ?>

        <div class="container">
            <?= $content ?>
        </div>

        <?= $this->render('partial/footer') ?>
    </div>

    <?php $this->endBody() ?>
    </body>

    </html>
<?php $this->endPage() ?>