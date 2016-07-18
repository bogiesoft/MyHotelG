<div class="grid_4">
    <div style="margin: 10px 0 10px 0" class="box8 wow fadeInUp animated" data-wow-duration="1s"
         data-wow-delay="0.1s"
         style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="gallery_image">
            <a class="big-image"
               href="<?= ProductHelper::getUrl($data); ?>">
                <img src="<?= $data->getImageUrl(); ?>"
                     alt="<?= CHtml::encode($data->getImageAlt()); ?>"
                     title="<?= CHtml::encode($data->getImageTitle()); ?>"
                />
            </a>
        </div>
        <h4 style="font-weight: bold">
            <a href="<?= ProductHelper::getUrl($data); ?>"><?= CHtml::encode($data->getName()); ?>t</a>
        </h4>
        <p>
            <div class="b-producr-card__description">
            <?= $data->short_description; ?>
        </div>
        </p>
        <a class="btn-default"
           href="<?= ProductHelper::getUrl($data); ?>">подробнее</a>
    </div>
</div>
