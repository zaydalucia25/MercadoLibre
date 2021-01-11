<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
	<meta charset="utf-8">
	<!-- Ícono del sitio -->
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<!-- Etiqueta para el ajuste del contenido en el tamaño de la pantalla del dispositivo -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Indicar la dirección base de las URL-->
	<base href="<?=base_url()?>"/>
	<!-- Estilos propios de MercadoLibre -->
	<link rel="stylesheet" type="text/css" href="css/home-desktop.css">
	<link rel="stylesheet" type="text/css" href="css/navigation-desktop.css" media="(min-width: 1024px)">
	<link rel="stylesheet" type="text/css" href="css/navigation-mobile.css" media="(max-width: 1023px)">
	<link rel="stylesheet" type="text/css" href="css/categorias.css">
	<!-- Cargar jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- Fuentes -->
	<link href="fonts/proximanova-light.woff2" as="font" type="font/woff2" data-head-react="true">
	<link href="fonts/proximanova-regular.woff2" as="font" type="font/woff2" data-head-react="true">
	<link href="fonts/proximanova-semibold.woff2" as="font" type="font/woff2" data-head-react="true">
	<!-- Cargar sistema.js -->
	<script src="js/sistema.js"></script>
	<!-- Cargar esas fuentes -->
	<style data-head-react="true">
		@font-face {
			font-family: 'Proxima Nova';
			font-weight: 300;
			font-display: swap;
			font-style: normal;
			src: 
				url(fonts/proximanova-light.woff2) format("woff2"),
				url(fonts/proximanova-light.woff) format("woff"), 
				url(fonts/proximanova-light.ttf) format("truetype")
		}
		@font-face {
			font-family: 'Proxima Nova';
			font-weight: 400;
			font-display: swap;
			font-style: normal;
			src: 
				url(fonts/proximanova-regular.woff2) format("woff2"),
				url(fonts/proximanova-regular.woff) format("woff"),
				url(fonts/proximanova-regular.ttf) format("truetype")
		}
		@font-face {
			font-family: 'Proxima Nova';
			font-weight: 600;
			font-display: swap;
			font-style: normal;
			src: 
				url(fonts/proximanova-semibold.woff2) format("woff2"),
				url(fonts/proximanova-semibold.woff) format("woff"),
				url(fonts/proximanova-semibold.ttf) format("truetype")
		}
	</style>
	<title>Simulación MercadoLibre</title>
</head>
<body>
	<!-- Encabezado  -->
	<input type="checkbox" id="nav-header-menu-switch"><!-- Abre el menú móvil -->
	<header role="banner" class="nav-header nav-header-plus">
		<div class="nav-bounds nav-bounds-with-cart nav-bounds-with-cp">
			<a class="nav-logo" href="" tabindex="2">Mercado Libre México - Donde comprar y vender de todo</a>
			<div class="nav-header-menu-wrapper">
				<label for="nav-header-menu-switch" aria-controls="nav-header-menu">
					<span class="hamburger-top-bread"></span>
					<span class="hamburger-patty"></span>
					<span class="hamburger-bottom-bread"></span>
				</label>
				<nav id="nav-header-menu-mobile" class="nav-header-menu-mobile-guest">
					<div id="nav-header-menu-mobile-content">
						<div id="nav-header-menu-mobile-user-info" class="nav-header-menu-mobile-guest">
							<div class="nav-header-menu-mobile-guest-logo">
								<svg class="nav-header-menu-mobile-guest-icon" width="28" height="35" xmlns="http://www.w3.org/2000/svg">
									<path d="M27.343 33.706l-1.356.64A13.25 13.25 0 0 0 14 26.75c-5.17 0-9.8 2.988-11.978 7.578l-1.356-.643A14.75 14.75 0 0 1 14 25.25a14.75 14.75 0 0 1 13.343 8.456zM14 21.75C8.063 21.75 3.25 16.937 3.25 11S8.063.25 14 .25 24.75 5.063 24.75 11 19.937 21.75 14 21.75zm0-1.5a9.25 9.25 0 1 0 0-18.5 9.25 9.25 0 0 0 0 18.5zm0-2.5v-1.5a5.25 5.25 0 1 0 0-10.5v-1.5a6.75 6.75 0 0 1 0 13.5z" fill="#BBB" fill-rule="nonzero"></path>
								</svg>
							</div>
					<?php
						// Si no hay sesion iniciada
						if($this->session->userdata('id') == NULL) {
					?>
							<h3 class="nav-header-menu-mobile-guest-title">Bienvenido</h3>
							<p class="nav-header-menu-mobile-guest-text">Ingresa a tu cuenta para ver tus compras, favoritos, etc.</p>
							<div class="nav-header-menu-mobile-guest-buttons">
								<a class="nav-mobile-button nav-mobile-button-filled" href="login">Ingresa</a>
								<a class="nav-mobile-button nav-mobile-button-outline" href="registration">Crea tu cuenta</a>
							</div>
					<?php
						// Fin Si no hay sesion iniciada
						}
						// Si hay sesion iniciada
						else {
					?>
							Hola
							<?php
								echo $this->session->userdata('nombre') != NULL ? $this->session->userdata('nombre') : $this->session->userdata('razonSocial');
							?>
							<h3 class="nav-header-menu-mobile-guest-title">
								Nivel 1 - Mercado Puntos
							<h3>
					<?php
						// Fin Si hay sesion iniciada
						}
					?>
						</div>
						<ul>
							<li>
								<a href="#">
									<i class="nav-icon-home"></i>
									<span>Inicio</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="nav-icon-deals-mobile"></i>
									<span>Ofertas</span>
			
								</a>
							</li>
							<li>
								<a href="#">
									<i class="nav-icon-history-mobile"></i>
									<span>Supermercado</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="nav-icon-history-mobile"></i>
									<span>Historial</span>
								</a>
							</li>
							
							<li>
								<a href="publicar">
									<i class="nav-icon-vender-mobile"></i>
									<span>Vender</span>
								</a>
							</li>
						</ul>
						<ul>
							<li>
								<a href="Categorias">
									<i class="nav-icon-categories-mobile"></i>
									<span>Categorías</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="nav-icon-stores-mobile"></i>
									<span>Tiendas oficiales</span>
								</a>
							</li>
						</ul>
						<ul>
							<li>
								<a href="#">
									<i class="nav-icon-help-mobile"></i>
									<span>Ayuda</span>
								</a>
							</li>
						</ul>
						<ul>
							<li>
								<a href="#" id="nav-header-menu-download-mobile">
									<i class="nav-icon-download-mobile"></i>
									<span>¡Compra y vende con la app!</span>
								</a>
							</li>
						</ul>
					</div>
				</nav>
			<?php
				// No mostrar estos elementos si $bOcultarElementos == true
				if(isset($bOcultarElementos) == false || $bOcultarElementos == false) {
			?>
				<nav id="nav-header-menu">
				<?php
					// Si no hay sesion iniciada
					if($this->session->userdata('id') == NULL) {
				?>
					<a href="registration" rel="nofollow" tabindex="8">Crea tu cuenta</a>
					<a href="login" rel="nofollow" tabindex="8">Ingresa</a>
					<a href="#" rel="nofollow" tabindex="8">Mis compras</a>
				<?php
					// Fin Si no hay sesion iniciada
					}
					// Si hay sesion iniciada
					else {
				?>
					<div class="nav-header-user">
						<label for="nav-header-user-switch">
							<span>
								<span class="nav-header-avatar-user" data-js="user-menu:nav-header-avatar-user"><i class="nav-icon-user"></i></span>
								<span class="nav-header-username">
								<?php
									echo $this->session->userdata('nombre') != NULL ? $this->session->userdata('nombre') : $this->session->userdata('razonSocial');
								?>
								</span>
								<span class="nav-header-username-chevron"></span>
							</span>
						</label>
					</div>
					<a href="Perfil?id=<?=$this->session->userdata('id')?>" rel="nofollow" tabindex="8">Mis datos</a>
					<a href="salir" rel="nofollow" tabindex="8">Salir</a>
					<a href="#" rel="nofollow" tabindex="8">Mis compras</a>
					<a href="#" rel="nofollow" tabindex="8">Favoritos</a>
					<a href="javascript:0" class="option-notifications notifications-widget modeless-box-trigger" rel="nofollow" tabindex="8" aria-owns="modeless-32" aria-haspopup="true" popup-hidden="true">
						<i class="nav-icon-notifications">
							<span>Notificaciones</span>
						</i>
						<span class="ml-count" style="display: none">0</span>
					</a>
				<?php
					// Fin Si hay sesion iniciada
					}
				?>
				</nav>
			<?php
				// Fin No mostrar estos elementos si $bOcultarElementos == true
				}
			?>
			</div>
	<?php
		// No mostrar estos elementos si $bOcultarElementos == true
		if(isset($bOcultarElementos) == false || $bOcultarElementos == false) {
	?>
			<form class="nav-search" action="busqueda" method="GET" role="search">
				<input type="text" class="nav-search-input" aria-label="Ingresa lo que quieras encontrar" name="nombre" placeholder="Buscar productos, marcas y más…" maxlength="120" autocapitalize="off" autocorrect="off" spellcheck="false" autocomplete="off" tabindex="3">
				<button type="submit" class="nav-search-btn" tabindex="4">
					<div role="img" aria-label="Buscar" class="nav-icon-search"></div>
				</button>
			</form>
			<div class="nav-menu">
				<ul class="nav-menu-list">
					<li class="nav-menu-item">
						<?php
						// Si no hay sesion iniciada
						if($this->session->userdata('id') == true) {
					?>
							<a href="Direcciones" class="nav-menu-cp nav-menu-cp-logged" data-js="cp" data-modal-action="true" tabindex="6">
							<span class="nav-menu-cp-send">Ingresa tu</span>
							<span class="nav-menu-link-cp"> código postal</span>
						</a>
					<?php
						// Fin Si no hay sesion iniciada
						}
						?>
						
					</li>
					<li class="nav-menu-item">
						<nav class="nav-categs nav-categs--with-details" hidden="hidden">
							<!-- Menú de la izquierda -->
							<section class="nav-categs-departments">
								<ul class="nav-categs-departments__list nav-categs-departments__list--dynamic">
									<li><a href="#" class="">Tecnología</a></li>
									<li><a href="#">Libros</a></li>
								</ul>
								<ul class="nav-categs-departments__list nav-categs-departments__list--static">
									<li><a href="#">Tiendas Oficiales</a></li>
									<li><a href="#">Supermercado</a></li>
								</ul>
								<ul class="nav-categs-departments__list nav-categs-departments__list--static">
									<li><a href="Categorias">Ver más categorías</a></li>
								</ul>
							</section>
							<!-- Submenú de la derecha -->
							<section class="nav-categs-detail" hidden="hidden">
								<header class="nav-categs-detail__header"><h1>Tecnología</h1></header>
								<div class="nav-categs-detail__body">
									<div class="nav-categs-detail__body-content">
										<article class="nav-categs-detail__categ">
											<h2 class="nav-categs-detail__title">
												<a href="#">Celulares y Telefonía</a>
											</h2>
											<ul class="nav-categs-detail__categ-list">
												<li><a href="#">Celulares y Smartphones</a></li>
												<li><a href="#">Accesorios para Celulares</a></li>
											</ul>
										</article>
										<article class="nav-categs-detail__categ">
											<h2 class="nav-categs-detail__title">
												<a href="#">Computación</a>
											</h2>
											<ul class="nav-categs-detail__categ-list">
												<li><a href="#">Laptops</a></li>
												<li><a href="#">Tablets y Accesorios</a></li>
												<li><a href="#">Impresión</a></li>
												<li><a href="#">Computadoras y Servidores</a></li>
											</ul>
										</article>
										<article class="nav-categs-detail__categ">
											<h2 class="nav-categs-detail__title">
												<a href="#">Consolas y Videojuegos</a>
											</h2>
											<ul class="nav-categs-detail__categ-list">
												<li><a href="#">Videojuegos</a></li>
												<li><a href="#">Maquinitas</a></li>
											</ul>
										</article>
									</div>
								</div>
							</section>
							<section class="nav-categs-detail" hidden="hidden">
								<header class="nav-categs-detail__header"><h1>Libros</h1></header>
								<div class="nav-categs-detail__body">
									<div class="nav-categs-detail__body-content">
										<article class="nav-categs-detail__categ">
											<h2 class="nav-categs-detail__title">
												<a href="#">Comics</a>
											</h2>
											<ul class="nav-categs-detail__categ-list">
												<li><a href="#">Manga</a></li>
											</ul>
										</article>
									</div>
								</div>
							</section>
						</nav>
						<a href="Categorias" class="nav-menu-categories-link" tabindex="7">Categorías</a>
					</li>
					<li class="nav-menu-item">
						<a href="#" class="nav-menu-item-link" rel="nofollow" tabindex="7">Ofertas<span class="nav-link-tag nav-link-tag--small">Nuevo</span></a>
					</li>
					<li class="nav-menu-item">
						<a href="#" class="nav-menu-item-link" rel="nofollow" tabindex="7">Historial</a>
					</li>
					<li class="nav-menu-item">
						<a href="#" class="nav-menu-item-link" rel="nofollow" tabindex="7">Tiendas oficiales</a>
					</li>
					<li class="nav-menu-item">
						<a href="publicar" class="nav-menu-item-link" rel="nofollow" tabindex="7">Vender</a></li><li class="nav-menu-item">
						<a href="#" class="nav-menu-item-link" rel="nofollow" tabindex="7">Ayuda</a>
					</li>
				</ul>
			</div>
			<a href="#" title="Carrito" class="nav-cart nav-cart-empty" id="nav-cart" tabindex="9">
				<i class="nav-icon-cart"></i>
				<span class="nav-icon-cart-quantity"></span>
			</a>
			<a href="Direcciones" class="nav-header-cp-anchor" data-js="cp" data-modal-action="true" tabindex="6">
				<span class="nav-menu-cp-send">Ingresa tu</span>
				<span class="nav-menu-link-cp"> código postal</span>
			</a>
		<?php
			// Fin No mostrar estos elementos si $bOcultarElementos == true
			}
		?>
		</div>
	</header>
	<!-- Contenido -->
	<main role="main" id="root-app">
		<!-- Mostrar contenido de otras vistas -->
			<?php
			// Si existe la variable strContenido
			if(isset($strContenido)) {
					echo $strContenido;
			}
			?>
	</main>
	<!-- Pie de página -->
<?php
	// No mostrar estos elementos si $bOcultarElementos == true
	if(isset($bOcultarElementos) == false || $bOcultarElementos == false) {
?>
	<input type="checkbox" id="nav-footer-access-switch" checked="">
	<div class="nav-footer-access">
		<label for="nav-footer-access-switch">Más información <i class="nav-icon-chevron-up"></i></label>
		<div class="nav-footer-access-content">
			<div class="nav-bounds">
				<div class="nav-footer-access-col">
					<h5 class="nav-footer-access-title">Acerca de</h5>
					<ul>
						<li>
							<a href="#">Mercado Libre</a>
						</li>
						<li>
							<a href="#">Investor relations</a>
						</li>
						<li>
							<a href="#">Tendencias</a>
						</li>
					</ul>
				</div>
				<div class="nav-footer-access-col">
					<h5 class="nav-footer-access-title">Otros sitios</h5>
					<ul>
						<li><a href="#">Developers</a></li>
						<li><a href="#">Mercado Pago</a></li>
						<li><a href="#">Mercado Shops</a></li>
						<li><a href="#">Mercado Envíos</a></li>
						<li><a href="#">Mercado Libre Publicidad</a></li>
					</ul>
				</div>
				<div class="nav-footer-access-col">
					<h5 class="nav-footer-access-title">Ayuda</h5>
					<ul>
						<li><a href="#">Comprar</a></li>
						<li><a href="publicar">Vender</a></li>
						<li><a href="#">Resolución de problemas</a></li>
						<li><a href="#">Centro de seguridad</a></li>
					</ul>
				</div>
				<div class="nav-footer-access-col">
					<h5 class="nav-footer-access-title">Redes sociales</h5>
					<ul>
						<li><a href="#">Twitter</a></li>
						<li><a href="#">Facebook</a></li>
						<li><a href="#">YouTube</a></li>
					</ul>
				</div>
				<div class="nav-footer-access-col">
					<h5 class="nav-footer-access-title">Mi cuenta</h5>
					<ul>
						<li><a href="#">Ingresa</a></li>
						<li><a href="publicar">Vender</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<?php
	// Fin No mostrar estos elementos si $bOcultarElementos == true
	}
?>
<?php
	// No mostrar estos footer si $bOcultarFooter == true
	if(isset($bOcultarFooter) == false || $bOcultarFooter == false) {
?>
	<footer role="contentinfo" class="nav-footer">
		<div class="nav-footer-user-info nav-bounds">
			<div class="nav-footer-info-wrapper">
				<div class="nav-footer-primaryinfo">
					<small class="nav-footer-copyright">Copyright ©&nbsp;1999-2019 DeRemate.com de México S. de R.L. de C.V.</small>
					<nav class="nav-footer-navigation">
						<a href="#">Trabaja con nosotros</a>
						<a href="#">Términos y condiciones</a>
						<a href="#">Políticas de privacidad</a>
						<a href="#">Ayuda</a>
					</nav>
				</div>
			</div>
			<div class="nav-footer-downloadapp-wrapper">
				<a class="nav-footer-downloadapp" target="_blank" id="footer-applink" href="#">
					<i class="nav-icon nav-icon-downloadapp"></i>
					<span>¡Descarga gratis la app de Mercado&nbsp;Libre!</span>
				</a>
			</div>
		</div>
		<a class="nav-footer-hp" href="#">Mercado Libre</a>
	</footer>
<?php
	// Fin No mostrar footer elementos si $bOcultarFooter == true
	}
?>
</body>


<!-- Código javascript-->
<script>
	// Funciones del menú Categorías
	function mostrarMenuCategorias(){
		$('.nav-categs').removeAttr('hidden');
	}
	function ocultarMenuCategorias(){
		$('.nav-categs').attr('hidden', true)
	}
	function mostrarSubcategorias(indice){
		$('.nav-categs').addClass('nav-categs--with-details');
		$('.nav-categs-detail').eq(indice).removeAttr('hidden');
	}
	function ocultarSubcategorias(){
		$('.nav-categs').removeClass('nav-categs--with-details');
		$('.nav-categs-detail').attr('hidden', true);
	}

	// Al cargar la página, mostrar el disclaimer
	$(document).ready(function(){
		$('#disclaimer').modal();
	});
	// Abrir el menú al pasar el cursor encima
	$('.nav-menu-categories-link').on('mouseenter', function(){
		mostrarMenuCategorias();
	});
	// Desplegar subcategorías al pasar el cursor encima
	$('.nav-categs-departments__list--dynamic > li').on('mouseenter', function(listaDesplegable){
		ocultarSubcategorias();
		// Remover los enlacesremarcados de azul
		$('.nav-categs').find('a').removeClass('nav-categs-departments__selected');
		// Remarcar de azul ese enlace (dentro del elemento <li>)
		$(this).find('a').addClass('nav-categs-departments__selected');
		// Mostrar las subcategorías que le pertenecen
		var indice = $(this).index();
		mostrarSubcategorias(indice);
	});
	// Evento al pasar el cursor sobre una opción no desplegable
	$('.nav-categs-departments__list--static').on('mouseenter', function(listaDesplegable){
		ocultarSubcategorias();
		// Remover los enlacesremarcados de azul
		$('.nav-categs').find('a').removeClass('nav-categs-departments__selected');
	});
	// Retirar el cursor del menú
	$('.nav-categs').on('mouseleave', function(){
		ocultarSubcategorias();
		ocultarMenuCategorias();
	});
</script>
</html>