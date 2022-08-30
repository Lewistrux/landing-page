<div class="modal fade" id="modal-postular">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-gray">
              <h4 class="modal-title">Trabaja con nosotros</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
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
                            <select class="form-control form-control-sm select2" id="tipo_documento" name="tipo_documento">
                                <option selected="selected" value="DNI">DNI</option>
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
                            <select class="form-control form-control-sm select2" id="region">
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
                            <select class="form-control form-control-sm select2" id="provincia">
                                <option></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Distrito</label>
                            <select class="form-control form-control-sm select2" id="distrito">
                                <option></option>
                            </select>
                        </div>
                    </div>

                </div>                  
              </form>
            
              <!-- <p>One fine body&hellip;</p> -->
            </div>
            <div class="modal-footer justify-content-between">
              <!-- <button type="button" class="btn btn-default" data-dismiss="modal"></button> -->
              <button type="button" class="btn btn-primary w-100">Enviar</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>