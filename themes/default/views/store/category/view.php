<?php
$mainAssets = Yii::app()->getTheme()->getAssetsUrl();
Yii::app()->getClientScript()->registerCssFile($mainAssets . '/css/store-frontend.css');
Yii::app()->getClientScript()->registerScriptFile($mainAssets . '/js/store.js');
/* @var $category StoreCategory */

$this->title = $category->getMetaTile();
$this->description = $category->getMetaDescription();
$this->keywords = $category->getMetaKeywords();
$this->canonical = $category->getMetaCanonical();

$this->breadcrumbs = [Yii::t("StoreModule.store", "Catalog") => ['/store/product/index']];

$this->breadcrumbs = array_merge(
    $this->breadcrumbs,
    $category->getBreadcrumbs(true)
); ?>
<div class="row" style="margin-right: 0">
    <div class="grid_8">
        <h2 style="text-align: center;font-size: 20px;font-weight: bold;margin-top: 10px"><?= CHtml::encode($category->getTitle()); ?></h2>
        <div style="padding: 10px 0 50px 0">
            <?php $this->widget(
                'bootstrap.widgets.TbListView',
                [
                    'dataProvider' => $dataProvider,
                    'itemView' => '//store/product/_item',
                    'summaryText' => '',
                    'enableHistory' => true,
                    'cssFile' => false,
                    'itemsCssClass' => 'row items',
                ]
            ); ?>
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
                        <label for="medicalCenter" class="f-order__label medical--center" style="margin-top: 10px">
                            Планируете ли вы *<br>
                            пользоваться услугами медцентра ?
                        </label>
                        <select id="medicalCenter" name="medicalCenter">
                            <option value=""></option>
                            <option value="Услуги мед.центра - да">Да</option>
                            <option value="Услуги мед.центра - нет">Нет</option>
                        </select>
                        <label class="f-order__label" for="rooms" style="margin-top: 5px"> Категория
                            проживания* </label>
                        <select name="rooms" id="rooms" class="f-order__select">
                            <optgroup label="Корпус 1">
                                <option value="Корпус 1 Стандарт">Стандарт</option>
                                <option value="Корпус 1 Семейный">Семейный</option>
                            </optgroup>
                            <optgroup label="Корпус 2">
                                <option value="Корпус 2 Стандарт">Стандарт</option>
                                <option value="Корпус 2 Стандарт Стандарт Улучшенный">Стандарт Улучшенный </option>
                                <option value="Корпус 2 Семейный">Семейный</option>
                            </optgroup>
                            <optgroup label="Корпус 3">
                                <option value="Корпус 3 Стандарт">Стандарт</option>
                            </optgroup>
                            <optgroup label="Корпус 5">
                                <option value="Корпус 5 Стандарт">Стандарт</option>
                            </optgroup>
                            <optgroup label="Корпус 6">
                                <option value="Корпус 1 Стандарт">Стандарт</option>
                            </optgroup>
                            <optgroup label="Корпус 7">
                                <option value="Корпус 1 Семейный">Семейный</option>
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