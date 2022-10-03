<?php

use App\Asesor;
use App\Asignacion;
use App\Cliente;
use App\Models\Distrito;
use App\Models\Locacion;
use App\Persona;
use App\Models\Usuario;
use App\Postulante;
use App\Supervisor;
use Carbon\Carbon;
use PhpParser\Node\Expr\AssignOp\Concat;

if (! function_exists('usuario')) {
  function usuario()
  {
    return auth()->user();
  }
}

if (! function_exists('getNombresYApellidosUser')) {
  function getNombresYApellidosUser()
  {
    $usuario = usuario();
    $data = $usuario->nombres.' '.$usuario->apellidos;
    return $data;
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

if (! function_exists('aviso_clientes_nuevos')) {
  function aviso_clientes_nuevos()
  {
    $clientes = Cliente::where('estado','NUEVO')->get();
    return count($clientes);
  }
}

if (! function_exists('aviso_postulantes_nuevos')) {
  function aviso_postulantes_nuevos()
  {
    $postulantes = Postulante::where('estado','NUEVO')->get();
    return count($postulantes);
  }
}

if (! function_exists('aviso_clientes_vendidos')) {
  function aviso_clientes_vendidos()
  {
    $ventas = Asignacion::where('estado','VENDIDO')->get();
    return count($ventas);
  }
}

if (! function_exists('total_clientes')) {
  function total_clientes()
  {
    $clientes = Cliente::all();
    return count($clientes);
  }
}

if (! function_exists('getSupervisores')) {
  function getSupervisores()
  {
    $supervisores = Supervisor::join('areas as ar','ar.id','supervisores.area_id')
    ->where('supervisores.activo',true)
    ->select('supervisores.id','supervisores.nombres','supervisores.apellidos','ar.nombre as area')
    ->get();
    return $supervisores;
  }
}

if (! function_exists('getAsesores')) {
  function getAsesores()
  {
    $asesores = Asesor::join('areas as ar','ar.id','asesores.area_id')
    ->where('asesores.activo',true)
    ->select('asesores.id','asesores.nombres','asesores.apellidos','ar.nombre as area')
    ->get();
    return $asesores;
  }
}

if (! function_exists('getDireccionClienteByAsignacion')) {
  function getDireccionClienteByAsignacion($idAsignacion)
  {
    if ( $idAsignacion!= null && $idAsignacion != '') {
      $asignacion = Asignacion::join('clientes as cl','cl.id','asignaciones.cliente_id')
        ->where('asignaciones.activo',true)
        ->where('asignaciones.id',$idAsignacion)
        ->select('cl.distrito','cl.provincia','cl.departamento')
        ->first();

      return $asignacion->distrito.' - '.$asignacion->provincia;
    } else {
      return 'SIN DIRECCIÓN';
    }
    
    
  }
}

if (!function_exists('getFecha')) {
  function getFecha($fecha, $formato = null)
  {
      if (is_null($formato))
          $formato = 'd/m/Y';

      return Carbon::parse($fecha)->format($formato);
  }
}

if(!function_exists('getEstado_asignacion')){
  function getEstado_asignacion($estado)
  {
    switch ($estado) {
      case 'ASIGNADO':
          return "secondary";
      case 'PROCESANDO':
          return "info";
      case 'VENDIDO':
          return "success";
      case 'RECHAZADO':
          return "danger";
      case 'CANCELADO':
          return "dark";
      case 'REASIGNADO':
          return "warning";
        break;
    }
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
