<?php
/**
 * @var $this GalleryController
 * @var $model Gallery
 */

$this->title = Yii::t('GalleryModule.gallery', 'Gallery');
$this->breadcrumbs = [
    Yii::t('GalleryModule.gallery', 'Galleries') => ['/gallery/gallery/index'],
    $model->name
];
?>
<div class="gallery-show">
    <h1 class="page-header" style="font-size: 30px;font-weight: bold;text-transform: uppercase"><?= CHtml::encode($model->name); ?></h1>
    <?php $this->widget(
        'gallery.widgets.GalleryWidget',
        ['galleryId' => $model->id, 'gallery' => $model, 'limit' => 30]
    ); ?>
</div>
