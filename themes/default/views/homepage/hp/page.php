<?php
/** @var Page $page */

if ($page->layout) {
    $this->layout = "//layouts/{$page->layout}";
}

$this->title = $page->title;
$this->breadcrumbs = [
    Yii::t('HomepageModule.homepage', 'Pages'),
    $page->title
];
$this->description = !empty($page->description) ? $page->description : Yii::app()->getModule('yupe')->siteDescription;
$this->keywords = !empty($page->keywords) ? $page->keywords : Yii::app()->getModule('yupe')->siteKeyWords
?>
<?php $this->widget('application.modules.slide.widgets.SlideWidget', []); ?>
<div class="banner1">
    <div class="row">
        <div class="grid_4">
            <div class="box1 first wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                 style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: none;">
                <h2>
                    Оздоровительный центр</h2>
                                        <span class="heading"><a
                                                href="/#">Читать подробнее</a></span>
                <p>Lorem ipsum dolor sit amet, conc tet
                    er adipi scing. Praesent vestibuum mol</p>
            </div>
        </div>

        <div class="grid_4">
            <div class="box1 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                 style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: none;">
                <h2>Дополнительные услуги</h2>
                                        <span class="heading"><a
                                                href="/blogs">Читать подробнее</a></span>
                <p>Praesent vestibuum molestie lacuiirhs. Aenean non ummy hendreriauris.
                    Phasellllus porta.</p>
            </div>
        </div>
        <div class="grid_4">
            <div class="box1 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                 style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: none;">
                <h2>Досуг</h2>
                                        <span class="heading"><a
                                                href="/blogs">Читать подробнее</a></span>
                <p>Praesent vestibuum molestie lacuiirhs. Aenean non ummy hendreriauris.
                    Phasellllus porta.</p>
            </div>
        </div>
        <div class="grid_12">
            <div style="text-align: center;color: white;font-size: 16px;margin-top: 15px">
                <a href="#"> Скачать договор с агентством <img style="margin-left: 5px" src="/themes/default/web/images/word-Icon.png" height="20px" width="20px" alt=""></a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="grid_12">
        <div class="b-sponsors">
            <hr>
            <div class="b-sponsors__title">
                Наши партнеры
            </div>
            <hr>
            <div class="b-sponsors__logo">
                <div class="row">
                    <div class="grid_1">

                    </div>
                    <div class="grid_2">

                        <div class="sponsor">
                            <div class="sponsor-image"
                                 style="background-image: url('/themes/default/web/images/travel-logo.png')">

                            </div>
                            <div class="sponsor-description">
                                <a href="http://tour-altay.ru"> Странник </a>
                            </div>
                        </div>
                    </div>

                    <div class="grid_2">
                        <div class="sponsor">
                            <div class="sponsor-image"
                                 style="background-image: url('/themes/default/web/images/ivan-logo.png')">

                            </div>
                            <div class="sponsor-description">
                                <a href="http://ivantour.ru/ivanovsky/"> Ивановский сплав </a>
                            </div>
                        </div>
                    </div>

                    <div class="grid_2">
                        <div class="sponsor">
                            <div class="sponsor-image"
                                 style="background-image: url('/themes/default/web/images/san-logo.png')">

                            </div>
                            <div class="sponsor-description">
                                <a href="http://www.sanatoria.ru/san.php?org=687"> ООО "Омега-2001" </a>
                            </div>
                        </div>
                    </div>

                    <div class="grid_2">
                        <div class="sponsor">
                            <div class="sponsor-image"
                                 style="background-image: url('/themes/default/web/images/sber-logo.png')">

                            </div>
                            <div class="sponsor-description">
                                <a href="http://www.sberbank.ru/ru/person"> Сбербанк России </a>
                            </div>
                        </div>
                    </div>

                    <div class="grid_2">
                        <div class="sponsor">
                            <div class="sponsor-image"
                                 style="background-image: url('/themes/default/web/images/pfr-logo.png')">

                            </div>
                            <div class="sponsor-description">
                                <a href="http://www.pfrf.ru"> Пенсионный Фонд России </a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<!--
<div class="row">
    <div class="grid_12">
        <img style="display: block;margin: 10px auto;width: 200px" src="/themes/default/web/images/logosite.png" alt="">
        <div style="margin-top:20px;text-align: center;font-weight: bold;font-size: 30px">
            Дополнительные услуги
        </div>
        <div style="text-align: center">
            <table class="table-main-price">
                <thead>
                <tr>
                    <th>Наименование</th>
                    <th>Описание</th>
                    <th>Цена</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Услуга</td>
                    <td>Описание</td>
                    <td> 100000р</td>
                </tr>
                <tr>
                    <td>Услуга</td>
                    <td>Описание</td>
                    <td> 100000р</td>
                </tr>
                <tr>
                    <td>Услуга</td>
                    <td>Описание</td>
                    <td> 100000р</td>
                </tr>
                <tr>
                    <td>Услуга</td>
                    <td>Описание</td>
                    <td> 100000р</td>
                </tr>
                <tr>
                    <td>Услуга</td>
                    <td>Описание</td>
                    <td> 100000р</td>
                </tr>
                <tr>
                    <td>Услуга</td>
                    <td>Описание</td>
                    <td> 100000р</td>
                </tr>
                <tr>
                    <td>Услуга</td>
                    <td>Описание</td>
                    <td> 100000р</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
-->