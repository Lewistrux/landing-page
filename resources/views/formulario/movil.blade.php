<div class="modal fade" id="modal-movil">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-gray">
                <h4 class="modal-title text-white">Déjanos tus datos</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formMovil" action="" method="POST">
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
                        <!-- <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Departamento</label>
                                <select class="form-control form-control-sm select2" id="region" name="region" required>
                                    <option></option>
                                    @foreach($regiones as $region)
                                        <option value="{{ $region->regi_ID }}">{{ $region->regi_nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Provincia</label>
                                <select class="form-control form-control-sm select2" id="provincia" name="provincia" required>
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Distrito</label>
                                <select class="form-control form-control-sm select2" id="distrito" name="distrito" required>
                                    <option></option>
                                </select>
                            </div>
                        </div> -->
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>Localidad <span class="font-italic ">(Depto - Prov - Dist)</span> </label>
                                <select class="form-control form-control-sm select2" id="localidad" name="localidad" required>
                                    <option></option>
                                    @foreach(cargarCiudades() as $ciudad)
                                        <option value="{{ $ciudad->dist_ID }}">{{ $ciudad->regi_nombre }} - {{ $ciudad->prov_nombre }} - {{ $ciudad->dist_nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>  
                    <div class="modal-footer justify-content-between">
                        <button type="submit" class="btn btn-danger text-white w-100">Enviar</button>
                    </div>                
                </form>
            </div>
        </div>
    </div>
</div>