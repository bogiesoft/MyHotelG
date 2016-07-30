<?php
$this->pageTitle = "Отзывы";
?>

<div style="text-align: center;margin-top: 10px">
    <h2>Отзывы наших клиентов</h2>
</div>

<div>

    <div><?php $this->widget(
            'zii.widgets.CListView',
            array(
                'dataProvider' => $dataProvider,
                'itemView' => '_view',
                'summaryText' => '',
                'pager' => array(
                    'maxButtonCount' => '5',
                ),
                'pagerCssClass' => 'pagination',
            )
        ); ?></div>
</div>
<div style="text-align: center;margin-top: 10px">
    <h2>Оставьте свой отзывы</h2>
</div>
<div style="margin-top: 15px;max-width: 600px;width: 100%">
    <?php
    $this->widget(
        'application.modules.review.widgets.ReviewWidget',
        array()
    );
    ?>
</div>
