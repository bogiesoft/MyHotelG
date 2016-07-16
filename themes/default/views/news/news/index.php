<?php
$this->title = Yii::t('NewsModule.news', 'News');
$this->breadcrumbs = [Yii::t('NewsModule.news', 'News')];
?>
<div class="row">
<?php $this->widget(
    'bootstrap.widgets.TbListView',
    [
        'dataProvider' => $dataProvider,
        'itemView' => '_item',
    ]
); ?>
</div>