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
                <a href="#"> Скачать договор с агентством <img style="margin-left: 5px"
                                                               src="/themes/default/web/images/word-Icon.png"
                                                               height="20px" width="20px" alt=""></a>
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
<div class="row">
    <hr>
    <div class="grid_12">
        <div class="b-main__text">
            <div style="text-align: center;font-size: 20px">Уважаемые гости!</div>
            Алтай - прекрасный горный край, манящий и неизведанный. Каждый путник, стремящийся сюда, найдёт свой Алтай.
            Кто-то окунётся с головой в переплетение древних эпох, оставивших свой след на Алтае в виде археологических
            и
            культурных памятников, национальных традиций и культуры современных алтайцев. Кто-то найдёт исцеление от
            надоевших недугов методами традиционной Алтайской медицины: пантолечение, различные методы массажей,
            целебный
            воздух соснового бора и кедровой тайги. Но самый искушённый путник постарается увидеть весь Алтай, такой
            разный
            и такой прекрасный!
            Гостиничный комплекс "Усадьба Ника" приглашает Вас посетить Горный Алтай с его уникальной природой.
            Удобное расположение нашей базы на берегу красавицы-Катуни, в окружении величественных гор позволит вам
            оценить
            уникальность природы Алтая, а комфортабельные номера на любой вкус и доброжелательность персонала дадут Вам
            почувствовать себя, как дома.
            Бильярдный, конференц-зал, настоящая русская баня, оздоровительный комплекс, детская площадка, бассейн,
            "каток"
            и разнообразные экскурсии гарантируют Вам полноценный семейный или корпоративный отдых.
            Наш новый ресторанный комплекс заслуживает отдельного внимания и не оставит равнодушными ценителей русской и
            европейской кухни.
        </div>
    </div>
    <hr>
</div>
<hr>