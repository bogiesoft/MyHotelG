<?php Yii::import('application.modules.news.NewsModule'); ?>
<div class="b-main-last-news">
    <div class="my-slider-news">
        <ul>
            <?php foreach ($models as $model): ?>
                <li>
                    <div class="my-slider-news__pic" style="background-image: url('<?= $model->getImageUrl(); ?>')">

                    </div>
                    <div class="my-slider-news__description">
                        <div class="my-slider-news_text">
                            <?= $model->short_text; ?>
                        </div>
                        <div class="my-slider-next">
                            <a href="/news/<?= $model->slug; ?>.html"> Читать далее</a>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<hr>


<script>
    $(document).ready(
        function () {
            var newsWidth = $('.my-slider-news__pic').width();
            $('.my-slider-news__description').width(newsWidth);
            $(window).resize(
                function () {
                    var newsWidth = $('.my-slider-news__pic').width();
                    $('.my-slider-news__description').width(newsWidth);
                }
            );
        }
    )
</script>