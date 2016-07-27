<div class="slider-wrapper">
    <div class="my-slider">
        <div class="my-slider_container">
        </div>
        <ul>
            <?php foreach ($items as $item): ?>
                <li>
                    <div class="my-slider__slide" style="background-image: url('<?= $item["image"] ?>')">

                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="clearfix"></div>
</div>
