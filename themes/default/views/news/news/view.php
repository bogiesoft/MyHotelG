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
<div class="row">
    <div class="col-sm-12">
        <div class="b-news__description">
            <h2 style="text-align: center;margin-top: 10px"><strong><?= CHtml::encode($model->title); ?></strong></h2>
            <br>
            <?php if ($model->image): ?>
                <div class="block-news-img" style="background-image: url('<?= $model->getImageUrl() ?>')">
                    <a href="<?= $model->getImageUrl() ?>" class="fancybox block-news-img__link"></a>
                </div>
            <?php endif; ?>
            <div class="wysiwyg">
                <?= $model->full_text; ?>
            </div>
            </p>
        </div>
    </div>
</div>
</div>
