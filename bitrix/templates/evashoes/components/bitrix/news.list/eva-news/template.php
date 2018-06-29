<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<section class="section-news">
    <div class="container block">
      <div class="news-row">
    	<?foreach($arResult["ITEMS"] as $arItem):?>
    		<?
    		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    		?>
      <div class="news-item">
      	
      	<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
      		<span class="date"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
      	<?endif?>

        <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
        	<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
        		<div class="picture">
	        		<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
	        			<img
	        				border="0"
	        				src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
	        				width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
	        				height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
	        				alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
	        				title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
	        				/>
	        		</a>
	        	</div>
        	<?else:?>
        		<div class="picture">
	        		<img
	        			border="0"
	        			src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
	        			width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
	        			height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
	        			alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
	        			title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
	        			/>
	        		</div>
        	<?endif;?>
        <?endif?>

        <?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
        	<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
        		<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="news-title"><b><?echo $arItem["NAME"]?></b></a>
        	<?else:?>
        		<span class="news-title"><b><?echo $arItem["NAME"]?></b></span>
        	<?endif;?>
        <?endif;?>

        <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
	        <div class="description">
	          <p><?echo $arItem["PREVIEW_TEXT"];?></p>
	        </div>
        <?endif;?>

        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="btn btn-more-orange">Подробнее</a>
      </div>
    <?endforeach;?>
    </div>
  </div>
</section>