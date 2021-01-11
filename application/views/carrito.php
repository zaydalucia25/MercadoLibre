<!-- Cargar estilos de la vista -->
<link rel="stylesheet" type="text/css" href="css/carrito_core.css">
<link rel="stylesheet" type="text/css" href="css/carrito.css">

<!-- Contenido -->   
<svg class="svg-hide">
    <symbol viewBox="0 0 16 16" id="ui-icon--cbt-outline">
        <path d="M6.114 7.813c.276-.275.21-.64-.136-.81L2.392 5.238c-.35-.172-.413-.545-.15-.822l.356-.375c.534-.562 1.589-.884 2.348-.72l4.638 1 1.39-1.37c.55-.546 1.615-1.13 2.378-1.272 0 0 .79-.274 1.083.026.293.3 0 1.097 0 1.097-.171.752-.76 1.811-1.314 2.364l-1.332 1.331 1.007 4.63c.165.76-.16 1.824-.717 2.364l-.374.363c-.28.273-.651.205-.821-.14l-1.767-3.58c-.172-.35-.531-.416-.815-.134l-1.87 1.854.036.859c.017.393-.146.967-.371 1.295l-.157.228c-.221.323-.598.325-.827.022l-1.41-1.861-1.86-1.41c-.311-.235-.304-.598.027-.819l.23-.153c.327-.217.909-.384 1.303-.373l.858.024 1.853-1.854z" stroke="#1BB04A" stroke-width="1.5" fill="none"></path>
    </symbol>
    <symbol viewBox="0 0 28 17" id="ui-icon--chevron">
        <path d="M26.086 2L13.543 14.513 1 2" stroke-width="3" stroke="#CBCBCB" fill="none"></path>
    </symbol>
    <symbol viewBox="0 0 16 16" id="ui-icon--exclamation">
        <g fill="none" fill-rule="evenodd">
            <circle fill="#195FF4" cx="8" cy="8" r="8"></circle>
            <path fill="#FFF" d="M7 12h2l-.25-5h-1.5z"></path>
            <circle fill="#FFF" cx="8" cy="5" r="1"></circle>
        </g>
    </symbol>
    <symbol viewBox="0 0 56 21" id="ui-icon--full">
        <path d="M3.545 0L0 10.857h5.91L3.544 19 13 6.786H7.09L10.637 0zm14.747 14.778H15.54l2.352-11.265h7.824l-.528 2.533h-5.072l-.352 1.757h4.944l-.528 2.533h-4.96l-.928 4.442zm13.32.202c-3.28 0-4.896-1.655-4.896-4.02 0-.185.048-.573.08-.742l1.408-6.705h2.8l-1.392 6.637c-.016.085-.048.27-.048.473.016.929.688 1.824 2.048 1.824 1.472 0 2.224-.98 2.496-2.297L35.5 3.513h2.784L36.892 10.2c-.576 2.736-1.984 4.78-5.28 4.78zm14.232-.202h-7.04l2.352-11.265h2.752L42.1 12.244h4.272l-.528 2.534zm9.4 0h-7.04l2.352-11.265h2.752L51.5 12.244h4.272l-.528 2.534z" fill="#00A650" fill-rule="evenodd"></path>
    </symbol>
    <symbol viewBox="0 0 34 34" id="ui-icon--info">
        <g transform="translate(1 1)" fill-rule="evenodd">
            <ellipse stroke="#3483FA" stroke-width="2" cx="16" cy="16" rx="16" ry="16"></ellipse>
            <path d="M15.83 20.424c.792 0 1.43.638 1.43 1.43 0 .792-.638 1.43-1.43 1.43-.77 0-1.43-.638-1.43-1.43 0-.792.66-1.43 1.43-1.43zM14.686 8.5h2.31v10.626h-2.31V8.5z" fill="#3483FA"></path>
        </g>
    </symbol>
    <symbol viewBox="0 0 50 70" id="ui-icon--map-pin">
        <path d="M25.61 0C11.179 0 0 10.955 0 24.138 0 42.875 25 70 25.61 70 25 70 50 42.875 50 24.138 50 10.955 38.821 0 25.61 0zm0 33.793c-5.659 0-9.756-4.055-9.756-8.448 0-5.6 4.097-9.655 9.756-9.655 4.439 0 8.536 4.055 8.536 9.655 0 4.393-4.097 8.448-8.536 8.448z" fill="#3483FA" fill-rule="evenodd"></path>
    </symbol>
    <symbol viewBox="0 0 18 12" id="ui-icon--payment-outline">
        <g fill="none" fill-rule="evenodd">
            <path d="M17 0H1C.45 0 0 .45 0 1v10c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V1c0-.55-.45-1-1-1zM1.5 10.5h15v-9h-15v9z" fill="#00B238"></path>
            <path d="M.906 4.302h15.625M3.281 8.177h3.75" stroke="#00B238" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
        </g>
    </symbol>
    <symbol viewBox="0 0 17 12" id="ui-icon--shipping-outline">
        <g fill="none" fill-rule="evenodd">
            <path d="M9.389 7.406V2.258C9.389 1.425 8.714.75 7.88.75H2.254C1.423.75.75 1.423.75 2.253v5.982c0 .865.702 1.567 1.567 1.567H16.25V6.317l-3.207-3.486h-3.015" stroke="#00B238" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M5.992 9.696a1.48 1.48 0 1 1-2.961 0 1.48 1.48 0 0 1 2.961 0" fill="#FFF"></path>
            <path d="M5.992 9.696a1.48 1.48 0 1 1-2.961 0 1.48 1.48 0 0 1 2.961 0z" stroke="#00B238" stroke-width="1.5"></path>
            <path d="M14.328 9.696a1.48 1.48 0 1 1-2.962 0 1.48 1.48 0 0 1 2.962 0" fill="#FFF"></path>
            <path d="M14.328 9.696a1.48 1.48 0 1 1-2.962 0 1.48 1.48 0 0 1 2.962 0z" stroke="#00B238" stroke-width="1.5"></path>
        </g>
    </symbol>
</svg>

<div id="app-container" class="cart__list ">
    <div>
        <div class="top-disclaimers" data-region="top-disclaimers"></div>

        <div data-component="index" class="cart__list-items u-clearfix">
            <div data-region="tabs" class="cart__tabs">
                <div>
                    <ul class="ui-tabs" role="tablist" data-tabs="">
                        <li data-tab="cart" class="ui-tabs__item  ui-tabs__item--selected "><a class="ui-tabs__item-link" href="/gz/cart" role="tab">Carrito (1)</a></li>
                        <li data-tab="saved" class="ui-tabs__item "><a class="ui-tabs__item-link" href="/gz/cart/saved" role="tab">Guardados (0)</a></li>
                    </ul>
                </div>
            </div>
            <div data-region="disclaimers">
            </div>

            <div data-region="items" class="cart__items-container" role="tabpanel" itemscope="" itemtype="">
                <!-- Carrito vacío -->
                <div>
                    <div>
                        <div class="cart__placeholder">
                            <h3 class="cart__placeholder-title">Tu carrito está vacío</h3>
                            <p class="cart__placeholder-subtitle">¿No sabes qué comprar? ¡Miles de productos te esperan!
                                <a href="//www.mercadolibre.com.mx" title="Mercado Libre"></a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Carrito con artículos -->
                <div>
                    <div>
                        <div data-component="item-cart" class="ui-panel" itemprop="itemListElement" itemscope="" itemtype="">
                            <div class="ui-panel__content">
                                <article class="item  ">
                                    <div data-region="item-loading"></div>
                                    <figure class="item__image item__image--dimmer">
                                        <a itemprop="url" href="#">
                                            <img itemprop="image" src="https://http2.mlstatic.com/nintendo-switch-32gb-standard-rojo-neon-azul-neon-y-negro-D_Q_NP_883371-MLA32731749246_112019-R.webp" alt="Nintendo Switch 32gb Standard Rojo Neón, Azul Neón Y Negro" width="48" height="48" data-srcset="https://http2.mlstatic.com/nintendo-switch-32gb-standard-rojo-neon-azul-neon-y-negro-D_Q_NP_883371-MLA32731749246_112019-Z.webp 2x" srcset="https://http2.mlstatic.com/nintendo-switch-32gb-standard-rojo-neon-azul-neon-y-negro-D_Q_NP_883371-MLA32731749246_112019-Z.webp 2x">
                                        </a>
                                    </figure>
                                    <div class="item__information">
                                        <div class="u-float-left item__description">
                                            <h2 class="item__title" itemprop="name">
                                                <a class="item__title--link" href="https://articulo.mercadolibre.com.mx/MLM-744247094-nintendo-switch-32gb-standard-rojo-neon-azul-neon-y-negro-_JM" itemprop="url">Nintendo Switch 32gb Standard Rojo Neón, Azul Neón Y Negro</a>
                                            </h2>

                                            <div class="item__information-main u-clearfix">
                                                <p class="item__information-detail item__shipping-info  u-float-left ">
                                                    <span class="item__shipping-info__label">Envío gratis</span>
                                                    <svg viewBox="0 0 100 100" role="presentation" class="ui-icon ui-icon--full ">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ui-icon--full"></use>
                                                    </svg>

                                                </p>
                                            </div>
                                        </div>
                                        <div data-quantity="container" class="ui-quantity-selector u-float-left">
                                            <div class="ui-quantity-selector__container">
                                                <form class="u-float-left" action="/gz/cart/item/quantity?id=MLM744247094" method="POST">
                                                    <input data-quantity="pop" type="submit" value="-" class="u-button-reset ui-quantity-selector__button" name="pop" disabled="">
                                                </form>

                                                <input autocomplete="off" data-quantity="input" type="tel" value="1" class="u-button-reset ui-quantity-selector__input" name="quantity">

                                                <form class="u-float-left" action="/gz/cart/item/quantity?id=MLM744247094" method="POST">
                                                    <input data-quantity="push" type="submit" value="+" class="u-button-reset ui-quantity-selector__button" name="push">
                                                </form>
                                                <div class="cart-inline-loading__quantity-selector" data-region="quantity-loading"></div>
                                            </div>
                                            <div data-quantity="error" class="ui-quantity-selector__stock">7 disponibles</div>
                                        </div>
                                        <div class="item__price">
                                            <span class="price-tag item__price-tag" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                <meta itemprop="price" content="7,448">
                                                <span class="price-tag-symbol" itemprop="priceCurrency">$</span>
                                                <span class="price-tag-fraction">7,448</span>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="item__actions">
                                        <ul class="item__action-menu">

                                            <li class="ui-menu__element">
                                                <a data-action="more-seller-items" class=" item__action-menu-link " href="https://listado.mercadolibre.com.mx/_Envio_MercadoEnvios_Tienda_ventronic">Más productos del vendedor</a>
                                            </li>
                                            <li class="ui-menu__element">
                                                <a data-action="buy-item" class=" item__action-menu-link " href="/gz/checkout/cart/buy?items=MLM744247094-Q1&amp;context=catalog_listing_from_mycart&amp;siteId=MLM">Comprar ahora</a>
                                            </li>
                                            <li class="ui-menu__element">
                                                <form data-action="save-for-later" action="/gz/cart/saved/item" method="POST">
                                                    <input type="hidden" name="id" value="MLM744247094">
                                                    <input type="submit" class="u-button-reset  u-link item__action-menu-link " value="Guardar para después">
                                                </form>
                                            </li>
                                            <li class="ui-menu__element">
                                                <form data-action="remove-from-cart" action="/gz/cart/item/delete" method="POST">
                                                    <input type="hidden" name="id" value="MLM744247094">
                                                    <input type="submit" class="u-button-reset  u-link item__action-menu-link " value="Eliminar">
                                                </form>
                                            </li>
                                        </ul>
                                    </div>

                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-region="summary" class="cart__summary">
                <div>
                    <footer class="summary summary--static" aria-label="Resumen de tu carrito" data-summary="footer">
                        <div class="summary__row-content">
                            <div class="summary__row summary__row--shipping summary__row--subtotal">
                                <span class="summary__label">Producto</span>
                                <span class="summary__price">
                                    <span class="price-tag " itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                        <meta itemprop="price" content="7,448.00">

                                        <span class="price-tag-symbol" itemprop="priceCurrency">$</span>
                                        <span class="price-tag-fraction">7,448</span>
                                        <span class="price-tag-decimal-separator">.</span>

                                        <span class="price-tag-cents">00</span>
                                    </span>
                                </span>
                            </div>
                            <div class="summary__row summary__row--shipping summary__row--shipping-label">
                                <span class="summary__label ">
                                <div class="ui-dropdown">
                                    <div class="cart-inline-loading__dropdown" data-region="dropdown-loading"></div>
                                    <a href="#" class="ui-dropdown__link" data-summary="dropdown-trigger">
                                        <span class="ui-dropdown__label">
                                            ¿Cuál es el costo de envío?
                                        </span>
                                    </a>
                                    <span data-region="dropdown-content"></span>
                                </div>
                                </span>
                                    <span class="summary__price">
                                        <span class="price-tag " itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                            <meta itemprop="price" content="">
                                            <span class="price-tag-symbol" itemprop="priceCurrency"></span>
                                            <span class="price-tag-fraction"></span>
                                        </span>
                                    </span>
                                </div>
                        </div>

                        <div class="summary__row summary__row--total">
                            <span class="summary__label">Total</span>
                                <span class="summary__price">
                                <span class="price-tag " itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                    <meta itemprop="price" content="7,448.00">
                                    <span class="price-tag-symbol" itemprop="priceCurrency">$</span>
                                    <span class="price-tag-fraction">7,448</span>
                                    <span class="price-tag-decimal-separator">.</span>
                                    <span class="price-tag-cents">00</span>
                                </span>
                            </span>
                        </div>
                        <div class="summary__actions">
                            <a href="/gz/checkout/cart/buy?items=MLM744247094-Q1&amp;context=catalog_listing_from_mycart&amp;siteId=MLM" data-summary="buy-action" class="ui-button ui-button--primary">Continuar compra</a>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</div>