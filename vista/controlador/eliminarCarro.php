<?php

require './conexion.php';
//traemos el id.......
$iden =$_GET['id'];
//hacemos la consulta.....
$consulta = $bd->prepare("DELETE FROM carros WHERE id = ? ");
//guardamos en una variable la consulta y la ejecutamos......
$resultado = $consulta->execute([$iden]);

if($resultado){
    header('location:http://localhost/CRUD-SISTEMA/vista/');
}else{
    echo"no se guardo...";
}







?>