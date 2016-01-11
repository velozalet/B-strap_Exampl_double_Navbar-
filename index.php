<?
header("Content-type:text/html; charset=utf-8"); // кодировка

$err_msg =''; // для хранения текста пользовательской ошибки
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Почтовый клиент</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen"> <!-- подключ.основной css-файл Bootstrapа--> 
	<link href="css/font-awesome.css" rel="stylesheet"> <!-- подключ.css-файл font-awesome со шрифт.иконками--> 
  </head>
<body>
   
<div class='container-fluid'>
	<header>
		 <h1>ЗАГОЛОВОК в тєге header</h1>
	</header>


<!-- Гориз.НавБар ВЕРХНИЙ- НАЧАЛО--> <!--navbar-inverse-->
<div class='navbar navbar-default'>   
	<nav class='navbar-collapse collapse' id='responsive-menu'> 	
		<ul id="myTab" class="nav nav-tabs" >
			<li class="active"><a href="#home" role="tab" data-toggle="tab"><em class='glyphicon glyphicon-home'></em>&nbspHome</a></li>
			<li><a href="#profile" role="tab" data-toggle="tab"><em class='glyphicon glyphicon-user'></em>&nbspProfile</a></li>
			<li><a href="#market" role="tab" data-toggle="tab"><em class='glyphicon glyphicon-shopping-cart'></em>&nbspMarket</a></li>
			<li><a href="#aboutus" role="tab" data-toggle="tab"><em class='glyphicon glyphicon-folder-open'></em> &nbspAbout Us</a></li>
			<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" id='dropdown_link'>Dropdown <em class="caret"></em></a>
				
				<ul class="dropdown-menu">     <!--Выпад.МЕНЮ 1 Ур.НАЧАЛО-->
					<li><a href="#dropdown1">dropdown 1</a></li>
					<li><a href="#dropdown2">dropdown 2</a></li>
					<li class='divider'></li> <!-- визуальный разделитель -->
					<li class='dropdown-submenu'><a href="#">dropdown 3</a>
						<ul class='dropdown-menu'>   <!--Выпад.МЕНЮ 2 Ур.НАЧАЛО-->
							<li><a href="#subdropdown_1">SUBdropdown 1</a></li>
							<li><a href="#subdropdown_2">SUBdropdown 2</a></li>
							<li><a href="#subdropdown_3">SUBdropdown 3</a></li>
							<li><a href="#subdropdown_4">SUBdropdown 4</a></li>
						</ul>                         <!--Выпад.МЕНЮ 2 Ур.КОНЕЦ-->
					</li>
				</ul>                           <!--Выпад.МЕНЮ 1 Ур.КОНЕЦ-->
			</li> 							
			
		</ul>
	</nav> 	
</div>
 <!-- Гориз.НавБар ВЕРХНИЙ- КОНЕЦ-->

  <!-- Прослойка для kонтента между двумя НавБарами- НАЧАЛО-->
<div class='navbar my_div_blc'>   
	<nav class='navbar-collapse collapse' id='responsive-menu'>col-sm-7
col-sm-7

Здесь произвольный текст. Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. col-sm-7 col-sm-7 Здесь произвольный текст. Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helveticol-sm-7 col-sm-7 Здесь произвольный текст. Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helveti col-sm-7 col-sm-7 Здесь произвольный текст. Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetiMustache cliche tempor, williamsburg carles vegan helveti  +> col-sm-3
	</nav> 		
</div>
  <!-- Прослойка для еонтента между двумя НавБарами- КОНЕЦ-->

 <!-- Гориз.НавБар НИЖНИЙ- НАЧАЛО-->
<div class='navbar navbar-default my_navbar_bottom'>   
	<nav class='navbar-collapse collapse' id='responsive-menu'> 	
		<ul id="myTab" class="nav  nav_tabs_for_bottom" >
			<li class="active"><a href="#home" role="tab" data-toggle="tab"><em class='glyphicon glyphicon-home'></em>&nbspHome</a></li>
			<li><a href="#profile" role="tab" data-toggle="tab"><em class='glyphicon glyphicon-user'></em>&nbspProfile</a></li>
			<li><a href="#market" role="tab" data-toggle="tab"><em class='glyphicon glyphicon-shopping-cart'></em>&nbspMarket</a></li>
			<li><a href="#aboutus" role="tab" data-toggle="tab"><em class='glyphicon glyphicon-folder-open'></em> &nbspAbout Us</a></li>
			<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" id='dropdown_link'>Dropdown <em class="caret"></em></a>
				
				<ul class="dropdown-menu">     <!--Выпад.МЕНЮ 1 Ур.НАЧАЛО-->
					<li><a href="#dropdown1">dropdown 1</a></li>
					<li><a href="#dropdown2">dropdown 2</a></li>
					<li class='divider'></li> <!-- визуальный разделитель -->
					<li class='dropdown-submenu'><a href="#">dropdown 3</a>
						<ul class='dropdown-menu'>   <!--Выпад.МЕНЮ 2 Ур.НАЧАЛО-->
							<li><a href="#subdropdown_1">SUBdropdown 1</a></li>
							<li><a href="#subdropdown_2">SUBdropdown 2</a></li>
							<li><a href="#subdropdown_3">SUBdropdown 3</a></li>
							<li><a href="#subdropdown_4">SUBdropdown 4</a></li>
						</ul>                         <!--Выпад.МЕНЮ 2 Ур.КОНЕЦ-->
					</li>
				</ul>                           <!--Выпад.МЕНЮ 1 Ур.КОНЕЦ-->
			</li> 							
			
		</ul>
	</nav> 	
</div>
 <!-- Гориз.НавБар НИЖНИЙ- КОНЕЦ-->

<!-- Вертик.НавБар- НАЧАЛО-->
<div class='navbar navbar-default my_navbar_vertical'>   
	<nav class='navbar-collapse collapse' id='responsive-menu'> 	
		<ul id="myTab" class="nav my_nav_ver my_nav-tabs nav-tabs_ver " >
			<li class="active"><a href="#home" role="tab" data-toggle="tab"><em class='glyphicon glyphicon-home'></em>&nbspHome</a></li>
			<li><a href="#profile" role="tab" data-toggle="tab"><em class='glyphicon glyphicon-user'></em>&nbspProfile</a></li>
			<li><a href="#market" role="tab" data-toggle="tab"><em class='glyphicon glyphicon-shopping-cart'></em>&nbspMarket</a></li>
			<li><a href="#aboutus" role="tab" data-toggle="tab"><em class='glyphicon glyphicon-folder-open'></em> &nbspAbout Us</a></li>
			<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" id='dropdown_link'>Dropdown <em class="caret"></em></a>
				
				<ul class="dropdown-menu">     <!--Выпад.МЕНЮ 1 Ур.НАЧАЛО-->
					<li><a href="#dropdown1">dropdown 1</a></li>
					<li><a href="#dropdown2">dropdown 2</a></li>
					<li class='divider'></li> <!-- визуальный разделитель -->
					<li class='dropdown-submenu'><a href="#">dropdown 3</a>
						<ul class='dropdown-menu'>   <!--Выпад.МЕНЮ 2 Ур.НАЧАЛО-->
							<li><a href="#subdropdown_1">SUBdropdown 1</a></li>
							<li><a href="#subdropdown_2">SUBdropdown 2</a></li>
							<li><a href="#subdropdown_3">SUBdropdown 3</a></li>
							<li><a href="#subdropdown_4">SUBdropdown 4</a></li>
						</ul>                         <!--Выпад.МЕНЮ 2 Ур.КОНЕЦ-->
					</li>
				</ul>                           <!--Выпад.МЕНЮ 1 Ур.КОНЕЦ-->
			</li> 							
			
		</ul>
	</nav> 	
</div>
<!-- Вертик.НавБар- КОНЕЦ-->
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>
		

&nbsp 


	<!-- Для тестов, разбивка на коллоны НАЧАЛО-->
			<div class='row'>
				
				<div class='col-sm-2'> <p>col-sm-2</p>Здесь произвольный текст. Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate qui nisi. 
				</div>
				
				
				<div class='col-sm-7 delete_border'>
					<div class='col-sm-12'> <p>col-sm-7</p>Здесь произвольный текст. Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate qui nisi. Здесь произвольный текст. Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate qui nisi. tica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate qui nisi. 
					</div>
				</div>  
				
				
				<div class='col-sm-3 '> <p>col-sm-3</p>Здесь произвольный текст. Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate qui nisi. Здесь произвольный текст. Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate qui nisi.

				</div>
			</div>
	<!-- Для тестов, разбивка на коллоны КОНЕЦ-->

</div>

	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> это онлайновая библиотека jQuery,она будет работать и выполнять 
	             скрипты только при подключ.INTERNET. Чтобы добавить и подкл.эту библ.jQuery,нужно скопировать эту ссылку,и загрузить в адрес.строке браузера,
				 затем весь текст, что появится(это и есть сама библиотека) сохранить(сохранить как прав.клав.на нем) как /jquery.min.js/-файл в папке /js/
				 и потом тут(важно именно тут и выше строки:<script src="js/bootstrap.min.js" type="text/javascript"></script>) подключить эту библиотеку,
				 прописав строку: <script src="js/jquery.min.js" type="text/javascript"></script> -->
	
	<script src="js/jquery.min.js" type="text/javascript"></script> <!-- Include lib.jQuery из он-лайновой ссылки-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script> <!-- Include lib.Javascript из исходника Бутстрап-->

  </body>
</html>