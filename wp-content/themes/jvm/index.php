<?php

/*
Theme Name: jvm
Theme URI: http://localhost:8888/
Description: Template explicitamente creado para el sitio jonathanviloriamendoza.info
Author: Jonathan Viloria Mendoza
Author URI: www.jonathanviloriamendoza.info
Template: jvm
Version: 1.0.0
*/

// Init - index.php - Pagina Principal3

?>

<!DOCTYPE html>
<html lang="es">
	<head>

	<!-- Meta -->
	<meta charset="UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Css -->
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.css"/>
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css"/>
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css"/>
	
	<!-- Icons -->

	<!-- Title Web Site -->
	<title>Self - Site</title>
	</head>
	<body>
	<!-- Asi que quieres saber como se realizo está página, adelante echa un vistazo. Pero si quieres tener una ideá clara de como se hizo visita está página http://jonathanviloriamendoza.info/codigointerno.html -->
	<!-- Boostrap Template -->

	<header>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">
					<em class="logo">JVM</em>
					<em class="description">@Linkvilory</em>
				</div>
				<div class="col-md-3 col-md-offset-6">
					<div class="social">
						<em><a href="https://mx.linkedin.com/pub/jonathan-viloria-mendoza/86/75b/936" target="_blank"><i class="fa fa-linkedin"></i></a></em>
						<em><a href="https://www.facebook.com/linkvilory" target="_blank"><i class="fa fa-facebook"></i></a></em>
						<em><a href="https://twitter.com/linkvilory" target="_blank"><i class="fa fa-twitter"></i></a></em>
					</div>
				</div>
			</div>
		</div>

	</header>

	<aside>

		<nav>

			<ul class="menu">

				<li class="active"><a href="/">Inicio</a></li>
				<li><a href="#bio">Bio</a></li>
				<li><a href="#proyectos">Proyectos</a></li>
				<li><a href="#codigo">Código</a></li>
				<li><a href="#interesante">Cosas interesantes</a></li>
				<li><a href="#contacto">Contacto</a></li>

			</ul>

		</nav>

	</aside>
	
	<section id="bio">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<h1>Acerca de mi</h1>
					<p>Mi nombre es Jonathan Viloria Mendoza soy Lic. en Administración en Tecnologías de la Información de la Universidad del Valle de México,
					 actualmente estoy estudiando una maestría en el Tecnológico de Monterrey Master in Information Technology (MIT). Me dedico a crear todo tipo
					 de aplicaciones, ya se Web (Front End/Back End), dispositivos móviles (IOS), tv (SmartTv) o de escritorio. Me gustan los retos por eso aunque
					 en la mayoría de las consultorias de Tecnologías te digan que nunca hay que decirle "SÍ" a todo lo que pide el cliente, a mi me gusta ir más allá.
					 Hay veces que la creatividad nos limita a crear nuevas y grandes cosas para este mundo, por eso nunca limito a mi cliente porque aunque parezca que
					 su idea sea la más loca del mundo, esta idéa puede que sea lo que nos hace falta, "Algo nuevo".</p>

					<h4>Bienvenido</h4>
					<p>Este blog es para servirle de ayuda a los que apenas estan empezando en este mundo fantástico llamado "Tecnologías de la Información", aquí encontrarás
					 problemas reales para distintos proyectos, en donde te aportaré mi forma de resolverlos y no soló eso, sino también te explicaré como es que se solucionó
					 con ejemplos de codigo del mismo proyecto. Aparte escribiré de temas importantes relacionados con la Maestría que estoy cursando, asi que el contenido será
					 relevante y nuevo. Explorá la página y diviertete, así como yo me he divertido haciendola.</p> 

				</div>
			</div>
		</div>
	</section>

	<section id="proyectos">

		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<h1>Sección proyectos</h1>
					<p>En esta sección encontrarás todos los proyectos o en su mayoría en los que he estado involucrado, algunos son sitios web, otros apps, etc.
					 Los proyectos son generales y especificos así que si algo te sirve adelante, puedes echar un vistazo.</p>
					<h4>Proyectos más recientes</h4>

					<div class="grid col-md-4">
						<div class="gridContainer">
							<div class="imgGridContainer">
								<img class="imgGrid" src="/wp-content/themes/jvm/assets/img/bg/correos-de-mexico.jpg" alt="" />
							</div>	
							<div class="captionGridContainer">
								<p class="tituloCaption">Caso de estudio: Cambio climático</p>
								<p class="descripcionCaption">Averigua unas de las tantas razones de porqué en México hay más basura.</p>
							</div>
						</div>
					</div>
					<div class="grid col-md-4">
						<div class="gridContainer">
							<div class="imgGridContainer">
								<img class="imgGrid" src="/wp-content/themes/jvm/assets/img/bg/correos-de-mexico.jpg" alt="" />
							</div>	
							<div class="captionGridContainer">
								<p class="tituloCaption">Caso de estudio: Cambio climático</p>
								<p class="descripcionCaption">Averigua unas de las tantas razones de porqué en México hay más basura.</p>
							</div>
						</div>
					</div>
					<div class="grid col-md-4">
						<div class="gridContainer">
							<div class="imgGridContainer">
								<img class="imgGrid" src="/wp-content/themes/jvm/assets/img/bg/correos-de-mexico.jpg" alt="" />
							</div>	
							<div class="captionGridContainer">
								<p class="tituloCaption">Caso de estudio: Cambio climático</p>
								<p class="descripcionCaption">Averigua unas de las tantas razones de porqué en México hay más basura.</p>
							</div>
						</div>
					</div>

					<div class="clearfix"></div>

					<input type="button" class="" name="proyectos" value="Ir a los proyectos" />

				</div>
			</div>
		</div>

	</section>

	<section id="codigo">

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					
					<h1>Código fuente</h1>
					<p>Aquí podrás descargar demos, templates y demás codigo fuente que te pueda servir.</p>
					<h4>Descarga lo último en lo que he estado trabajando</h4>

					<div class="grid col-md-4">
						<div class="gridContainer">
							<div class="imgGridContainer">
								<img class="imgGrid" src="/wp-content/themes/jvm/assets/img/bg/correos-de-mexico.jpg" alt="" />
							</div>	
							<div class="captionGridContainer">
								<p class="tituloCaption">Caso de estudio: Cambio climático</p>
								<p class="descripcionCaption">Averigua unas de las tantas razones de porqué en México hay más basura.</p>
							</div>
						</div>
					</div>
					<div class="grid col-md-4">
						<div class="gridContainer">
							<div class="imgGridContainer">
								<img class="imgGrid" src="/wp-content/themes/jvm/assets/img/bg/correos-de-mexico.jpg" alt="" />
							</div>	
							<div class="captionGridContainer">
								<p class="tituloCaption">Caso de estudio: Cambio climático</p>
								<p class="descripcionCaption">Averigua unas de las tantas razones de porqué en México hay más basura.</p>
							</div>
						</div>
					</div>
					<div class="grid col-md-4">
						<div class="gridContainer">
							<div class="imgGridContainer">
								<img class="imgGrid" src="/wp-content/themes/jvm/assets/img/bg/correos-de-mexico.jpg" alt="" />
							</div>	
							<div class="captionGridContainer">
								<p class="tituloCaption">Caso de estudio: Cambio climático</p>
								<p class="descripcionCaption">Averigua unas de las tantas razones de porqué en México hay más basura.</p>
							</div>
						</div>
					</div>

					<div class="clearfix"></div>

					<input type="button" class="" name="codigo" value="Bajar y compilar" />
				</div>
			</div>
		</div>

	</section>

	<section id="interesante">

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					
					<h1>Aprende algo nuevo</h1>
					<p>En esta sección trataré casos de estudio para reflexionar, noticias, y temas interesantes... Bueno almenos eso yo pienso, jeje.</p>
					
					<h4>Ultimas adquisiciones</h4>
					<div class="grid col-md-3">
						<div class="gridContainer">
							<div class="imgGridContainer">
								<img class="imgGrid" src="/wp-content/themes/jvm/assets/img/bg/correos-de-mexico.jpg" alt="" />
							</div>	
							<div class="captionGridContainer">
								<p class="tituloCaption">Caso de estudio: Cambio climático</p>
								<p class="descripcionCaption">Averigua unas de las tantas razones de porqué en México hay más basura.</p>
							</div>
						</div>
					</div>
					<div class="grid col-md-3">
						<div class="gridContainer">
							<div class="imgGridContainer">
								<img class="imgGrid" src="/wp-content/themes/jvm/assets/img/bg/correos-de-mexico.jpg" alt="" />
							</div>	
							<div class="captionGridContainer">
								<p class="tituloCaption">Caso de estudio: Cambio climático</p>
								<p class="descripcionCaption">Averigua unas de las tantas razones de porqué en México hay más basura.</p>
							</div>
						</div>
					</div>
					<div class="grid col-md-3">
						<div class="gridContainer">
							<div class="imgGridContainer">
								<img class="imgGrid" src="/wp-content/themes/jvm/assets/img/bg/correos-de-mexico.jpg" alt="" />
							</div>	
							<div class="captionGridContainer">
								<p class="tituloCaption">Caso de estudio: Cambio climático</p>
								<p class="descripcionCaption">Averigua unas de las tantas razones de porqué en México hay más basura.</p>
							</div>
						</div>
					</div>
					<div class="grid col-md-3">
						<div class="gridContainer">
							<div class="imgGridContainer">
								<img class="imgGrid" src="/wp-content/themes/jvm/assets/img/bg/correos-de-mexico.jpg" alt="" />
							</div>	
							<div class="captionGridContainer">
								<p class="tituloCaption">Caso de estudio: Cambio climático</p>
								<p class="descripcionCaption">Averigua unas de las tantas razones de porqué en México hay más basura.</p>
							</div>
						</div>
					</div>

					<div class="clearfix"></div>
					<input type="button" class="" name="temas" value="Ir a lo interesante" />
				</div>
			</div>
		</div>

	</section>

	<section id="contacto">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					
					<h1>Contactame</h1>
					<input type="text" name="nombre" value="" placeholder="Nombre/Apodo"/>
					<input type="text" name="correo" value="" placeholder="E-mail"/>
					<textarea name="mensaje" value="" placeholder="Escriba su mensaje"></textarea>

					<input type="button" class="" name="enviar" value="Enviar" />

				</div>
			</div>
		</div>

	</section>

	<footer>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3 col-md-offset-9">
					<div class="brand">
						<i class="fa fa-html5"></i>
						<i class="fa fa-css3"></i>
						<i class="fa fa-wordpress"></i>
					</div>	
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<span class="copyright">&copy; Creado por Jonathan Viloria Mendoza.</span>
				</div>
			</div>	
		</div>	

	</footer>

	<!-- Javascript Init -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-1.11.2.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.js"></script>

	</body>
</html>