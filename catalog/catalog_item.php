<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("catalog_item");
?><?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>

<head>
  <?$APPLICATION->ShowHead();?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?$APPLICATION->ShowTitle();?></title>

  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/main.css">
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/media.css">
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/plugins/owl.carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/plugins/hamburgers/hamburgers.min.css">
</head>

<section class="section-pageinfo">
    <div class="container less vertical-bottom">
      <h1>Кеды ST-18-22</h1>

      <div class="breadcrumbs">
        <ul>
          <li><a href="/index.php">Главная</a></li>
          <li><a href="/katalog/katalog.php">Каталог</a></li>
          <li><span>Спортивная обувь</span></li>
          <li><span>Кеды ST-18-22</span></li>
        </ul>
      </div>
    </div>
  </section>

  <section class="section-catalog_item">
      <div class="container less block">
        <div class="main-info">
          <div class="thumbnail-slider owl-carousel">
            <img src="<?=SITE_TEMPLATE_PATH?>/img/catalog_item1.jpg" alt="" class="thumb-item">
            <img src="<?=SITE_TEMPLATE_PATH?>/img/catalog_item2.jpg" alt="" class="thumb-item">
            <img src="<?=SITE_TEMPLATE_PATH?>/img/catalog_item3.jpg" alt="" class="thumb-item">
            <img src="<?=SITE_TEMPLATE_PATH?>/img/catalog_item4.jpg" alt="" class="thumb-item">
            <img src="<?=SITE_TEMPLATE_PATH?>/img/catalog_item5.jpg" alt="" class="thumb-item">
          </div>

          <div class="mainslider">
            <div class="tags">
              <div class="tag new">Новинка</div>
            </div>
            <div class="main-slider owl-carousel">
              <img src="<?=SITE_TEMPLATE_PATH?>/img/catalog_item1.jpg" alt="" class="thumb-item">
              <img src="<?=SITE_TEMPLATE_PATH?>/img/catalog_item2.jpg" alt="" class="thumb-item">
              <img src="<?=SITE_TEMPLATE_PATH?>/img/catalog_item3.jpg" alt="" class="thumb-item">
              <img src="<?=SITE_TEMPLATE_PATH?>/img/catalog_item4.jpg" alt="" class="thumb-item">
              <img src="<?=SITE_TEMPLATE_PATH?>/img/catalog_item5.jpg" alt="" class="thumb-item">
            </div>
          </div>

          <div class="info">
            <b>Женская коллекция</b>
            <div class="item_title">Кеды прогулочные L-001</div>
            <div class="tags">
              <div class="tag best">Лучшая цена</div>
            </div>
            <div class="row-info">
              <div class="price-block">
                <div class="price">1 100 руб.</div>
                <div class="price-old" data-discount="-10%">1 100 руб.</div>
              </div>
              <div class="avalible">В наличии</div>
            </div>

            <div class="param">
              <div class="title">Цвет:</div>
              <div class="colors">
                <div class="color" style="background-color: #b0b0b0;"></div>
                <div class="color" style="background-color: #000;"></div>
                <div class="color" style="background-color: #004fc5;"></div>
                <div class="color" style="background-color: #d21010;"></div>
                <div class="color" style="background-color: #633202;"></div>
                <div class="color" style="background-color: #fff;"></div>
              </div>
            </div>

            <div class="param">
              <div class="title">Выберите размер:</div>
              <div class="sizes">
                <div class="size active">36</div>
                <div class="size">37</div>
                <div class="size">38</div>
                <div class="size">39</div>
                <div class="size">40</div>
                <div class="size">41</div>
              </div>
              <a href="#" class="link">Таблица размеров</a>
            </div>

            <div class="action-btns">
              <a href="#" class="action icon icon-like action-like">Избранное</a>
              <a href="#" class="action icon icon-stats action-stats">Сравнить</a>
            </div>

            <div class="buy-btns">
              <a href="#" class="btn btn-gray">Купить в 1 клик</a>
              <a href="#" class="btn btn-orange">Купить</a>
            </div>
          </div>
        </div>

        <div class="text-info">
          <div class="tabs">
            <a href="#tab1" class="tab active">Описание</a>
            <a href="#tab2" class="tab">Характеристики</a>
            <a href="#tab3" class="tab">Оплата и доставка</a>
            <a href="#tab4" class="tab">Гарантия</a>
            <a href="#tab5" class="tab">Отзывы</a>
          </div>
          <div class="tab-contents">
            <div class="tab-content" id="tab1">
              <div class="text">
                <p>Новые модные мужские кеды коллекции Star от EVASHOES прекрасно подходят для долгих весенних прогулок.</p>
                <p>Основные достоинства кед ST-13:</p>
                <p>Можно выбрать модель серого, синего или черного цвета.
                <br>Всегда в наличии размеры 41-45.
                <br>Верхняя часть кед и стелька сделаны из текстиля, который совершенно не вызывает аллергических реакций.
                <br>Подошва – из резины.
                <br>Высокая степень качества выпускаемой продукции документально подтверждена соответствующими сертификатами.</p>
                <h4 style="text-align: center;">Видеообзор</h4>

                <iframe src="https://www.youtube.com/embed/Ac40hPIQ7xc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
            </div>

            <div class="tab-content" id="tab2">
              <div class="text">
              </div>
            </div>

            <div class="tab-content" id="tab3">
              <div class="text">

              </div>
            </div>

            <div class="tab-content" id="tab4">
              <div class="text">

              </div>
            </div>

            <div class="tab-content" id="tab5">
              <div class="text">

              </div>
            </div>
          </div>

          <div class="slider-content">
            <div class="title">Вы смотрели</div>

            <div class="slider owl-carousel">
              <div class="store_item">
                <a href="#" class="name">Кеды ST-13-4</a>

                <div class="action-btns">
                  <a href="#" class="action icon icon-stats action-stats"></a>
                  <a href="#" class="action icon icon-like action-like"></a>
                </div>

                <div class="tags">
                  <span class="tag best">Лучшая цена</span>
                </div>

                <div class="picture">
                  <img src="<?=SITE_TEMPLATE_PATH?>/img/store-item1.jpg" alt="">
                  <a href="#fastView" class="btn btn-green">Быстрый просмотр</a>
                </div>

                <div class="price">1 100 руб.</div>

                <div class="price-old" data-discount="-10%">1 100 руб.</div>

                <div class="buy-btns">
                  <a href="#" class="btn btn-gray">Купить в 1 клик</a>
                  <a href="#" class="btn btn-orange">Купить</a>
                </div>
              </div>
              <div class="store_item">
                <a href="#" class="name">Кеды ST-13-4</a>

                <div class="action-btns">
                  <a href="#" class="action icon icon-stats action-stats"></a>
                  <a href="#" class="action icon icon-like action-like"></a>
                </div>

                <div class="tags">
                  <span class="tag best">Лучшая цена</span>
                </div>

                <div class="picture">
                  <img src="<?=SITE_TEMPLATE_PATH?>/img/store-item1.jpg" alt="">
                  <a href="#fastView" class="btn btn-green">Быстрый просмотр</a>
                </div>

                <div class="price">1 100 руб.</div>

                <div class="price-old" data-discount="-10%">1 100 руб.</div>

                <div class="buy-btns">
                  <a href="#" class="btn btn-gray">Купить в 1 клик</a>
                  <a href="#" class="btn btn-orange">Купить</a>
                </div>
              </div>
              <div class="store_item">
                <a href="#" class="name">Кеды ST-13-4</a>

                <div class="action-btns">
                  <a href="#" class="action icon icon-stats action-stats"></a>
                  <a href="#" class="action icon icon-like action-like"></a>
                </div>

                <div class="tags">
                  <span class="tag best">Лучшая цена</span>
                </div>

                <div class="picture">
                  <img src="<?=SITE_TEMPLATE_PATH?>/img/store-item1.jpg" alt="">
                  <a href="#fastView" class="btn btn-green">Быстрый просмотр</a>
                </div>

                <div class="price">1 100 руб.</div>

                <div class="price-old" data-discount="-10%">1 100 руб.</div>

                <div class="buy-btns">
                  <a href="#" class="btn btn-gray">Купить в 1 клик</a>
                  <a href="#" class="btn btn-orange">Купить</a>
                </div>
              </div>
              <div class="store_item">
                <a href="#" class="name">Кеды ST-13-4</a>

                <div class="action-btns">
                  <a href="#" class="action icon icon-stats action-stats"></a>
                  <a href="#" class="action icon icon-like action-like"></a>
                </div>

                <div class="tags">
                  <span class="tag best">Лучшая цена</span>
                </div>

                <div class="picture">
                  <img src="<?=SITE_TEMPLATE_PATH?>/img/store-item1.jpg" alt="">
                  <a href="#fastView" class="btn btn-green">Быстрый просмотр</a>
                </div>

                <div class="price">1 100 руб.</div>

                <div class="price-old" data-discount="-10%">1 100 руб.</div>

                <div class="buy-btns">
                  <a href="#" class="btn btn-gray">Купить в 1 клик</a>
                  <a href="#" class="btn btn-orange">Купить</a>
                </div>
              </div>
              <div class="store_item">
                <a href="#" class="name">Кеды ST-13-4</a>

                <div class="action-btns">
                  <a href="#" class="action icon icon-stats action-stats"></a>
                  <a href="#" class="action icon icon-like action-like"></a>
                </div>

                <div class="tags">
                  <span class="tag best">Лучшая цена</span>
                </div>

                <div class="picture">
                  <img src="<?=SITE_TEMPLATE_PATH?>/img/store-item1.jpg" alt="">
                  <a href="#fastView" class="btn btn-green">Быстрый просмотр</a>
                </div>

                <div class="price">1 100 руб.</div>

                <div class="price-old" data-discount="-10%">1 100 руб.</div>

                <div class="buy-btns">
                  <a href="#" class="btn btn-gray">Купить в 1 клик</a>
                  <a href="#" class="btn btn-orange">Купить</a>
                </div>
              </div>
              <div class="store_item">
                <a href="#" class="name">Кеды ST-13-4</a>

                <div class="action-btns">
                  <a href="#" class="action icon icon-stats action-stats"></a>
                  <a href="#" class="action icon icon-like action-like"></a>
                </div>

                <div class="tags">
                  <span class="tag best">Лучшая цена</span>
                </div>

                <div class="picture">
                  <img src="<?=SITE_TEMPLATE_PATH?>/img/store-item1.jpg" alt="">
                  <a href="#fastView" class="btn btn-green">Быстрый просмотр</a>
                </div>

                <div class="price">1 100 руб.</div>

                <div class="price-old" data-discount="-10%">1 100 руб.</div>

                <div class="buy-btns">
                  <a href="#" class="btn btn-gray">Купить в 1 клик</a>
                  <a href="#" class="btn btn-orange">Купить</a>
                </div>
              </div>
              <div class="store_item">
                <a href="#" class="name">Кеды ST-13-4</a>

                <div class="action-btns">
                  <a href="#" class="action icon icon-stats action-stats"></a>
                  <a href="#" class="action icon icon-like action-like"></a>
                </div>

                <div class="tags">
                  <span class="tag best">Лучшая цена</span>
                </div>

                <div class="picture">
                  <img src="<?=SITE_TEMPLATE_PATH?>/img/store-item1.jpg" alt="">
                  <a href="#fastView" class="btn btn-green">Быстрый просмотр</a>
                </div>

                <div class="price">1 100 руб.</div>

                <div class="price-old" data-discount="-10%">1 100 руб.</div>

                <div class="buy-btns">
                  <a href="#" class="btn btn-gray">Купить в 1 клик</a>
                  <a href="#" class="btn btn-orange">Купить</a>
                </div>
              </div>
            </div>
          </div>

          <div class="slider-content">
            <div class="title">Вам может понравиться</div>

            <div class="slider owl-carousel">

              <div class="store_item">
                <a href="#" class="name">Кеды ST-13-4</a>

                <div class="action-btns">
                  <a href="#" class="action icon icon-stats action-stats"></a>
                  <a href="#" class="action icon icon-like action-like"></a>
                </div>

                <div class="tags">
                  <span class="tag best">Лучшая цена</span>
                </div>

                <div class="picture">
                  <img src="<?=SITE_TEMPLATE_PATH?>/img/store-item1.jpg" alt="">
                  <a href="#fastView" class="btn btn-green">Быстрый просмотр</a>
                </div>

                <div class="price">1 100 руб.</div>

                <div class="price-old" data-discount="-10%">1 100 руб.</div>

                <div class="buy-btns">
                  <a href="#" class="btn btn-gray">Купить в 1 клик</a>
                  <a href="#" class="btn btn-orange">Купить</a>
                </div>
              </div>
              <div class="store_item">
                <a href="#" class="name">Кеды ST-13-4</a>

                <div class="action-btns">
                  <a href="#" class="action icon icon-stats action-stats"></a>
                  <a href="#" class="action icon icon-like action-like"></a>
                </div>

                <div class="tags">
                  <span class="tag best">Лучшая цена</span>
                </div>

                <div class="picture">
                  <img src="<?=SITE_TEMPLATE_PATH?>/img/store-item1.jpg" alt="">
                  <a href="#fastView" class="btn btn-green">Быстрый просмотр</a>
                </div>

                <div class="price">1 100 руб.</div>

                <div class="price-old" data-discount="-10%">1 100 руб.</div>

                <div class="buy-btns">
                  <a href="#" class="btn btn-gray">Купить в 1 клик</a>
                  <a href="#" class="btn btn-orange">Купить</a>
                </div>
              </div>
              <div class="store_item">
                <a href="#" class="name">Кеды ST-13-4</a>

                <div class="action-btns">
                  <a href="#" class="action icon icon-stats action-stats"></a>
                  <a href="#" class="action icon icon-like action-like"></a>
                </div>

                <div class="tags">
                  <span class="tag best">Лучшая цена</span>
                </div>

                <div class="picture">
                  <img src="<?=SITE_TEMPLATE_PATH?>/img/store-item1.jpg" alt="">
                  <a href="#fastView" class="btn btn-green">Быстрый просмотр</a>
                </div>

                <div class="price">1 100 руб.</div>

                <div class="price-old" data-discount="-10%">1 100 руб.</div>

                <div class="buy-btns">
                  <a href="#" class="btn btn-gray">Купить в 1 клик</a>
                  <a href="#" class="btn btn-orange">Купить</a>
                </div>
              </div>
              <div class="store_item">
                <a href="#" class="name">Кеды ST-13-4</a>

                <div class="action-btns">
                  <a href="#" class="action icon icon-stats action-stats"></a>
                  <a href="#" class="action icon icon-like action-like"></a>
                </div>

                <div class="tags">
                  <span class="tag best">Лучшая цена</span>
                </div>

                <div class="picture">
                  <img src="<?=SITE_TEMPLATE_PATH?>/img/store-item1.jpg" alt="">
                  <a href="#fastView" class="btn btn-green">Быстрый просмотр</a>
                </div>

                <div class="price">1 100 руб.</div>

                <div class="price-old" data-discount="-10%">1 100 руб.</div>

                <div class="buy-btns">
                  <a href="#" class="btn btn-gray">Купить в 1 клик</a>
                  <a href="#" class="btn btn-orange">Купить</a>
                </div>
              </div>
              <div class="store_item">
                <a href="#" class="name">Кеды ST-13-4</a>

                <div class="action-btns">
                  <a href="#" class="action icon icon-stats action-stats"></a>
                  <a href="#" class="action icon icon-like action-like"></a>
                </div>

                <div class="tags">
                  <span class="tag best">Лучшая цена</span>
                </div>

                <div class="picture">
                  <img src="<?=SITE_TEMPLATE_PATH?>/img/store-item1.jpg" alt="">
                  <a href="#fastView" class="btn btn-green">Быстрый просмотр</a>
                </div>

                <div class="price">1 100 руб.</div>

                <div class="price-old" data-discount="-10%">1 100 руб.</div>

                <div class="buy-btns">
                  <a href="#" class="btn btn-gray">Купить в 1 клик</a>
                  <a href="#" class="btn btn-orange">Купить</a>
                </div>
              </div>
              <div class="store_item">
                <a href="#" class="name">Кеды ST-13-4</a>

                <div class="action-btns">
                  <a href="#" class="action icon icon-stats action-stats"></a>
                  <a href="#" class="action icon icon-like action-like"></a>
                </div>

                <div class="tags">
                  <span class="tag best">Лучшая цена</span>
                </div>

                <div class="picture">
                  <img src="<?=SITE_TEMPLATE_PATH?>/img/store-item1.jpg" alt="">
                  <a href="#fastView" class="btn btn-green">Быстрый просмотр</a>
                </div>

                <div class="price">1 100 руб.</div>

                <div class="price-old" data-discount="-10%">1 100 руб.</div>

                <div class="buy-btns">
                  <a href="#" class="btn btn-gray">Купить в 1 клик</a>
                  <a href="#" class="btn btn-orange">Купить</a>
                </div>
              </div>

            </div>
          </div>
        </div>


      </div>
  </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>