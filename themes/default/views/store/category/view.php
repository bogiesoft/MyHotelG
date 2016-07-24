<?php
$mainAssets = Yii::app()->getTheme()->getAssetsUrl();
Yii::app()->getClientScript()->registerCssFile($mainAssets . '/css/store-frontend.css');
Yii::app()->getClientScript()->registerScriptFile($mainAssets . '/js/store.js');
/* @var $category StoreCategory */

$this->title = $category->getMetaTile();
$this->description = $category->getMetaDescription();
$this->keywords = $category->getMetaKeywords();
$this->canonical = $category->getMetaCanonical();

$this->breadcrumbs = [Yii::t("StoreModule.store", "Catalog") => ['/store/product/index']];

$this->breadcrumbs = array_merge(
    $this->breadcrumbs,
    $category->getBreadcrumbs(true)
); ?>
<h2 style="text-align: center;font-size: 20px;font-weight: bold;margin-top: 10px"><?= CHtml::encode($category->getTitle()); ?></h2>
<div style="padding: 10px 0 50px 0">
        <?php $this->widget(
            'bootstrap.widgets.TbListView',
            [
                'dataProvider' => $dataProvider,
                'itemView' => '//store/product/_item',
                'summaryText' => '',
                'enableHistory' => true,
                'cssFile' => false,
                'itemsCssClass' => 'row items',
            ]
        ); ?>
</div>