<?php
/**
 * Отображение для ./themes/default/views/news/news/news.php:
 *
 * @category YupeView
 * @package  YupeCMS
 * @author   Yupe Team <team@yupe.ru>
 * @license  https://github.com/yupe/yupe/blob/master/LICENSE BSD
 * @link     http://yupe.ru
 *
 * @var $this NewsController
 * @var $model News
 **/
?>
<?php
$this->title = $model->title;
$this->description = $model->description;
$this->keywords = $model->keywords;
?>

<?php
$this->breadcrumbs = [
    Yii::t('NewsModule.news', 'News') => ['/news/news/index'],
    $model->title
];
?>
<style>
    img {
        max-height: 250px;
        margin: 10px;
    }
</style>

<div class="post">
    <div class="row">
        <div class="col-sm-12">
            <h2><strong><?= CHtml::encode($model->title); ?></strong></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <?php if ($model->image): ?>
                <?= CHtml::image($model->getImageUrl(), $model->title); ?>
            <?php endif; ?>
            <p>
                <div style="font-size: 18px;font-family: Arial,Helvetica,Serif">
                <?= $model->full_text; ?></p>
        </div>
        </div>
    </div>
</div>
