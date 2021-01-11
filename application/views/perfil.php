<link href="css/perfil.css" rel="stylesheet" type="text/css">



<div class="page-wrapper" style="margin-top: 20px; margin-bottom: 30px;">
    <div class="page-wrapper__content" id="app-root-wrapper">
        <div class="main-container profile">
            <h1 class="main-title">Mis datos</h1>
            <div class="section">
                <div class="section__title">
                    <h2 class="subtitle">Datos de cuenta</h2>
                </div>                
            </div>
            <div class="andes-card">
                <a href="Perfil/VistaModificarUsuario?id=<?=$this->session->userdata('id')?>">
                    <div class="field-value field-value--button" role="button" tabindex="0">
                        <div class="field-value__group">
                            <div class="field-value__group__field">Nombre</div>
                            <div class="field-value__group__value"><span><?=$usuario->nombre?></span>
                            </div>
                        </div>
                        <div class="field-value__action">
                            <svg class="chevron-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 17">
                                <path d="M26.086 2L13.543 14.513 1 2" stroke-width="3" fill-rule="evenodd" fill="none" stroke="#3483fa">                                
                                </path>
                            </svg>
                        </div>
                    </div>
                </a>
                <a href="Perfil/VistaModificarEmail?id=<?=$this->session->userdata('id')?>">
                    <div class="field-value field-value--button" role="button" tabindex="0">
                        <div class="field-value__group">
                            <div class="field-value__group__field">E-mail</div>
                            <div class="field-value__group__value"><span><?=$usuario->email?></span></div>
                        </div>
                        <div class="field-value__action">
                            <svg class="chevron-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 17">
                                <path d="M26.086 2L13.543 14.513 1 2" stroke-width="3" fill-rule="evenodd" fill="none" stroke="#3483fa">                                
                                </path>
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
            <div></div>
            <div></div>
            <div></div>
            
            <div class="section">
                <div class="section__title">
                    <h2 class="subtitle">Direcciones</h2>
                </div>
            </div>
            <div class="andes-card andes-card--addresses">
                <a href="">
                    <div class="field-value field-value--button" role="button" tabindex="0">
                        <div class="field-value__group">
                            <div class="field-value__group__field">Direccion</div>
                            <div class="field-value__group__value"><span>Direccion</span>
                            </div>
                        </div>
                        <div class="field-value__action">
                            <svg class="chevron-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 17">
                                <path d="M26.086 2L13.543 14.513 1 2" stroke-width="3" fill-rule="evenodd" fill="none" stroke="#3483fa">                                
                                </path>
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>