<!-- Cargar custom materialize Forms, Buttons, Waves: http://materialize.khophi.co/ -->
<link rel="stylesheet" type="text/css" href="css/materialize-custom.css">
<!-- materialize.js -->
<script type="text/javascript" src="js/materialize.min.js"></script>
<!-- Cargar registration.css -->
<link rel="stylesheet" type="text/css" href="css/registration.css">

<style>
    .div-background-fullpage {
        width:400px;
        margin:32px auto
    }

    .input-field {
        width: 300px;
    }

    .btn-large {
        width: 300px;
    }

    .btn-white {
        background: #FFFFFF !important;
        border:0;
        -webkit-border-radius:4px;
        border-radius:4px;
    }

    .email-badge{
    max-width:18.625rem;
    height:1.75rem;
    margin:1rem auto 0;
    border:.0625rem solid #e7e7e7;
    -webkit-border-radius:1rem;
    border-radius:1rem;
    display:-webkit-inline-box;
    display:-ms-inline-flexbox;
    display:inline-flex;
    -webkit-box-orient:horizontal;
    -webkit-box-direction:normal;
    -ms-flex-direction:row;
    flex-direction:row;
    -webkit-box-pack:justify;
    -ms-flex-pack:justify;
    justify-content:space-between
}
.email-badge__change-user{
    color:rgba(0,0,0,.8);
    margin:.0625rem .0625rem .0625rem .375rem;
    -webkit-border-radius:50%;
    border-radius:50%;
    width:1.5625rem;
    height:1.5rem;
    display:-webkit-box;
    display:-ms-flexbox;
    display:flex;
    -webkit-box-orient:vertical;
    -webkit-box-direction:normal;
    -ms-flex-direction:column;
    flex-direction:column
}
.email-badge__change-user:hover{
    background-color:rgba(0,0,0,.07);
    -webkit-transition:background-color .1s ease-in;
    -o-transition:background-color .1s ease-in;
    transition:background-color .1s ease-in
}
.email-badge__close{
    position:relative;
    top:50%;
    margin-left:1px
}
.email-badge__close:after,.email-badge__close:before{
    content:"";
    display:block;
    width:.75rem;
    height:.0625rem;
    background:#000;
    position:absolute;
    left:50%;
    top:50%;
    margin-left:-.375rem
}
.email-badge__close:before{
    -webkit-transform:rotate(45deg);
    -ms-transform:rotate(45deg);
    transform:rotate(45deg)
}
.email-badge__close:after{
    -webkit-transform:rotate(-45deg);
    -ms-transform:rotate(-45deg);
    transform:rotate(-45deg)
}
.email-badge__user-data{
    display:-webkit-box;
    display:-ms-flexbox;
    display:flex
}
.email-badge__user-name{
    font-size:.75rem;
    font-weight:600;
    font-style:normal;
    line-height:1.67;
    letter-spacing:normal;
    padding:.1875rem 0;
    display:inline;
    max-width:13.625rem;
    text-align:left;
    overflow-x:hidden;
    -o-text-overflow:ellipsis;
    text-overflow:ellipsis
}
.email-badge--withoutChangeUser{
    padding-right:.625rem
}
.avatar{
    display:inline-block;
    -webkit-background-size:26px 26px;
    background-size:26px 26px;
    width:27px;
    height:26px;
    -webkit-border-radius:50px;
    border-radius:50px;
    margin:0 10px 0 0;
    overflow:hidden;
    border:1px solid #fff
}
body .avatar{
    background-image:url(https://http2.mlstatic.com/frontend-assets/auth-login-frontend/2d3dd81cf2184d033bc9888c02f9699c.svg)
}
.avatar .avatar__img{
    display:block;
    width:1.625rem;
    height:1.625rem
}
@media only screen and (min-width:768px){
    .email-badge__change-user{
        cursor:pointer
    }
}
</style>

<div class="div-background-fullpage">
    <?php
        // Si no ingreso un usuario
        if(isset($_GET["user"]) == false) {
    ?>
        <div class="inside-form">
            <div class="input-field inline">
                <h2 class="title">¡Hola! Para seguir, ingresa tu e-mail o usuario</h2>
            </div>
            <div class="input-field inline">
                <input id="email" type="text" class="validate" maxlength="100" tabindex="14" email-auto-complete="" autocomplete="on" autocapitalize="none">
                <label for="email">E-mail o usuario</label>
                <span class="helper-text" data-error="Completa este paso para continuar." data-success=""></span>
            </div>
            <div class="input-field inline center-align">
                <button id="btnContinuar" class="btn-large btn-blue waves-effect" tabindex="18">Continuar</button>

                <p style="
                    font-size: 15px;
                    ">
                    <b><a href="registration">Crear cuenta</a></b>
                </p>
            </div>
    <?php
        }
        // Si ingreso un usuario
        else {
    ?>
        <div class="inside-form">
            <div class="input-field inline">
                <h2 class="title">Ahora, tu clave</h2>
            </div>
            <div class="email-badge ">
                <div class="email-badge__user-data">
                    <div class="avatar"></div>
                    <p class="email-badge__user-name" style="margin: 0;">
                        <b id="email">
                            <?php echo htmlspecialchars($_GET["user"]);?>
                        </b>
                    </p>
                </div>
                <a id="change-user-link" href="login" class="email-badge__change-user">
                    <i class="email-badge__close"></i>
                </a>
            </div>
            <div class="input-field inline">
                <input id="password" type="password" class="validate" maxlength="20" tabindex="16" autocapitalize="on">
                <label for="password">Clave</label>
                <span class="helper-text" data-error="Revisa tu clave." data-success=""></span>
            </div>
            <div class="input-field inline center-align">
                <button id="btnIngresar" class="btn-large btn-blue waves-effect" tabindex="18">Ingresar</button>

                <p style="
                    font-size: 15px;
                    ">
                    <b><a href="login#">No sé mi clave</a></b>
                </p>
            </div>
    <?php
        }
    ?>
        </div>
        <div class="form-footer">
            <div class="tyc-layout center-align">
                <p class="tycFoot">
                    Protegido por reCAPTCHA- <a href="login#">Privacidad</a> - <a href="login#">Condiciones</a>
                </p>
            </div>
        </div>
    </div>
</div>

<script>
    // Almacenar email
    var email = '<?php
        // Si ingreso un usuario
        if(isset($_GET["user"]) == true) {
            echo $_GET["user"];
        }
    ?>';

    // Evento al dar click en btnContinuar
    $('#btnContinuar').click(function() {
        // Si email no esta vacio
        if($('#email').val().length != 0) {
            // Enviar a la pagina de login en donde ingresara su contraseña
            window.location.href = 'login?user=' + $('#email').val();
        }
        else {
            $('#password').attr('data-error', 'Completa este paso para continuar.');
            $('#email').addClass("invalid");
            $('#email').focus();
        }
    });

    // Evento al escribir en email
    $('#email').keyup(function(event) {
        // Si contraseña no esta vacia
        if($('#email').val().length != 0) {
            $('#email').removeClass("invalid");
        }
        
        // Si pulso enter
        if(event.keyCode === 13) {
            event.preventDefault();
            $('#btnContinuar').focus();
            $('#btnContinuar').click();
        }
    });

    // Evento al dar click en btnIngresar
    $('#btnIngresar').click(function() {
        // Si contraseña no esta vacia
        if($('#password').val().length != 0) {
            iniciarSesion();
        }
        else {
            $('#password').attr('data-error', 'Completa este dato.');
            $('#password').addClass("invalid");
            $('#password').focus();
        }
    });

    // Evento al escribir en password
    $('#password').keyup(function() {
        // Si contraseña no esta vacia
        if($('#password').val().length != 0) {
            $('#password').removeClass("invalid");
        }

        // Si pulso enter
        if(event.keyCode === 13) {
            event.preventDefault();
            $('#btnIngresar').focus();
            $('#btnIngresar').click();
        }
    });

    // Iniciar sesion
    function iniciarSesion() {
        let objData = {
            strEmail : email,
            strContraseña : $('#password').val()
        };

        ajax('login/iniciarSesion',
            'POST',
            objData,
            'json',
            function(data) {
                // Si no se validaron los datos
                if(data.intExito == 0) {
                    return;
                }

                // Si los datos son incorrectos
                if(data.registro.length == 0) {
                    // Vaciar datos
                    $('#password').val('');

                    $('#password').attr('data-error', 'Revisa tu clave.');
                    $('#password').addClass("invalid");
                    $('#password').focus();
                }
                else {
                    // Enviar a la pagina de inicio
                    window.location.href = '';
                }
            }
        );
    }
</script>