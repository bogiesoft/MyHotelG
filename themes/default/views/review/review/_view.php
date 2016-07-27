<div class="b-reviews">
    <div class="b-reviews__text">
        <?php echo $data->text; ?>
    </div>
    <div class="b-reviews__data">
        <?php echo CHtml::encode(Yii::app()->dateFormatter->format("dd MMMM yyyy", $data->date_created)); ?>
    </div>

    <div class="b-reviews__user">
        <?php echo CHtml::encode($data->username); ?>
    </div>
</div>