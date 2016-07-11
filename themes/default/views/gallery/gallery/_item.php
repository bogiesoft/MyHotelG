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
<div class="grid_4">
    <div class="media">
        <h2 class="media-heading" style="font-size: 20px;text-align: left">
            <?= CHtml::link(CHtml::encode($data->name), ['/gallery/gallery/view', 'id' => $data->id]); ?>
        </h2>
        <?= CHtml::link(
            CHtml::image($data->previewImage(600, 600), $data->name, ['class' => 'thumbnail media-object']),
            ['/gallery/gallery/view', 'id' => $data->id],
            ['class' => 'pull-left']
        ); ?>
    </div>
</div>
