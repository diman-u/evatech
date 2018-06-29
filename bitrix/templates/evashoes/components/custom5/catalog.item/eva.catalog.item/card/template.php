<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

?>
<div class="store_item">
	<a href="<?=$item['DETAIL_PAGE_URL']?>" class="name"><?=$item['NAME']?></a>
	<div class="action-btns">
		<a href="#" class="action icon icon-stats action-stats"></a> 
		<a href="#" class="action icon icon-like action-like"></a>
	</div>
	<div class="tags">
		<span class="tag best">Лучшая цена</span>
	</div>
	<div class="picture">
		<img alt="" src="<?=$item['DETAIL_PICTURE']['SRC']?>" style="max-width: 194px; max-height: 91px"> 
		<a href="#fastView" class="btn btn-green">Быстрый просмотр</a>
	</div>
	<div class="price">
		1 100 руб.
	</div>
	<div class="price-old" data-discount="-10%">
		1 100 руб.
	</div>
	<div class="buy-btns">
		<a href="#" class="btn btn-gray">Купить в 1 клик</a> <a href="#" class="btn btn-orange">Купить</a>
	</div>
</div>