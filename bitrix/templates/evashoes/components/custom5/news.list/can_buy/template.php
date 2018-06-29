<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="<?=SITE_TEMPLATE_PATH?>/plugins/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?=SITE_TEMPLATE_PATH?>/plugins/jqvmap/js/jquery.vmap.js" type="text/javascript"></script>
  <script src="<?=SITE_TEMPLATE_PATH?>/plugins/jqvmap/js/maps/jquery.vmap.russia.js" type="text/javascript"></script>
  <script src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>
  <script type="text/javascript">
	// Массив всех объектов
	
	var data_obj = {};

	colorRegion = '#ff3f00'; // Цвет всех регионов
	focusRegion = '#FF9900'; // Цвет подсветки регионов при наведении на объекты из списка
	selectRegion = '#009374'; // Цвет изначально подсвеченных регионов
	
	highlighted_states = {};

	//Массив подсвечиваемых регионов, указанных в массиве data_obj
	//for(iso in data_obj){
		// highlighted_states[iso] = selectRegion;
	//}

	
	// Выводим список объектов из массива
	/*$(document).ready(function() {
		for(region in data_obj){
			for(obj in data_obj[region]){
				$('.list-object').append('<li><a href="'+selectRegion+'" id="'+region+'" class="focus-region">'+data_obj[region][obj]+' ('+region+')</a></li>');
			}
		}
	});*/

</script>
<div class="container block">
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
			  <script>
				data_obj["<?=$arItem['PROPERTIES']['WTB_STATE']['VALUE'];?>"] = true;
			  </script>
			<?endforeach;?>
		</tbody>
	</table>
</div>
<script>
$(document).ready(function() {
		for(iso in data_obj){
			highlighted_states[iso] = selectRegion;
		}
		$('#vmap').vectorMap({
			map: 'russia',
			backgroundColor: '#ffffff',
			borderColor: '#ffffff',
			borderWidth: 2,
			color: colorRegion,
			colors: highlighted_states,
			hoverOpacity: 0.7,
			enableZoom: true,
			showTooltip: true,

			// Отображаем объекты если они есть
			onLabelShow: function(event, label, code){
				name = '<strong>'+label.text()+'</strong><br>';
				if(data_obj[code]){
					list_obj = '<ul>';
					for(ob in data_obj[code]){
						list_obj += '<li>'+data_obj[code][ob]+'</li>';
					}
					list_obj += '</ul>';
				}else{
					list_obj = '';
				}
				label.html(name + list_obj);
				list_obj = '';
			},
			// Клик по региону
			onRegionClick: function(element, code, region){
				alert(region+' - ' +code);
			}
		});
		$("path[fill='#009374']").on('click', function(e){
			e.preventDefault();
			$.ajax({
				type: 'POST',
				url: "/can_buy/city/",
				data: {
					area_id: $(this).data("id")
				},
				success: function (data){
					$(".section-table").html(data);
				},
			});
		});
	});
	// Подсветка регионов при наведении на объекты
	$(function(){
		$('.focus-region').mouseover(function(){
			iso = $(this).prop('id');
			fregion = {};
			fregion[iso] = focusRegion;
			$('#vmap').vectorMap('set', 'colors', fregion);
		});
		$('.focus-region').mouseout(function(){
			c = $(this).attr('href');
			cl = (c === '#')?colorRegion:c;
			iso = $(this).prop('id');
			fregion = {};
			fregion[iso] = cl;
			$('#vmap').vectorMap('set', 'colors', fregion);
		});
	});


</script>
