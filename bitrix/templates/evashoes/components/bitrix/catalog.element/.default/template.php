<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$this->setFrameMode(true);
$this->addExternalCss('/bitrix/css/main/bootstrap.css');

$templateLibrary = array('popup', 'fx');
$currencyList = '';

if (!empty($arResult['CURRENCIES']))
{
	$templateLibrary[] = 'currency';
	$currencyList = CUtil::PhpToJSObject($arResult['CURRENCIES'], false, true, true);
}

$templateData = array(
	'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
	'TEMPLATE_LIBRARY' => $templateLibrary,
	'CURRENCIES' => $currencyList,
	'ITEM' => array(
		'ID' => $arResult['ID'],
		'IBLOCK_ID' => $arResult['IBLOCK_ID'],
		'OFFERS_SELECTED' => $arResult['OFFERS_SELECTED'],
		'JS_OFFERS' => $arResult['JS_OFFERS']
	)
);
unset($currencyList, $templateLibrary);

$mainId = $this->GetEditAreaId($arResult['ID']);
$itemIds = array(
	'ID' => $mainId,
	'DISCOUNT_PERCENT_ID' => $mainId.'_dsc_pict',
	'STICKER_ID' => $mainId.'_sticker',
	'BIG_SLIDER_ID' => $mainId.'_big_slider',
	'BIG_IMG_CONT_ID' => $mainId.'_bigimg_cont',
	'SLIDER_CONT_ID' => $mainId.'_slider_cont',
	'OLD_PRICE_ID' => $mainId.'_old_price',
	'PRICE_ID' => $mainId.'_price',
	'DISCOUNT_PRICE_ID' => $mainId.'_price_discount',
	'PRICE_TOTAL' => $mainId.'_price_total',
	'SLIDER_CONT_OF_ID' => $mainId.'_slider_cont_',
	'QUANTITY_ID' => $mainId.'_quantity',
	'QUANTITY_DOWN_ID' => $mainId.'_quant_down',
	'QUANTITY_UP_ID' => $mainId.'_quant_up',
	'QUANTITY_MEASURE' => $mainId.'_quant_measure',
	'QUANTITY_LIMIT' => $mainId.'_quant_limit',
	'BUY_LINK' => $mainId.'_buy_link',
	'ADD_BASKET_LINK' => $mainId.'_add_basket_link',
	'BASKET_ACTIONS_ID' => $mainId.'_basket_actions',
	'NOT_AVAILABLE_MESS' => $mainId.'_not_avail',
	'COMPARE_LINK' => $mainId.'_compare_link',
	'TREE_ID' => $mainId.'_skudiv',
	'DISPLAY_PROP_DIV' => $mainId.'_sku_prop',
	'DISPLAY_MAIN_PROP_DIV' => $mainId.'_main_sku_prop',
	'OFFER_GROUP' => $mainId.'_set_group_',
	'BASKET_PROP_DIV' => $mainId.'_basket_prop',
	'SUBSCRIBE_LINK' => $mainId.'_subscribe',
	'TABS_ID' => $mainId.'_tabs',
	'TAB_CONTAINERS_ID' => $mainId.'_tab_containers',
	'SMALL_CARD_PANEL_ID' => $mainId.'_small_card_panel',
	'TABS_PANEL_ID' => $mainId.'_tabs_panel'
);
$obName = $templateData['JS_OBJ'] = 'ob'.preg_replace('/[^a-zA-Z0-9_]/', 'x', $mainId);
$name = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'])
	? $arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE']
	: $arResult['NAME'];
$title = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_TITLE'])
	? $arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_TITLE']
	: $arResult['NAME'];
$alt = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_ALT'])
	? $arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_ALT']
	: $arResult['NAME'];

$haveOffers = !empty($arResult['OFFERS']);
if ($haveOffers)
{
	$actualItem = isset($arResult['OFFERS'][$arResult['OFFERS_SELECTED']])
		? $arResult['OFFERS'][$arResult['OFFERS_SELECTED']]
		: reset($arResult['OFFERS']);
	$showSliderControls = false;

	foreach ($arResult['OFFERS'] as $offer)
	{
		if ($offer['MORE_PHOTO_COUNT'] > 1)
		{
			$showSliderControls = true;
			break;
		}
	}
}
else
{
	$actualItem = $arResult;
	$showSliderControls = $arResult['MORE_PHOTO_COUNT'] > 1;
}

$skuProps = array();
$price = $actualItem['ITEM_PRICES'][$actualItem['ITEM_PRICE_SELECTED']];
$measureRatio = $actualItem['ITEM_MEASURE_RATIOS'][$actualItem['ITEM_MEASURE_RATIO_SELECTED']]['RATIO'];
$showDiscount = $price['PERCENT'] > 0;

$showDescription = !empty($arResult['PREVIEW_TEXT']) || !empty($arResult['DETAIL_TEXT']);
$showBuyBtn = in_array('BUY', $arParams['ADD_TO_BASKET_ACTION']);
$buyButtonClassName = in_array('BUY', $arParams['ADD_TO_BASKET_ACTION_PRIMARY']) ? 'btn-default' : 'btn-link';
$showAddBtn = in_array('ADD', $arParams['ADD_TO_BASKET_ACTION']);
$showButtonClassName = in_array('ADD', $arParams['ADD_TO_BASKET_ACTION_PRIMARY']) ? 'btn-default' : 'btn-link';
$showSubscribe = $arParams['PRODUCT_SUBSCRIPTION'] === 'Y' && ($arResult['CATALOG_SUBSCRIBE'] === 'Y' || $haveOffers);

$arParams['MESS_BTN_BUY'] = $arParams['MESS_BTN_BUY'] ?: Loc::getMessage('CT_BCE_CATALOG_BUY');
$arParams['MESS_BTN_ADD_TO_BASKET'] = $arParams['MESS_BTN_ADD_TO_BASKET'] ?: Loc::getMessage('CT_BCE_CATALOG_ADD');
$arParams['MESS_NOT_AVAILABLE'] = $arParams['MESS_NOT_AVAILABLE'] ?: Loc::getMessage('CT_BCE_CATALOG_NOT_AVAILABLE');
$arParams['MESS_BTN_COMPARE'] = $arParams['MESS_BTN_COMPARE'] ?: Loc::getMessage('CT_BCE_CATALOG_COMPARE');
$arParams['MESS_PRICE_RANGES_TITLE'] = $arParams['MESS_PRICE_RANGES_TITLE'] ?: Loc::getMessage('CT_BCE_CATALOG_PRICE_RANGES_TITLE');
$arParams['MESS_DESCRIPTION_TAB'] = $arParams['MESS_DESCRIPTION_TAB'] ?: Loc::getMessage('CT_BCE_CATALOG_DESCRIPTION_TAB');
$arParams['MESS_PROPERTIES_TAB'] = $arParams['MESS_PROPERTIES_TAB'] ?: Loc::getMessage('CT_BCE_CATALOG_PROPERTIES_TAB');
$arParams['MESS_COMMENTS_TAB'] = $arParams['MESS_COMMENTS_TAB'] ?: Loc::getMessage('CT_BCE_CATALOG_COMMENTS_TAB');
$arParams['MESS_SHOW_MAX_QUANTITY'] = $arParams['MESS_SHOW_MAX_QUANTITY'] ?: Loc::getMessage('CT_BCE_CATALOG_SHOW_MAX_QUANTITY');
$arParams['MESS_RELATIVE_QUANTITY_MANY'] = $arParams['MESS_RELATIVE_QUANTITY_MANY'] ?: Loc::getMessage('CT_BCE_CATALOG_RELATIVE_QUANTITY_MANY');
$arParams['MESS_RELATIVE_QUANTITY_FEW'] = $arParams['MESS_RELATIVE_QUANTITY_FEW'] ?: Loc::getMessage('CT_BCE_CATALOG_RELATIVE_QUANTITY_FEW');

$positionClassMap = array(
	'left' => 'product-item-label-left',
	'center' => 'product-item-label-center',
	'right' => 'product-item-label-right',
	'bottom' => 'product-item-label-bottom',
	'middle' => 'product-item-label-middle',
	'top' => 'product-item-label-top'
);

$discountPositionClass = 'product-item-label-big';
if ($arParams['SHOW_DISCOUNT_PERCENT'] === 'Y' && !empty($arParams['DISCOUNT_PERCENT_POSITION']))
{
	foreach (explode('-', $arParams['DISCOUNT_PERCENT_POSITION']) as $pos)
	{
		$discountPositionClass .= isset($positionClassMap[$pos]) ? ' '.$positionClassMap[$pos] : '';
	}
}

$labelPositionClass = 'product-item-label-big';
if (!empty($arParams['LABEL_PROP_POSITION']))
{
	foreach (explode('-', $arParams['LABEL_PROP_POSITION']) as $pos)
	{
		$labelPositionClass .= isset($positionClassMap[$pos]) ? ' '.$positionClassMap[$pos] : '';
	}
}
?>

<?php
//echo "<pre>Template arParams: "; print_r($arParams); echo "</pre>";
//echo "<pre>Template arResult: "; print_r($arResult); echo "</pre>";exit();
//echo "<pre>"; print_r($arResult['PROPERTIES']['PHOTO']['VALUE']);
//print_r($arResult['PROPERTIES']['PHOTO']['VALUE']);exit();
?>

<!--detPage-->
    <section class="section-catalog_item">
        <div class="container less block">
            <div class="main-info">
                <div class="thumbnail-slider owl-carousel">
                    <img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt="" class="thumb-item">
                    <?php foreach ( $arResult['PROPERTIES']['PHOTO']['VALUE'] as $item ): ?>
                            <?php $item = CFile::GetFileArray($item); ?>
                            <img src="<?= $item['SRC']?>" alt="" class="thumb-item">
                    <?php unset($item); endforeach; ?>
                </div>

                <div class="mainslider">
<!--добавить тэги-->
                    <?php if($arResult['PROPERTIES']['AVAILABLE']['VALUE_XML_ID']=='no'):?>
                    <div class="tags">
                        <div class="tag new">
                            Новинка
                        </div>
                    </div>
                    <?php endif; ?>
<!--Big photos-->
                    <div class="main-slider owl-carousel">
                        <img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt="" class="thumb-item">
                        <?php foreach ( $arResult['PROPERTIES']['PHOTO']['VALUE'] as $item ): ?>
                            <?php $item = CFile::GetFileArray($item); ?>
                            <img src="<?= $item['SRC']?>" alt="" class="thumb-item">
                        <?php unset($item); endforeach; ?>
                    </div>
                </div>

                <div class="info">
                    <b><?=$arResult['DISPLAY_PROPERTIES']['COLLECTION']['DISPLAY_VALUE']?></b>
                    <div class="item_title"><?=$arResult['NAME']?></div>

                    <?php if($arResult['PROPERTIES']['BEST_PRICE']['VALUE_XML_ID']=='yes'): ?>
                    <div class="tags">
                        <div class="tag best">Лучшая цена</div>
                    </div>
                    <?php endif; ?>

                    <div class="row-info">
                        <div class="price-block">
                            <div class="price"><?=$arResult['PROPERTIES']['PRICE']['VALUE']?> руб.</div>
                            <div class="price-old" data-discount="-10%">1 100 руб.</div>
                        </div>
                        <div class="avalible">
                            <?= ($arResult['PROPERTIES']['AVAILABLE']['VALUE_XML_ID']=='yes') ? 'В наличии' : 'Нет на складе'; ?>
                        </div>
                    </div>

                    <div class="param">
                        <div class="title">Цвет:</div>
                        <div class="colors">
                            <?php
                                $arrColor = [ 'gray'=> 'b0b0b0', 'black'=>'000', 'blue'=>'004fc5', 'red'=>'d21010', 'brown'=>'633202', 'white'=>'fff'];
                                foreach ( $arResult['PROPERTIES']['COLOR']['VALUE'] as $item) {
                                    if( in_array($item, $arResult['PROPERTIES']['COLOR']['VALUE']) ):?>
                                        <div class="color" style="background-color: #<?=$arrColor[$item]?>"></div>
                                    <?php endif; ?>
                                <? } ?>
                        </div>
                    </div>

                    <div class="param">
                        <div class="title">Выберите размер:</div>
                        <div class="sizes">
                            <?php foreach ( $arResult['PROPERTIES']['SIZE']['VALUE'] as $key=>$item): ?>

                                    <div class="size <?= ($key==0) ? "active":"" ?>"><?= $item ?></div>

                                <?php endforeach;?>
                        </div>
						<a href="/sizes/" class="link">Таблица размеров</a>
                    </div>

                    <div class="action-btns">
                        <a href="#" class="action icon icon-like action-like">Избранное</a>
                        <a href="#" class="action icon icon-stats action-stats">Сравнить</a>
                    </div>

                    <div class="buy-btns">
                        <a href="#" class="btn btn-gray">Купить в 1 клик</a>
                        <a href="#" class="btn btn-orange">Купить</a>
                    </div>
                </div>
            </div>

            <div class="text-info">
                <div class="tabs">
                    <a href="#tab1" class="tab active">Описание</a>
                    <a href="#tab2" class="tab">Характеристики</a>
                    <a href="#tab3" class="tab">Оплата и доставка</a>
                    <a href="#tab4" class="tab">Гарантия</a>
                    <a href="#tab5" class="tab">Отзывы</a>
                </div>
                <div class="tab-contents">
                    <div class="tab-content" id="tab1">
                        <div class="text">
                            <?= $arResult['PREVIEW_TEXT'];?>
                        </div>
                    </div>

                    <div class="tab-content" id="tab2">
                        <div class="text">
                            <dl class="product-item-detail-properties">
                            <?php foreach ($arResult['DISPLAY_PROPERTIES'] as $property): ?>
                                <?php if (isset($arParams['MAIN_BLOCK_PROPERTY_CODE'][$property['CODE']])):?>
                                    <dt><?=$property['NAME']?></dt>
                                    <dd><?=(is_array($property['DISPLAY_VALUE'])
                                            ? implode(' / ', $property['DISPLAY_VALUE'])
                                            : $property['DISPLAY_VALUE'])?>
                                    </dd>
                                <? endif; ?>
                            <?php endforeach; ?>
                            <?php
                                unset($property);
                            ?>
                            </dl>
                        </div>
                    </div>

                    <div class="tab-content" id="tab3">
                        <div class="text">

                        </div>
                    </div>

                    <div class="tab-content" id="tab4">
                        <div class="text">

                        </div>
                    </div>

                    <div class="tab-content" id="tab5">
                        <div class="text">

                        </div>
                    </div>
                </div>

                <div class="slider-content">
                    <div class="title">Вы смотрели</div>

                    <div class="slider owl-carousel">
                        <div class="store_item">
                            <a href="#" class="name">Кеды ST-13-4</a>

                            <div class="action-btns">
                                <a href="#" class="action icon icon-stats action-stats"></a>
                                <a href="#" class="action icon icon-like action-like"></a>
                            </div>

                            <div class="tags">
                                <span class="tag best">Лучшая цена</span>
                            </div>

                            <div class="picture">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/store-item1.jpg" alt="">
                                <a href="#fastView" class="btn btn-green">Быстрый просмотр</a>
                            </div>

                            <div class="price">1 100 руб.</div>

                            <div class="price-old" data-discount="-10%">1 100 руб.</div>

                            <div class="buy-btns">
                                <a href="#" class="btn btn-gray">Купить в 1 клик</a>
                                <a href="#" class="btn btn-orange">Купить</a>
                            </div>
                        </div>
                        <div class="store_item">
                            <a href="#" class="name">Кеды ST-13-4</a>

                            <div class="action-btns">
                                <a href="#" class="action icon icon-stats action-stats"></a>
                                <a href="#" class="action icon icon-like action-like"></a>
                            </div>

                            <div class="tags">
                                <span class="tag best">Лучшая цена</span>
                            </div>

                            <div class="picture">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/store-item1.jpg" alt="">
                                <a href="#fastView" class="btn btn-green">Быстрый просмотр</a>
                            </div>

                            <div class="price">1 100 руб.</div>

                            <div class="price-old" data-discount="-10%">1 100 руб.</div>

                            <div class="buy-btns">
                                <a href="#" class="btn btn-gray">Купить в 1 клик</a>
                                <a href="#" class="btn btn-orange">Купить</a>
                            </div>
                        </div>
                        <div class="store_item">
                            <a href="#" class="name">Кеды ST-13-4</a>

                            <div class="action-btns">
                                <a href="#" class="action icon icon-stats action-stats"></a>
                                <a href="#" class="action icon icon-like action-like"></a>
                            </div>

                            <div class="tags">
                                <span class="tag best">Лучшая цена</span>
                            </div>

                            <div class="picture">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/store-item1.jpg" alt="">
                                <a href="#fastView" class="btn btn-green">Быстрый просмотр</a>
                            </div>

                            <div class="price">1 100 руб.</div>

                            <div class="price-old" data-discount="-10%">1 100 руб.</div>

                            <div class="buy-btns">
                                <a href="#" class="btn btn-gray">Купить в 1 клик</a>
                                <a href="#" class="btn btn-orange">Купить</a>
                            </div>
                        </div>
                        <div class="store_item">
                            <a href="#" class="name">Кеды ST-13-4</a>

                            <div class="action-btns">
                                <a href="#" class="action icon icon-stats action-stats"></a>
                                <a href="#" class="action icon icon-like action-like"></a>
                            </div>

                            <div class="tags">
                                <span class="tag best">Лучшая цена</span>
                            </div>

                            <div class="picture">
                                <img <?=$photo['SRC']?>" alt="<?=$alt?>" title="<?=$title?>">
                                <a href="#fastView" class="btn btn-green">Быстрый просмотр</a>
                            </div>

                            <div class="price">1 100 руб.</div>

                            <div class="price-old" data-discount="-10%">1 100 руб.</div>

                            <div class="buy-btns">
                                <a href="#" class="btn btn-gray">Купить в 1 клик</a>
                                <a href="#" class="btn btn-orange">Купить</a>
                            </div>
                        </div>
                        <div class="store_item">
                            <a href="#" class="name">Кеды ST-13-4</a>

                            <div class="action-btns">
                                <a href="#" class="action icon icon-stats action-stats"></a>
                                <a href="#" class="action icon icon-like action-like"></a>
                            </div>

                            <div class="tags">
                                <span class="tag best">Лучшая цена</span>
                            </div>

                            <div class="picture">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/store-item1.jpg" alt="">
                                <a href="#fastView" class="btn btn-green">Быстрый просмотр</a>
                            </div>

                            <div class="price">1 100 руб.</div>

                            <div class="price-old" data-discount="-10%">1 100 руб.</div>

                            <div class="buy-btns">
                                <a href="#" class="btn btn-gray">Купить в 1 клик</a>
                                <a href="#" class="btn btn-orange">Купить</a>
                            </div>
                        </div>
                        <div class="store_item">
                            <a href="#" class="name">Кеды ST-13-4</a>

                            <div class="action-btns">
                                <a href="#" class="action icon icon-stats action-stats"></a>
                                <a href="#" class="action icon icon-like action-like"></a>
                            </div>

                            <div class="tags">
                                <span class="tag best">Лучшая цена</span>
                            </div>

                            <div class="picture">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/store-item1.jpg" alt="">
                                <a href="#fastView" class="btn btn-green">Быстрый просмотр</a>
                            </div>

                            <div class="price">1 100 руб.</div>

                            <div class="price-old" data-discount="-10%">1 100 руб.</div>

                            <div class="buy-btns">
                                <a href="#" class="btn btn-gray">Купить в 1 клик</a>
                                <a href="#" class="btn btn-orange">Купить</a>
                            </div>
                        </div>
                        <div class="store_item">
                            <a href="#" class="name">Кеды ST-13-4</a>

                            <div class="action-btns">
                                <a href="#" class="action icon icon-stats action-stats"></a>
                                <a href="#" class="action icon icon-like action-like"></a>
                            </div>

                            <div class="tags">
                                <span class="tag best">Лучшая цена</span>
                            </div>

                            <div class="picture">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/store-item1.jpg" alt="">
                                <a href="#fastView" class="btn btn-green">Быстрый просмотр</a>
                            </div>

                            <div class="price">1 100 руб.</div>

                            <div class="price-old" data-discount="-10%">1 100 руб.</div>

                            <div class="buy-btns">
                                <a href="#" class="btn btn-gray">Купить в 1 клик</a>
                                <a href="#" class="btn btn-orange">Купить</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slider-content">
                    <div class="title">Вам может понравиться</div>

                    <div class="slider owl-carousel">

                        <div class="store_item">
                            <a href="#" class="name">Кеды ST-13-4</a>

                            <div class="action-btns">
                                <a href="#" class="action icon icon-stats action-stats"></a>
                                <a href="#" class="action icon icon-like action-like"></a>
                            </div>

                            <div class="tags">
                                <span class="tag best">Лучшая цена</span>
                            </div>

                            <div class="picture">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/store-item1.jpg" alt="">
                                <a href="#fastView" class="btn btn-green">Быстрый просмотр</a>
                            </div>

                            <div class="price">1 100 руб.</div>

                            <div class="price-old" data-discount="-10%">1 100 руб.</div>

                            <div class="buy-btns">
                                <a href="#" class="btn btn-gray">Купить в 1 клик</a>
                                <a href="#" class="btn btn-orange">Купить</a>
                            </div>
                        </div>
                        <div class="store_item">
                            <a href="#" class="name">Кеды ST-13-4</a>

                            <div class="action-btns">
                                <a href="#" class="action icon icon-stats action-stats"></a>
                                <a href="#" class="action icon icon-like action-like"></a>
                            </div>

                            <div class="tags">
                                <span class="tag best">Лучшая цена</span>
                            </div>

                            <div class="picture">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/store-item1.jpg" alt="">
                                <a href="#fastView" class="btn btn-green">Быстрый просмотр</a>
                            </div>

                            <div class="price">1 100 руб.</div>

                            <div class="price-old" data-discount="-10%">1 100 руб.</div>

                            <div class="buy-btns">
                                <a href="#" class="btn btn-gray">Купить в 1 клик</a>
                                <a href="#" class="btn btn-orange">Купить</a>
                            </div>
                        </div>
                        <div class="store_item">
                            <a href="#" class="name">Кеды ST-13-4</a>

                            <div class="action-btns">
                                <a href="#" class="action icon icon-stats action-stats"></a>
                                <a href="#" class="action icon icon-like action-like"></a>
                            </div>

                            <div class="tags">
                                <span class="tag best">Лучшая цена</span>
                            </div>

                            <div class="picture">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/store-item1.jpg" alt="">
                                <a href="#fastView" class="btn btn-green">Быстрый просмотр</a>
                            </div>

                            <div class="price">1 100 руб.</div>

                            <div class="price-old" data-discount="-10%">1 100 руб.</div>

                            <div class="buy-btns">
                                <a href="#" class="btn btn-gray">Купить в 1 клик</a>
                                <a href="#" class="btn btn-orange">Купить</a>
                            </div>
                        </div>
                        <div class="store_item">
                            <a href="#" class="name">Кеды ST-13-4</a>

                            <div class="action-btns">
                                <a href="#" class="action icon icon-stats action-stats"></a>
                                <a href="#" class="action icon icon-like action-like"></a>
                            </div>

                            <div class="tags">
                                <span class="tag best">Лучшая цена</span>
                            </div>

                            <div class="picture">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/store-item1.jpg" alt="">
                                <a href="#fastView" class="btn btn-green">Быстрый просмотр</a>
                            </div>

                            <div class="price">1 100 руб.</div>

                            <div class="price-old" data-discount="-10%">1 100 руб.</div>

                            <div class="buy-btns">
                                <a href="#" class="btn btn-gray">Купить в 1 клик</a>
                                <a href="#" class="btn btn-orange">Купить</a>
                            </div>
                        </div>
                        <div class="store_item">
                            <a href="#" class="name">Кеды ST-13-4</a>

                            <div class="action-btns">
                                <a href="#" class="action icon icon-stats action-stats"></a>
                                <a href="#" class="action icon icon-like action-like"></a>
                            </div>

                            <div class="tags">
                                <span class="tag best">Лучшая цена</span>
                            </div>

                            <div class="picture">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/store-item1.jpg" alt="">
                                <a href="#fastView" class="btn btn-green">Быстрый просмотр</a>
                            </div>

                            <div class="price">1 100 руб.</div>

                            <div class="price-old" data-discount="-10%">1 100 руб.</div>

                            <div class="buy-btns">
                                <a href="#" class="btn btn-gray">Купить в 1 клик</a>
                                <a href="#" class="btn btn-orange">Купить</a>
                            </div>
                        </div>
                        <div class="store_item">
                            <a href="#" class="name">Кеды ST-13-4</a>

                            <div class="action-btns">
                                <a href="#" class="action icon icon-stats action-stats"></a>
                                <a href="#" class="action icon icon-like action-like"></a>
                            </div>

                            <div class="tags">
                                <span class="tag best">Лучшая цена</span>
                            </div>

                            <div class="picture">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/store-item1.jpg" alt="">
                                <a href="#fastView" class="btn btn-green">Быстрый просмотр</a>
                            </div>

                            <div class="price">1 100 руб.</div>

                            <div class="price-old" data-discount="-10%">1 100 руб.</div>

                            <div class="buy-btns">
                                <a href="#" class="btn btn-gray">Купить в 1 клик</a>
                                <a href="#" class="btn btn-orange">Купить</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<!--detPage-->