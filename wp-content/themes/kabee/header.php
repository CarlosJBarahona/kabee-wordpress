<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/reset.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	

	<link rel="stylesheet" type="text/css" href="<?=get_bloginfo('template_directory')?>/css/global.css">
	<link rel="stylesheet" type="text/css" href="<?=get_bloginfo('template_directory')?>/css/fuentes.css">
	<link rel="stylesheet" type="text/css" href="<?=get_bloginfo('template_directory')?>/css/menumovil.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>


</head>
<body>

	<div class="container contmenu" >
		<div class="menucabeceralg bacilg visible-lg visible-md "><!--LG-->

			<img class="logolg" src="<?=get_bloginfo('template_directory')?>/img/home/logo.png">
			<a href="/home"><button id="inicio" type="button" class="botonesmenulg hoverbotonlg btn btn-default">INICIO</button></a>
			<a href="/quienes-somos"><button id="quien" type="button" class="botonesmenuquienlg hoverbotonlg btn btn-default">QUIENES SOMOS</button></a>
			<div class="btn-group botonesmenuprolg hoverbotonlg">
				<button type="button" class="botonesmenuprolg hoverbotonlg btn btn-default dropdown-toggle" data-toggle="dropdown">PRODUCTOS
					<img class="fleplg" src="<?=get_bloginfo('template_directory')?>/img/home/flecha_menu.png">
				</button>
				<ul class="dropdown-menu" role="menu">
					<li><a href="/bordados"><div  class="listaslg">BORDADOS</div></a></li>
					<li><a href="/dulces"><div  class="listaslg">DULCES</div></a></li>
					<li><a href="/henequen"><div  class="listaslg">HENEQUEN</div></a></li>
					<li><a href="/jipi"><div  class="listaslg">JIPI</div></a></li>
					<li><a href="/madera"><div  class="listaslg">MADERA</div></a></li>
					<li><a href="/mermelada"><div  class="listaslg">MERMELADA</div></a></li>
					<li><a href="/miel"><div  class="listaslg">MIEL</div></a></li>
					<li><a href="/munecas"><div  class="listaslg">MUÑECAS</div></a></li>
					<li><a href="/spa"><div  class="listaslg">SPA</div></a></li>
					<li><a href="/otros"><div  class="listaslg">OTROS PRODUCTOS</div></a></li>
				</ul>
			</div>
			<a href="/blog"><button id="prensa" type="button" class="botonesmenuprenlg hoverbotonlg btn btn-default">PRENSA</button></a>
			<a href="/contacto"><button id="contacto" type="button" class="botonesmenucontlg hoverbotonlg btn btn-default">CONTACTO</button></a>
			<div class="redesmenu">
				<img class="facemenulg " src="<?=get_bloginfo('template_directory')?>/img/home/fb_menu.png">
				<img class="twimenulg " src="<?=get_bloginfo('template_directory')?>/img/home/twitter_menu.png">

			</div>

		</div><!--LG-->


		<div class="menucabecerasm bacism visible-sm ">

			<img class="logosm" src="<?=get_bloginfo('template_directory')?>/img/home/logo.png">
			<a href="index.php"><button id="inicio" type="button" class="botonesmenusm hoverbotonsm btn btn-default">INICIO</button></a>
			<a href="quienes.php"><button id="quien" type="button" class="botonesmenuquiensm hoverbotonsm btn btn-default">QUIENES SOMOS</button></a>
			<div class="btn-group botonesmenuprosm hoverbotonsm">
				<button type="button" class="botonesmenuprosm hoverbotonsm btn btn-default dropdown-toggle" data-toggle="dropdown">PRODUCTOS
					<img class="flepsm" src="<?=get_bloginfo('template_directory')?>/img/home/flecha_menu.png">
				</button>
				<ul class="dropdown-menu" role="menu">
					<li><a href="/bordados"><div  class="listaslg">BORDADOS</div></a></li>
					<li><a href="/dulces"><div  class="listaslg">DULCES</div></a></li>
					<li><a href="/henequen"><div  class="listaslg">HENEQUEN</div></a></li>
					<li><a href="/jipi"><div  class="listaslg">JIPI</div></a></li>
					<li><a href="/madera"><div  class="listaslg">MADERA</div></a></li>
					<li><a href="/mermelada"><div  class="listaslg">MERMELADA</div></a></li>
					<li><a href="/miel"><div  class="listaslg">MIEL</div></a></li>
					<li><a href="/munecas"><div  class="listaslg">MUÑECAS</div></a></li>
					<li><a href="/spa"><div  class="listaslg">SPA</div></a></li>
					<li><a href="/otros"><div  class="listaslg">OTROS PRODUCTOS</div></a></li>
				</ul>
			</div>
			<a href="/blog"><button id="prensa" type="button" class="botonesmenuprensm hoverbotonsm btn btn-default">PRENSA</button></a>
			<a href="/contacto"><button id="contacto" type="button" class="botonesmenucontsm hoverbotonsm btn btn-default">CONTACTO</button></a>
			<div class="redesmenu">
				<img class="facemenusm " src="<?=get_bloginfo('template_directory')?>/img/home/fb_menu.png">
				<img class="twimenusm " src="<?=get_bloginfo('template_directory')?>/img/home/twitter_menu.png">

			</div>

		</div><!--sm-->

		<div class="menucabecera bacixs visible-xs col-xs-12">


			<div id="dl-menu" class="dl-menuwrapper ">
			<img class="logoxs" src="<?=get_bloginfo('template_directory')?>/img/home/logo.png">
				<button class="dl-trigger mitigger">Open Menu</button>
				<ul class="dl-menu ulmenu">
					<li class="mili" ><a href="/home">INICIO</a></li>
					<li class="mili" ><a href="/quienes-somos">QUIENES SOMOS</a></li>
					
					<li  class="mili">
						<a href="#">PRODUCTOS</a>
						<ul class="dl-submenu">
							<li class="mili"><a href="/bordados"><div>BORDADOS</div></a></li>
							<li class="mili"><a href="/dulces"><div>DULCES</div></a></li>
							<li class="mili"><a href="/henequen"><div>HENEQUEN</div></a></li>
							<li class="mili"><a href="/jipi"><div>JIPI</div></a></li>
							<li class="mili"><a href="/madera"><div>MADERA</div></a></li>
							<li class="mili"><a href="/mermelada"><div>MERMELADA</div></a></li>
							<li class="mili"><a href="/miel"><div>MIEL</div></a></li>
							<li class="mili"><a href="/munecas"><div>MUÑECAS</div></a></li>
							<li class="mili"><a href="/spa"><div>SPA</div></a></li>
							<li class="mili"><a href="/otros"><div>OTROS PRODUCTOS</div></a></li>
						</ul>
					</li>
					<li class="mili" ><a href="/blog">PRENSA</a></li>
					<li class="mili" ><a href="/contacto">CONTACTO</a></li>
				</ul>
			</div><!-- /dl-menuwrapper -->
		</div><!-- /container -->


  <script src="<?=get_bloginfo('template_directory')?>/js/jquery.dlmenu.js"></script>

		<script>
			$(function() {
				$( '#dl-menu' ).dlmenu({
					animationClasses : { classin : 'dl-animate-in-3', classout : 'dl-animate-out-3' }
				});
			});
		</script>



	<!--xs-->
</div><!--container-->
