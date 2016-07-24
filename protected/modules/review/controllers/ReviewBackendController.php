<?php
/**
 * ReviewBackendController контроллер панели управления для управления страницами
 *
 * @author    yupe team <team@yupe.ru>
 * @link      http://yupe.ru
 * @copyright 2009-2013 amyLabs && Yupe! team
 * @package   yupe.modules.review.controllers
 * @license   BSD https://raw.github.com/yupe/yupe/master/LICENSE
 * @version   0.6
 *
 */
Yii::import('application.modules.menu.models.*');

class ReviewBackendController extends yupe\components\controllers\BackController
{
    public function accessRules()
    {
        return array(
            array('allow', 'roles' => array('admin')),
            array('allow', 'actions' => array('create'), 'roles' => array('Review.ReviewBackend.Create')),
            array('allow', 'actions' => array('delete'), 'roles' => array('Review.ReviewBackend.Delete')),
            array('allow', 'actions' => array('index'), 'roles' => array('Review.ReviewBackend.Index')),
            array('allow', 'actions' => array('inlineEdit'), 'roles' => array('Review.ReviewBackend.Update')),
            array('allow', 'actions' => array('update'), 'roles' => array('Review.ReviewBackend.Update')),
            array('allow', 'actions' => array('view'), 'roles' => array('Review.ReviewBackend.View')),
        	array('allow', 'actions' => array('updatemoderation'), 'roles' => array('Review.ReviewBackend.Update')),
            array('deny')
        );
    }

    public function actions()
    {
        return array(
            'inline' => array(
                'class'           => 'yupe\components\actions\YInLineEditAction',
                'model'           => 'Review',
                'validAttributes' => array('title', 'slug', 'status', 'title_short')
            )
        );
    }

    /**
     * @var Review $model the currently loaded data model instance.
     */
    private $_model;

    /**
     * Displays a particular model.
     *
     * @param int $id - record ID
     *
     * @return void
     */
    public function actionView($id)
    {
        $this->render('view', array('model' => $this->loadModel($id)));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' review.
     *
     * @return void
     *
     * @throws CDbException
     */
    public function actionCreate()
    {

    	//$this->controller->redirect(Yii::app()->user->returnUrl);
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' review.
     *
     * @param int $id - record ID
     *
     * @return void
     *
     * @throws CDbException
     */
    public function actionUpdate($id)
    {
    	$model = $this->loadModel($id);
    	
        if (($data = Yii::app()->getRequest()->getPost('Review')) !== null) {
            $model->setAttributes(Yii::app()->getRequest()->getPost('Review'));

            if ($model->save()) {

                Yii::app()->user->setFlash(
                    yupe\widgets\YFlashMessages::SUCCESS_MESSAGE,
                    Yii::t('ReviewModule.category', 'Review was changed!')
                );

                $this->redirect(
                    (array)Yii::app()->getRequest()->getPost(
                        'submit-type',
                        array(
                            'update',
                            'id' => $model->id,
                        )
                    )
                );
            }
        }
        
        $this->render(
        		'update',
        		array(
        				'model'      => $model
        		)
        );
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'index' review
     *
     * @param int $id - record ID
     *
     * @return void
     *
     * @throws CHttpException
     */
    public function actionDelete($id = null)
    {



            $model = $this->loadModel($id);

            // we only allow deletion via POST request
            $model->delete();

            // если это AJAX запрос ( кликнули удаление в админском grid view), мы не должны никуда редиректить
            Yii::app()->getRequest()->getParam('ajax') !== null || $this->redirect(
                (array)Yii::app()->getRequest()->getPost('returnUrl', 'index')
            );

    }

    /**
     * Manages all models.
     *
     * @return void
     */
    public function actionIndex($ipp=-1)
    {
        $dbCriteria = new CDbCriteria(array(
            'order'     => 't.date_created DESC'
        ));
        if($ipp>-1){
        	$this->module->itemsperpage = $ipp;
        }
        $listperpage = $this->module->getEditableParams()['itemsperpage'];
        $itemsperpage = $this->module->itemsperpage;
        
        $dataProvider = new CActiveDataProvider('Review', array(
        		'criteria' => $dbCriteria,
        		'pagination'=>array(
        				'pageSize'=>$listperpage[$itemsperpage],
        		),
        		
        ));
        $model = new Review;

        $this->render('index', array('dataProvider' => $dataProvider));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     *
     * @param int $id - record ID
     *
     * @return Review $model
     *
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        if ($this->_model === null || $this->_model->id !== $id) {

            if (($this->_model = Review::model()->findByPk($id)) === null) {
                throw new CHttpException(
                    404,
                    Yii::t('ReviewModule.review', 'Review was not found')
                );
            }
        }

        return $this->_model;
    }
    
    public function actionUpdatemoderation($id, $mod) {
    $model = $this->loadModel($id);
    $model->moderation = $mod;
    $model->save();
    
	
    echo $this->module->getModerationStatus($mod);
    
    }
}
