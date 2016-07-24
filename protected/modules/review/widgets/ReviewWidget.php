<?php
/**
 * ReviewsWidget виджет для вывода страниц
 *
 * @author yupe team <team@yupe.ru>
 * @link http://yupe.ru
 * @copyright 2009-2013 amyLabs && Yupe! team
 * @package yupe.modules.review.widgets
 * @since 0.1
 *
 */
Yii::import('application.modules.review.models.*');

class ReviewWidget extends yupe\widgets\YWidget
{
	public $view = 'reviewformwidget';

    public function init()
    {
        parent::init();

    }

    public function run()
    {

        $model = new Review;


        $this->render(
            $this->view,
        	array('model' => $model )
        		);
     
    }
}
