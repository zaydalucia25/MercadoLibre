<!-- Cargar custom materialize Forms, Buttons, Waves: http://materialize.khophi.co/ -->
<link rel="stylesheet" type="text/css" href="css/materialize-custom.css">
<!-- materialize.js -->
<script type="text/javascript" src="js/materialize.min.js"></script>
<!-- Cargar registration.css -->
<link rel="stylesheet" type="text/css" href="css/registration.css">

<div class="div-background-fullpage">
    <div class="row-title">
        <h2 class="title">Completa los datos de tu empresa</h2>
        <a class="company-link" href="registration">Crear una cuenta personal</a>
    </div>
    <div class="no-item">
        <div class="inside-form">
            <div class="input-field inline">
                <input id="rfc" type="text" class="validate" minlength="12" maxlength="12" tabindex="11" autocapitalize="on" >
                <label for="rfc">RFC</label>
                <span class="helper-text" data-error="Ingresa 12 caracteres." data-success=""></span>
            </div>
            <div class="input-field inline">
                <input id="razonSocial" type="text" class="validate" minlength="3" maxlength="50" tabindex="12" autocapitalize="on">
                <label for="razonSocial">Razón Social</label>
                <span class="helper-text" data-error="Completa este dato." data-success=""></span>
            </div>
            <div class="input-field inline">
                <input id="email" type="email" class="validate" maxlength="100" tabindex="14" email-auto-complete="" autocomplete="on" autocapitalize="none">
                <label for="email">E-mail</label>
                <span class="helper-text" data-error="Usa el formato nombre@ejemplo.com." data-success=""></span>
            </div>
            <div class="input-field inline">
                <input id="password" type="password" class="validate" minlength="6" maxlength="20" tabindex="16" autocapitalize="on">
                <label for="password">Clave</label>
                <span class="helper-text" data-error="Usa entre 6 y 20 caracteres" data-success=""></span>
            </div>
        </div>
        <div class="form-footer">
            <button id="btnCrearCuenta" class="btn-large btn-blue waves-effect" tabindex="18">Crear cuenta</button>

            <div class="tyc-layout">
                <p class="tycFoot">Al registrarme, declaro que soy mayor de edad y acepto las <a href="registration#" title="Leer políticas de privacidad">Políticas de privacidad</a> y los <a href="registration#" title="Leer términos y condiciones">Términos y condiciones de Mercado Libre</a> y <a href="registration#" title="Leer términos y condiciones">Mercado Pago.</a>
                </p>
            </div>
        </div>
    </div>
</div>

<script>
    // Evento al dar click en btnCrearCuenta
    $('#btnCrearCuenta').click(function() {
        crearCuenta();
    });

    // Crear cuenta
    function crearCuenta() {
        let objData = {
            strEmail : $('#email').val(),
            strContraseña : $('#password').val(),
            strRFC : $('#rfc').val(),
            strRazonSocial : $('#razonSocial').val(),
        };

        ajax('registrationcompany/guardar',
            'POST',
            objData,
            'json',
            function(data) {
                // Si el registro se hizo
                if(data.intExito == 1) {
                    // Enviar a la pagina de inicio
                    window.location.href = '';
                }
                else {
                    // Si existe el error strRFC
                    if(data.arrError.strRFC != undefined) {
                        alert(data.arrError.strRFC);
                    }
                    // Si existe el error strEmail
                    else if(data.arrError.strEmail != undefined) {
                        alert(data.arrError.strEmail);
                    }
                }
            }
        );
    }
</script>