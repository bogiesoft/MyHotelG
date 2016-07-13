<div class="slider-wrapper" style="height: auto;">
    <div class="my-slider">
        <ul>
            <?php foreach ($items as $item):?>
                <li>
                    <img src="<?=$item["image"] ?>" alt = "<?=$item["label"]; ?>" />
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="clearfix"></div>
</div>
