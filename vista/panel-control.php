<!doctype html>
<html lang="en">
<head>
  <title>....</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <style>
  #exampleModal{background-color:rgb(0,0,0,0.5);}
  .modal-content{background-color: #012033; color:yellowgreen;}
  #form-1{color:yellowgreen;}
  .conte-boton{position: relative; background-color: none; width: 100%; height: 40px; padding: 5px 5px;}
  #boton-fo2{ background-color: #036dad; position: absolute; top:5px; right: 5px;}
  #boton-fo2:hover{cursor: pointer; background-color: #012033; box-shadow: 2px 2px 6px #012033,-2px -2px 6px #012033 ;}
  #boton-fo{ background-color: #036dad; }
  #boton-fo:hover{cursor: pointer; background-color: #012033; box-shadow: 2px 2px 6px #012033,-2px -2px 6px #012033 ;}
  </style>
</head>
<div class="datos">
<div class="container">
<br/>
<div class="input-group mb-3">
<form method="GET">
<input type="text" class="form-control" id="bus-color" placeholder="BUSCAR AUTOMOVIL...." aria-label="Recipient's username" aria-describedby="button-addon2" name="busqueda">
<button class="btn btn-success" type="submit" id="boton-fo" name="enviar" >Buscar</button>
</form>
</div>
<div class="conte-boton">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" id="boton-fo2">insertar datos</button>
</div>
</div>
<br/>
<div class="container">
<?php require './controlador/conexion.php';
$consulta = $bd->query("SELECT * FROM  carros");
$result = $consulta->fetchAll(PDO::FETCH_OBJ);
//...........
if(isset($_GET['enviar'])){
$busqueda = $_GET['busqueda'];
$consulta = $bd->query("SELECT * FROM  carros WHERE modelo LIKE '%$busqueda%'");
$result = $consulta->fetchAll(PDO::FETCH_OBJ);
}
?>
<?php
   foreach($result as $datos){
?>  
<ul class="collapsible" data-collapsible="accordion" id="lio">
<li>
<div class="collapsible-header" id="he"><span class="material-symbols-outlined">no_crash</span>&nbsp;&nbsp;&nbsp;<?php echo $datos->modelo?> <?php echo $datos->fano?></div>
<div class="collapsible-body">
<ul>
<li class="dato-1">Modelo : &nbsp;<b class="dato"><?php echo $datos->modelo?></b></li>
<li class="dato-1">Año : &nbsp;<b class="dato"><?php echo $datos->fano?></b></li>
<li class="dato-1">Color : &nbsp;<b class="dato"><?php echo $datos->color?></b></li>
<li class="dato-1">Precio $ : &nbsp;<b class="dato"><?php echo $datos->descripcion?></b></li>
<a href="./controlador/editarCarros.php?id=<?php echo $datos->id?>" class="btn btn-success boton-editar" id="boton-fo">update</a>
<a href="./controlador/eliminarCarro.php?id=<?php echo $datos->id?>" class="btn btn-success boton-eliminar" id="boton-fo">delete</a>
</ul>
<br/>
<div class="imagenes">
<img src="../vista/<?php echo $datos->img?>" class="img-re"/>
</div>
</div>
</li>
</ul>
<?php }?>  
<div class="footer">
<div class="container">
<div class="ingresar-dato">
<div class="container">
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
<div class="modal-dialog" >
<div class="modal-content">
<div class="modal-header">
<span class="material-symbols-outlined">
system_update_alt
</span> &nbsp; &nbsp;<h1 class="modal-title fs-5" id="exampleModalLabel">Ingresa Vehiculo</h1>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<form action="./controlador/insertarDatos.php" method="POST" enctype="multipart/form-data" id="form-1">
<div class="input-group flex-nowrap">
<input type="text" class="form-control" placeholder="marca de vehiculo" aria-label="" aria-describedby="addon-wrapping" name="modelo" id="form-1">
</div>
<div class="input-group flex-nowrap">
<input type="text" class="form-control" placeholder="Año de vehiculo" aria-label="" aria-describedby="addon-wrapping" name="fano" id="form-1">
</div>
<div class="input-group flex-nowrap">
<input type="text" class="form-control" placeholder="color de vehiculo" aria-label="" aria-describedby="addon-wrapping" name="color" id="form-1">
</div>
<div class="input-group flex-nowrap">
<input type="text" class="form-control" placeholder="precio del vehiculo" aria-label="precio" aria-describedby="addon-wrapping" name="descripcion" id="form-1">
</div>
<div class="input-group flex-nowrap">
<input type="file" name="img" class="form-control" placeholder="imagen" aria-label="imagen" aria-describedby="addon-wrapping" name="img" id="form-1">
</div>
<div class="input-group flex-nowrap">
<input type="text" class="form-control" placeholder="estado" aria-label="imagen" aria-describedby="addon-wrapping" name="estado">
</div>
<div class="container">
<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
<button type="submit" class="btn btn-primary">enviar</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="line-final">Derechos Reservados  <span class="material-symbols-outlined">join</span></div>
      
</div>
<!--Import jQuery before materialize.js-->
<script>  
      $(document).ready(function(){
    $('.collapsible').collapsible();
      });
        </script>
         
        <script > $(document).ready(function(){
      $('.carousel').carousel();
         });
</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!--sweetalert-->
<script src="sweetalert2.all.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../javascript/sweetalert.js"></script> 
<script src="sweetalert2.all.min.js"></script>

</div>
</html>