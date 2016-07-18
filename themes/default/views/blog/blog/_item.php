<div class="row">
    <div class="col-lg-3">
        <div class="b-tour__image" style="background-image: url('<?= $data->getImageUrl(); ?>')">

        </div>
    </div>
    <div class="col-lg-8">
        <div class="b-tour__title">
        <?= CHtml::link(
            CHtml::encode($data->name),
            ['/blog/blog/view/', 'slug' => CHtml::encode($data->slug)]
        ); ?>
        </div>
        <div class="b-tour__description">
            <hr style="width: 80%;margin: 5px auto">
            <?= strip_tags($data->description); ?>
            <hr style="width: 80%;margin: 5px auto">
        </div>
    </div>
</div>
<hr>