<!DOCTYPE html>
<html lang="en">
<head>
<title>Support - Support | Hosting - Free Website Template from Templates.com</title>
<meta name="description" content="Place your description here">
<meta name="keywords" content="put, your, keyword, here">
<meta name="author" content="Templates.com - website templates provider">
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_600.font.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--[if lt IE 7]>
<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
<![endif]-->
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page2">
<div class="tail-top1">
<!-- header -->
	<header>
	<div class="light_gray_bg small_padding pix_builder_bg" id="section_text_2" style="background-image: url(&quot;images/6.gif&quot;); background-color: rgb(243, 243, 243); padding-top: 20px; padding-bottom: 20px; box-shadow: none; border-color: rgb(255, 153, 0); background-size: auto; background-attachment: scroll; background-repeat: repeat; outline-offset: -3px;">
            <br>
	</div>
		<div class="container">
			<div class="header-box">
				<div class="left">
					<div class="right">
						<nav>
							<ul>
								<li><a href="index.html">Inicio</a></li>
								<li class="current"><a href="productos.php">Productos</a></li>
								<li><a href="services.html">Servicios</a></li>
								<li><a href="mayorista.html">Ser Mayorista</a></li>					
								<li><a href="contacts.html">Ubicación</a></li>
							</ul>
						</nav>
						<h1><a href="index.html"><span>Andy</span>Comp</a></h1>
					</div>
				</div>
			</div>
			<span class="top-info"><a>24/7 Ventas  &amp; Cotizaciones 0998627272  &nbsp; l  &nbsp; </a><a href="#">WhatsApp</a> &nbsp; l &nbsp; <a href="#">Facebook</a></span>
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
			<div class="inside">
				<div id="slogan">
					<div class="inside">
						<h1><span>Tecnología</span> a su elección</h1>
						<p>Escoja entre nuestra amplia variedad de productos tecnológicos y al MEJOR PRECIO del Mercado con GARANTÍA o si desea puede acercarse personalmente a nuestros locales para ser atendido por un representante, estaremos encantados en atenderle, <span>AndyComp<span>.</p>
					</div>
				</div>
				<div class="inside1">
					<div class="wrap row-2">
						<article class="col-1">
							<h2>Categorías</h2>
							<ul class="list1">
								<li><a href="#">Computadoras Escritorio</a></li>
								<li><a href="#">Computadoras Gamers</a></li>
								<li><a href="#">Portátiles</a></li>
								<li><a href="#">Tablets</a></li>
								<li><a href="#">Impresoras</a></li>
								<li><a href="#">Suministros</a></li>
								<li><a href="#">Procesadores</a></li>
								<li><a href="#">Placas Madre</a></li>
								<li><a href="#">Memorias RAM</a></li>
								<li><a href="#">Discos Duros</a></li>
								<li><a href="#">Fuentes de Poder</a></li>
								<li><a href="#">Case</a></li>
								<li><a href="#">Audífonos</a></li>
								<li><a href="#">Teclados</a></li>
								<li><a href="#">Accesorios GAMERS</a></li>
								
							</ul>
							</article>

					
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<div class="content_top">
    		<div class="heading">
    		<h3>New Products</h3>
    		</div>
    		<div class="see">
    			<p><a href="#">See all Products</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
		
		 <div class="section group">

		
	<?php
		include 'conexion.php';
		$re=mysql_query("select * from productos")or die(mysql_error());
		while($f=mysql_fetch_array($re)) {
		?>
		
							<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview.html"><img src="./productos/<?php echo $f['imagen'];?>" alt="" /></a>
					 <h2><?php echo $f['nombre'];?></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$620.87</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
					 
				</div>
			
	<?php
		}
	?>

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