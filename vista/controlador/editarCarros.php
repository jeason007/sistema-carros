<?php require './conexion.php';

$identificador = $_GET['id'];
$consulta = $bd->prepare("SELECT * from carros WHERE  id = ?");
$consulta->execute([$identificador]);
$datosExtraidos = $consulta->fetch(PDO::FETCH_OBJ);
//print_r($datosExtraidos);
?>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<style>
  html{background-color: #011d2e;}
  .form{background-color:#012033; 
        width: 100%; 
        height: auto; 
        padding: 20px 20px; 
        margin-top: 20px; 
        border-radius: 10px;
        box-shadow: 1px 1px 3px black, 1px 1px 3px black;
        color:greenyellow;
        text-align: center;
        padding-left: 50px;
        position: relative;}
        .foto{ background-color: rgba(0,0,0,0.5); width:100px; height: 100px; position: absolute; bottom: 5px; right: 5px; border-radius: 5px;}
        #car{width:100%; height: 100%; border-radius: 5px;}
</style>
</head>
<div class="container">
<div class="form">
<center>
<form action="./updateCarros.php" method="POST" enctype="multipart/form-data">
<div class="input-group flex-nowrap">
<input type="text" class="form-control" placeholder="marca de vehiculo" aria-label="" aria-describedby="addon-wrapping" name="modelo" value="<?php echo $datosExtraidos->modelo?>">
</div>
<div class="input-group flex-nowrap">
<input type="text" class="form-control" placeholder="Año de vehiculo" aria-label="" aria-describedby="addon-wrapping" name="fano" value="<?php echo $datosExtraidos->fano?>">
</div>
<div class="input-group flex-nowrap">
<input type="text" class="form-control" placeholder="color de vehiculo" aria-label="" aria-describedby="addon-wrapping" name="color" value="<?php echo $datosExtraidos->color?>">
</div>
<div class="input-group flex-nowrap">
<input type="text" class="form-control" placeholder="precio del vehiculo" aria-label="precio" aria-describedby="addon-wrapping" name="descripcion" value="<?php echo $datosExtraidos->descripcion?>">
</div>
<div class="input-group flex-nowrap">
<input type="text" class="form-control" placeholder="estado" aria-label="imagen" aria-describedby="addon-wrapping" name="estado" value="<?php echo $datosExtraidos->estado?>">
</div><br>
<div class="input-group flex-nowrap">
<input type="file" name="img" class="form-control" placeholder="imagen" aria-label="imagen" aria-describedby="addon-wrapping" name="img" value="<?php echo $datosExtraidos->img?>">
<br>
<div class="foto">
<img src="../<?php echo $datosExtraidos->img?>" id="car" alt="foto">
</div>
</div>
<br>
<div class="container">
<input name ="id" type="hidden" value="<?php echo $datosExtraidos->id?>">
<button type="submit" class="btn btn-secondary">modificar</button>
</div>
</form>
</div>
</center>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>