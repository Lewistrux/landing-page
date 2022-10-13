<div class="modal fade" id="modal-postular" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-gray">
                <h4 class="modal-title text-white">Trabaja con nosotros</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formPostular" action="" method="POST" enctype="multipart/form-data">
                @csrf 
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="nombre">Nombres y Apellidos</label>
                                <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" placeholder="Nombre" required>
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
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Sugerencia de puesto</label>
                                <select class="form-control form-control-sm select2" id="puesto" name="puesto" required>
                                    <option></option>
                                    <option value="ASESOR">ASESOR</option>
                                    <option value="SUPERVISOR">SUPERVISOR</option>
                                    <option value="MESA DE CONTROL">MESA DE CONTROL</option>
                                    <option value="RECURSOS HUMANOS">RECURSOS HUMANOS</option>
                                </select>
                            </div>
                        </div>
                    </div>  
                    <div class="col-12" id="div_practicante">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input custom-control-input-info" type="checkbox" id="practicante" name="practicante">
                            <label for="practicante" class="custom-control-label">Soy Practicante</label>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="customFile">Subir CV <small class="font-italic text-sm">fromato (.pdf)</small></label>
                                <div class="custom-file">
                                    <input type="file" class="" id="archivo_cv" name="archivo_cv" accept="application/pdf">
                                    <label class="custom-file-label" for="archivo_cv">Seleccionar archivo</label>
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