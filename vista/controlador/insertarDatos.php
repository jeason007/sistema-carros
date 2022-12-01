<?php

require('./conexion.php');

$modelo =$_POST['modelo'];
$fano = $_POST['fano'];
$color = $_POST['color'];
$descripcion = $_POST['descripcion'];
$estado =$_POST['estado'];

//...................................
//ingresar imagen guardar en una carpeta ...
$img = $_FILES['img']['name'];
$archivo = $_FILES['img']['tmp_name'];
$ruta = "../img/" . $img;
$base_datos = "img/" . $img;
move_uploaded_file($archivo,$ruta);
//..............................
//............
$consulta = $bd->prepare("INSERT INTO carros(modelo,fano,color,descripcion,img,estado) Values(?,?,?,?,?,?)");
$valores = $consulta->execute([$modelo,$fano,$color,$descripcion,$base_datos,$estado]);
//forma alternativa para insertar datos ala base de datos...........
/*$sql = "INSERT INTO postres(nombre,porciones,descripcion,precio) Values(:nombre,:porciones,:descripcion,:precio)";
$valores =  $bd->prepare($sql);
//.....................
$valores->bindParam(':nombre',$nombre);
$valores->bindParam(':porciones',$porciones);
$valores->bindParam(':descripcion',$descripcion);
$valores->bindParam(':precio',$precio);*/
//..........................................................................
if($valores){
    header('location:http://localhost/CRUD-SISTEMA/vista');
}else{
    echo"no se guardo...";
}

    