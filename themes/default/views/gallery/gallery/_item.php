<?php
/**
 * Отображение для gallery/_item:
 *
 * @category YupeView
 * @package  YupeCMS
 * @author   Yupe Team <team@yupe.ru>
 * @license  https://github.com/yupe/yupe/blob/master/LICENSE BSD
 * @link     http://yupe.ru
 *
 * @var $this GalleryController
 * @var $data Gallery
 **/
?>
<div class="grid_12">
    <div class="media">
        <div class="gallery-show">
            <h2 class="media-heading" style="font-size: 20px;text-align: left">
                <?= CHtml::encode($data->name); ?>
            </h2>
            <?php $this->widget(
                'gallery.widgets.GalleryWidget',
                ['galleryId' => $data->id, 'gallery' => $data, 'limit' => 30]
            ); ?>
        </div>

    </div>
</div>
