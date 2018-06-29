<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
$this->addExternalCss("/bitrix/css/main/bootstrap.css");
?>
<?
	$arFilter = array(
        "ACTIVE" => "Y",
        "GLOBAL_ACTIVE" => "Y",
        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
    );
    if(strlen($arResult["VARIABLES"]["SECTION_CODE"])>0)
    {
        $arFilter["CODE"] = $arResult["VARIABLES"]["SECTION_CODE"];
    }
    elseif($arResult["VARIABLES"]["SECTION_ID"]>0)
    {
        $arFilter["ID"] = $arResult["VARIABLES"]["SECTION_ID"];
    }
?>

<section class="section-pagecatalog">
	<div class="container full">
		<button class="hamburger hamburger--collapse" type="button"> 
			<span class="hamburger-box"> 
				<span class="hamburger-inner"></span> 
			</span> 
		</button>
		<div class="catalog_sidebar">
			<div class="category_filter">
				<div class="title">
					Категория
				</div>
				<div class="category_menu">
					<ul>
						<li><a href="#">Новинки</a></li>
						<li><a href="#">Кеды и прогулочная обувь</a></li>
						<li class="active"><a href="#">Спортивная обувь</a></li>
						<li><a href="#">Летняя обувь</a></li>
						<li><a href="#">Спецобувь</a></li>
						<li><a href="#">Охота и рыбалка</a></li>
						<li><a href="#">Зимняя обувь</a></li>
					</ul>
				</div>
			</div>
			<div class="filters">
				<div class="title">
					Фильтр
				</div>
				<?$APPLICATION->IncludeComponent(
					"custom5:catalog.smart.filter", 
					"eva.smart.filter", 
					array(
						"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
						"IBLOCK_ID" => $arParams["IBLOCK_ID"],
						"SECTION_ID" => $arCurSection["ID"],
						"FILTER_NAME" => "arrFilter",
						"PRICE_CODE" => $arParams["PRICE_CODE"],
						"CACHE_TYPE" => "N",
						"CACHE_TIME" => "36000000",
						"CACHE_NOTES" => "",
						"CACHE_GROUPS" => "Y",
						"SAVE_IN_SESSION" => "N"
					),
					false
				);?>
			</div>
		</div>
		<div class="catalog_content">
			<div class="tabs">
				<a href="#tab1" class="tab active">Мужская</a> 
				<a href="#tab2" class="tab">Женская</a> 
				<a href="#tab3" class="tab">Детская</a>
			</div>
			<?if ($arParams["SHOW_TOP_ELEMENTS"] !== "N")
			{
				if (isset($arParams['USE_COMMON_SETTINGS_BASKET_POPUP']) && $arParams['USE_COMMON_SETTINGS_BASKET_POPUP'] === 'Y')
				{
					$basketAction = isset($arParams['COMMON_ADD_TO_BASKET_ACTION']) ? $arParams['COMMON_ADD_TO_BASKET_ACTION'] : '';
				}
				else
				{
					$basketAction = isset($arParams['TOP_ADD_TO_BASKET_ACTION']) ? $arParams['TOP_ADD_TO_BASKET_ACTION'] : '';
				}?>
				<div class="store_items">
				<?$APPLICATION->IncludeComponent(
					"custom5:catalog.top",
					"eva.catalog.top",
					array(
						"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
						"IBLOCK_ID" => $arParams["IBLOCK_ID"],
						"ELEMENT_SORT_FIELD" => $arParams["TOP_ELEMENT_SORT_FIELD"],
						"ELEMENT_SORT_ORDER" => $arParams["TOP_ELEMENT_SORT_ORDER"],
						"ELEMENT_SORT_FIELD2" => $arParams["TOP_ELEMENT_SORT_FIELD2"],
						"ELEMENT_SORT_ORDER2" => $arParams["TOP_ELEMENT_SORT_ORDER2"],
						"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
						"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["element"],
						"BASKET_URL" => $arParams["BASKET_URL"],
						"FILTER_NAME" => "arrFilter",
						"ACTION_VARIABLE" => $arParams["ACTION_VARIABLE"],
						"PRODUCT_ID_VARIABLE" => $arParams["PRODUCT_ID_VARIABLE"],
						"PRODUCT_QUANTITY_VARIABLE" => $arParams["PRODUCT_QUANTITY_VARIABLE"],
						"PRODUCT_PROPS_VARIABLE" => $arParams["PRODUCT_PROPS_VARIABLE"],
						"DISPLAY_COMPARE" => $arParams["USE_COMPARE"],
						"ELEMENT_COUNT" => $arParams["TOP_ELEMENT_COUNT"],
						"LINE_ELEMENT_COUNT" => $arParams["TOP_LINE_ELEMENT_COUNT"],
						"PROPERTY_CODE" => $arParams["TOP_PROPERTY_CODE"],
						"PROPERTY_CODE_MOBILE" => $arParams["TOP_PROPERTY_CODE_MOBILE"],
						"PRICE_CODE" => $arParams["~PRICE_CODE"],
						"USE_PRICE_COUNT" => $arParams["USE_PRICE_COUNT"],
						"SHOW_PRICE_COUNT" => $arParams["SHOW_PRICE_COUNT"],
						"PRICE_VAT_INCLUDE" => $arParams["PRICE_VAT_INCLUDE"],
						"PRICE_VAT_SHOW_VALUE" => $arParams["PRICE_VAT_SHOW_VALUE"],
						"USE_PRODUCT_QUANTITY" => $arParams['USE_PRODUCT_QUANTITY'],
						"ADD_PROPERTIES_TO_BASKET" => (isset($arParams["ADD_PROPERTIES_TO_BASKET"]) ? $arParams["ADD_PROPERTIES_TO_BASKET"] : ''),
						"PARTIAL_PRODUCT_PROPERTIES" => (isset($arParams["PARTIAL_PRODUCT_PROPERTIES"]) ? $arParams["PARTIAL_PRODUCT_PROPERTIES"] : ''),
						"PRODUCT_PROPERTIES" => $arParams["PRODUCT_PROPERTIES"],
						"CACHE_TYPE" => $arParams["CACHE_TYPE"],
						"CACHE_TIME" => $arParams["CACHE_TIME"],
						"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
						"OFFERS_CART_PROPERTIES" => $arParams["OFFERS_CART_PROPERTIES"],
						"OFFERS_FIELD_CODE" => $arParams["TOP_OFFERS_FIELD_CODE"],
						"OFFERS_PROPERTY_CODE" => $arParams["TOP_OFFERS_PROPERTY_CODE"],
						"OFFERS_SORT_FIELD" => $arParams["OFFERS_SORT_FIELD"],
						"OFFERS_SORT_ORDER" => $arParams["OFFERS_SORT_ORDER"],
						"OFFERS_SORT_FIELD2" => $arParams["OFFERS_SORT_FIELD2"],
						"OFFERS_SORT_ORDER2" => $arParams["OFFERS_SORT_ORDER2"],
						"OFFERS_LIMIT" => $arParams["TOP_OFFERS_LIMIT"],
						'CONVERT_CURRENCY' => $arParams['CONVERT_CURRENCY'],
						'CURRENCY_ID' => $arParams['CURRENCY_ID'],
						'HIDE_NOT_AVAILABLE' => $arParams['HIDE_NOT_AVAILABLE'],
						'VIEW_MODE' => (isset($arParams['TOP_VIEW_MODE']) ? $arParams['TOP_VIEW_MODE'] : ''),
						'ROTATE_TIMER' => (isset($arParams['TOP_ROTATE_TIMER']) ? $arParams['TOP_ROTATE_TIMER'] : ''),
						'TEMPLATE_THEME' => (isset($arParams['TEMPLATE_THEME']) ? $arParams['TEMPLATE_THEME'] : ''),

						'LABEL_PROP' => $arParams['LABEL_PROP'],
						'LABEL_PROP_MOBILE' => $arParams['LABEL_PROP_MOBILE'],
						'LABEL_PROP_POSITION' => $arParams['LABEL_PROP_POSITION'],
						'ADD_PICT_PROP' => $arParams['ADD_PICT_PROP'],
						'PRODUCT_DISPLAY_MODE' => $arParams['PRODUCT_DISPLAY_MODE'],
						'PRODUCT_BLOCKS_ORDER' => $arParams['TOP_PRODUCT_BLOCKS_ORDER'],
						'PRODUCT_ROW_VARIANTS' => $arParams['TOP_PRODUCT_ROW_VARIANTS'],
						'ENLARGE_PRODUCT' => $arParams['TOP_ENLARGE_PRODUCT'],
						'ENLARGE_PROP' => isset($arParams['TOP_ENLARGE_PROP']) ? $arParams['TOP_ENLARGE_PROP'] : '',
						'SHOW_SLIDER' => $arParams['TOP_SHOW_SLIDER'],
						'SLIDER_INTERVAL' => isset($arParams['TOP_SLIDER_INTERVAL']) ? $arParams['TOP_SLIDER_INTERVAL'] : '',
						'SLIDER_PROGRESS' => isset($arParams['TOP_SLIDER_PROGRESS']) ? $arParams['TOP_SLIDER_PROGRESS'] : '',

						'OFFER_ADD_PICT_PROP' => $arParams['OFFER_ADD_PICT_PROP'],
						'OFFER_TREE_PROPS' => $arParams['OFFER_TREE_PROPS'],
						'PRODUCT_SUBSCRIPTION' => $arParams['PRODUCT_SUBSCRIPTION'],
						'SHOW_DISCOUNT_PERCENT' => $arParams['SHOW_DISCOUNT_PERCENT'],
						'DISCOUNT_PERCENT_POSITION' => $arParams['DISCOUNT_PERCENT_POSITION'],
						'SHOW_OLD_PRICE' => $arParams['SHOW_OLD_PRICE'],
						'MESS_BTN_BUY' => $arParams['~MESS_BTN_BUY'],
						'MESS_BTN_ADD_TO_BASKET' => $arParams['~MESS_BTN_ADD_TO_BASKET'],
						'MESS_BTN_SUBSCRIBE' => $arParams['~MESS_BTN_SUBSCRIBE'],
						'MESS_BTN_DETAIL' => $arParams['~MESS_BTN_DETAIL'],
						'MESS_NOT_AVAILABLE' => $arParams['~MESS_NOT_AVAILABLE'],
						'ADD_TO_BASKET_ACTION' => $basketAction,
						'SHOW_CLOSE_POPUP' => isset($arParams['COMMON_SHOW_CLOSE_POPUP']) ? $arParams['COMMON_SHOW_CLOSE_POPUP'] : '',
						'COMPARE_PATH' => $arResult['FOLDER'].$arResult['URL_TEMPLATES']['compare'],
						'USE_COMPARE_LIST' => 'Y',

						'COMPATIBLE_MODE' => (isset($arParams['COMPATIBLE_MODE']) ? $arParams['COMPATIBLE_MODE'] : '')
					),
					$component
				);?>
				</div>
				<?unset($basketAction);
			}?>
		</div>
	</div>
 </section>