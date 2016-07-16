<?php
/* @var $data News */
?>
<div class="grid_6">
    <div class="post2 wow fadeInUp animated" data-wow-duration="1s"
         data-wow-delay="0.2s"
         style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInUp;">
        <div class="head">
                    <h5>
                        <?= CHtml::link(CHtml::encode($data->title), Yii::app()->createUrl('/news/news/view', ['slug' => $data->slug])); ?>
                    </h5>
        </div>
        <div class="b-news__pic" style="height: 250px;background-image: url(' <?php if ($data->image): ?>
            <?= $data->getImageUrl(); ?>
        <?php endif; ?>')">

        </div>
            <div style="min-height: 60px">
            <?= $data->short_text; ?>
        </div>
        <?= CHtml::link(Yii::t('NewsModule.news', 'read...'), ['/news/news/view/', 'slug' => $data->slug], ['class' => 'btn btn-default']); ?>
    </div>
</div>
