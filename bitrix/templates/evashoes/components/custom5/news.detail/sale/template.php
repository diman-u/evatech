<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<section class="section-text">
    <div class="container block">
	<h2><?=$arResult['NAME']?></h2>
      <div class="text">
        <img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt="" class="fll">
		<?=$arResult['DETAIL_TEXT']?>
      </div>
    </div>
  </section>