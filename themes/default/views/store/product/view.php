<?php

/* @var $product Product */

$this->title = $product->getMetaTitle();
$this->description = $product->getMetaDescription();
$this->keywords = $product->getMetaKeywords();
$this->canonical = $product->getMetaCanonical();

$mainAssets = Yii::app()->getModule('store')->getAssetsUrl();
Yii::app()->getClientScript()->registerScriptFile($mainAssets . '/js/jquery.simpleGal.js');

Yii::app()->getClientScript()->registerCssFile(Yii::app()->getTheme()->getAssetsUrl() . '/css/store-frontend.css');
Yii::app()->getClientScript()->registerScriptFile(Yii::app()->getTheme()->getAssetsUrl() . '/js/store.js');

$this->breadcrumbs = array_merge(
    [Yii::t("StoreModule.store", 'Catalog') => ['/store/product/index']],
    $product->category ? $product->category->getBreadcrumbs(true) : [],
    [CHtml::encode($product->name)]
);
?>
<div class="row" style="margin-right: 0">
    <div class="grid_8">
        <div>
            <h1 class="product__title">
                <?= CHtml::encode($product->getTitle()); ?></h1>
            <div style="clear: both">

            </div>
        </div>

        <hr style="margin-top: 3px">
        <div class="product__description">
            <div>
                <div class="product__price" style="float: right">
                    Стоимость <?= round($product->getBasePrice(), 2); ?> руб
                </div>
            </div>
            <div class="clearfix"></div>
            <?= $product->description; ?>
        </div>
        <hr>
        <div class="row">
            <div class="grid_4" style="padding: 20px">
                <div class="b-product-image" style="background-image: url('<?= StoreImage::product($product); ?>')">
                    <a class="fancybox b-product-image__link" href="<?= StoreImage::product($product); ?>"></a>
                </div>
            </div>
            <?php foreach ($product->getImages() as $key => $image): { ?>
                <div class="grid_4" style="padding: 20px">
                    <div class="b-product-image" style="background-image: url('<?= $image->getImageUrl(); ?>')">
                        <a class="fancybox b-product-image__link" href="<?= $image->getImageUrl(); ?>"></a>
                    </div>
                </div>
            <?php } endforeach; ?>
        </div>


    </div>
    <div class="grid_4" style="padding: 10px">
        <div class="b-sidebar">
            <div class="b-widget__weather">
            </div>
            <div class="b-widget-order">
                <div class="b-widget-order__title">
                    забронировать номер
                </div>
                <hr style="width: 70%;margin: 5px auto">
                <div class="b-widget-order__body">
                    <form id="order-form" action="" class="f-order">
                        <label class="f-order__label" for="username"> Имя* </label>
                        <input id="username" name="username" class="f-order__input" type="text" required>
                        <label class="f-order__label" for="phone"> Номер телефона* </label>
                        <input id="phone" name="phone" class="f-order__input" type="text" required>
                        <label class="f-order__label" for="people"> Количество человек* </label>
                        <select id="people" name="people">
                            <option>1</option>
                            <option selected="selected">2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                        <label class="f-order__label" for="rooms" style="margin-top: 5px"> Категория
                            проживания* </label>
                        <select name="rooms" id="rooms" class="f-order__select">
                            <optgroup label="Корпус 1">
                                <option value="Корпус 1 Стандарт">Стандарт</option>
                                <option value="Корпус 1 Семейный">Семейный</option>
                                <option value="Корпус 1 Улучшенный">Улучшенный</option>
                            </optgroup>
                            <optgroup label="Корпус 2">
                                <option value="Корпус 2 Стандарт">Стандарт</option>
                                <option value="Корпус 2 Семейный">Семейный</option>
                                <option value="Корпус 2 Улучшенный">Улучшенный</option>
                            </optgroup>
                        </select>
                        <br>
                        <label class="f-order__label" for="datepicker-from">Дата заезда*</label>
                        <input class="f-order__datepicker" type="text" id="datepicker-from" name="datepicker-from"
                               required>

                        <label class="f-order__label" for="datepicker-to">Дата выезда*</label>
                        <input class="f-order__datepicker" type="text" id="datepicker-to" name="datepicker-to" required>

                        <label class="f-order__label" for="email"> E-mail </label>
                        <input id="email" name="email" class="f-order__input" type="email">

                        <label class="f-order__label" for="comments"> Дополнительная информация </label>
                        <textarea id="comments" name="comments" class="f-order__area"> </textarea>
                        <button id="btn-order" type="submit" class="f-order__btn-order"> Отправить заявку</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>


<!--<div class="row" style="margin-top: 15px;">
    <div class="grid_8">
        <h1 class="product__title"><? /*= CHtml::encode($product->getTitle()); */ ?></h1>
        <div class="slider-wrapper" style="height: auto;">
            <div class="my-slider b-gallery-product">
                <ul>
                    <li>
                        <div>
                            <a class="fancybox" href="<? /*= StoreImage::product($product); */ ?>">  <img class="b-gallery-product__pic" src="<? /*= StoreImage::product($product); */ ?>"/></a>
                        </div>
                    </li>
                    <?php /*foreach ($product->getImages() as $key => $image): { */ ?>
                        <li>
                            <div>
                                <a class="fancybox" href=""> <img class="b-gallery-product__pic" src="<? /*= $image->getImageUrl(); */ ?>"/></a>
                            </div>
                        </li>
                    <?php /*} endforeach; */ ?>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="grid_4">
        <div class="b-product__price">

        </div>
        <?php /*$this->widget('application.modules.callback.widgets.CallbackWidget'); */ ?>
    </div>
</div>

<div class="row" style="margin-top: 10px">
    <div class="grid_12">
        <div class="product__description">

        </div>
    </div>
</div>
-->

<!--

<div class="row" xmlns="http://www.w3.org/1999/html">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="title"><?= CHtml::encode($product->getTitle()); ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 product-feature">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="thumbnails">
                            <div class="image-preview">
                                <img src="<?= StoreImage::product($product); ?>" id="main-image"
                                     alt="<?= CHtml::encode($product->getImageAlt()); ?>"
                                     title="<?= CHtml::encode($product->getImageTitle()); ?>"
                                >
                            </div>
                            <div class="row">
                                <div class="col-xs-4 col-md-4">
                                    <a href="<?= $product->getImageUrl(); ?>" class="thumbnail">
                                        <img src="<?= $product->getImageUrl(50, 50); ?>"
                                             alt="<?= CHtml::encode($product->getImageAlt()); ?>"
                                             title="<?= CHtml::encode($product->getImageTitle()); ?>"/>
                                    </a>
                                </div>
                                <?php foreach ($product->getImages() as $key => $image): { ?>
                                    <div class="col-xs-4 col-md-4">
                                        <a href="<?= $image->getImageUrl(); ?>" class="thumbnail">
                                            <img src="<?= $image->getImageUrl(50, 50); ?>"
                                                 alt="<?= CHtml::encode($image->alt) ?>"
                                                 title="<?= CHtml::encode($image->title) ?>"/>
                                        </a>
                                    </div>
                                <?php } endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">

                        <?php if ($product->isInStock()): ?>
                            <span class="label label-success"><?= Yii::t("StoreModule.store", "In stock"); ?></span>
                            <?php if ($product->quantity): ?>
                                <span><?= $product->quantity; ?> <?= Yii::t("StoreModule.store", "in stock"); ?></span>
                            <?php endif; ?>
                        <?php else: ?>
                            <span class="label label-danger"><?= Yii::t("StoreModule.store", "Not in stock"); ?></span>
                        <?php endif; ?>

                        <div class="properties">
                            <?php foreach ($product->getAttributeGroups() as $groupName => $items): { ?>
                                <div class="propertyGroup">
                                    <h4>
                                        <span><?= CHtml::encode($groupName); ?></span>
                                    </h4>
                                    <table>
                                        <tbody>
                                        <?php foreach ($items as $attribute): { ?>
                                            <tr>
                                                <td class="key">
                                                    <span><?= CHtml::encode($attribute->title); ?></span>
                                                </td>
                                                <td class="value">
                                                    <?= AttributeRender::renderValue($attribute, $product->attribute($attribute)); ?>
                                                </td>
                                            </tr>
                                        <?php } endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            <?php } endforeach; ?>
                        </div>
                        <br/>
                        <h4><?= Yii::t("StoreModule.store", "Description"); ?></h4>
                        <?= $product->short_description; ?>
                        <?php if ($product->getVariantsGroup()): ?>
                            <hr/>
                            <h4><?= Yii::t("StoreModule.store", "Variants"); ?></h4>
                        <?php endif; ?>

                        <form action="<?= Yii::app()->createUrl('cart/cart/add'); ?>" method="post">
                            <input type="hidden" name="Product[id]" value="<?= $product->id; ?>"/>
                            <?= CHtml::hiddenField(
    Yii::app()->getRequest()->csrfTokenName,
    Yii::app()->getRequest()->csrfToken
); ?>
                            <table class="table table-condensed">
                                <?php foreach ($product->getVariantsGroup() as $title => $variantsGroup): { ?>
                                    <tr>
                                        <td style="padding: 0;">
                                            <?= CHtml::encode($title); ?>
                                        </td>
                                        <td>
                                            <?=
    CHtml::dropDownList(
        'ProductVariant[]',
        null,
        CHtml::listData($variantsGroup, 'id', 'optionValue'),
        ['empty' => '', 'class' => 'form-control', 'options' => $product->getVariantsOptions()]
    ); ?>
                                        </td>
                                    </tr>
                                <?php } endforeach; ?>
                            </table>
                            <div>
                                <input type="hidden" id="base-price"
                                       value="<?= round($product->getResultPrice(), 2); ?>"/>

                                <p>
                                    <?= Yii::t("StoreModule.store", "Price"); ?>
                                    : <?= round($product->getBasePrice(), 2); ?> <?= Yii::t("StoreModule.store", Yii::app()->getModule('store')->currency); ?>
                                </p>

                                <p>
                                    <?= Yii::t("StoreModule.store", "Fix price with discount"); ?>
                                    : <?= round($product->getDiscountPrice(), 2); ?>
                                    <?= Yii::t("StoreModule.store", Yii::app()->getModule('store')->currency); ?>
                                </p>

                                <p>
                                    <?= Yii::t("StoreModule.store", "Discount"); ?>: <?= round($product->discount); ?>%
                                </p>

                                <p>
                                    <?= Yii::t("StoreModule.store", "Total price"); ?>: <span
                                        id="result-price"><?= round($product->getResultPrice(), 2); ?></span>
                                    <?= Yii::t("StoreModule.store", Yii::app()->getModule('store')->currency); ?>
                                </p>
                            </div>

                            <?php if (Yii::app()->hasModule('order')): ?>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="input-group">
                                            <div class="input-group-btn">
                                                <button class="btn btn-default product-quantity-decrease" type="button">
                                                    -
                                                </button>
                                            </div>
                                            <input type="text" class="text-center form-control" value="1"
                                                   name="Product[quantity]" id="product-quantity"/>

                                            <div class="input-group-btn">
                                                <button class="btn btn-default product-quantity-increase" type="button">
                                                    +
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-success pull-left" id="add-product-to-cart"
                                                data-loading-text="<?= Yii::t("StoreModule.store", "Adding"); ?>">
                                            <?= Yii::t("StoreModule.store", "Add to cart"); ?>
                                        </button>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </form>
                        <br>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <ul class="nav nav-tabs" id="myTab">
            <?php if (!empty($product->description)): ?>
                <li>
                    <a href="#description" data-toggle="tab"><?= Yii::t("StoreModule.store", "Description"); ?></a>
                </li>
            <?php endif; ?>
            <?php if (!empty($product->data)): ?>
                <li><a href="#data" data-toggle="tab"><?= Yii::t("StoreModule.store", "Data"); ?></a></li>
            <?php endif; ?>
            <li><a href="#attributes" data-toggle="tab"><?= Yii::t("StoreModule.store", "Characteristics"); ?></a></li>
            <?php if (Yii::app()->hasModule('comment')): ?>
                <li><a href="#comments-tab" data-toggle="tab"><?= Yii::t("StoreModule.store", "Comments"); ?></a></li>
            <?php endif; ?>
        </ul>

        <div class="tab-content">
            <?php if (!empty($product->description)): ?>
                <div class="tab-pane" id="description">
                    <?= $product->description; ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($product->data)): ?>
                <div class="tab-pane" id="data">
                    <?= $product->data; ?>
                </div>
            <?php endif; ?>
            <div class="tab-pane" id="attributes">
                <table>
                    <tr>
                        <td><b><?= Yii::t("StoreModule.store", "Producer"); ?>:</b></td>
                        <td><?= CHtml::encode($product->getProducerName()); ?></td>
                    </tr>
                    <tr>
                        <td><b><?= Yii::t("StoreModule.store", "SKU"); ?>:</b></td>
                        <td><?= CHtml::encode($product->sku); ?></td>
                    </tr>
                    <tr>
                        <td><b><?= Yii::t("StoreModule.store", "Length"); ?>:</b></td>
                        <td><?= round($product->length, 2); ?> <?= Yii::t("StoreModule.store", "m"); ?></td>
                    </tr>
                    <tr>
                        <td><b><?= Yii::t("StoreModule.store", "Width"); ?>:</b></td>
                        <td><?= round($product->width, 2); ?> <?= Yii::t("StoreModule.store", "m"); ?></td>
                    </tr>
                    <tr>
                        <td><b><?= Yii::t("StoreModule.store", "Height"); ?>:</b></td>
                        <td><?= round($product->height, 2); ?> <?= Yii::t("StoreModule.store", "m"); ?></td>
                    </tr>
                    <tr>
                        <td><b><?= Yii::t("StoreModule.store", "Weight"); ?>:</b></td>
                        <td><?= round($product->weight, 2); ?> <?= Yii::t("StoreModule.store", "kg"); ?></td>
                    </tr>
                </table>
            </div>
            <?php if (Yii::app()->hasModule('comment')): ?>
                <div class="tab-pane" id="comments-tab">
                    <?php $this->widget('application.modules.comment.widgets.CommentsWidget', [
    'redirectTo' => ProductHelper::getUrl($product),
    'model' => $product,
]); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-sm-12">
        <?php $this->widget('application.modules.store.widgets.LinkedProductsWidget', ['product' => $product, 'code' => null,]); ?>
    </div>
</div>

-->
<?php Yii::app()->getClientScript()->registerScript(
    "product-images",
    <<<JS
        $(".thumbnails").simpleGal({mainImage: "#main-image"});
        $("#myTab li").first().addClass('active');
        $(".tab-pane").first().addClass('active');
JS
); ?>
