<?php 
// Si no hay sesión iniciada, redirigir a la pantalla de inicio de sesión
if($this->session->userdata('id') == NULL)
{
    redirect('login');
}
?>
<!-- Cargar estilos de la vista -->
<link rel="stylesheet" type="text/css" href="css/publicar_chico.css">
<link rel="stylesheet" type="text/css" href="css/beta1762109613-6c79e3e4c18d79b25751ce66c7b57206.css">
<link rel="stylesheet" type="text/css" href="css/publicar_beta.css">
<link rel="stylesheet" type="text/css" href="css/publicar_beta2.css">
<!-- Contenido de la vista -->
<div class="nav-main-content nav-bounds ch-wizard ">
    <div class="ch-box-container">

        <form id="continuar-a-paso-2" action="#" method="post" class="paso-publicacion ch-form">

            <!-- 4 pasos -->
            <ol class="ch-wizard-breadcrumb ch-steps-four">
                <li class="ch-wizard-current">Elige qué quieres publicar</li>
                <li class="ch-wizard-step">Categoría del producto</li>
                <li class="ch-wizard-step">Detalles del publicación</li>
                <li class="ch-wizard-step">Ingresa precio y cantidad</li>
            </ol>
            <!-- 
                <input type="hidden" name="sellType" value="list" id="sellType">
                <input type="hidden" name="step" value="QFC" id="step">
                <input type="hidden" name="profile" value="NEW" id="profile">
                <input type="hidden" name="vertical" value="STD" id="vertical">
                <input type="hidden" name="site" value="MLM" id="site">
                <input type="hidden" name="customer" value="501937839" id="customer">
                <input type="hidden" name="session_id" value="1576650673920-1128659-501937839" id="session_id">
                <input type="hidden" name="credit" value="" id="credit">
                <input type="hidden" name="server_address" value="10.34.38.41" id="server_address">
                <input type="hidden" name="server_name" value="10.34.38.41" id="server_name">
                <input type="hidden" name="environment" value="production" id="environment">
                <input type="hidden" name="maxLogs" value="5" id="maxLogs">
            -->

            <nav class="hub">

                <div class="hub-vertical hub-std ch-box-lite hub-active">
                    Productos <span class="no-wrap">y otros</span>
                    <span class="hub-std"></span>
                </div>

            </nav>

            <input type="hidden" value="true" name="noCsTip" data-modal="modal">

            <div class="ch-box-lite title-price title-price-on">

                <h3 class="title-price-header">Escribe un título para tu publicación. Cuanta más información, ¡mejor!</h3>

                <div class="ch-form title">
                    <label class="title-price-label" for="title">Título:</label>
                    <input type="text" id="title" data-js="title" size="60" maxlength="60" name="title.title" autofocus="" placeholder="Ej.: Camisa Lacoste Hombre Manga Larga" value="" class="title-countdown" required="true">

                    <!-- <p class="ch-countdown ch-form-hint" id="ch-countdown-message-2">Restan 60 caracteres.</p> -->
                </div>

                <div class="ch-form submit">
                    <input type="submit" class="ch-btn" name="_eventId_nextSTD" value="Continuar">
                </div>
            </div>
            <!--
            <p class="ch-form-hint hub-bottomText">
                Asegúrate de que tu publicación cumpla con las <a href="#" target="_blank">Políticas de MercadoLibre</a>.
            </p>
            -->
        </form>

        <form id="continuar-a-paso-3" hidden action="#" method="post" class="paso-publicacion">
            <!-- Menú  -->
            <ol class="ch-wizard-breadcrumb ch-steps-four">
                <li><a href="0">Elige qué quieres publicar</a></li>
                <li class="ch-wizard-current">Categoría del producto</li>
                <li class="ch-wizard-step">Detalles del producto</li>
                <li class="ch-wizard-step">Ingresa precio y cantidad</li>
            </ol>

            <div class="category-tree">

                <div class="category-column category-preselected hub-std">
                    <h3>Productos y Otros</h3>
                    <span class="hub-std"></span>
                    <div class="gradient"></div>
                </div>

                <div class="category-container verticalName platform-ML" data-js="category-container-all">

                    <div class="category-column">
                        <select id="opcion-categoria" name="categoryTree.categId" required="" title="Elige una categoría" size="20" data-path="">

                            <option class="category-option " value="MLM1747">
                                Tecnología
                            </option>

                            <option class="category-option " value="MLM1403">
                                Libros
                            </option>                           

                            <option class="category-option " value="MLM1953">
                                Otras Categorías
                            </option>
                        </select>
                    </div>

                    <div id="tarjeta-subcategoria" class="category-column" style="display: none;">
                        <select id="opcion-subcategoria" name="categoryTree.categId" required="" title="Elige una categoría" size="20" data-path="Otras Categorías">

                            <option class="category-option " value="MLM2818">
                                Celulares y Smartphone
                            </option>

                            <option class="category-option " value="MLM2335">
                                Accesorios para Celulares
                            </option>

                            <option class="category-option " value="MLM406028">
                                Videojuegos
                            </option>

                            <option class="category-option " value="MLM194494">
                                Maquinitas
                            </option>

                            <option class="category-option " value="MLM1740">
                                Laptops
                            </option>

                            <option class="category-option " value="MLM189470">
                                Tablets y Accesorios
                            </option>

                            <option class="category-option " value="MLM191279">
                                Impresión
                            </option>

                            <option class="category-option " value="MLM433022">
                                Computadoras y Servidores
                            </option>

                            <option class="category-option " value="MLM3530">
                                Otros
                            </option>

                        </select>
                    </div>

                    <div id="tarjeta-continuar-a-paso-3" class="category-column actions lastField " style="margin-top: 0; display: none;">

                        <input type="hidden" name="next" value="" id="next">

                        <input type="hidden" id="categId" name="categoryTree.categId" value="MLM3530">

                        <input type="hidden" id="allCategs" name="categoryTree.showAll" value="">

                        <input type="hidden" id="adultContent" name="adultContent" value="false">

                        <span class="ch-icon-ok-sign"></span>
                        <p>¡Listo!</p>

                        <input type="submit" name="_eventId_next" value="Continuar" class="ch-btn ch-btn-large">

                    </div>

                </div>

            </div>
        </form>

        <form id="continuar-a-paso-4" hidden action="#" method="post" class="ch-form form-description paso-publicacion" enctype="multipart/form-data">

            <ol class="ch-wizard-breadcrumb ch-steps-four">
                <li><a href="0">Elige qué quieres publicar</a></li>
                <li><a href="1">Categoría del producto</a></li>
                <li class="ch-wizard-current">Detalles del producto</li>
                <li class="ch-wizard-step">Ingresa precio y cantidad</li>
            </ol>
            <!--
            <input type="hidden" name="sellType" value="list" id="sellType">
            <input type="hidden" name="step" value="ID" id="step">
            <input type="hidden" name="profile" value="NEW" id="profile">
            <input type="hidden" name="vertical" value="STD" id="vertical">
            <input type="hidden" name="site" value="MLM" id="site">
            <input type="hidden" name="customer" value="501937839" id="customer">
            <input type="hidden" name="session_id" value="1576653463981-1623515-501937839" id="session_id">
            <input type="hidden" name="credit" value="" id="credit">
            <input type="hidden" name="server_address" value="10.32.150.194" id="server_address">
            <input type="hidden" name="server_name" value="10.32.150.194" id="server_name">
            <input type="hidden" name="environment" value="production" id="environment">
            <input type="hidden" name="maxLogs" value="5" id="maxLogs">
            -->

            <fieldset id="PictureGroup">
                <legend class="null">Ingresa una foto de tu producto</legend>
                <!--
                <input type="hidden" id="picture_resize_width" value="1200">
                <input type="hidden" id="picture_resize_height" value="1200">
                <input type="hidden" id="picture_resize_quality" value="90">
                <input type="hidden" id="picture_mb_limit" value="15">
                <input type="hidden" id="picture_max_pictures" value="10">
                <input type="hidden" id="picture_errors" value="false">
                <input type="hidden" id="picture_poor_quality_id" value="">
                -->
                <!--
                <input type="hidden" id="pictureMessages" data-error-size="Solo puedes cargar fotos menores a 15 MB." data-error-generic="La foto debe ser .jpg, .jpeg, .png o .gif (sin animación) y pesar menos de 15 MB." data-alert="Usaste todas las fotos disponibles, asegúrate de subir las que mejor represente tu producto" data-error-api="No pudimos subir la foto, reintenta en unos minutos." value="true">
                -->

                <p class="picture-full-version">
                    Muéstralo en detalle, con fondo blanco y bien iluminado. No incluyas logos, banners ni textos promocionales.
                </p>
                <!--
                <div class="picture-info-layer ch-hide">
                    <p>Haz clic sobre una foto y arrástrala a la posición que quieras.</p>

                    <img src="https://http2.mlstatic.com/secure/sell/assets/img_draganddrop_detail_core-0aa4dc5c08b3cbbb4c2d65a8d6a36ce9.png">

                    <div class="action">
                        <input type="button" class="ch-btn ch-btn-small ch-btn-skin" value="Ok, ¡entendido!">
                    </div>
                </div>
                -->

                <div class="picture-uploader   ">

                    <input type="hidden" id="allPictures" name="allPictures" data-allpictures="" value="[{&quot;class&quot;:&quot;com.mercadolibre.sell.dto.ItemPicture&quot;,&quot;json&quot;:{&quot;id&quot;:&quot;901851-MLM40171626390_122019&quot;,&quot;dominant_color&quot;:null,&quot;max_size&quot;:&quot;740x810&quot;,&quot;crop&quot;:{&quot;y_size&quot;:null,&quot;x_size&quot;:null,&quot;y_offset&quot;:null,&quot;x_offset&quot;:null},&quot;variations&quot;:[{&quot;url&quot;:&quot;http://mlm-s1-p.mlstatic.com/901851-MLM40171626390_122019-F.jpg&quot;,&quot;secure_url&quot;:&quot;https://mlm-s1-p.mlstatic.com/901851-MLM40171626390_122019-F.jpg&quot;,&quot;size&quot;:&quot;740x810&quot;},{&quot;url&quot;:&quot;http://mlm-s1-p.mlstatic.com/901851-MLM40171626390_122019-O.jpg&quot;,&quot;secure_url&quot;:&quot;https://mlm-s1-p.mlstatic.com/901851-MLM40171626390_122019-O.jpg&quot;,&quot;size&quot;:&quot;456x500&quot;},{&quot;url&quot;:&quot;http://mlm-s1-p.mlstatic.com/901851-MLM40171626390_122019-C.jpg&quot;,&quot;secure_url&quot;:&quot;https://mlm-s1-p.mlstatic.com/901851-MLM40171626390_122019-C.jpg&quot;,&quot;size&quot;:&quot;400x400&quot;},{&quot;url&quot;:&quot;http://mlm-s1-p.mlstatic.com/901851-MLM40171626390_122019-V.jpg&quot;,&quot;secure_url&quot;:&quot;https://mlm-s1-p.mlstatic.com/901851-MLM40171626390_122019-V.jpg&quot;,&quot;size&quot;:&quot;320x320&quot;},{&quot;url&quot;:&quot;http://mlm-s1-p.mlstatic.com/901851-MLM40171626390_122019-E.jpg&quot;,&quot;secure_url&quot;:&quot;https://mlm-s1-p.mlstatic.com/901851-MLM40171626390_122019-E.jpg&quot;,&quot;size&quot;:&quot;280x280&quot;},{&quot;url&quot;:&quot;http://mlm-s1-p.mlstatic.com/901851-MLM40171626390_122019-P.jpg&quot;,&quot;secure_url&quot;:&quot;https://mlm-s1-p.mlstatic.com/901851-MLM40171626390_122019-P.jpg&quot;,&quot;size&quot;:&quot;250x250&quot;},{&quot;url&quot;:&quot;http://mlm-s1-p.mlstatic.com/901851-MLM40171626390_122019-A.jpg&quot;,&quot;secure_url&quot;:&quot;https://mlm-s1-p.mlstatic.com/901851-MLM40171626390_122019-A.jpg&quot;,&quot;size&quot;:&quot;228x249&quot;},{&quot;url&quot;:&quot;http://mlm-s1-p.mlstatic.com/901851-MLM40171626390_122019-Y.jpg&quot;,&quot;secure_url&quot;:&quot;https://mlm-s1-p.mlstatic.com/901851-MLM40171626390_122019-Y.jpg&quot;,&quot;size&quot;:&quot;210x210&quot;},{&quot;url&quot;:&quot;http://mlm-s1-p.mlstatic.com/901851-MLM40171626390_122019-N.jpg&quot;,&quot;secure_url&quot;:&quot;https://mlm-s1-p.mlstatic.com/901851-MLM40171626390_122019-N.jpg&quot;,&quot;size&quot;:&quot;200x200&quot;},{&quot;url&quot;:&quot;http://mlm-s1-p.mlstatic.com/901851-MLM40171626390_122019-T.jpg&quot;,&quot;secure_url&quot;:&quot;https://mlm-s1-p.mlstatic.com/901851-MLM40171626390_122019-T.jpg&quot;,&quot;size&quot;:&quot;160x160&quot;},{&quot;url&quot;:&quot;http://mlm-s1-p.mlstatic.com/901851-MLM40171626390_122019-Z.jpg&quot;,&quot;secure_url&quot;:&quot;https://mlm-s1-p.mlstatic.com/901851-MLM40171626390_122019-Z.jpg&quot;,&quot;size&quot;:&quot;160x160&quot;},{&quot;url&quot;:&quot;http://mlm-s1-p.mlstatic.com/901851-MLM40171626390_122019-G.jpg&quot;,&quot;secure_url&quot;:&quot;https://mlm-s1-p.mlstatic.com/901851-MLM40171626390_122019-G.jpg&quot;,&quot;size&quot;:&quot;120x120&quot;},{&quot;url&quot;:&quot;http://mlm-s1-p.mlstatic.com/901851-MLM40171626390_122019-I.jpg&quot;,&quot;secure_url&quot;:&quot;https://mlm-s1-p.mlstatic.com/901851-MLM40171626390_122019-I.jpg&quot;,&quot;size&quot;:&quot;90x90&quot;},{&quot;url&quot;:&quot;http://mlm-s1-p.mlstatic.com/901851-MLM40171626390_122019-S.jpg&quot;,&quot;secure_url&quot;:&quot;https://mlm-s1-p.mlstatic.com/901851-MLM40171626390_122019-S.jpg&quot;,&quot;size&quot;:&quot;90x90&quot;},{&quot;url&quot;:&quot;http://mlm-s1-p.mlstatic.com/901851-MLM40171626390_122019-R.jpg&quot;,&quot;secure_url&quot;:&quot;https://mlm-s1-p.mlstatic.com/901851-MLM40171626390_122019-R.jpg&quot;,&quot;size&quot;:&quot;70x70&quot;},{&quot;url&quot;:&quot;http://mlm-s1-p.mlstatic.com/901851-MLM40171626390_122019-M.jpg&quot;,&quot;secure_url&quot;:&quot;https://mlm-s1-p.mlstatic.com/901851-MLM40171626390_122019-M.jpg&quot;,&quot;size&quot;:&quot;40x40&quot;},{&quot;url&quot;:&quot;http://mlm-s1-p.mlstatic.com/901851-MLM40171626390_122019-B.jpg&quot;,&quot;secure_url&quot;:&quot;https://mlm-s1-p.mlstatic.com/901851-MLM40171626390_122019-B.jpg&quot;,&quot;size&quot;:&quot;800x800&quot;}]},&quot;reAttach&quot;:false,&quot;type&quot;:&quot;id&quot;,&quot;updateable&quot;:true,&quot;value&quot;:&quot;901851-MLM40171626390_122019&quot;,&quot;variationKeys&quot;:null}]">


                    <noscript>
                        <div class="ch-box-icon ch-box-info">
                            <i class="ch-icon-info-sign"></i> Estás viendo un cargador de fotos básico porque tu navegador está desactualizado. <strong>Para tener una mejor experiencia, actualiza la versión de tu navegador.</strong>
                        </div>
                    </noscript>

                    <div class="picture-uploader-preview " id="picture-uploader-preview" style="position: relative; z-index: 1;">

                        <ul>

                            <li id="imagen_subida" data-picture-status="on" draggable="true" style="display: none;">
                                <p class="picture-uploader-add">Agregar</p>
                                <div class="picture-uploader-controls">
                                    <a role="button" class="ch-close ch-hide" style="display: inline-block;"><span class="ch-hide">Borrar</span></a>
                                </div>
                                <p class="picture-uploader-principal">Foto principal</p>
                                <img id="vista_previa" src="">
                            </li>

                            <li id="btn_agregar_imagen" data-picture-status="off">
                                <p class="picture-uploader-add">Agregar</p>
                                <div class="picture-uploader-controls">
                                    <a role="button" class="ch-close ch-hide" href="#"><span class="ch-hide">Borrar</span></a>
                                </div>
                                <p class="picture-uploader-principal">Foto principal</p>
                            </li>

                        </ul>

                    </div>
                    <div id="input_file_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 0px; left: 0px; width: 1024px; height: 0px; overflow: hidden; z-index: 0;">
                        <input hidden id="input_file" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" multiple="" accept="image/jpeg,.JPG,.JPEG,image/gif,.GIF,image/png,.PNG,.webp">
                    </div>
                </div>

                <input type="hidden" id="control-name" value="sell">
            </fieldset>
            <!--
            <fieldset id="DescriptionGroup">
                <legend class="null">Describe tu producto</legend>
                <input type="hidden" name="isWithBids" id="isWithBids" value="false">
                <input type="hidden" name="isWaitingForPatch" id="isWaitingForPatch" value="false">
                <input type="hidden" name="isActiveWarning" id="isActiveWarning" value="false">

                <p class="ch-form-hint">* Datos obligatorios</p>

                <div class="ch-form-row ch-form-required title-container">
                    <label for="title">Título: <em>*</em></label>

                    <input type="text" value="Mona china" id="title" data-js="title" name="title.title" required="required" size="70" placeholder="Ej.: Cámara De Fotos Nikon Reflex Digital" maxlength="60">

                    <input type="hidden" name="title.hubTitle" value="Mona china">

                    <i class="ch-icon-help-sign ch-shownby-pointerenter" id="title-icon-help" data-js="title-icon-help" title="" aria-owns="ch-layer-12" aria-haspopup="true"></i>

                     <p class="ch-countdown ch-form-hint" id="ch-countdown-message-11">Restan 50 caracteres.</p>
                </div>

                <input type="hidden" name="flowStep" id="flowStep" value="ITEM_DESCRIPTION">

                <div class="attributes-container" data-js="attributes">

                    <h3 class="attributes-tec__title">Ficha técnica</h3>
                    <h4 class="attributes-tec__subtitle">
                        Puedes encontrar estos datos en la caja de tu producto, en su envase o en las especificaciones del fabricante.
                    </h4>

                    <div>

                        <div class="ch-clearfix attributes-spech_tec">

                            <div class="attributes-group">

                                <div class="attributes-title-container">
                                    <h4 class="attributes-group__title">Otros</h4>
                                </div>

                                <div class="attributes-col attributes-first-col">

                                    <div class="ch-form-row  attribute string">

                                        <label class="attribute-label" for="BRAND">Marca: </label>
                                        <input type="text" name="BRAND" id="BRAND" value="" maxlength="250" data-validate-type="string" data-validate-maxlength="255">

                                    </div>

                                </div>

                                <div class="attributes-col attributes-second-col">

                                    <div class="ch-form-row  attribute string">

                                        <label class="attribute-label" for="MODEL">Modelo: </label>
                                        <input type="text" name="MODEL" id="MODEL" value="" maxlength="250" data-validate-type="string" data-validate-maxlength="255">

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="description-container">

                    <div class="ch-box-icon ch-box-warn warn-icon desc-warn">
                        <i class="ch-icon-warning-sign"></i>
                        <strong>No incluyas datos de contacto en tu descripción</strong>. Te podrán contactar por teléfono.
                    </div>

                    <div class="desc-module desc-plain-text ">

                        <label class="ch-form-row" for="description" id="lbl_description">
                            Descripción:
                        </label>

                        <span class="desc-wrapper-textarea">

                <textarea placeholder="Escribe tu descripción…" id="plain-description" name="description.plainTextDescription" class="desc-textarea" rows="10" lang="html"></textarea>

                        </span>

                    </div>

                </div>
            </fieldset>
            -->
            <select name="officialStore.official_store_id" id="official_store_id" style="display:none">
                <option value="null">null</option>
            </select>
            <fieldset id="ConditionGroup">
                <legend class="">Indica la condición de tu producto</legend>
                <ul class="ch-form-options ch-box-list">
                    <li class="ch-form-row ">
                        <input type="radio" name="condition.condition" value="new" id="new" checked="">
                        <label class="condition" for="new">Nuevo</label>
                    </li>
                    <li class="ch-form-row ">
                        <input type="radio" name="condition.condition" value="used" id="used">
                        <label class="condition" for="used">Usado</label>
                    </li>
                </ul>
            </fieldset>
            <div class="ch-actions wizard-actions" data-js="autosave">
                <input type="submit"  disabled id="submit_detalles_producto" name="_eventId_next" value="Continuar" class="ch-btn">
                <!--
                <a href="/?execution=e2s3&amp;_eventId=backCs">Volver</a>
                <div class="autosave-container">Guardada<span class="ch-icon-help-sign help ico" data-side="top" data-align="left"></span></div>
                -->
            </div>

            <input type="hidden" id="isScoringOn" value="true" name="isScoringOn">
            <input type="hidden" data-src="https://content.mercadolibre.com/fp/clear.png?org_id=jk96mpy0&amp;session_id=0caa4df9-fcfb-4ebb-b26e-5dce9390e497&amp;m=1" id="scoring-img1">
            <input type="hidden" data-src="https://content.mercadolibre.com/fp/clear.png?org_id=jk96mpy0&amp;session_id=0caa4df9-fcfb-4ebb-b26e-5dce9390e497&amp;m=2" id="scoring-img2">
            <input type="hidden" data-src="https://content.mercadolibre.com/fp/check.js?org_id=jk96mpy0&amp;session_id=0caa4df9-fcfb-4ebb-b26e-5dce9390e497" name="scoring-config" id="scoring-script">
            <input type="hidden" data-obj-id="obj_id" data-obj-data="https://content.mercadolibre.com/fp/fp.swf?org_id=jk96mpy0&amp;session_id=0caa4df9-fcfb-4ebb-b26e-5dce9390e497" name="scoring-config" id="scoring-obj">
            <input type="hidden" data-param-name="movie" data-param-value="https://content.mercadolibre.com/fp/fp.swf?org_id=jk96mpy0&amp;session_id=0caa4df9-fcfb-4ebb-b26e-5dce9390e497" name="scoring-config" id="scoring-param">
        </form>

        <form id="finalizar-publicacion" hidden action="#" method="post" class="paso-publicacion ch-form form-conditions syi-sc">

            <ol class="ch-wizard-breadcrumb ch-steps-four">
                <li><a href="0">Elige qué quieres publicar</a></li>
                <li><a href="1">Categoría del producto</a></li>
                <li><a href="2">Detalles del producto</a></li>
                <li class="ch-wizard-step">Ingresa precio y cantidad</li>
            </ol>
            <!--
            <input type="hidden" name="sellType" value="list" id="sellType">
            <input type="hidden" name="step" value="SC" id="step">
            <input type="hidden" name="profile" value="NEW" id="profile">
            <input type="hidden" name="vertical" value="STD" id="vertical">
            <input type="hidden" name="site" value="MLM" id="site">
            <input type="hidden" name="customer" value="501937839" id="customer">
            <input type="hidden" name="session_id" value="1576653463981-1623515-501937839" id="session_id">
            <input type="hidden" name="credit" value="" id="credit">
            <input type="hidden" name="server_address" value="10.32.150.194" id="server_address">
            <input type="hidden" name="server_name" value="10.32.150.194" id="server_name">
            <input type="hidden" name="environment" value="production" id="environment">
            <input type="hidden" name="maxLogs" value="5" id="maxLogs">
            -->
            <fieldset id="QuantityPriceGroup">
                <legend class="{2}">Ingresa cantidad y precio de venta</legend>

                <input type="hidden" id="siteDefaultCurrencyId" name="siteDefaultCurrencyId" value="MXN">

                <!-- Patch para poder modificar items con variaciones genéricas mientras no se puede publicar desde el FE -->

                <div class="ch-form-row ch-form-required ">

                    <label for="quantity">Cantidad: </label>

                    <input id="cantidad" type="tel" value="1" name="quantity.quantity" maxlength="5" id="quantity" title="Completa este dato" size="5" max="99999" min="1" required="required" data-js="quantity" class="quantity">

                </div>

                <div id="category" data-value="MLM3530"></div>

                <div class="price-content" data-js="price-container">

                    <div class="ch-form-row ch-form-required option-price " data-js="price-component">

                        <label for="price">Precio : </label>
                        <!--
                        <select name="price.currency" id="currency" class="currency" data-js="currency">

                            <option value="MXN">$</option>

                            <option value="USD">U$S</option>

                        </select>
                        -->

                        <span class="price-input"><input type="number" value="" name="price.price" id="price" class="price" title="Completa este dato" size="15" min="1" maxlength="14" data-js="price" data-price-decimal-separator="." data-price-decimal-places="2" data-price-base-to-me-mandatory="499" data-price-base-to-me-mandatory-mxn="499" data-price-base-to-me-mandatory-usd="26.3790861" data-side="right" data-align="center" aria-label="ch-bubble-21">
                            </span>
                        <span class="error-icon"></span>
                        <div class="error-message"></div>

                    </div>

                </div>

            </fieldset>

            <!--
            <fieldset id="ShippingMethodGroup">
                <legend class="{2}">Formas de entrega</legend>
                <div class="shipping-container">

                    <input type="hidden" id="hasToDraw" value="true">
                    <input type="hidden" id="siteName" value="Mexico">
                    <input type="hidden" data-js="meMandatory" id="meMandatory" class="ch-validation-error">

                    <input type="hidden" name="envios" value="custom">

                    <ul class="ch-form-options ch-box-list shipping-methods">
                        <li class="ch-form-row">
                            <input id="personal" type="checkbox" name="personal" value="true" checked="checked" data-js="shipping-method-personal">
                            <label for="personal">También ofrecer retiro en persona</label>
                        </li>
                        <li class="ch-form-row ">

                            <input type="checkbox" name="withShip" class="shipping-methods-checkboxButton" data-js="shipping-method-custom" value="true" id="shipping">
                            <label for="shipping">Se realizan envíos</label>

                            <noscript>
                                <input type="submit" value="Cargar costos de env&iacute;o (opcional)" name="_eventId_bind" id="changeShipping" class="ch-btn ch-btn-small ch-btn-skin shipping-methods-button" />
                            </noscript>

                            <ul class="ch-form-options ch-box-list shipping-methods-custom bybuyer ch-hide">

                                <li class="ch-form-row">
                                    <input type="radio" name="shipCostsBy" value="Vendedor" id="bySeller">
                                    <label for="bySeller" class="custom-free-shipping-all-country">Gratis a todo el país</label>
                                </li>

                                <input type="hidden" value="true" id="customShippingToogle">
                                <input type="hidden" value="" id="customShippigWithBids">

                                <li class="ch-form-row">
                                    <div class="ch-box-icon ch-box-info ch-hide">
                                        <i class="ch-icon-info-sign"></i> No puedes modificar los costos de envío porque tu publicacion ya tiene una venta.
                                    </div>

                                    <input type="radio" name="shipCostsBy" value="Comprador" id="byBuyer">
                                    <label for="byBuyer"> Cargar costos de envío (opcional)</label>

                                    <ol class="shipping-methods-custom-list">

                                        <li class="ch-form-row">

                                            <label for="city1">Costo:</label>
                                            <input type="text" name="shipCostCity" maxlength="254" placeholder="Ej.: Zoom, MRW, Domesa." size="50" data-js="shipping-city"> $

                                            <input type="text" name="shipCostPrice" max="1500" min="0" size="10" value="" data-price-decimal-separator="." data-price-decimal-places="2">

                                            <a href="#" class="ch-close"></a>
                                        </li>
                                        <li class="ch-form-row">

                                            <label for="city2">Costo:</label>
                                            <input type="text" name="shipCostCity" maxlength="254" placeholder="Ej.: Caracas, Distrito Federal. " size="50" data-js="shipping-city"> $
                                            <input type="text" name="shipCostPrice" max="1500" min="0" size="10" value="" data-price-decimal-separator="." data-price-decimal-places="2">
                                            <a href="#" class="ch-close"></a>
                                        </li>
                                        <li class="ch-form-row">

                                            <label for="city3">Costo:</label>
                                            <input type="text" name="shipCostCity" maxlength="254" placeholder="Ej.: Motorizado, Resto del país. " size="50" data-js="shipping-city"> $
                                            <input type="text" name="shipCostPrice" max="1500" min="0" size="10" value="" data-price-decimal-separator="." data-price-decimal-places="2">
                                            <a href="#" class="ch-close"></a>
                                        </li>

                                        <div class="ch-form-row">

                                        </div>
                                    </ol><a href="#" class="shipping-methods-addCost">Agregar otro</a>

                                </li>

                            </ul>

                        </li>
                    </ul>

                    <input type="hidden" value="MXN" id="siteDefaultCurrency">
                </div>

                <input type="hidden" id="priceValueFSMandatory" value="499">
                <input type="hidden" id="currencyValueFSMandatory" value="">

                <input type="hidden" id="buyingMode" value="buy_it_now">
            </fieldset>
            <fieldset id="PaymentMethodGroup">
                <legend class="{2}">Medios de pago</legend>

                <div class="payment-methods" data-js="payment-methods">


                    <ul id="PaymentMethodGroup" class="ch-form-options ch-box-list">
                        <li class="ch-form-row">
                            <input type="radio" name="paymentMethod.immediatePayment" checked="checked" value="true" id="immediatePayment">
                            <label for="immediatePayment">Aceptar pagos <b>solo</b> por MercadoPago.</label>
                        </li>
                        <li class="ch-form-row ch-form-disabled">
                            <input type="radio" name="paymentMethod.immediatePayment" value="false" id="regularPayment" disabled="disabled">
                            <label for="regularPayment">Aceptar pagos por MercadoPago y cobro en persona.</label>

                            <span class="ch-icon-help-sign ch-shownby-pointertap" data-js="layer" data-title="Tu producto pertenece a una categoría que solo permite aceptar pagos por MercadoPago." data-side="right" data-align="center" aria-owns="ch-layer-39" aria-haspopup="true"></span>

                        </li>
                    </ul>

                </div>
            </fieldset>
            -->
            
            <div class="ch-actions wizard-actions" data-post="true">

                <input type="submit" name="_eventId_next" id="_eventId_next" value="Publicar" class="ch-btn">
                <!--
                <a href="/?execution=e2s4&amp;_eventId=back">Volver</a>
                -->
                
            </div>
            <script type="text/javascript">
                function jasmineStepSpecs() {}
            </script>
        </form>


        <!--
        <div class="feedback-container poll ch-hide">

            <input type="hidden" value="true" id="isFeedbackOn" name="isFeedbackOn">

            <form action="/feedback/send" method="POST" id="feedback_form" class="ch-form poll">
                <input type="hidden" value="dropout" id="feedbackType" name="feedbackType">

                <input type="hidden" name="feedback.customer" value="501937839" id="feedback_customer">
                <input type="hidden" name="feedback.site" value="MLM" id="feedback_site">
                <input type="hidden" name="feedback.step" value="Qfc" id="feedback-step">
                <input type="hidden" name="feedback.profile" value="New" id="feedback-profile">
                <input type="hidden" name="feedback.vertical" value="Std" id="feedback-vertical">
                <input type="hidden" name="feedback.navigationHistory" value="[Qfc]" id="feedback-navigationHistory">
                <input type="hidden" name="feedback.category" value="" id="feedback-category">
                <input type="hidden" name="feedback.type" value="list" id="feedback-type">
                <input type="hidden" name="feedback.session_id" value="1576650673920-1128659-501937839" id="feedback-sessionId">
                <input type="hidden" name="sellFlowId" value="1576650673920-1128659-501937839" id="feedback-satellite-sessionId">
                <input type="hidden" name="step" value="Qfc" id="feedback-satellite-step">

                <h2 class="feedback-modal-title">Ayúdanos a mejorar. Cuéntanos por qué no terminaste de publicar.</h2>

                <textarea name="feedback.comment" id="feedback_area" style="height:100px;width:100%;"></textarea>

                <div class="ch-actions">
                    <input type="submit" class="ch-btn ch-btn-large" id="feedback_submit" name="_eventId_saveFeedback" value="Enviar">

                    <a href="#" id="feedback_avoid">No, gracias</a>

                </div>
                <div class="modal-footer">
                    Desde aquí no podremos responder tus dudas. Si necesitas contactarnos, ve a la <a href="#" target="_blank">Ayuda</a>.
                </div>
            </form>
        </div>
        -->
    </div>
</div>

<script>
    $(document).ready(function(){
        mostrarPaso(0);
    })
    // Muestra únicamente el paso indicado (0, 1 o 2)
    function mostrarPaso(intNumeroPaso){
        // Ocultar todos los pasos
        $('.paso-publicacion').attr('hidden', true);
        // Mostrar solo el paso indicado
        $('.paso-publicacion').eq(intNumeroPaso).removeAttr('hidden');
    }

    // Asignar evento a los enlaces del menú de pasos (el que se ve arriba)
    $('.ch-steps-four').on('click', 'a', function(evento){
        // No accionar el enlace
        evento.preventDefault();
        // Cambiar a su respectivo paso
        mostrarPaso( $(this).attr('href') );
    });

    // En lugar de enviar el formulario, pasar a su siguiente paso
    $('#continuar-a-paso-2').submit(function(e){
        e.preventDefault();
        mostrarPaso(1);
    });
    $('#continuar-a-paso-3').submit(function(e){
        e.preventDefault();
        mostrarPaso(2);
    });
    $('#continuar-a-paso-4').submit(function(e){
        e.preventDefault();
        mostrarPaso(3);
        $('#price').focus();
    });
    $('#finalizar-publicacion').submit(function(e){
        e.preventDefault();
        //alert("Aquí termina el avance por ahora");
        subirProducto();        
    });

    // PASO 2
    // Al seleccionar una categoría, cargar las subcategorías
    $('#opcion-categoria').click(function(){
        // Ocultar el botón de continuar
        $('#tarjeta-continuar-a-paso-3').hide();
        // Cargar las subcategorías

        // Deseleccionar el campo de subcategoría
        $('#opcion-subcategoria').val(null);

        $('#tarjeta-subcategoria').show();
    });

    // Al seleccionar una categoría, cargar las subcategorías
    $('#opcion-subcategoria').click(function(){
        // Cargar las subcategorías

        // Mostrar el botón de continuar
        $('#tarjeta-continuar-a-paso-3').show();

    });

    // Al presionar el botón de subir imágen, presionar el input file oculto
    $('#btn_agregar_imagen > .picture-uploader-controls').click(function(){
        $('#input_file').click();
    });

    // Cuando se cargue un valor en el input file, cargar la imagen
    $('#input_file').change(function(){
        // Cargar una vista previa en el archivo
        var files = this.files;
        var reader = new FileReader();
        var name=this.value;
        reader.onload = function (e) {
            $("#vista_previa").attr('src', e.target.result);
            // Mostrar la imagen
            imagenSubida();
        };
        reader.readAsDataURL(files[0]);        
    });
    // Al presionar la X de la imagen subida, borrar el contenido 
    $('.ch-close').click(function(e){
        // No abrir el enlace
        e.preventDefault();
        // Vaciar su contenido
        $('#input_file').val("");
        imagenSubida();
    });
    function imagenSubida(){
        if( $('#input_file').val() != "" )
        {
            // Mostrar la imagen y ocultar el botón de subir imagen
            $('#imagen_subida').show();
            $('#btn_agregar_imagen').hide();
            $('#submit_detalles_producto').removeAttr('disabled');
        }
        else
        {
            // Ocultar la imagen y mostrar el botón de subir imagen
            $('#imagen_subida').hide();
            $('#btn_agregar_imagen').show();
            $('#submit_detalles_producto').attr('disabled', true);
        }
    }

    // Funciones para subir el registro y para subir la imagen
    function ajaxPost(url, data, callback){
        $.ajax({
            url: url,
            method: 'post',
            data: data,
            dataType: "json"
        }).done(function(datos){
            callback(datos);
        }).fail(function(jqXHR, textStatus){
            //alertify.error("Error: " + textStatus + '. ' + jqXHR);
            console.log("Error: " + textStatus + '. ' + jqXHR);
        });
    }
    function ajaxFilePost(url, data, callback){
        $.ajax({
                url: url,
                type: 'POST',
                data: data,
                cache: false,
                processData: false,
                contentType: false,
                dataType: 'json',
                mimeType:"multiparth/form-data"
        }).done(function(datos){
            callback(datos);
        }).fail(function(datos){
            //alertify.error("Error, no se pudo subir el archivo");
            console.log("Error, no se pudo subir el archivo");
        }); 
    }

    function subirProducto(){
        // Recuperar los valores del mensaje
        parametros = {
            nombre : $('#title').val(),
            imagen : "", //se guardará después
            subcategoria : $('#opcion-subcategoria option:selected').text().trim(),
            precio : $('#price').val(),
            vendidos : 0,
            stock : $('#cantidad').val()
        }
        var nombreImagen = $('#input_file').val();
        // Crear un formulario con la imagen
        var formImagen = new FormData();
        // Asignarle la imagen          
        formImagen.append('imagen', $('#input_file')[0].files[0]);
        // Petición asíncrona para subir la imagen
        ajaxFilePost('publicar/subirImagen',formImagen, function(resultadoImagen){
            // Si se selecionó una imagen y hubo un error, mostrar mensaje de error
            if(nombreImagen && resultadoImagen.intError)
            {
                //alertify.error("Error: " + resultadoImagen.strMensaje);
                console.log("Error: " + resultadoImagen.strMensaje);
            }
            // Si no hubo error, recuperar el nombre de la imagen y subir el producto
            else
            {
                parametros.imagen = resultadoImagen.strNombreImagen;
                ajaxPost('publicar/subirProducto', parametros, function(idProducto){
                    // Ya que se subió el producto, mostrar su página
                    window.location.replace("producto?id=" + idProducto);
                });
            }
        });
    }
</script>