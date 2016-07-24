<?php 
$this->breadcrumbs = array(
		Yii::t('ReviewModule.review', 'Reviews') => array('/review/reviewBackend/index'),
		$model->username,
);
?>

<div class="page-header">
    <h1>
        <?php echo Yii::t('ReviewModule.Review', 'Редактирование отзыва'); ?><br/>
        <small>&laquo;<?php echo $model->username; ?>&raquo;</small>
    </h1>
</div>

<?php echo $this->renderPartial(
    '_form',
    array(
        'model'        => $model,

    )
); ?>
