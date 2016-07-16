<?php
/**
 * Отображение для gallery/list:
 *
 * @category YupeView
 * @package  yupe
 * @author   Yupe Team <team@yupe.ru>
 * @license  https://github.com/yupe/yupe/blob/master/LICENSE BSD
 * @link     http://yupe.ru
 *
 * @var $this GalleryController
 * @var $dataProvider CActiveDataProvider
 **/

$this->title = Yii::t('GalleryModule.gallery', 'Image galleries');
$this->breadcrumbs = [Yii::t('GalleryModule.gallery', 'Image galleries')];

?>
<h2 class="page-header">
    <?= Yii::t('GalleryModule.gallery', 'Image galleries'); ?>
</h2>
<div class="row">
    <?php
    $this->widget(
        'bootstrap.widgets.TbListView',
        [
            'dataProvider' => $dataProvider,
            'itemView'     => '_item',
            'template'     => "{items}\n{pager}",
            'separator'    => '<hr>',
        ]
    ); ?>
</div>
