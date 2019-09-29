<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
use Model\SafeMySQL as SafeMySQL;
mb_internal_encoding("UTF-8");
?><html>
<head>
<title>FoodOnTrails</title>	
<meta content="text/html; charset=UTF-8" name="Content">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<meta name="description" content="">
<link rel="stylesheet" href="/css.css" type="text/css" media="screen, projection, print"/>
</head>
<body class='body_vp-1 body_lang-ru body_layerId-162  theme_hasLeftCol'>
	<div id="wrap">					
		<div id="header">
			<div>
				<div id="headLogo">								
					<div class="flip-logo-wrap">
						<table class="j-not-ie-only">
							<tr>
								<td>
									<a href="http://foodonrails.azurewebsites.net">
										<img src="/images/logo/foodontrails1.png" width="60" height="70">
									</a>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div id="headMenu">			
					<div class="clr"></div>
					<div id="headNav">
						<div id="headNav2-wrap">
							<table id="headNav2" class="brdr5">
								<tr>
									<td class=""><a href="http://foodonrails.azurewebsites.net/restorator/orders">Заказы</a></td>
									<td class=""><a href="http://foodonrails.azurewebsites.net/restorator/dishes">Блюда</a></td>
									<td class=""><a href="http://foodonrails.azurewebsites.net/restorator/stations">Список станций</a></td>
									<td class=""><a href="http://foodonrails.azurewebsites.net/restorator/about">Реквизиты ресторана</a></td>
									<td class=""><a href="http://foodonrails.azurewebsites.net/restorator/logout">Выйти</a></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
			<table class="w100p clr head-marquee-search-bar">
				<tbody>
					<tr>
						<td class="w100p">
							<div id="marquee" class="marquee-holder brdr5"><div class="emptybanner" id="banner_100"></div></div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div>
			<h1 class="lite-grey">Список блюд</h1>
			<table class="Striped">
				<tbody>
					<tr>
						<th>&nbsp;</th>
						<th><strong>Название блюда</strong></th>
						<th><strong>Описание</strong></th>
						<th><strong>Стоимость</strong></th>
						<th><strong>Время готовки блюда</strong></th>
					</tr>
<?php
$db = new SafeMySQL();
#echo $_SESSION["id"];
if ($data=$db->getAll("SELECT url, name, des, cost, time FROM dishes WHERE id_restoran=?i", $_SESSION["id"]))
{
	#print_r($data);
	foreach ($data as $key => $value){
?>					<tr>
						<td><img src="<?php echo $value['url']; ?>" width="250" height="150"></td>
						<td><strong>"<?php echo $value['name']; ?>"</strong></td>
						<td><strong>"<?php echo $value['des']; ?>"</strong></td>
						<td><strong>"<?php echo $value['cost']; ?>"</strong></td>
						<td><strong>"<?php echo $value['time']; ?>"</strong></td>
					</tr>
					<?php }
}?>
				<!-- <tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr> -->
				<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td><a href="http://foodonrails.azurewebsites.net/restorator/add_dishes"><img src="/images/plus.png" width="150" height="30"></a></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>