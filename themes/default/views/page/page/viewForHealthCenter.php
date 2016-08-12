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
<div style="min-height: 760px">
    <h1 class="b-page__header">ОЗДОРОВИТЕЛЬНЫЙ ЦЕНТР «УСАДЬБА НИКА»</h1>
    <div>
        <div class="b-health-center">
            <?= $model->body; ?>
        </div>
    </div>
</div>