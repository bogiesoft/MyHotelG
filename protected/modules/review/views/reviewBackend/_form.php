<?php
/**
 * Отображение для default/_form:
 *
 * @category YupeView
 * @package  yupe
 * @author   Yupe Team <team@yupe.ru>
 * @license  https://github.com/yupe/yupe/blob/master/LICENSE BSD
 * @link     http://yupe.ru
 **/
$form = $this->beginWidget(
    'bootstrap.widgets.TbActiveForm',
    array(
        'id'                     => 'Review-form',
        'enableAjaxValidation'   => false,
        'enableClientValidation' => true,
        'htmlOptions'            => array('class' => 'well'),
    )
); ?>
<div class="alert alert-info">
    <?php echo Yii::t('ReviewModule.Review', 'Поля отмеченные'); ?>
    <span class="required">*</span>
    <?php echo Yii::t('ReviewModule.Review', 'обязательны для заполнения.'); ?>
</div>



<div class="row">
    <div class="col-sm-7">
        <?php echo $form->textFieldGroup(
            $model,
            'username',
            array(
                'widgetOptions' => array(
                    'htmlOptions' => array(
                        'data-original-title' => $model->getAttributeLabel('username'),
                        'data-content'        => $model->getAttributeDescription('username'),
                    	'placeholder' => 'Имя',
                    ),
                ),
            )
        ); ?>
    </div>
</div>
<div class="row">
    <div class="col-sm-7">
        <?php echo $form->textFieldGroup(
            $model,
            'useremail',
            array(
                'widgetOptions' => array(
                    'htmlOptions' => array(
                        'data-original-title' => $model->getAttributeLabel('useremail'),
                        'data-content'        => $model->getAttributeDescription('useremail'),
                    	'placeholder' => $model->getAttributeLabel('useremail'),
                    ),
                ),
            )
        ); ?>
    </div>
</div>
<div class="row">
    <div class="col-sm-7">
        <?php echo $form->textAreaGroup(
            $model,
            'text',
            array(
                'widgetOptions' => array(
                    'htmlOptions' => array(
                        'data-original-title' => $model->getAttributeLabel('text'),
                        'data-content'        => $model->getAttributeDescription('text'),
                    	'placeholder' => $model->getAttributeLabel('text'),
                    ),
                ),
            )
        ); ?>
    </div>
</div>
<?php echo $form->radioButtonListGroup(
			$model,
			'moderation',
			array(
				'widgetOptions' => array(
					'data' => array(
						'0'=>'Отклонить',
						'1'=>'Опубликовать',
						'2'=>'На модерацию',
					)
				)
			)
); ?>

<?php
$this->widget(
    'bootstrap.widgets.TbButton',
    array(
        'buttonType' => 'submit',
        'context'    => 'primary',
        'label'      => $model->isNewRecord ? Yii::t('ReviewModule.Review', 'Create Review and continue') : Yii::t(
                'ReviewModule.Review',
                'Сохранить и остаться'
            ),
    )
); ?>

<?php
$this->widget(
    'bootstrap.widgets.TbButton',
    array(
        'buttonType'  => 'submit',
        'htmlOptions' => array('name' => 'submit-type', 'value' => 'index'),
        'label'       => $model->isNewRecord ? Yii::t('ReviewModule.Review', 'Create Review and close') : Yii::t(
                'ReviewModule.Review',
                'Сохранить и закрыть'
            ),
    )
); ?>

<?php $this->endWidget(); ?>
