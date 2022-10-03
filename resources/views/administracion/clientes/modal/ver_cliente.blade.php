<div class="modal fade" id="modal-show" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <!-- <div class="modal-content"> -->
            <!-- <div class="modal-header bg-info">
                <h4 class="modal-title text-white">Información de Cliente</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div> -->
            <!-- <div class="modal-body"> -->
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0" id="estado">

                            </div>
                            <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="lead"><b id="nombre"></b></h2>
                                    <p class="text-muted text-sm"><b>DATOS: </b></p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class=""><span class="fa-li"><i class="fas fa-lg fa-map-marker-alt"></i></span> <b>LOCALIDAD: <small class="font-italic">(Dep-Prov-Dist)</small></b> <p id="direccion"></p> </li>
                                        <li class=""><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> <b>NÚMERO: </b> <P id="numero"></P> </li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">
                                    <img src="{{ asset('img/avatar/client.png') }}" alt="cliente" class="p-3 img-fluid">
                                </div>
                            </div>
                            </div>
                            <div class="card-footer">
                            <div class="text-right">
                                <a href="#" class="btn btn-sm bg-teal">
                                    <i class="fas fa-comments"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-primary">
                                    <i class="fas fa-user"></i> View Profile
                                </a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>  
                <!-- <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-info text-white">Aceptar</button>
                </div>                 -->
            <!-- </div> -->
        <!-- </div> -->
    </div>
</div>