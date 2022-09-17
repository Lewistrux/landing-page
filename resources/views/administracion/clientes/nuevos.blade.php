@extends('Layout.admin')
@section('pre-script')
<!-- SweetAlert2 -->
<link rel="stylesheet" href="{{ asset('Adminlte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
<!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('Adminlte/plugins/select2/css/select2.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('Adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('Adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('Adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('titulo-vista') 
    Clientes Nuevos 
@endsection

@section('contenido-admin')
    <div class="card card-warning card-outline">
      <div class="card-header">
        <h3 class="card-title">Listado de clientes nuevos</h3>
      </div>
      <div class="card-body">
        <table id="clientes" class="table table-sm table-bordered hover display nowrap">
          <thead>
            <tr>
              <th>Nombres</th>
              <th>N° Celular</th>
              <!-- <th>Tipo Doc</th>
              <th>N° Documento</th> -->
              <th>Área</th>
              <th>Departamento</th>
              <th>Provincia</th>
              <th>Distrito</th>
              <th>F. Registro</th>
              <th>Opciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach($clientes as $cliente)
              <tr>
                <td class="text-sm">{{ $cliente->nombres }}</td>
                <td class="text-sm">{{ $cliente->numero }}</td>
                <td class="text-sm text-center">{{ $cliente->area }}</td>
                <td class="text-sm">{{ $cliente->departamento }}</td>
                <td class="text-sm">{{ $cliente->provincia }}</td>
                <td class="text-sm">{{ $cliente->distrito }}</td>
                <td class="text-sm">{{ getFecha($cliente->created_at) }}</td>
                <td style="text-align: center;">
                  <div class="btn-group">
                    @if ($cliente->estado == 'NUEVO')
                      <button class="btn btn-sm btn-warning" data-id="{{ $cliente->id }}" data-nombre="{{ $cliente->nombres }}"
                        data-area="{{ $cliente->area }}" data-numero="{{ $cliente->numero }}" title="Asignar" data-toggle="modal" 
                        data-target="#modal-asignar">
                        <i class="fas fa-clipboard-check" ></i> Asignar
                      </button>
                    @endif
                  </div>
                </td>
                      
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    @include('administracion.clientes.modal.asignar')
@endsection

@section('post-script')
<!-- SweetAlert2 -->
<script src="{{ asset('Adminlte/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('Adminlte/plugins/select2/js/select2.full.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('Adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('Adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('Adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('Adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('Adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('Adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('Adminlte/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('Adminlte/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('Adminlte/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('Adminlte/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('Adminlte/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('Adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script>
    var IDCliente = 0
    $(function () {
      $("#clientes").DataTable({
        "autoWidth": false,
        "paging": true,
        "language": {
            "processing": "Procesando...",
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "emptyTable": "Ningún dato disponible en esta tabla",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar:",
            "infoThousands": ",",
            "loadingRecords": "Cargando...",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            },
            "aria": {
                "sortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sortDescending": ": Activar para ordenar la columna de manera descendente"
            },
            "buttons": {
                "copy": "Copiar",
                "colvis": "Visibilidad",
                "collection": "Colección",
                "colvisRestore": "Restaurar visibilidad",
                "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
                "copySuccess": {
                    "1": "Copiada 1 fila al portapapeles",
                    "_": "Copiadas %d fila al portapapeles"
                },
                "copyTitle": "Copiar al portapapeles",
                "csv": "CSV",
                "excel": "Excel",
                "pageLength": {
                    "-1": "Mostrar todas las filas",
                    "1": "Mostrar 1 fila",
                    "_": "Mostrar %d filas"
                },
                "pdf": "PDF",
                "print": "Imprimir"
            },
            "autoFill": {
                "cancel": "Cancelar",
                "fill": "Rellene todas las celdas con <i>%d<\/i>",
                "fillHorizontal": "Rellenar celdas horizontalmente",
                "fillVertical": "Rellenar celdas verticalmentemente"
            },
            "decimal": ",",
            "searchBuilder": {
                "add": "Añadir condición",
                "button": {
                    "0": "Constructor de búsqueda",
                    "_": "Constructor de búsqueda (%d)"
                },
                "clearAll": "Borrar todo",
                "condition": "Condición",
                "conditions": {
                    "date": {
                        "after": "Despues",
                        "before": "Antes",
                        "between": "Entre",
                        "empty": "Vacío",
                        "equals": "Igual a",
                        "notBetween": "No entre",
                        "notEmpty": "No Vacio",
                        "not": "Diferente de"
                    },
                    "number": {
                        "between": "Entre",
                        "empty": "Vacio",
                        "equals": "Igual a",
                        "gt": "Mayor a",
                        "gte": "Mayor o igual a",
                        "lt": "Menor que",
                        "lte": "Menor o igual que",
                        "notBetween": "No entre",
                        "notEmpty": "No vacío",
                        "not": "Diferente de"
                    },
                    "string": {
                        "contains": "Contiene",
                        "empty": "Vacío",
                        "endsWith": "Termina en",
                        "equals": "Igual a",
                        "notEmpty": "No Vacio",
                        "startsWith": "Empieza con",
                        "not": "Diferente de"
                    },
                    "array": {
                        "not": "Diferente de",
                        "equals": "Igual",
                        "empty": "Vacío",
                        "contains": "Contiene",
                        "notEmpty": "No Vacío",
                        "without": "Sin"
                    }
                },
                "data": "Data",
                "deleteTitle": "Eliminar regla de filtrado",
                "leftTitle": "Criterios anulados",
                "logicAnd": "Y",
                "logicOr": "O",
                "rightTitle": "Criterios de sangría",
                "title": {
                    "0": "Constructor de búsqueda",
                    "_": "Constructor de búsqueda (%d)"
                },
                "value": "Valor"
            },
            "searchPanes": {
                "clearMessage": "Borrar todo",
                "collapse": {
                    "0": "Paneles de búsqueda",
                    "_": "Paneles de búsqueda (%d)"
                },
                "count": "{total}",
                "countFiltered": "{shown} ({total})",
                "emptyPanes": "Sin paneles de búsqueda",
                "loadMessage": "Cargando paneles de búsqueda",
                "title": "Filtros Activos - %d"
            },
            "select": {
                "1": "%d fila seleccionada",
                "_": "%d filas seleccionadas",
                "cells": {
                    "1": "1 celda seleccionada",
                    "_": "$d celdas seleccionadas"
                },
                "columns": {
                    "1": "1 columna seleccionada",
                    "_": "%d columnas seleccionadas"
                }
            },
            "thousands": ".",
            "datetime": {
                "previous": "Anterior",
                "next": "Proximo",
                "hours": "Horas",
                "minutes": "Minutos",
                "seconds": "Segundos",
                "unknown": "-",
                "amPm": [
                    "am",
                    "pm"
                ]
            },
            "editor": {
                "close": "Cerrar",
                "create": {
                    "button": "Nuevo",
                    "title": "Crear Nuevo Registro",
                    "submit": "Crear"
                },
                "edit": {
                    "button": "Editar",
                    "title": "Editar Registro",
                    "submit": "Actualizar"
                },
                "remove": {
                    "button": "Eliminar",
                    "title": "Eliminar Registro",
                    "submit": "Eliminar",
                    "confirm": {
                        "_": "¿Está seguro que desea eliminar %d filas?",
                        "1": "¿Está seguro que desea eliminar 1 fila?"
                    }
                },
                "error": {
                    "system": "Ha ocurrido un error en el sistema (<a target=\"\\\" rel=\"\\ nofollow\" href=\"\\\">Más información&lt;\\\/a&gt;).<\/a>"
                },
                "multi": {
                    "title": "Múltiples Valores",
                    "info": "Los elementos seleccionados contienen diferentes valores para este registro. Para editar y establecer todos los elementos de este registro con el mismo valor, hacer click o tap aquí, de lo contrario conservarán sus valores individuales.",
                    "restore": "Deshacer Cambios",
                    "noMulti": "Este registro puede ser editado individualmente, pero no como parte de un grupo."
                }
            },
            "info": "Mostrando de _START_ a _END_ de _TOTAL_ registros"
        },
        "lengthChange": true,
        "ordering": true,
        "info": true,
        "responsive": true,
        "buttons": {
          buttons: [{
            extend: 'copy',
            text: '<i class="fas fa-copy"></i> Copiar',
            title: $('h1').text(),
            exportOptions: {
              columns: ':not(.no-print)'
            },
            className: 'btn btn-dark btn-sm',
            footer: true
          }, {
            extend: 'print',
            text: '<i class="fa fa-print"></i> Imprimir',
            title: $('h1').text(),
            exportOptions: {
              columns: ':visible'
            },
            className: 'btn btn-info btn-sm',
            footer: true,
            customize: function (win) {
                $(win.document.body).find('table').addClass('display').css('font-size', '12px');
                $(win.document.body).find('tr:nth-child(odd) td').each(function(index){
                    $(this).css('background-color','#D0D0D0');
                });
                $(win.document.body).find('h1').css('text-align','center');
            }
          }, {
            extend: 'pdf',
            text: '<i class="fas fa-file-pdf"></i> PDF',
            title: $('h1').text(),
            exportOptions: {
              columns: ':not(.no-print)'
            },
            className: 'btn btn-danger btn-sm',
            footer: true
          }, {
            extend: 'excel',
            text: '<i class="fas fa-file-excel"></i> EXCEL',
            title: $('h1').text(),
            exportOptions: {
              columns: ':not(.no-print)'
            },
            className: 'btn btn-success btn-sm',
            footer: true
          }, {
            extend: 'csv',
            text: '<i class="fas fa-file-csv"></i> CVS',
            title: $('h1').text(),
            exportOptions: {
              columns: ':not(.no-print)'
            },
            className: 'btn btn-warning btn-sm',
            footer: true
          }, {
            extend: 'colvis',
            text: '<i class="fas fa-search"></i> Ver',
            title: $('h1').text(),
            exportOptions: {
              columns: ':not(.no-print)'
            },
            className: 'btn btn-default btn-sm',
            footer: true
          }],
          dom: {
            container: {
              className: 'dt-buttons'
            }
          }
        }
      }).buttons().container().appendTo('#clientes_wrapper .col-md-6:eq(0)');

  });
    $(document).ready(function(){
        $('.select2').select2({
          placeholder: "Seleccionar",
          allowClear: false,
          width: '100%',
        });
        
        // MODALS
        $('#modal-asignar').on('show.bs.modal', showModalAsignar)

        // FORMULARIOS
        $('#formAsignar').on('submit', submitFormAsignar)
    })

    function showModalAsignar(event){
      let button = $(event.relatedTarget) // Button that triggered the modal
      
      IDCliente = button.data('id');
      let nombre = button.data('nombre');
      let numero = button.data('numero');
      let area = button.data('area');
      // cargamos el modal
      let modal = $(this);
      $('#nombre').val(nombre);
      $('#numero').val(numero);
      $('#area').val(area);

      //modal.find('#A_mensaje').text(nombre);
    }

    function submitFormAsignar(e){
        e.preventDefault();
        let enlace = "{{ route('clientes.asignar','IDCliente') }}"
        enlace = enlace.replace('IDCliente', IDCliente)
        
        $.ajax({
            type: "POST",
            url: enlace,
            data: $('#formAsignar').serialize(),
            success: function(response){
              $('#modal-asignar').modal('hide');
              if (!response.error) {
                let Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 3000
                });
                Toast.fire({
                  icon: 'success',
                  title: response.message
                })
                location.reload();
              } else {
                let Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 3000
                });
                Toast.fire({
                  icon: 'error',
                  title: response.message
                })
              }
            },
            error: function(error){
                console.log(error)
            }
        });
    }
</script>
@endsection