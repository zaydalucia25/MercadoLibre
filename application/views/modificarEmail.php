<link href="css/modificarEmail.css" rel="stylesheet" type="text/css">

<form class="ui-form form-with-floating-labels" id="addresses-form" action="<?=base_url()?>Perfil/ActualizarEmail" name="addresses-form" method="post">

	<div id="app-root-wrapper" style="margin-bottom: 30px;">
		<div class="main-container profile">
			<h1 class="nickname-main-title">Modificar e-mail</h1>
			<div class="andes-card nickname">
				<label class="andes-form-control andes-form-control--textfield nickname-input">
					<div class="andes-form-control__control">
						
						<input id="email1" datatestid="input" autofocus="" type="email" required autofocus=""  rows="1" class="andes-form-control__field" maxlength="100" placeholder="Ingresa tu nuevo e-mail">
					</div>
					<div class="andes-form-control__border"></div>
				</label>
				<label class="andes-form-control andes-form-control--textfield nickname-input">
					<div class="andes-form-control__control">
						
						
						<input id="email2" datatestid="input" type="email" required name="strEmail"  rows="1" class="andes-form-control__field" maxlength="100" placeholder="Repetir e-mail" onfocusout="comparar()">

						<input datatestid="input" value="<?=$usuario->id?>" hidden rows="1" class="" maxlength="100"  name="id">
					</div>
					<div class="andes-form-control__border"></div>
				</label>
				<button type="submit" class="andes-button andes-button--filled primary-button andes-button--disabled"  datatestid="confirm-button">
					<span class="andes-button__content">Guardar</span>
				</button>
				<a role="button" href="javascript:history.back(-1);" class="andes-button andes-button--outline primary-button" datatestid="cancel-button">
					<span class="andes-button__content">Cancelar</span>
				</a>
			</div>
		</div>
	</div>
</form>

<script >
	function comparar(){
		var email1 = document.getElementById("email1").value;
		var email2 = document.getElementById("email2").value;

		if (email1 != email2){
			alert('Los correos no coinciden');
			 document.getElementById("email1").value="";
			 document.getElementById("email2").value="";
			 document.getElementById("email2").focus();
		}

	}


</script>