<?php

$mainAssets = Yii::app()->getTheme()->getAssetsUrl();
Yii::app()->getClientScript()->registerCssFile($mainAssets . '/css/store-frontend.css');
Yii::app()->getClientScript()->registerScriptFile($mainAssets . '/js/store.js');

/* @var $category StoreCategory */

$this->breadcrumbs = [Yii::t("StoreModule.store", "Catalog")];

?>
<div style="padding: 30px 0 50px 0">
<?php $this->widget(
    'bootstrap.widgets.TbListView',
    [
        'dataProvider' => $dataProvider,
        'itemView' => '_item',
        'summaryText' => '',
        'enableHistory' => true,
        'cssFile' => false,
        'itemsCssClass' => 'row items',
    ]
); ?>
</div>




