<?php

//print_r($_POST);

require './conexion.php';
$id =$_POST['id'];
$modelo =$_POST['modelo'];
$fano = $_POST['fano'];
$color = $_POST['color'];
$descripcion = $_POST['descripcion'];
$img = $_FILES['img']['name'];
$estado = $_POST['estado'];
//...
$base_datos = "img/" . $img;

$consulta = $bd->prepare(" UPDATE carros set modelo = ?, fano = ? , color = ?, descripcion = ?, img = ? , estado = ? WHERE id = ?");
$respuesta = $consulta->execute([$modelo,$fano,$color,$descripcion,$base_datos,$estado,$id]);

if($respuesta){
    header('location:http://localhost/CRUD-SISTEMA/vista/');
}else{
    echo"no se guardo...";
}







?>