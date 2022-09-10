<div class="modal fade" id="modal-asignar" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-gray">
                <h4 class="modal-title text-white">Asignación de Clientes</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formAsignar" action="" method="POST">
                @csrf 
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="nombre">Cliente</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" disabled>
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
                                    <input id="numero" name="numero" type="text" class="form-control form-control-sm" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Área</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-layer-group"></i></span>
                                    </div>
                                    <input id="area" name="area" type="text" class="form-control form-control-sm" disabled>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <hr>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label>Asesor</label>
                            <select class="form-control form-control-sm select2" id="asesor" name="asesor" required>
                                <option></option>
                                <option value="Asesor">Asesor</option>
                            </select>
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