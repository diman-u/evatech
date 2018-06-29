
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
  <footer>
    <div class="container less block">
      <div class="top-content">
        <div class="content_title">Присоединяйся к нам</div>
        <div class="info_card">
          <p>EVASHOES</p>

          <a href="#" class="icon icon-ig"></a>
          <a href="#" class="icon icon-youtube"></a>
        </div>

        <div class="info_card">
          <p>Star</p>

          <a href="#" class="icon icon-ig"></a>
        </div>

        <div class="info_card">
          <p>Клуб охоты и рыбалки</p>

          <a href="#" class="icon icon-vk"></a>
          <a href="#" class="icon icon-ok"></a>
        </div>
      </div>
      <div class="menu-content">
        <div class="logo_col">
          <a href="#" class="footer_logo">
            <img src="<?=SITE_TEMPLATE_PATH?>/img/footer_logo.png" alt="">
          </a>
        </div>

        <div class="info_col">
          <div class="info_row">
            <a href="tel:88003014030" class="icon icon-tel-white">8 (800) 301-40-30</a>
            <a href="tel:+74959896672" class="icon icon-tel-white">+7 (495) 989-66-72</a>
            <a href="mailto:info@eva-shoes.ru" class="icon icon-mail-white"> info@eva-shoes.ru</a>
          </div>

          <div class="info_row">
            <span class="icon icon-clock-white">ВРЕМЯ РАБОТЫ</span>
            <span>Пн-Пт 9:00 - 18:00</span>
            <span>Сб-Вс выходной</span>
          </div>
        </div>

        <div class="menu_col">
          <div class="menu_title">КАТАЛОГ</div>
          <ul>
            <li><a href="#">Кеды и прогулочная обувь</a></li>
            <li><a href="#">Спортивная обувь </a></li>
            <li><a href="#">Летняя обувь</a></li>
            <li><a href="#">Спецобувь</a></li>
            <li><a href="#">Охота и рыбалка</a></li>
            <li><a href="#">Зимняя обувь</a></li>
          </ul>
        </div>

        <div class="menu_col">
          <div class="menu_title">Мир EVASHOES</div>
          <?$APPLICATION->IncludeComponent(
						"bitrix:menu", 
						"menu-footer", 
						array(
							"ALLOW_MULTI_SELECT" => "N",
							"CHILD_MENU_TYPE" => "left",
							"DELAY" => "N",
							"MAX_LEVEL" => "1",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_TYPE" => "N",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"ROOT_MENU_TYPE" => "bottom",
							"USE_EXT" => "N",
							"COMPONENT_TEMPLATE" => "menu-footer"
						),
						false
					);?>
        </div>

        <div class="menu_col">
          <div class="menu_title">ПОКУПАТЕЛЯМ</div>
          <?$APPLICATION->IncludeComponent(
          	"bitrix:menu",
          	"menu-footer",
          	Array(
          		"ALLOW_MULTI_SELECT" => "N",
          		"CHILD_MENU_TYPE" => "left",
          		"DELAY" => "N",
          		"MAX_LEVEL" => "1",
          		"MENU_CACHE_GET_VARS" => array(""),
          		"MENU_CACHE_TIME" => "3600",
          		"MENU_CACHE_TYPE" => "N",
          		"MENU_CACHE_USE_GROUPS" => "Y",
          		"ROOT_MENU_TYPE" => "buyer",
          		"USE_EXT" => "N"
          	)
          );?>
        </div>

        <div class="menu_col">
          <div class="menu_title">ОПТОВИКАМ</div>
          <?$APPLICATION->IncludeComponent(
          	"bitrix:menu",
          	"menu-footer",
          	Array(
          		"ALLOW_MULTI_SELECT" => "N",
          		"CHILD_MENU_TYPE" => "left",
          		"DELAY" => "N",
          		"MAX_LEVEL" => "1",
          		"MENU_CACHE_GET_VARS" => array(""),
          		"MENU_CACHE_TIME" => "3600",
          		"MENU_CACHE_TYPE" => "N",
          		"MENU_CACHE_USE_GROUPS" => "Y",
          		"ROOT_MENU_TYPE" => "wholesaler",
          		"USE_EXT" => "N"
          	)
          );?>
        </div>
      </div>
      
      <div class="payinfo-content">
        <a href="#" class="icon icon-message subscribe">ПОДПИСАТЬСЯ НА БЛОГ</a>
        <img src="<?=SITE_TEMPLATE_PATH?>/img/payment.png" alt="">
      </div>
      <div class="text-content">
        <p>Наша надежность подтверждена сертификатами качества ТС. Обувь соответствует всем гигиеническим и техническим требованиям. <br>Зарегистрированный товарный знак. Незаконное использование товарного знака влечет за собой гражданскую, административнуюи уголовную ответственность <br>(ст.1515 ГК РФ, ст. 14.10. КоАП РФ, ст.180 УК РФ).</p>
      </div>
      <div class="copyright-content">
        <p>ЛЮБОЕ КОПИРОВАНИЕ МАТЕРИАЛОВ РАЗРЕШЕНО ТОЛЬКО С СОГЛАСИЯ АВТОРА. ВСЕ ПРАВА ЗАЩИЩЕНЫ 2018 © EVA-SHOES</p>
      </div>
    </div>
  </footer>

  

  

  
