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
    <div class="b-map-title">
        <h1 class="b-page__header"><?= $model->title; ?></h1>
    </div>
    <div>
        <div class="b-map">

        </div>
    </div>
</div>