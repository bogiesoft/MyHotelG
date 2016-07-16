<?php
$this->title = Yii::t('NewsModule.news', 'News');
$this->breadcrumbs = [Yii::t('NewsModule.news', 'News')];
?>

<h1><?= Yii::t('NewsModule.news', 'News') ?></h1>
<div class="row">
<?php $this->widget(
    'bootstrap.widgets.TbListView',
    [
        'dataProvider' => $dataProvider,
        'itemView' => '_item',
    ]
); ?>
</div>