<?php
require '../../Modelo/Login.php';
session_start();
if($_SESSION["autenticado"]=false){
    header('location:../../index.html');
}else{
	header('location:../../Vista/principal.php');
}
?>