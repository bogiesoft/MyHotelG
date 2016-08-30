<?php
/* @var $model Page */
/* @var $this PageController */

if ($model->layout) {
    $this->layout = "//layouts/{$model->layout}";
}

$this->title = $model->title;
$this->breadcrumbs = $this->getBreadCrumbs();
$this->description = $model->description ?: Yii::app()->getModule('yupe')->siteDescription;
$this->keywords = $model->keywords ?: Yii::app()->getModule('yupe')->siteKeyWords;
?>
<h1 class="b-page__header"
    style="text-align: center;display: block;color: #312420;line-height: 1.5;padding: 3px;font-size: 30px">
    Центр Оздоровительной медицины "Ника"</h1>
<div style="min-height: 760px">
    <div class="row">
        <div class="grid_3" style="border-right: 1px solid #312420">
            <ul class="list-health-center">
                <li class="health-center__item">
                    <a class="health-center__link" href="">Размещение </a>
                </li>
                <li class="health-center__item">
                    <a class="health-center__link" href="">Конференц-зал</a>
                </li>
                <li class="health-center__item">
                    <a class="health-center__link" href=""> Меню "кофе-брейк" </a>
                </li>
                <li class="health-center__item">
                    <a class="health-center__link" href="">Комплексное меню</a>
                </li>
                <li class="health-center__item">
                    <a class="health-center__link" href="">Меню ресторана</a>
                </li>
            </ul>

        </div>
        <div class="grid_9">
            <div>
                <div class="b-health-center">
                    <div class="wysiwyg">
                        <?= $model->body; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>