<?php Yii::import('application.modules.blog.BlogModule'); ?>
<div class="row">
    <?php foreach ($posts as $post): ?>
        <div class="grid_6" style="padding: 25px">
            <div class="b-preview-tour__image" style="background-image: url('<?= $post->getImageUrl(); ?>')">

                <div class="b-preview-tour__wrapper">
                    <div class="b-preview-tour__title" style="height: 100%;text-align: center">
                        <?= CHtml::link(
                            CHtml::encode($post->title),
                            ['/blog/post/view', 'slug' => $post->slug]
                        ); ?>
                    </div>

                </div>
            </div>
        </div>

    <?php endforeach; ?>
</div>


<!--


<div class="posts">

    <p class="posts-header">
        <span class="posts-header-text">Все туры</span>
    </p>

    <div class="posts-list">
        <?php foreach ($posts as $post): ?>
            <div class="posts-list-block">
                <div class="posts-list-block-header">
                    <?= CHtml::link(
    CHtml::encode($post->title),
    ['/blog/post/view', 'slug' => $post->slug]
); ?>
                </div>

                <div class="posts-list-block-meta">
                    <span>


                    </span>

                    <span>

                    </span>
                </div>

                <div class="posts-list-block-text">
                    <p>
                        <?= $post->getImageUrl() ? CHtml::image($post->getImageUrl(), CHtml::encode($post->title), ['class' => 'img-responsive']) : ''; ?>
                    </p>
                    <?= strip_tags($post->getQuote()); ?>
                </div>

                <div class="posts-list-block-tags">
                    <div>
                        <span class="posts-list-block-tags-block">
                            <i class="glyphicon glyphicon-tags"></i>

                            <?= Yii::t('BlogModule.blog', 'Tags'); ?>:

                            <?php foreach ((array)$post->getTags() as $tag): ?>
                                <span>
                                    <?= CHtml::link(
    CHtml::encode($tag),
    ['/posts/', 'tag' => CHtml::encode($tag)]
); ?>
                                </span>
                            <?php endforeach; ?>
                        </span>

                        <span class="posts-list-block-tags-comments">
                            <i class="glyphicon glyphicon-comment"></i>

                            <?= CHtml::link(
    $post->getCommentCount(),
    ['/blog/post/view', 'slug' => $post->slug]
); ?>
                        </span>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

-->