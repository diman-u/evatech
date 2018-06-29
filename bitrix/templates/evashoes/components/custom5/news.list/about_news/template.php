<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
?>

<div class="news-row">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="news-item">
			<span class="date"><?= FormatDate('f d, Yг.', strtotime($arItem['ACTIVE_FROM']))?></span>

			<div class="picture">
				<img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="">
			</div>

			<a href="/news/news.php?ELEMENT_ID=<?=$arItem['ID']?>" class="news-title"><?=$arItem['NAME']?></a>
			<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
			<div class="description">
				<?=$arItem['PREVIEW']?>
			</div>
			<?endif;?>
			<a href="/news/news.php?ELEMENT_ID=<?=$arItem['ID']?>" class="btn btn-more-orange">Подробнее</a>
		</div>
	<?endforeach;?>
	

</div>