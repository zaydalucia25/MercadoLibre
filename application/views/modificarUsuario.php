




<link href="css/modificarUsuario.css" rel="stylesheet" type="text/css">

<form class="ui-form form-with-floating-labels" id="addresses-form" action="<?=base_url()?>Perfil/ModificarUsuario" name="addresses-form" method="post">


	<div id="app-root-wrapper">
		<div class="main-container profile">
			<h1 class="nickname-main-title">Modificar usuario</h1>
			<div class="andes-card nickname">
				<label class="andes-form-control andes-form-control--textfield andes-form-control--floated nickname-input">
					<div class="andes-form-control__control">
						<span class="andes-form-control__label">Nombre de usuario</span>

						<input datatestid="input" required name="strUsuario"  placeholder="<?=$usuario->nombre?>" rows="1" class="andes-form-control__field" maxlength="30">
						<input datatestid="input" hidden name="id" autofocus="" value="<?=$usuario->id?>" rows="1" class="" maxlength="30">
					</div>
					<div class="andes-form-control__border"></div>
				</label>
				<div class="nickname-info">
					<p class="info nickname-info-title">Para modificar tu usuario, ten en cuenta lo siguiente:
					</p>
					<div class="list"><p class="oval"></p>
						<p>No debe tener palabras inapropiadas o vulgares</p>
					</div>
					<div class="list"><p class="oval"></p>
						<p>Debe tener 1 espacio solamente</p>
					</div>
					<div class="list"><p class="oval"></p><p>Debe tener entre 3 y 30 caracteres</p>
					</div>
				</div>
				<button type="submit" class="andes-button andes-button--filled primary-button" datatestid="confirm-button"><span class="andes-button__content">Modificar</span>
				</button>
				<a href="javascript:history.back(-1);">
					<button type="button" class="andes-button andes-button--outline primary-button" datatestid="cancel-button"><span class="andes-button__content">Cancelar</span>
					</button>
				</a>
			</div>
		</div>
	</div>
</form>