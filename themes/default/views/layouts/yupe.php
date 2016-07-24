<!DOCTYPE html>
<html lang="<?= Yii::app()->language; ?>">
<head>
    <?php \yupe\components\TemplateEvent::fire(DefautThemeEvents::HEAD_START); ?>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta http-equiv="Content-Language" content="ru-RU"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title><?= $this->title; ?></title>
    <meta name="description" content="<?= $this->description; ?>"/>
    <meta name="keywords" content="<?= $this->keywords; ?>"/>

    <?php if ($this->canonical): ?>
        <link rel="canonical" href="<?= $this->canonical ?>"/>
    <?php endif; ?>
    <?php
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/main.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/flags.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/yupe.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/grid.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/contact-form.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/grid.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/jquery.fancybox.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/order-frontend.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/search.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/store-frontend.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/style.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/tmMultimediaGallery.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/unslider.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/unslider-dots.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/user-popup-info.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/lightslider.css');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/blog.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/bootstrap-notify.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.li-translit.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/device.min.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/ga.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/imagesloaded.min.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.cookie.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.easing.1.3.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.equalheights.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.fancybox.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.li-translit.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.mobilemenu.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.mousewheel.min.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.simplr.smoothscroll.min.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.touchSwipe.min.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.ui.totop.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.ui.touch-punch.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery-ui-1.10.3.custom.min.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/masonry.min.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/search.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/slides.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/store.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/superfish.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/tmDraggablePagination.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/tmFileList.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/TMForm.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/tmMultimediaGallery.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/tmMultimediaGallery_init.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/tmPaginationGenerator.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/tmstickup.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/unslider-min.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/wow.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/lightslider.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/masonry.pkgd.min.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/hoverIntent.js');
    ?>
    <script type="text/javascript">
        var yupeTokenName = '<?= Yii::app()->getRequest()->csrfTokenName;?>';
        var yupeToken = '<?= Yii::app()->getRequest()->getCsrfToken();?>';
    </script>
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="http://yandex.st/highlightjs/8.2/styles/github.min.css">
    <script src="http://yastatic.net/highlightjs/8.2/highlight.min.js"></script>
    <?php \yupe\components\TemplateEvent::fire(DefautThemeEvents::HEAD_END); ?>
</head>
<body>
<!--========================================================
                          HEADER
=========================================================-->
<div class="background-wrapper">
    <div class="big-wrapper">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="grid_12">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="grid_12">
                        <div class="info">
                            <h1 class="logo-title"><a href="/"><span
                                        class="first wow fadeInDown animated" data-wow-duration="1s"
                                        data-wow-delay="0.1s"
                                        style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;">Усадьба НИКА</span><span
                                        class="third wow fadeInRight animated" data-wow-duration="1s"
                                        data-wow-delay="0.1s"
                                        style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInRight;">Отдых в Горном Алтае</span></a>
                            </h1>
                            <div style="float: right;text-align: center">
                              <div style="font-size: 25px;font-weight: bold;margin-bottom: 5px">  8 800 5555 35 35 </div> <br>
                                <?php $this->widget('application.modules.callback.widgets.CallbackWidget'); ?>
                            </div>
                            <div class="clearfix"></div>
                 <div>
                     <img class="glass-wrapper" src="/themes/default/web/images/grass2.png" alt="">
                 </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="stuck_container">
                <div class="container">
                    <div class="row">
                        <div class="grid_12">
                            <div class="menu-wrapper">
                                <nav>
                                    <ul class="sf-menu">
                                        <li><a
                                                href="/"
                                                class="sf-with-ul">Главная</a>
                                        </li>
                                        <li><a href="#">Галерея <i class="caret"></i></a>
                                            <ul>
                                                <li><a href="/albums/4">Территория </a></li>
                                                <li><a href="/albums/5"> Часовня</a></li>
                                                <li> Баня и Сауна</li>
                                                <li> Корпус 1</li>
                                                <li> Корпус 2</li>
                                                <li> Корпус 3</li>
                                                <li> Корпус 4</li>
                                                <li> Корпус 5</li>
                                                <li> Корпус 6</li>
                                                <li> Корпус 7</li>
                                                <li> Ника зимой</li>
                                            </ul>
                                        </li>
                                        <li><a href="/store">Номера <i class="caret"></i></a>
                                            <ul>
                                                <li><a href="/store/korpus-1"> Корпус 1 </a></li>
                                                <li>Корпус 2</li>
                                                <li>Корпус 3</li>
                                                <li>Корпус 4</li>
                                                <li>Корпус 5</li>
                                                <li>Корпус 6</li>
                                                <li>Корпус 7</li>
                                            </ul>
                                        </li>
                                        <li><a href="#"> О нас</a></li>
                                        <li><a href="#">Гостям <i class="caret"></i></a>
                                            <ul>
                                                <li>Правила проживания</li>
                                                <li>Схема <br> территории</li>
                                                <li><a href="/otzyvy"> Отзывы </a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/news">Новости</a></li>
                                        <li><a href="#"> Контакты</a></li>
                                        <!--    <li><a href="/blogs">Отдых</a></li>-->
                                    </ul>
                                    <div class="clearfix"></div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--========================================================
                                  CONTENT
        =========================================================-->
        <section id="content">
            <div class="container">
                <div class="row">
                    <div class="grid_12">
                        <div style="min-height: 960px">
                            <?= $content; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>
<!--========================================================
                          FOOTER
=========================================================-->
<footer id="footer">
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="grid_12">
                    <div class="privacy-block wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                         style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: none;">
                        © <span id="copyright-year">2016</span> <a
                            href="http://livedemo00.template-help.com/wt_53471/index-6.html">Privacy Policy</a>
                        <!--{%FOOTER_LINK} -->
                    </div>
                    <div class="links">
                        <ul>
                            <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                                style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: none;">
                                <a href="/#">Support</a>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                                style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: none;">
                                <a href="/#">FAQs</a>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"
                                style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: none;">
                                <a href="/#">Sitemap</a>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s"
                                style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: none;">
                                <a href="/#">Help</a>
                            </li>
                        </ul>
                    </div>
                    <div class="cleafix"></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script>
    $('.my-slider').unslider({
        autoplay: true,
        arrows: false
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".fancybox").fancybox();
    });
</script>

<script>
    $(document).ready(function () {
        $('ul.sf-menu').superfish();
    });
</script>

<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">


</body>
</html>
