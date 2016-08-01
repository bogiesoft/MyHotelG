<ul class="sf-menu display-menu">
    <?php foreach ($this->params['items'] as $item): ?>
        <li>
            <a class="sf-with-ul" href="<?= $item["url"] ?>">
                <?= $item["label"] ?>
                <?php if (count($item["items"]) > 0): ?>
                <i class="caret"></i>
            </a>
            <ul>
                <?php foreach ($item["items"] as $itemChildren): ?>
                    <li>
                        <a href="<?= $itemChildren['url'] ?>">  <?= $itemChildren['label'] ?> </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <?php else: ?>
                </a>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>
<div class="clearfix"></div>




