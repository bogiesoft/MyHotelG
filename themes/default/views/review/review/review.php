
<?php

$this->pageTitle = "Отзывы";


?>
	
	<?php 
		$this->widget(
		'application.modules.review.widgets.ReviewWidget',
		array()
		); 
	?>

<?php $this->widget(
    'zii.widgets.CListView',
    array(
        'dataProvider' => $dataProvider,
        'itemView'     => '_view',
    	'summaryText'  => '',
		'pager' => array(
           'maxButtonCount'=>'5',
),
    	'pagerCssClass'=>'pagination',
    )
); ?>