/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************************!*\
  !*** ./resources/js/modulos/locacion.js ***!
  \******************************************/
$(document).ready(function () {
  $('#select_region').change(function () {
    $.ajax({
      url: "/provincias/" + $('#select_region').val(),
      type: 'GET',
      success: function success(data, state) {
        console.log("Provincias...", data);

        try {
          $("#select_provincia").empty();
          $("#select_provincia").append('<option value="0" selected disabled hidden>Seleccione provincia...</option>');
          $("#select_distrito").empty();
          $("#select_distrito").append('<option value="0" selected disabled hidden>Seleccione distrito...</option>');

          for (var i = 0; i < data.length; i++) {
            $("#select_provincia").append("<option value='" + data[i].prov_ID + "'>" + data[i].prov_nombre + "</option>");
          }
        } catch (e) {
          console.log(e);
        }
      }
    });
  });
  $('#select_provincia').change(function () {
    $.ajax({
      url: "/distritos/" + $('#select_provincia').val(),
      type: 'GET',
      success: function success(data, state) {
        console.log("Distritos...", data);

        try {
          $("#select_distrito").empty();
          $("#select_distrito").append('<option value="0" selected disabled hidden>Seleccione distrito...</option>');

          for (var i = 0; i < data.length; i++) {
            $("#select_distrito").append("<option value='" + data[i].dist_ID + "' ubigeo='" + data[i].dist_codigo + "'>" + data[i].dist_nombre + "</option>");
          }
        } catch (e) {
          console.log(e);
        }
      }
    });
  });
  $('#select_distrito').change(function () {
    var idCategoria = $(this).attr("ubigeo");
    console.log(idCategoria);
    $('#ubigeo').val($("#select_distrito option:selected").attr("ubigeo"));
  });
});
/******/ })()
;