<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<link rel="stylesheet" type="text/css" href="css/direccion.css">

    <section class=" ml-addresses-section">      
    <h1 class="ml-addresses-main-title">Agrega un domicilio</h1>
    <h2 class="ml-addresses-main-subtitle "></h2>

    
		<form class="ui-form form-with-floating-labels" id="addresses-form" action="<?=base_url()?>direcciones/guardar" name="addresses-form" method="post">
    <input type="hidden" name="latitude" id="latitude" value=""><input type="hidden" name="longitude" id="longitude" value=""><input type="hidden" name="locationType" id="locationType" value=""><input type="hidden" name="formId" id="formId" value=""><input type="hidden" name="appName" id="appName" value="generic">
    <?php echo validation_errors(); ?>

    
    
        <div class="ml-addresses-card" style="background-color: white;">
            
                <fieldset class="ml-addresses-fieldset">
    <div class="ml-addresses-grid ml-addresses-grid--full-column">
        <div class="ui-form__row ">
            <input id="contact" type="text" required class="ui-form__input " name="StrNombre_apellido" value="" aria-describedby="contactMessage" data-valid="true" maxlength="150" data-min-length="3">
            <label for="contact" class="ui-form__label">Nombre y apellido</label>
            <span class="ui-form__status-bar"></span>
        </div>
    </div>
	</fieldset>                          
<fieldset class="ml-addresses-fieldset">
    <legend class="ml-addresses-hidden">Zipcode</legend>
    <div class="ml-addresses-grid ml-addresses-grid--first-column">
        <div class="ui-form__row ">
            <input id="zipCode" type="number" type="tel" required class="ui-form__input " name="StrCodigo_postal" value="" aria-describedby="zipcodeMessage" data-valid="true" maxlength="5" data-min-length="5">
            <label for="zipCode" class="ui-form__label">Código postal</label>
            <span class="ui-form__status-bar"></span>
        </div>
        <div class="ml-addresses-embeded-action">
            
            
            <div id="searchZipcodeLoading" class="ui-loading ml-addresses-hidden">
                <div class="ui-loading__container">
                    <svg class="ui-loading__spinner ui-loading__spinner--small" viewBox="25 25 50 50">
                        <circle class="ui-loading__spinner-path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</fieldset>

            
                <fieldset id="locationField" class="ml-addresses-fieldset">
    <legend class="ml-addresses-hidden">Ubicación</legend>
    <div class="u-clearfix">
        <div class="ml-addresses-grid ml-addresses-grid--first-column">
            <div class="ui-form__row  ">
                <input type="hidden" id="stateTemporary" name="address.state.id" value="">
                <input type="text" id="state" value="" name="StrEstado" required data-valid="true" class="ui-form__input ">
                <label for="state" class="ui-form__label">Estado</label>
                <span class="ui-form__status-bar"></span>
            </div>
        </div>
        <div class="ml-addresses-grid ml-addresses-grid--second-column">
            <div class="ui-form__row ">
                <input type="hidden" id="cityTemporary" name="address.city.id" value="">
                <input type="text" id="city" name="StrMunicipio" value="" required data-valid="true" class="ui-form__input ">
                <label for="city" id="cityLabel" class="ui-form__label">Delegación / Municipio</label>
                <span class="ui-form__status-bar"></span>
            <div class="ml-addresses-suggest"><ul class="ml-addresses-suggest-list"></ul></div></div>
        </div>
    </div>
    <fieldset id="neighborhoodField" class="ml-addresses-fieldset">
        <div class="ml-addresses-grid ml-addresses-grid--first-column">
            <div class="ui-form__row ">
                <input id="neighborhood" name="StrColonia" type="text" required class="ui-form__input " autocomplete="off" value="" aria-describedby="neighborhoodMessage" data-valid="true" maxlength="50" data-min-length="3">
                <label for="neighborhood" id="neighborhoodLabel" class="ui-form__label">Colonia / Asentamiento</label>
                <span class="ui-form__status-bar"></span>
            </div>
        </div>
    </fieldset>
</fieldset>

            
                 <fieldset class="ml-addresses-fieldset">
    <legend class="ml-addresses-hidden">Dirección</legend>
    <div class="u-clearfix">
        <div class="ml-addresses-grid ml-addresses-grid--first-column">
            <div class="ui-form__row ">
                <input id="street" type="text" required class="ui-form__input " name="StrCalle" value="" aria-describedby="streetMessage" data-valid="true" maxlength="70" data-min-length="1">
                <label for="street" class="ui-form__label">Calle</label>
                <span class="ui-form__status-bar"></span>
            </div>
        </div>
        <div class="ml-addresses-grid ml-addresses-grid--second-column">
            <div class="ui-form__row ">
                <input id="number" type="number"  required class="ui-form__input " name="StrNumero_exterior" value="" data-valid="true" aria-describedby="numberMessage" maxlength="8" data-min-length="1">
                <label for="number" class="ui-form__label">Nº exterior</label>
                <span class="ui-form__status-bar"></span>
            </div>
        </div>
    </div>
    <div class="u-clearfix">
        <div class="ml-addresses-grid ml-addresses-grid--first-column">
            <div class="ui-form__row ">
                <input id="info" type="text" class="ui-form__input "  name="StrNumero_interior" value="" aria-describedby="commentMessage" data-valid="true" maxlength="150" data-required="false" data-min-length="-1">

                <label for="info" class="ui-form__label">Nº Interior / Depto (opcional)</label>
                <span class="ui-form__status-bar"></span>
            </div>
        </div>
        <div class="ml-addresses-grid ml-addresses-grid--second-column">
            <div class="ui-form__row ">
                <input id="references" type="text" class="ui-form__input " name="StrEntre_calles" value="" aria-describedby="referencesMessage" data-valid="true" maxlength="150" data-required="false" data-min-length="-1">
                <label for="references" class="ui-form__label">Entre calles (opcional)</label>
                <span class="ui-form__status-bar"></span>
            </div>
        </div>
    </div>
    <div class="ml-addresses-grid ml-addresses-grid--full-column">
        <div class="ui-form__row ">
            <input id="extraReferences" type="text" class="ui-form__input " name="StrReferencias" value="" aria-describedby="extraReferencesMessage" data-valid="true" maxlength="150" data-min-length="3">
            <label for="extraReferences" class="ui-form__label">Referencias</label>
            <span class="ui-form__status-bar"></span>
            <div class="ui-form__message" id="extraReferencesMessage" role="alert">Indicaciones para encontrar tu domicilio.</div>
        </div>
    </div>
</fieldset>

            
                <fieldset class="ml-addresses-fieldset">
    <legend class="ml-addresses-hidden">Contacto</legend>    
    <div class="u-clearfix">
        <div class="ml-addresses-grid ml-addresses-grid--first-column ui-telephone  ">
            <div class="ui-telephone__number ui-form__row">
                <input id="phone" required class="ui-telephone__input " data-js="telephone" name="StrTelefono" type="number" placeholder="">
                <label for="phone" class="ui-form__label">Teléfono de contacto</label>
                <span class="ui-form__status-bar"></span>
            <span class="ui-telephone__focus-line"></span></div>
            <div id="phoneMessage" class="ui-telephone__validations" data-js="tel-validations">
                <noscript>
                    <span class="ui-telephone__validation--error ">
                        error_place_holder
                    </span>
                </noscript>
            <span class="ui-telephone__validation--success valid"></span><span class="ui-telephone__validation--error possible">El número ingresado no es un número de teléfono.</span><span class="ui-telephone__validation--error not-a-number">El número no es válido. Ingresa tu número de teléfono.</span><span class="ui-telephone__validation--error min">Este teléfono tiene menos dígitos de los requeridos.</span><span class="ui-telephone__validation--error invalid-default-number">El teléfono cargado en tu cuenta no es válido. Verifícalo por favor.</span><span class="ui-telephone__validation--error max">Este teléfono excede el máximo de dígitos posible.</span><span class="ui-telephone__validation--error onlyNumbers">Sólo puedes ingresar números.</span><span class="ui-telephone__validation--success notMobile">El teléfono es correcto. Revisa que sea un celular y continúa.</span><span class="ui-telephone__validation--error required">Completa este dato.</span><span class="ui-telephone__validation--info zero"></span><span class="ui-telephone__validation--info"></span></div>
        </div>
    </div>
</fieldset> 
        </div>
    <div class="ml-addresses-actions ml-addresses-actions--align-left">
        <input id="continueButton" type="submit" class="ui-button ui-button--primary" value="Guardar">
        <a id="cancelButton" href="" class="ui-button ui-button--tertiary">Cancelar</a>
    </div>   
</form>
