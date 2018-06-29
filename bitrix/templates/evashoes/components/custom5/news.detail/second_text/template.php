<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<section class="section-text">
    <div class="container block">
      <div class="text">
        <img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt="" class="fll">

        <h2><?=$arResult['NAME']?></h2>
		<?=$arResult['DETAIL_TEXT']?>
        
      </div>
    </div>
  </section>