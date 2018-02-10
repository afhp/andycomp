<!DOCTYPE html>
<html lang="en">
<head>
<title>AndyComp Technology</title>
<meta name="description" content="Place your description here">
<meta name="keywords" content="put, your, keyword, here">
<meta name="author" content="Templates.com - website templates provider">
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/maxheight.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/jquery.faded.js"></script>
<script type="text/javascript" src="js/jquery.jqtransform.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript">
	$(function(){
		$("#faded").faded({
			speed: 500,
			crossfade: true,
			autoplay: 10000,
			autopagination:false
		});
		
		$('#domain-form').jqTransform({imgPath:'jqtransformplugin/img/'});
	});
</script>
<!--[if lt IE 7]>
<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
<![endif]-->
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page1" onLoad="new ElementMaxHeight();">
<div class="tail-top">
<!-- header -->
	<header>
	<div class="light_gray_bg small_padding pix_builder_bg" id="section_text_2" style="background-image: url(&quot;images/6.gif&quot;); background-color: rgb(243, 243, 243); padding-top: 20px; padding-bottom: 20px; box-shadow: none; border-color: rgb(255, 153, 0); background-size: auto; background-attachment: scroll; background-repeat: repeat; outline-offset: -3px;">
            <br>
	</div>
			<div class="container" >
			<div class="header-box">
				<div class="left">
					<div class="right">
						<nav>
							<ul>
								<li class="current"><a href="index.html">Inicio</a></li>
								<li><a href="productos.php">Productos</a></li>
								<li><a href="services.html">Servicios</a></li>
								<li><a href="mayorista.html">Ser Mayorista</a></li>					
								<li><a href="contacts.html">Ubicación</a></li>
							</ul>
						</nav>
						<h1><a href="index.html"><span>Andy</span>Comp</a></h1>
					</div>
				</div>
			</div>
			<span class="top-info"><a>24/7 Ventas  &amp; Cotizaciones 0998627272  &nbsp; l  &nbsp; </a><a href="http://web.whatsapp.com">WhatsApp</a> &nbsp; l &nbsp; <a href="http://www.facebook.com">Facebook</a></span>
			 <form action="" id="login-form">
				<fieldset>
					<span class="text">
						<input type="text" value="Usuario" onFocus="if(this.value=='Usuario'){this.value=''}" onBlur="if(this.value==''){this.value='Usuario'}">
					</span>
					<span class="text">
						<input type="password" value="Password" onFocus="if(this.value=='Password'){this.value=''}" onBlur="if(this.value==''){this.value='Password'}">
					</span>
					<a href="#" class="login" onClick="document.getElementById('login-form').submit()"><span><span>Iniciar sesión</span></span></a>
					<span class="links"><a href="#">¿Olvidó su contraseña?</a><br/><a href="register.html">Registrarse</a></span>
				</fieldset>
			</form> 
		</div>
	</header>
<!-- content -->
	<section id="content">
		<div class="container">
			<div id="faded">
				<ul class="slides">
					<li><img src="images/slide-title3.png"><a href="#"><span><span>Mas Información</span></span></a></li>
					<li><img src="images/slide-title1.png"><a href="#"><span><span>Mas Información</span></span></a></li>
					<li><img src="images/slide-title2.png"><a href="#"><span><span>Mas Información</span></span></a></li>
					<li><img src="images/slide-title4.png"><a href="#"><span><span>Mas Información</span></span></a></li>
				</ul>
				<ul class="pagination">
					<li><a href="#" rel="0"><span>Tablets</span><small>Mas Información</small></a></li>
					<li><a href="#" rel="1"><span>PC Gamers</span><small>Mas Información</small></a></li>
					<li><a href="#" rel="2"><span>Impresoras</span><small>Mas Información</small></a></li>
					<li><a href="#" rel="3"><span>Servicio Técnico</span><small>Mas Información</small></a></li>
				</ul>
			</div>
			

			<H1>Ofertas <span>AndyComp </h1>
			

		
			<div class="inside">
				<div class="wrapper row-1">
				
	<?php
		include 'conexion.php';
		$re=mysql_query("select * from productos")or die(mysql_error());
		while($f=mysql_fetch_array($re)) {
		?>
				
					<div class="box col-<?php echo $f['id'];?> maxheight">
						<div class="border-right maxheight">
							<div class="border-bot maxheight">
								<div class="border-left maxheight">
									<div class="left-top-corner maxheight">
										<div class="right-top-corner maxheight">
											<div class="right-bot-corner maxheight">
												<div class="left-bot-corner maxheight">
													<div class="inner">
														<h3><?php echo $f['nombre'];?></h3>
														<ul class="info-list">
															<li><span>Memoria Interna</span>8 Gb</li>
															<li><span>Pantalla</span>7"</li>
															<li><span>Cámara posterior</span>2MPx</li>
															<li><span>Cámara frontal</span>0.3MPx</li>
															<li><span>Conexión</span>Wifi+Bluetooth</li>
															<li><span>Regalos</span>Estuche+Teclado</li>
														</ul>
														<span class="price">$ 49.50 + IVA</span>
														<img src="./productos/<?php echo $f['imagen'];?>">
														<div class="aligncenter"><a href="productos.php" class="link1"><span><span>Ver Mas Tablets</span></span></a></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
	<?php
		}
	?>
				</div>
				
				<br/>
				

				<div class="inside1">
					<div class="wrap row-2">
						<article class="col-1">
							<h2>Soluciones</h2>
							<ul class="solutions">
								<li><img src="images/icon3.gif"><p>24/7 Atención al Cliente , preguntas y sugerencias</p><a href="contacts.html"><b>Mas Información</b></a></li>
								<li><img src="images/icon4.gif"><p>Servicio Técnico Garantizado</p><a href="#"><b>Mas Información</b></a></li>
							</ul>
							<br><br>
							<h2>Formas de Pago</h2>
							<ul class="solutions">
								<li><img src="images/fp.png"><p>Aceptamos estas tarjetas en todos nuestors locales</p><a href="contacts.html"><b>Mas Información</b></a></li>
							</ul>
						</article>
						<article class="col-2">
							<h2>Variedad y Calidad en nuestros productos</h2>
							<form action="" id="domain-form">
								<div class="img-box"><img src="images/1page-img.jpg">
									<div class="extra-wrap">
										<fieldset>
							<p>Somos una empresa dedicada a la venta de partes y piezas de computadoras, impresoras y suministros, portátiles, tablets y accesorios gamers.</p>
							<p>AdeMas trabajamos con las mejores marcas, Nvidia, Seagate, Intel, Asus, Epson, Marvo, Hp, Canon y Gigabyte, Disponemos de personal capacitado para dar Servicio Técnico.</p>
							
										</fieldset>
									</div>
								</div>
								<div class="wrapper">
									<a href="#" class="link2"><span><span>Mas Información</span></span></a>
							</form>
						</article>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<!-- aside -->
<aside>
	<div class="container">
		<div class="inside">
			<div class="line-ver1">
				<div class="line-ver2">
					<div class="line-ver3">
						<div class="wrapper line-ver4">
							<ul class="list col-1">
								<li>Dirección Matriz</li>
								<li><a href="contacts.html">Av. Solanda OE3-32 Y Av. Teniente Hugo Ortiz(diagonal parada Quimiag Trole)</a></li>
							</ul>
							<ul class="list col-2">
								<li>Sucursal 1</li>
								<li><a href="contacts.html">Av. Cusubamba  OE3-181 Y S26A(a una cuadra de Escuela Nuestra Señora del Cisne)</a></li>
							</ul>
							<ul class="list col-3">
							<li>Contáctenos</li>
								<li><a href="contacts.html">Croquis del lugar</a></li>
								<br>
								<li>Teléfonos</li>
								<li><a href="contacts.html">022 3057592</a></li>
								<li><a href="contacts.html">09 98627272</a></li>
							</ul>
							<ul class="list col-4">
								<li>Ventas</li>
								<li><a href="contacts.html">mercyeliz@hotmail.com</a></li>
								<br>
								<li>Mayoristas</li>
								<li><a href="mayorista.html">Llenar el formulario</a></li>
							</ul>
							<ul class="list col-5">
								<li>Servicios</li>
								<li><a href="services.html">Servicio Técnico</a></li>
								<li><a href="contacts.html">Cotizaciones</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</aside>
<!-- footer -->
<footer>
	<div class="container">
		<div class="inside">
			<h1><span>Desarrollado por</span> MasLinks<span></h1><a class="new_window" href="http://maslinks.ml" target="_blank" rel="nofollow">af_hp@live.com<br/>+593 984450765</a>
		</div>
	</div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>