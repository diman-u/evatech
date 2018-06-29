<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
?>

<div class="container full block">
	<div class="video_items">
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<div class="video_item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<a href="#" class="name"><?=$arItem['NAME'];?></a>
				<?=$arItem['PROPERTIES']['VIDEO_PAGE_URL']['~VALUE'];?>
			  <a href="#" class="btn btn-more-orange">Подробнее</a>
			</div>
		<?endforeach;?>
	</div>
</div>
