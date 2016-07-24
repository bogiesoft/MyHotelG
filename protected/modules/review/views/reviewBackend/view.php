<?php
$this->breadcrumbs = array(
    Yii::t('ReviewModule.review', 'Reviews') => array('/review/reviewBackend/index'),
    $model->title,
);

$this->pageTitle = Yii::t('ReviewModule.review', 'Show review');

$this->menu = array(
    array(
        'icon'  => 'fa fa-fw fa-list-alt',
        'label' => Yii::t('ReviewModule.review', 'Reviews list'),
        'url'   => array('/review/reviewBackend/index')
    ),
    array(
        'icon'  => 'fa fa-fw fa-plus-square',
        'label' => Yii::t('ReviewModule.review', 'Create review'),
        'url'   => array('/review/reviewBackend/create')
    ),
    array('label' => Yii::t('ReviewModule.review', 'Review') . ' «' . mb_substr($model->title, 0, 32) . '»'),
    array(
        'icon'  => 'fa fa-fw fa-pencil',
        'label' => Yii::t('ReviewModule.review', 'Edit review'),
        'url'   => array(
            '/review/reviewBackend/update',
            'id' => $model->id
        )
    ),
    array(
        'icon'  => 'fa fa-fw fa-eye',
        'label' => Yii::t('ReviewModule.review', 'Show review'),
        'url'   => array(
            '/review/reviewBackend/view',
            'id' => $model->id
        )
    ),
    array(
        'icon'        => 'fa fa-fw fa-trash-o',
        'label'       => Yii::t('ReviewModule.review', 'Remove this review'),
        'url'         => '#',
        'linkOptions' => array(
            'submit'  => array('/review/reviewBackend/delete', 'id' => $model->id),
            'params'  => array(Yii::app()->getRequest()->csrfTokenName => Yii::app()->getRequest()->csrfToken),
            'confirm' => Yii::t('ReviewModule.review', 'Do you really want to remove review?'),
        )
    ),
);
?>

<div class="review-header">
    <h1>
        <?php echo Yii::t('ReviewModule.review', 'Show review'); ?>
        <small>&laquo;<?php echo $model->title; ?>&raquo;</small>
    </h1>
</div>

<h2><?php echo $model->title; ?></h2>

<br/>
<br/>

<p><?php echo $model->text; ?></p>
<br/>

<li class="fa fa-fw fa-globe"></li>
<?php echo CHtml::link($model->getUrl(true), $model->getUrl()); ?>
