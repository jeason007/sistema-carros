<!doctype html>
<html lang="en">
<head>
<title>vista-usuario</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS v5.2.1 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link href="./usuario.css" rel="stylesheet">
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
<div class="cont">
<div class="line-1">
<div class="logo"></div>
<div class="letras">
<h5 class="titu-1">Importadora OPEL El Salvador</h5>
<h6 class="titu-2">Certificado Internacional</h6>
<span class="material-symbols-outlined" id="certi">verified_user</span>
</div>
<div class="redes-inf">
<a href="#"><img src="../vista/img/instagram_108043.png" class="ico"></a>
<a href="#"><img src="../vista/img/facebook_108044.png" class="ico"></a>
<a href="#"><img src="../vista/img/youtube_108041.png" class="ico"></a>
<a href="#"><img src="../vista/img/whatsapp_108042.png" class="ico"></a>
</div>
</div>
<div class="buscador">
<div class=" ">
<form method="GET">
<input type="text" id="bus" placeholder="Busca Tu Vehiculo......" aria-label="Example text with button addon" aria-describedby="button-addon1" name="bus">
<button class="" type="submit" name="env" id="botonB">Buscar</button><br/>
</form>
</div>
</div>
<br/>
<div class="line-4">
<?php require '../vista/controlador/conexion.php';

$consulta = $bd->query("SELECT * FROM  carros");
$result = $consulta->fetchAll(PDO::FETCH_OBJ);
//...........................................
if(isset($_GET['env'])){
$busqueda = $_GET['bus'];
$consulta = $bd->query("SELECT * FROM  carros WHERE modelo LIKE '%$busqueda%'");
$result = $consulta->fetchAll(PDO::FETCH_OBJ);
}
?>
<center>
<div class="container">
<?php
      foreach($result as $datos){
?>
<div class="card text-center" id="card">
<div class="card-header">
<div class="color-status" style="background-color:<?php echo $datos->estado?>"></div>
</div>
<div class="card-body">
<!--condicional de estado-->
<div class="estado-i" style="background-color:<?php echo $datos->estado?>">
<?php
    if($datos->estado === 'green'){
      echo 'Disponible';
   }else if($datos->estado === 'red'){
     echo 'Vendido';
   }else if($datos->estado === 'yellow'){
      echo 'Reservado';
   }
  ?>
</div>
<!--fin...-->
<img src="../vista/<?php echo $datos->img?>" id="car" alt="foto">
<div class=" container conta"  style="border:1px solid <?php echo $datos->estado?>">
<li class="li">Modelo : <?php echo $datos->modelo?></li>
<li class="li">Año : <?php echo $datos->fano?></li>
<li class="li">Color : <?php echo $datos->color?></li>
<li class="li">Precio : $ <?php echo $datos->descripcion?></li>
<span class="material-symbols-outlined" id="certifi">verified</span>
</div>
<br>
<a href="#" class="btn btn-primary" id="boton-info">informacion</a>
</div>
<div class="card-footer text-muted"></div>
</div>
<?php } ?>
</div>
</div><br>
<div class="footer">
<div class="footer-side">
<span class="material-symbols-outlined" id="location">share_location</span>
<h6>Residencial Las Palmas Santa Elene , EL Salvador</h6>
<h6>Local #152 frente a pizza hut</h6>
<h6>Horarios : Lunes a viernes 8:00 am a 5:00pm</h6>
<h6>Horarios : Sabado y Domingos 8:00am a 12:00pm</h6>
</div>
<h5>visita nuestras instalaciones</h5>
<h6>servicio de reserva en linea  <span class="material-symbols-outlined" id="priority">priority</span></h6>
<span class="material-symbols-outlined" id="star">star</span>
<span class="material-symbols-outlined" id="star">star</span>
<span class="material-symbols-outlined" id="star">star</span>
<span class="material-symbols-outlined"id="star">star</span>
<span class="material-symbols-outlined" id="star">star</span>
</div>
<div class="linea-final"><h6 class="derechos">Derechos Reservados</h6></div>
</div>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
<!--Import jQuery before materialize.js-->
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>