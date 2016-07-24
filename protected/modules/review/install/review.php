<?php
return array(
    'module'    => array(
        'class' => 'application.modules.review.ReviewModule',
    ),
    'import'    => array(),
    'component' => array(),
    'rules'     => array(
        '/review/show' => 'review/review/show',
    	'/review/create' => 'review/review/create',
    ),
);
