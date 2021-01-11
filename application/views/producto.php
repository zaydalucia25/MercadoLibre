<?php 
	/* Simulación de los datos que se obtendrán de la base de datos */
	/*
	$producto = 
	[
		"id" => 2,
		"nombre" => "Nintendo Switch",
		"imagen" => "switch_lg.webp",
		"categoria" => "Categoría",
		"subcategoria" => "Subcategoría",
		"estado" => "Está nuevecito",
		"vendidos" => 9999,
		"precio" => 5999,
		"stock" => 2
	];
	*/
?>

<!-- Estilos de MercadoLibre -->
<link rel="stylesheet" type="text/css" href="css/producto.css">
<link rel="stylesheet" type="text/css" href="css/payments.css">

<!-- Categoría -->
<section class="vip-section-navigation  vip-bg-alt no-deep-links">
	<nav class="vip-container u-clearfix ">
	<div class="vip-navigation-breadcrumb">
		<a id="backToCateg" href="#" title="Volver al listado" class="navigation-back nav-path-return">Volver al listado</a>
		<ul class="vip-navigation-breadcrumb-list">
		<li>
			<?php if(!isset($producto->categoria)) $producto->categoria = 'Categorías'; ?>
			<a class="breadcrumb " href="Categorias" title=""><?=$producto->categoria?></a>
			<svg width="22" height="22" viewBox="0 0 18 18" class="ui-icon ui-icon--chevron-right"><g fill="#000" fill-rule="evenodd"><path d="M6.646 5.354l4 4 .354.353.707-.707-.353-.354-4-4L7 4.293 6.293 5z"></path><path d="M7.354 13.354l4-4L11.707 9 11 8.293l-.354.353-4 4-.353.354.707.707z"></path></g></svg>
		</li>
		<li>
			<a class="breadcrumb " href="#" title=""><?=$producto->subcategoria?></a>
			<svg width="22" height="22" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg" class="ui-icon ui-icon--chevron-right"><g fill="#000" fill-rule="evenodd"><path d="M6.646 5.354l4 4 .354.353.707-.707-.353-.354-4-4L7 4.293 6.293 5z"></path><path d="M7.354 13.354l4-4L11.707 9 11 8.293l-.354.353-4 4-.353.354.707.707z"></path></g></svg>
		</li>
		</ul>
	</div>
	</nav>
</section>
<!-- Contenido de la vista -->
<div class="vip-nav-bounds">
	<!-- Producto -->
	<div class="layout-main u-clearfix">
	<!-- Imagen del producto -->
	<div class="layout-col layout-col--left">
		<div class="vip-gallery-container vip-gallery-container--first-img">
			<div id="productGalleryCollection" class="vip-gallery" data-gallery="">
				<span class="product-gallery-nav" data-direction="next" style="display: none">
				<svg width="50" height="50" viewBox="0 0 18 18" class="ui-icon ui-icon--chevron--right"><g fill="#3483fa" fill-rule="evenodd"><path d="M6.646 5.354l4 4 .354.353.707-.707-.353-.354-4-4L7 4.293 6.293 5z"></path><path d="M7.354 13.354l4-4L11.707 9 11 8.293l-.354.353-4 4-.353.354.707.707z"></path></g></svg>
				</span>
				<div id="gallery_dflt" class="product-gallery thumbs-col-1 ch-enlarge ch-points-ltrt" style="min-height: 500px">
					<div class="gallery-content item-gallery__wrapper">
						<!-- Imágen -->
						<figure class="gallery-image-container first-img" data-side="right" data-align="top">
							<a href="img/<?=$producto->imagen?>" class="gallery-trigger ch-zoom-trigger ch-shownby-pointerenter ch-zoom-trigger-on" style="height: 420px; width: 500px;" target="_blank">
								<img src="img/<?=$producto->imagen?>" style="height: 420px; width: 500px;">
								<div class="ch-zoom-loading ch-hide" style="left: 138.5px; top: 201px;">
									<div class="ch-loading-large"></div>
									<p>Cargando zoom...</p>
								</div>
								<div class="ch-zoom-seeker ch-hide" style="width: 107px; height: 158px; left: 123.813px; top: 113.406px;"></div>
							</a>
						</figure>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Información del producto -->
	<div class="layout-col layout-col--right">
		<div class="layout-description-wrapper" data-js-desc-wrap="">
			<section class="short-description core-item short-description--static" data-js-short-desc="" data-fixed="" id="short-desc" style="min-height: 824px;">
				<div class="short-description__floating short-description__floating--cart-site short-description__floating--cart-item non-fixed">
					<!-- Cantidad vendida -->
					<dl class="vip-title-info">
						<div class="item-conditions">
							<?php
							if(!isset($producto->estado)) $producto->estado = 'Nuevo';
							if(!isset($producto->vendidos)) $producto->vendidos = 0; 
							echo $producto->estado." - ".$producto->vendidos." vendidos";
							?>
						</div>
					</dl>
					<!-- Nombre del producto -->
					<header class="item-title" data-js-item-title="">
						<h1 class="item-title__primary ">
							<?=$producto->nombre?>
						</h1>
					</header>
					<!-- Calificación (No deberíamos implementarlo)
					<article class="vip-rating core-review">
						<a rel="nofollow" class="iframe-modal " data-modal:url="#" data-modal:dinamic="true" data-modal:width="840" data-modal:height="400" data-modal:frameless="1" data-modal:style="new">
							<span class="star-container">
								<input type="radio" id="reviewHalfStar0" name="qualification" value="5" class="star-icon-hidden-input" disabled="">
								<label for="reviewHalfStar0" class="ch-icon-star star-icon star-icon-half"></label>
								<input type="radio" id="reviewFullStar0" name="qualification" value="4" class="star-icon-hidden-input" disabled="">
								<label for="reviewFullStar0" class="ch-icon-star star-icon star-icon-full"></label>
								<input type="radio" id="reviewFullStar1" name="qualification" value="3" class="star-icon-hidden-input" disabled="">
								<label for="reviewFullStar1" class="ch-icon-star star-icon star-icon-full"></label>
								<input type="radio" id="reviewFullStar2" name="qualification" value="2" class="star-icon-hidden-input" disabled="">
								<label for="reviewFullStar2" class="ch-icon-star star-icon star-icon-full"></label>
								<input type="radio" id="reviewFullStar3" name="qualification" value="1" class="star-icon-hidden-input" disabled="">
								<label for="reviewFullStar3" class="ch-icon-star star-icon star-icon-full"></label>
							</span>
							<span class="average-legend">
								<span>27</span>
							<span>opiniones</span>
							</span>
						</a>
					</article> -->
					<!-- Nombre del artículo-->
					<fieldset class="item-price ">
						<span class="price-tag">
							<span class="price-tag-symbol" content="<?=$producto->precio?>">$</span>
							<span class="price-tag-fraction"><?=$producto->precio?></span>
						</span>
					</fieldset>
					<!-- Disponible -->
					<div class="stock-information--available">
						<p class="stock-information--available--title">
							<?php 
								if($producto->stock > 0)
								{
									echo 'Stock disponible';
								}
								else
								{
									echo '*AGOTADO*';
								}
							?>
						</p>
					</div>
					<!-- Métodos de pago y envío -->
					<div class="buy-payment-and-shipping">
						<!-- Métodos de pago (¿Se debería incluír?) -->
						<fieldset class="vip-payment-method" data-component="paymentRow">
							<article class="pay-methods-row">
								<div class="ui-icon--content" data-block="installments-icon">
									<svg viewBox="0 0 100 100" role="presentation" class="ui-icon ui-icon--installments green">
										<svg viewBox="0 0 20 15" id="ui-icon--installments" xmlns="http://www.w3.org/2000/svg"><g transform="translate(1 1)" stroke-width="1.5" fill="none" fill-rule="evenodd"><path d="M0 4.222h18M3.166 9.498h4.166"></path><rect width="18" height="13" rx="2"></rect></g></svg>
									</svg>
								</div>
								<div class="payment-info">
									<p class="payment-installments free-installments">
										<span data-block="max-installment-recommended-text" class="highlight-info"></span>
										<span class="highlight-info" data-block="installments"><span data-block="installmentsQuantity">18</span> meses de</span>
										<strong class="ch-price" data-block="price">$ <?php echo sprintf("%d",$producto->precio/18);?>
										<sup><?php echo sprintf("%.0f", ($producto->precio%18)/18*100); ?></sup></strong>
										<span class="free-shipping" data-block="no-interest" data-state="visible"> sin intereses</span>
									</p>
									<p class="creditcards">
										<label data-block="methods">
											<span data-block="method" class="card payments-small _visa-small" alt="visa"></span>
											<span data-block="method" class="card payments-small _amex-small" alt="amex"></span>
											<span data-block="method" class="card payments-small _master-small" alt="master"></span>
										</label>
									</p>
								</div>
							</article>
						</fieldset>
						<!-- Envío a domicilio -->
						<fieldset class="vip-shipping-method " data-component="shippingRow">
							<article class="shipment-methods free-shipping">
								<div data-block="shipping-detail">

									<div class="ui-icon--content" data-block="shipping-icon">
										<svg viewBox="0 0 100 100" role="presentation" class="ui-icon ui-icon ui-icon--free-shipping green">
											<svg viewBox="0 0 21 17" id="ui-icon--free-shipping" xmlns="http://www.w3.org/2000/svg"><g stroke-width="1.5" fill="none" fill-rule="evenodd"><path d="M11.218 10.191V3.082C11.218 1.932 10.42 1 9.435 1H2.779C1.796 1 1 1.93 1 3.076v8.26c0 1.195.83 2.164 1.853 2.164h16.48V8.688L15.54 3.874h-3.566"></path><path d="M8.5 13.917a2.084 2.084 0 1 1-4.167 0 2.084 2.084 0 0 1 4.167 0zm7.5 0a2.084 2.084 0 1 1-4.167 0 2.084 2.084 0 0 1 4.167 0z" fill="#FFF"></path></g></svg>
										</svg>
									</div>
									<p class="shipping-method-title shipping-text" data-block="shipping-method-title">
										<span class=" green">Envío gratis a todo el país</span>
									</p>
									<p class="gray">Conoce los tiempos y las formas de envío</p>
								</div>
								<div>
									<a href="#">Calcular cuándo llega</a>
								</div>
							</article>
						</fieldset>
						<!-- Cantidad -->
						<fieldset class="vip-stock-quantity stock-quantity-text  quantity-selection">
							<div class="stock-string">
								<small><span class="stock-string-last-item">
									<?php 
									if($producto->stock > 1)
									{
										echo '('.$producto->stock.' disponibles)';
									}
									else if($producto->stock == 1)
									{
										echo '¡Único disponible!';
									}
									else{
										echo '*AGOTADO*';
									}
									?>
								</span></small>
							</div>
						</fieldset>
						<!-- Comprar o agregar al carrito -->
						<div class="vip-actions-wrapper  vip-actions-wrapper--cart-item">
							<div class="vip-actions item-actions u-clearfix">
								<div class="vip-action-primary">
									<input type="submit" data-js="vip-action-primary" form="productInfo" title="Comprar ahora <?=$producto->nombre?>" value="Comprar ahora" class="ui-button ui-button--primary without-quantity vip-narrow-button ch-shownby-pointerenter" id="BidButtonTop" tabindex="3" data-uid="3" aria-owns="ch-layer-3" aria-haspopup="true" aria-disabled="true" style="">
									<input type="hidden" name="token" value="">
									<input type="submit" data-js="vip-action-cart" title="Agregar al carrito <?=$producto->nombre?>" value="Agregar al carrito" class="ui-button ui-button--secondary without-quantity" tabindex="4" formaction="#">
								</div>
							</div>
						</div>
						<!---->
					</div>
				</div>
			</section>
		</div>
	</div>
</div>