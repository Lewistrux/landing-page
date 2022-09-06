<?php

use App\Models\Distrito;
use App\Models\Locacion;
use App\Models\Persona;
use App\Models\Usuario;

if (! function_exists('usuario')) {
  function usuario()
  {
    return auth()->user();
  }
}
if (!function_exists('setCadena')) {
  function setCadena($cadena, $lower = false)
  {
      if ($lower)
          return mb_strtolower(trim($cadena));

      return mb_strtoupper(trim($cadena));
  }
}

// if (!function_exists('setNumero')) {
//   function setNumero($cadena)
//   {
//     return ($cadena);
//   }
// }
// if (! function_exists('nombre_apellidos')) {
//   function nombre_apellidos()
//   {
//     $usuario = usuario();
//     $persona = Persona::where('pers_usuarioID',$usuario->usua_ID)->first();
//     $nombre_apellidos = $persona->pers_nombres." ".$persona->pers_paterno." ".$persona->pers_materno;
//     return $nombre_apellidos;
//   }
// }

// if (! function_exists('get_NombresCompletos')) {
//   function get_NombresCompletos($idPersona)
//   {
//     $persona = Persona::findOrFail($idPersona);
//     $nombre_apellidos = $persona->pers_nombres." ".$persona->pers_paterno." ".$persona->pers_materno;
//     return $nombre_apellidos;
//   }
// }

// if (! function_exists('get_NombreUsuario')) {
//   function get_NombreUsuario($idUsuario)
//   {
//     $usuario = Usuario::findOrFail($idUsuario);
//     return $usuario->usua_nombre;
//   }
// }

// if (! function_exists('get_NombresByUsuario')) {
//   function get_NombresByUsuario($idUsuario)
//   {
//     $usuario = Usuario::findOrFail($idUsuario);
//     $persona = Persona::where('pers_usuarioID',$usuario->usua_ID)->first();
//     if ( $persona ){
//       $nombre_apellidos = $persona->pers_nombres." ".$persona->pers_paterno." ".$persona->pers_materno;
//     }else{
//       $nombre_apellidos = "Usuario Invitado";
//     }
//     return $nombre_apellidos;
//   }
// }

// if (! function_exists('get_Direccion')) {
//   function get_Direccion($idPersona)
//   {
//     $persona = Persona::findOrFail($idPersona);
//     $locacion = Locacion::findOrFail($persona->pers_locacionID);
//     if ($locacion) {
//       $distrito = Distrito::findOrFail($locacion->loca_distritoID);
//       if ($distrito) {
//         $direccion = $locacion->loca_direccion."-".$distrito->dist_nombre;
//       }
//       else
//       {
//         $direccion = $locacion->loca_direccion;
//       }
//     }
//     return $direccion;
//   }
// }

// if (! function_exists('formato_fecha')) {
//   function formato_fecha($fecha)
//   {
//     $formato = date("d/m/Y", strtotime( $fecha ))." ".substr($fecha, 10);

//     return $formato;
//   }
// }

// if (! function_exists('formato_fecha_conDia')) {
//   function formato_fecha_conDia($fecha)
//   {
//     $week_days = array ("", "Lun", "Mar", "Mie", "Jue", "Vie", "Sáb", "Dom");
//     $dia_semana = $week_days[(date('N', strtotime($fecha)))];
//     $formato = $dia_semana.", ".date("d/m/Y", strtotime( $fecha ))." - ".substr($fecha, 10);

//     return $formato;
//   }
// }

// if (! function_exists('formato_onlyfecha')) {
//   function formato_onlyfecha($fecha)
//   {
//     $formato = date("Y-m-d", strtotime( $fecha ));

//     return $formato;
//   }
// }

// if (! function_exists('formato_DiaMesAnio')) {
//   function formato_DiaMesAnio($fecha)
//   {
//     $onlyfecha = substr($fecha, 0, 10);
//     $aux = explode('-',$onlyfecha);
//     $week_days = array ("", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado", "Domingo");
//     //$months = array ("", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
//     $months = array ("", "Ene.", "Feb.", "Mar.", "Abr.", "May.", "Jun.", "Jul.", "Ago.", "Sep.", "Oct.", "Nov.", "Dic.");
//     // $year_now = date ("Y");
//     // $month_now = date ("n");
//     // $day_now = date ("j");
//     //$week_day_now = date ("w");
//     //dd($months[(int)$aux[1]]);
//     $dia_semana = $week_days[(date('N', strtotime($fecha)))];
//     //$date = $week_days[$week_day_now] . ", " . $aux[2] . " de " . $months[$aux[1]] . " de " . $aux[0];
//     $date = $dia_semana.", ".$aux[2] . " de " . $months[(int)$aux[1]] . " del " . $aux[0];
//     //$date = $day_now . " de " . $months[$month_now] . " de " . $year_now;
//     return $date;
//   }
// }

// if (! function_exists('formato_onlyhora')) {
//   function formato_onlyhora($fecha)
//   {
//     $formato = substr($fecha, 10);

//     return $formato;
//   }
// }

// if (! function_exists('fecha_actual')) {
//   function fecha_actual()
//   {
//     $fecha = date('Y-m-d h:i:s', time());
//     return $fecha;
//   }
// }

// if (! function_exists('fechas_iguales')) {
//   function fechas_iguales($fecha1, $fecha2)
//   {
//     //dd(strtotime( formato_onlyfecha($fecha1)), strtotime( formato_onlyfecha($fecha2) ));
//     if (strtotime( formato_onlyfecha($fecha1) ) == strtotime( formato_onlyfecha($fecha2) )) {
//       return true;
//     }
//     return false;
//   }
// }

// if (! function_exists('get_Roles')) {
//   function get_Roles()
//   {
//     $roles = Rol::get();

//     return $roles;
//   }
// }


// if (! function_exists('get_RolbyUser')) {
//   function get_RolbyUser($idUsuario)
//   {
//     $usuario = Usuario::join('rol','rol.rol_ID','usuario.usua_rolID')->first();

//     return $usuario->rol_nombre;
//   }
// }


// if (!function_exists('get_EstadoCompra')) {
//   function get_EstadoCompra($estado)
//   {
//     switch ($estado) {
//       case "EMITIDA":
//           return "info";
//       case "PENDIENTE":
//           return "warning";
//       case "RECHAZADA":
//           return "secondary";
//       case "APROBADA":
//           return "primary";
//       case "CANCELADA":
//           return "danger";
//       case "FINALIZADA":
//           return "success";
//       case "AUTORIZADA":
//           return "primary";
//       case "EN ESPERA":
//           return "success";
//       case "RECEPCIONADA":
//           return "success";
//           break;
//     }
//   }
// }

// if (! function_exists('get_NombreProducto')) {
//   function get_NombreProducto($idProducto)
//   {
//     $producto = Producto::findOrFail($idProducto);
//     return $producto->prod_nombre;
//   }
// }

// if (! function_exists('get_dataProducto')) {
//   function get_dataProducto($idProducto)
//   {
//     $producto = Producto::findOrFail($idProducto);
//     return $producto;
//   }
// }

// Para listar las ventas

// if (! function_exists('get_dataCliente')) {
//   function get_dataCliente($id, $tipo)
//   {
//     $respuesta = "";

//     if ( $tipo=="PERSONA" ){
//       $cliente = Cliente::select('persona.pers_paterno', 'persona.pers_materno', 'persona.pers_nombres')
//                           ->join('persona', 'persona.pers_ID', 'cliente.clie_personaID')
//                           ->where('cliente.clie_ID', $id)
//                           ->where('cliente.clie_estado', 1)
//                           ->where('persona.pers_estado', 1)
//                           ->first();

//       $respuesta = $cliente->pers_paterno." ".$cliente->pers_materno." ".$cliente->pers_nombres;
//     }else{
//       $cliente = Cliente::select('empr_razonSocial')
//                           ->join('empresa', 'empresa.empr_ID', 'cliente.clie_empresaID')
//                           ->where('cliente.clie_ID', $id)
//                           ->where('cliente.clie_estado', 1)
//                           ->where('empresa.empr_estado', 1)
//                           ->first();

//       $respuesta = $cliente->empr_razonSocial;
//     }
//     return $respuesta;
//   }
// }

// if (! function_exists('get_nameUser')) {
//   function get_nameUser($id)
//   {
//     $user = Usuario::findOrFail($id);

//     return $user->usua_nombre;
//   }
// }

// if (! function_exists('get_detalles_bicicleta')) {
//   function get_detalles_bicicleta($idBicicleta, $caso){

//     if ( $caso ){
//       $detalles = DetalleBicicleta::select('debi_especificacionID as id', 'especificacion.espe_desc as nombre')
//                                   ->join('especificacion', 'especificacion.espe_ID', 'detalle_bicicleta.debi_especificacionID')
//                                   ->where('debi_productoID', $idBicicleta)
//                                   ->where('especificacion.espe_estado', 1)
//                                   ->orderBy('especificacion.espe_desc', 'asc')->get();
//     }else{
//       $detalles = DetalleBicicleta::join('especificacion', 'especificacion.espe_ID', 'detalle_bicicleta.debi_especificacionID')
//                                   ->where('debi_productoID', $idBicicleta)
//                                   ->where('especificacion.espe_estado', 1)
//                                   ->orderBy('especificacion.espe_desc', 'asc')->get();
//     }

//     return $detalles;
//   }
// }

// UBIGEO
// if (!function_exists('departamentos')) {
//     function departamentos($id = null)
//     {
//         if (is_null($id)) {
//             return Departamento::all();
//         } else {
//             $departamento_id = str_pad($id, 2, "0", STR_PAD_LEFT);
//             return Departamento::where('id', $departamento_id)->first();
//         }
//     }
// }


// if (!function_exists('provincias')) {
//     function provincias($id = null)
//     {
//         if (is_null($id)) {
//             return Provincia::all();
//         } else {
//             $provincia_id = str_pad($id, 4, "0", STR_PAD_LEFT);
//             return Provincia::where('id', $provincia_id)->first();
//         }
//     }
// }

// if (!function_exists('distritos')) {
//     function distritos($id = null)
//     {
//         if (is_null($id)) {
//             return Distrito::all();
//         } else {
//             $distrito_id = str_pad($id, 6, "0", STR_PAD_LEFT);
//             return Distrito::where('id', $distrito_id)->first();
//         }
//     }
// }

// if (! function_exists('get_locacion')){
//   function get_locacion($idLocacion){
//     $locacion = Locacion::join('distrito', 'distrito.dist_ID', 'locacion.loca_distritoID')
//                         ->join('provincia', 'provincia.prov_ID', 'distrito.dist_provinciaID')
//                         ->join('region', 'region.regi_ID', 'provincia.prov_regionID')
//                         ->where('locacion.loca_ID', $idLocacion)
//                         ->first();

//     return $locacion;
//   }
// }

