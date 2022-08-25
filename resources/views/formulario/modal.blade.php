<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-gray">
                <h4 class="modal-title text-white">Déjanos tus datos</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
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
                                <select class="form-control form-control-sm select2" id="tipo_documento" name="tipo_documento">
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
                                    <input type="text" class="form-control form-control-sm" data-inputmask="'mask': ['99999999']" data-mask>
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
                                    <input type="text" class="form-control form-control-sm" data-inputmask="'mask': ['99999999999']" data-mask>
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
                                    <input type="text" class="form-control form-control-sm" data-inputmask="'mask': ['999999999999']" data-mask>
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
                                    <input type="text" class="form-control form-control-sm" data-inputmask="'mask': ['999-999-999']" data-mask>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Departamento</label>
                                <select class="form-control form-control-sm select2 ">
                                    <option selected="selected">La Libertad</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Provincia</label>
                                <select class="form-control form-control-sm select2 ">
                                    <option selected="selected">Trujillo</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Distrito</label>
                                <select class="form-control form-control-sm select2 ">
                                    <option selected="selected">La esperanza</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                        </div>
                    </div>  
                    <div class="modal-footer justify-content-between">
                        <!-- <button type="button" class="btn btn-default" data-dismiss="modal"></button> -->
                        <button type="button" class="btn btn-warning text-white w-100">Enviar</button>
                    </div>                
                </form>
                <!-- <p>One fine body&hellip;</p> -->
            </div>
        </div>
    </div>
</div>

    {{-- <div class="modal fade" id="modal-default" tabindex="-1" aria-labelledby="modal-block-small" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-danger">
                        <h3 class="block-title">Dar de baja matrícula del alumno</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <form id="formDelete" method="POST" action="">
                        @method('put')
                        @csrf
                        <div class="block-content">
                            <p>¿Está seguro que desea dar de baja la matrícula del alumno:
                                <span id="D_mensaje" class="font-w600"></span>?
                            </p>
                        </div>
                        <div class="block-content block-content-full text-right bg-light">
                            <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-sm btn-danger btn-confirm-delete">Aceptar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
    