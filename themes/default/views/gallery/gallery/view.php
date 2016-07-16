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
    <h3 class="page-header" ><?= CHtml::encode($model->name); ?></h3>
  
  
    <?php $this->widget(
        'gallery.widgets.GalleryWidget',
        ['galleryId' => $model->id, 'gallery' => $model, 'limit' => 30]
    ); ?>
</div>
