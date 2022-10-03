<div class="modal fade" id="modal-estado" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-gray">
                <h4 class="modal-title text-white">Actualizar estado de asignación de Cliente</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formEstado" action="" method="POST">
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
                    </div>  
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="nombre">Supervisor</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-sm" id="supervisor" name="supervisor" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>Estado</label>
                                <select class="form-control form-control-sm select2" id="estado" name="estado" required>
                                    <option></option>
                                    <option value="ASIGNADO">ASIGNADO</option>
                                    <option value="PROCESANDO">PROCESANDO</option>
                                    <option value="CANCELADO">CANCELADO</option>
                                    <option value="REASIGNADO">REASIGNADO</option>
                                    <option value="VENDIDO">VENDIDO</option>
                                    <option value="RECHAZADO">RECHAZADO</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12" id="div_supervisor">
                        <div class="form-group">
                            <label>Supervisor Reasignado</label>
                            <select class="form-control form-control-sm select2" id="reasignado" name="reasignado" required>
                                <option></option>
                                @foreach( getSupervisores() as $supervisor)
                                    <option value="{{ $supervisor->id }}">{{ $supervisor->nombres }} {{ $supervisor->apellidos }} <small class="text-xs text-muted font-italic"> - ({{$supervisor->area}})</small></option>
                                @endforeach
                            </select>
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