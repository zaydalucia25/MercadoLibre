
<!-- Lista horizontal de productos -->

<section class="recommendations">
<div class="row container">
	<div class="section-header" style="margin-left: 50px;"><h1>Productos</h1></div>
	<div class="container">
		<div class="row">
					
						<?php foreach ($productos as $producto) { ?>
						<!-- Producto -->
						<div class="col-sm-6 col-md-4 col-lg-3" tabindex="-1" style="outline: none; width: 240px; float:left;">
							<div class="ui-item__wrapper price-digits-4__wrapper with-discount__wrapper with-installments__wrapper">
								<a href="Producto?id=<?=$producto->id?>" class="ui-item trigger-item with-installments">
									<div class="ui-item__image-container">
										<img src="img/<?=$producto->imagen?>" alt="<?=$producto->nombre?>">
									</div>
									<div class="ui-item__content">
										<div class="ui-item__price-block" align="center">
											<span class="price-tag ui-item__price">
												<span class="price-tag-symbol">$</span>
												<span class="price-tag-fraction"><?=$producto->precio?></span>
												<span class="price-tag-decimal-separator">.</span>
												<!--<span class="price-tag-cents">90</span>-->
											</span>
										</div>
										<p class="ui-item__title"><?=$producto->nombre?></p>
									</div>
								</a>
							</div>
						</div>
						<!-- Fin del producto-->
					<?php } ?>
					
				</div>
			</div>

	</div>
</section>