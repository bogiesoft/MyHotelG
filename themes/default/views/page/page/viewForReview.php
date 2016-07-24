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
$this->widget('application.modules.review.widgets.ReviewWidget');
?>
<div style="min-height: 760px">
    <?php if (Yii::app()->hasModule('review')): ?>
        <?php $this->widget('application.modules.review.widgets.ReviewWidget'); ?>
    <?php endif; ?>
</div>