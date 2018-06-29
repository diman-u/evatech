<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>

<head>
  <?$APPLICATION->ShowHead();?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?$APPLICATION->ShowTitle();?></title>
  

  <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" type="image/gif" border="0">
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/main.css">
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/media.css">
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/fonts.css">
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/icons.css">
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/plugins/hamburgers/hamburgers.min.css">
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/plugins/nouislider/nouislider.min.css">
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/plugins/owl.carousel/owl.carousel.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="<?=SITE_TEMPLATE_PATH?>/plugins/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>

  <script src="<?=SITE_TEMPLATE_PATH?>/plugins/jqvmap/js/jquery.vmap.js" type="text/javascript"></script>
  <script src="<?=SITE_TEMPLATE_PATH?>/plugins/jqvmap/js/maps/jquery.vmap.russia.js" type="text/javascript"></script>
</head>

<?$APPLICATION->ShowPanel();?>
  <header class="header">
    <div class="container less">
      <a href="/index.php" class="header_logo">
        <img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="">
      </a>

      <div class="header_slogan">
        <img src="<?=SITE_TEMPLATE_PATH?>/img/slogan.png" alt="">
      </div>

      <div class="header_info">
        <div class="info_column">
          <span class="icon icon-clock">ВРЕМЯ РАБОТЫ</span>
          <span>Пн-Пт 9:00 - 18:00</span>
          <span>Сб-Вс выходной</span>
        </div>
        <div class="info_column">
          <a href="tel:88003014030" class="icon icon-tel">8 (800) 301-40-30</a>
          <a href="tel:+74959896672" class="icon icon-tel">+7 (495) 989-66-72</a>
          <a href="mailto:info@eva-shoes.ru" class="icon icon-mail"> info@eva-shoes.ru</a>
        </div>
      </div>
    </div>
    <div class="container less vertical-center">
      <button class="hamburger hamburger--collapse" type="button">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>


		<?$APPLICATION->IncludeComponent(
      	"bitrix:menu", 
      	"top-menu", 
      	array(
      		"COMPONENT_TEMPLATE" => "top-menu",
      		"ROOT_MENU_TYPE" => "top",
      		"MENU_CACHE_TYPE" => "N",
      		"MENU_CACHE_TIME" => "3600",
      		"MENU_CACHE_USE_GROUPS" => "Y",
      		"MENU_CACHE_GET_VARS" => array(
      		),
      		"MAX_LEVEL" => "1",
      		"CHILD_MENU_TYPE" => "left",
      		"USE_EXT" => "N",
      		"DELAY" => "N",
      		"ALLOW_MULTI_SELECT" => "N"
      	),
      	false
      );?>

      <div class="header_controls">
        <a href="/search/" class="icon icon-search"></a>
        <a href="/personal/" class="icon icon-user"></a>
        <a href="/cart/" class="icon icon-bag bag" data-count="0"></a>
      </div>
    </div>
  </header>

  <?if ( ! CSite::InDir('/index.php')):?>
    <section class="section-pageinfo">
      <div class="container less vertical-bottom">
        <h1 style="width: 50%;"><?$APPLICATION->ShowTitle(false)?></h1>
        <div style="width: 50%; text-align: right;">
           <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "eva-breadcrumb", Array(
            	"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
            		"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
            		"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
            	),
           false
         );?>
        </div>
      </div>
    </section>
  <? else : ?>
    <div class="banner" style="background-image: url(<?php echo SITE_TEMPLATE_PATH ?>/img/banner.jpg)">
      <div class="container less vertical-center">
        <div class="text">
          <div class="banner_subtitle">Николай Валуев рекомендует</div>
        </div>
      </div>
    </div>
  <? endif; ?>
