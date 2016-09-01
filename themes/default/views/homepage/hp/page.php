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
<div style="margin: 0;padding: 0">
    <div class="slider-border-top">

    </div>
</div>
<?php $this->widget('application.modules.slide.widgets.SlideWidget', []); ?>
<div class="slider-border-bottom">

</div>
<div class="row" style="margin: 0px;padding: 15px">
    <div class="banner-menu">
        <div class="col-lg-3">
            <div class="banner1__item">
                ЦЕНТР ОЗДОРОВИТЕЛЬНОЙ МЕДИЦИНЫ "НИКА"

                <br>
                <a class="banner1__item__link" href="/ozdorovitelnyy-centr">ЧИТАТЬ ПОДРОБНЕЕ</a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="banner1__item">
                ДОПОЛНИТЕЛЬНЫЕ УСЛУГИ
                <br>
                <a class="banner1__item__link" href="/dopolnitelnye-uslugi">ЧИТАТЬ ПОДРОБНЕЕ</a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="banner1__item">
                Корпоративный отдых
                <br>
                <a class="banner1__item__link" href="/korporativnyy-otdyh">ЧИТАТЬ ПОДРОБНЕЕ</a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="banner1__item">
                ДОСУГ
                <br>
                <a class="banner1__item__link" href="/blogs">ЧИТАТЬ ПОДРОБНЕЕ</a>
            </div>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
<hr>
<div class="row">
    <div class="grid_8">
        <div class="main-paga-text">
            <div class="b-border__top"></div>
            <div class="paga-text">
                <p style="text-align: center;font-weight: bold;font-size: 20px">
                    <srong>Усадьба "Ника"</srong>
                    <br></p>
                <p>Идеальное место, чтобы почувствовать энергию гор, полюбоваться величественной рекой
                    Катунь и
                    находиться в единении с уникальной природой <b> Горного Алтая,</b> не отказываясь от привычного
                    комфорта.
                </p>
                <p> Мы предлагаем размещение в комфортабельных благоустроенных номерах разной категории.
                    <b>Хороший отдых </b>поддержат дополнительные услуги и тёплый приём.</p>
            </div>
            <div class="b-border__bottom"></div>
            <hr style="margin-bottom: 3px">
        </div>
        <div>
            <?php $this->widget('application.modules.news.widgets.LastNewsWidget'); ?>
        </div>
    </div>
    <div class="grid_4" style="padding: 10px">
        <div class="b-sidebar" style="min-height: 690px">
            <div class="b-widget__weather">
            </div>
            <div class="b-widget-order">
                <div class="b-widget-order__title">
                    забронировать номер
                </div>
                <hr style="width: 70%;margin: 5px auto">
                <div class="b-widget-order__body">
                    <form id="order-form" action="" class="f-order">
                        <label class="f-order__label" for="username"> Имя* </label>
                        <input id="username" name="username" class="f-order__input" type="text" required>
                        <label class="f-order__label" for="phone"> Номер телефона* </label>
                        <input id="phone" name="phone" class="f-order__input" type="text" required>
                        <label class="f-order__label" for="people"> Количество человек* </label>
                        <select id="people" name="people">
                            <option>1</option>
                            <option selected="selected">2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                        <label for="medicalCenter" class="f-order__label medical--center" style="margin-top: 10px">
                            Планируете ли вы *<br>
                            пользоваться услугами медцентра ?
                        </label>
                        <select id="medicalCenter" name="medicalCenter">
                            <option value=""></option>
                            <option value="Услуги мед.центра - да">Да</option>
                            <option value="Услуги мед.центра - нет">Нет</option>
                        </select>
                        <label class="f-order__label" for="rooms" style="margin-top: 5px"> Категория
                            проживания* </label>
                        <select name="rooms" id="rooms" class="f-order__select">
                            <optgroup label="Корпус 1">
                                <option value="Корпус 1 Стандарт">Стандарт</option>
                                <option value="Корпус 1 Семейный">Семейный</option>
                            </optgroup>
                            <optgroup label="Корпус 2">
                                <option value="Корпус 2 Стандарт Эконом"> Стандарт Эконом</option>
                                <option value="Корпус 2 Номер 2А Стандарт"> Номер 2А Стандарт</option>
                                <option value="Корпус 2 Номер 3 Стандарт Улучшенный">Номер 3 Стандарт Улучшенный
                                </option>
                                <option value="Номер 2К Стандарт Улучшенный">Номер 2К Стандарт Улучшенный</option>
                                <option value="Корпус 2 Семейный Семейный Плюс">Семейный Плюс</option>
                            </optgroup>
                            <optgroup label="Корпус 3">
                                <option value="Корпус 3 Стандарт">Стандарт</option>
                                <option value="Корпус 3 Стандарт Улучшенный">Стандарт Улучшенный</option>
                            </optgroup>
                            <optgroup label="Корпус 5">
                                <option value="Корпус 5 Стандарт">Стандарт</option>
                            </optgroup>
                            <optgroup label="Корпус 6">
                                <option value="Корпус 1 Стандарт">Стандарт</option>
                            </optgroup>
                            <optgroup label="Корпус 7">
                                <option value="Корпус 1 Семейный">Семейный</option>
                            </optgroup>
                        </select>
                        <br>
                        <label class="f-order__label" for="datepicker-from">Дата заезда*</label>
                        <input class="f-order__datepicker" type="text" id="datepicker-from" name="datepicker-from"
                               required>

                        <label class="f-order__label" for="datepicker-to">Дата выезда*</label>
                        <input class="f-order__datepicker" type="text" id="datepicker-to" name="datepicker-to" required>

                        <label class="f-order__label" for="email"> E-mail </label>
                        <input id="email" name="email" class="f-order__input" type="email">

                        <label class="f-order__label" for="comments"> Дополнительная информация </label>
                        <textarea id="comments" name="comments" class="f-order__area"> </textarea>
                        <button id="btn-order" type="submit" class="f-order__btn-order"> Отправить заявку</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="margin:20px 0;padding: 0px">
    <div class="b-map-yandex">
        <script type="text/javascript" charset="utf-8" async
                src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=5xe-DGWdZZ-A97kFc4MiUqSPII4YEz2t&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
    </div>
</div>
<div class="row">
    <div class="grid_12">
        <div class="b-sponsors">
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
<div class="row">
</div>
<hr>