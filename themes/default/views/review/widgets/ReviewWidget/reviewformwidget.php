
<?php
Yii::app()->user->returnUrl = Yii::app()->request->requestUri;
$form = $this->beginWidget(
    'bootstrap.widgets.TbActiveForm',
    array(
        'action'      => Yii::app()->createUrl('/review/create/'),
        'id'          => 'review-form',
        'type'        => 'vertical',
        'enableAjaxValidation'   => false,
        'enableClientValidation' => true,
        'htmlOptions' => array(
            'class' => 'well',
        )
    )
); ?>

<div class="row">
    <div class="col-sm-12">
        <?php echo $form->textFieldGroup(
            $model,
            'username',
            array(
                'widgetOptions' => array(
                    'htmlOptions' => array(
                        'data-original-title' => $model->getAttributeLabel('username'),
                        'data-content'        => $model->getAttributeDescription('username')
                    ),
                ),
            )
        ); ?>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <?php echo $form->textFieldGroup(
            $model,
            'useremail',
            array(
                'widgetOptions' => array(
                    'htmlOptions' => array(
                        'data-original-title' => $model->getAttributeLabel('useremail'),
                        'data-content'        => $model->getAttributeDescription('useremail')
                    ),
                ),
            )
        ); ?>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <?php echo $form->textAreaGroup(
            $model,
            'text',
            array(
                'widgetOptions' => array(
                    'htmlOptions' => array(
                        'data-original-title' => $model->getAttributeLabel('text'),
                        'data-content'        => $model->getAttributeDescription('text')
                    ),
                ),
            )
        ); ?>
    </div>
</div>


<?php
$this->widget(
    'bootstrap.widgets.TbButton',
    array(
        'buttonType' => 'submit',
        'context'    => 'success',
        'label'      => 'Отправить отзыв'
    )
); ?>


<?php $this->endWidget(); ?>




