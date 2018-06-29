<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$this->setFrameMode(true);?>
<?if(count($arResult["ITEMS"]) > 0){?>
	<div class="container block">
	<? 
		$area = CIBlockElement::GetByID($arResult["ITEMS"][0]['PROPERTIES']['WTB_STATE']['VALUE']);
		if($area_item = $area->GetNext())
			$area_name = $area_item['NAME'];
	?>
	<h2><?=$area_name?></h2>
      <table>
        <thead>
          <tr>
            <td>Город</td>
            <td>Район</td>
            <td>Улица</td>
            <td align="center">Оптом</td>
            <td align="center">В розницу</td>
          </tr>
        </thead>
        <tbody>
			<?foreach($arResult["ITEMS"] as $arItem):?>
			  <tr data-state="<?=$arItem['PROPERTIES']['WTB_STATE']['VALUE'];?>">
				<td><?=$arItem['NAME']?></td>
				<td><?=$arItem['PROPERTY_11']?></td>
				<td><?=$arItem['PROPERTY_12']?></td>
				<td align="center"><i class="icon icon-<?=($arItem['PROPERTY_13'] == 88) ? "close" : "done"?>"></i></td>
				<td align="center"><i class="icon icon-<?=($arItem['PROPERTY_13'] == 88) ? "close" : "done"?>"></i></td>
			  </tr>
			<?endforeach;?>
		</tbody>
	  </table>
	</div>
<? } else { ?>
	<div class="container block">
		<p></p>
	</div>
<? } ?>
