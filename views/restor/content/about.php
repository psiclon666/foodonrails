<!DOCTYPE HTML>
<html>
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
			<h1 class="lite-grey">Редактирование данных</h1>
			<form method="POST" action="http://foodonrails.azurewebsites.net/reg" enctype="multipart/form-data">
			<table class="Striped">
				<tbody>
					<tr>
						<td>
							<div>
      							<h4 class="orng">Наименование компании:</h4>
    						</div>
						</td>
						<td>
							<div>
      							<textarea name="name" cols="40" rows="6" class="form-control"><?php echo $data['name'];?></textarea>
    						</div>
						</td>
						<td></td>
					</tr>
					<tr>
						<td>
							<div>
      							<h4 class="orng">В лице кого заключается договор, основание:</h4>
    						</div>
						</td>
						<td>
							<div>
      							<textarea name="face" cols="40" rows="6" class="form-control"><?php echo $data['face'];?></textarea>
    						</div>
						</td>
						<td></td>
					</tr>
					<tr>
						<td>
							<div>
      							<h4 class="orng">ИНН, КПП, ОГРН/ОГРНИП:</h4>
    						</div>
						</td>
						<td>
							<div>
      							<textarea name="inn" cols="40" rows="6" class="form-control"><?php echo $data['inn'];?></textarea>
    						</div>
						</td>
						<td></td>
					</tr>
					<tr>
						<td>
							<div>
      							<h4 class="orng">Юридический адрес:</h4>
    						</div>
						</td>
						<td>
							<div>
      							<textarea name="adress" cols="40" rows="6" class="form-control"><?php echo $data['adress'];?></textarea>
    						</div>
						</td>
						<td></td>
					</tr>
					<tr>
						<td>
							<div>
      							<h4 class="orng">Расчетный счет:</h4>
    						</div>
						</td>
						<td>
							<div>
      							<textarea name="schet" cols="40" rows="6" class="form-control"><?php echo $data['schet'];?></textarea>
    						</div>
						</td>
						<td></td>
					</tr>
					<tr>
						<td>
							<div>
      							<h4 class="orng">наименование банка:</h4>
    						</div>
						</td>
						<td>
							<div>
      							<textarea name="bank" cols="40" rows="6" class="form-control"><?php echo $data['bank'];?></textarea>
    						</div>
						</td>
						<td></td>
					</tr>
					<tr>
						<td>
							<div>
      							<h4 class="orng">БИК:</h4>
    						</div>
						</td>
						<td>
							<div>
      							<textarea name="bik" cols="40" rows="6" class="form-control"><?php echo $data['bik'];?></textarea>
    						</div>
						</td>
						<td></td>
					</tr>
					<tr>
						<td>
							<div>
      							<h4 class="orng">Почтовый адрес:</h4>
    						</div>
						</td>
						<td>
							<div>
      							<textarea name="pochta" cols="40" rows="6" class="form-control"><?php echo $data['pochta'];?></textarea>
    						</div>
						</td>
						<td></td>
					</tr>
					<tr>
						<td>
							<div>
      							<h4 class="orng">телефон:</h4>
    						</div>
						</td>
						<td>
							<div>
      							<textarea name="telefon" cols="40" rows="6" class="form-control"><?php echo $data['telefon'];?></textarea>
    						</div>
						</td>
						<td></td>
					</tr>
					<tr>
						<td>
							<div>
      							<h4 class="orng">email:</h4>
    						</div>
						</td>
						<td>
							<div>
      							<textarea name="email" cols="40" rows="6" class="form-control"><?php echo $data['email'];?></textarea>
    						</div>
						</td>
						<td></td>
					</tr>
					<tr>
						<td>
							<div>
      							<h4 class="orng">Пароль создаваемого аккаунта:</h4>
    						</div>
						</td>
						<td>
							<div>
      							<textarea name="password" cols="40" rows="6" class="form-control"><?php echo $data['password'];?></textarea>
    						</div>
						</td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td><label for="submitbtn" class="uploadButton">Обновить информацию</label>
							<input style="opacity: 0; z-index: -1; width: 150px;" type="submit" name="submit" id="submitbtn"></form></td>
							
						<td></td>
					</tr>
					<!-- <tr>
						<td style="padding-left: 60px;">в т.ч. "Сапсан" в сообщении Москва – Санкт-Петербург (тыс. пасс.)</td>
						<td>2 631</td>
						<td>3 147</td>
						<td class="brdr5 headNav_current"><a href="http://www.rzd.ru">О компании</a></td>
						<td><img src="http://www.rzd.ru/dbmm/images/1/121/89440?filename=up1.png" alt="" width="9" height="8" /> 19,6</td>
					</tr> 
					<tr>
    					<td></td>
						<td style="padding-left: 30px;">Пригородное сообщение&nbsp;<span>(млн пасс.)</span></td>
						<td>676,9</td>
						<td>711,1</td>
						<td><img src="http://www.rzd.ru/dbmm/images/1/121/89440?filename=up1.png" alt="" width="9" height="8">&nbsp;5,1</td>
					</tr>
					<tr>
						<td style="padding-left: 60px;">в т.ч. по МЦК (млн пасс.)</td>
						<td>81,3</td>
						<td>93,2</td>
						<td><img src="http://www.rzd.ru/dbmm/images/1/121/89440?filename=up1.png" alt="" width="9" height="8">&nbsp;14,6</td>
					</tr>
					<tr>
						<td>Пассажирооборот (млрд пасс-км)</td>
						<td>89,5</td>
						<td>92,6</td>
						<td><img src="http://www.rzd.ru/dbmm/images/1/121/89440?filename=up1.png" alt="" width="9" height="8">&nbsp;3,5</td>
					</tr>-->
				</tbody>
			</table>
			
		</div>
	</div>
</body>
</html>