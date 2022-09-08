<div class="modal fade" id="modal-asignar">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-gray">
                <h4 class="modal-title text-white">Asignación de Clientes</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formAsiganr" action="" method="POST">
                @csrf 
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="nombre">Nombre completo</label>
                                <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" placeholder="Nombre" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Tipo documento</label>
                                <select class="form-control form-control-sm select2" id="tipo_documento" name="tipo_documento" required>
                                    <option selected="selected" value="DNI">DNI</option>
                                    <option value="RUC">RUC</option>
                                    <option value="CARNE">Carnet extranjería</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12" id="div_dni">
                            <div class="form-group">
                                <label>DNI</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input id="dni" name="dni" type="text" class="form-control form-control-sm" data-inputmask="'mask': ['99999999']" data-mask>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12" id="div_ruc">
                            <div class="form-group">
                                <label>RUC</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input id="ruc" name="ruc" type="text" class="form-control form-control-sm" data-inputmask="'mask': ['99999999999']" data-mask>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12" id="div_carne">
                            <div class="form-group">
                                <label>Carnet extranjería</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input id="carnet" name="carnet" type="text" class="form-control form-control-sm" data-inputmask="'mask': ['999999999999']" data-mask>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Número</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input id="numero" name="numero" type="text" class="form-control form-control-sm" data-inputmask="'mask': ['999 999 999']" data-mask>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-info text-white">Aceptar</button>
                    </div>                
                </form>
            </div>
        </div>
    </div>
</div>