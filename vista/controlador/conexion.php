<?php
$nombrebd="lotecarros";
$usuario ="root";
$contrasena ="";


try{ 
    $bd = new PDO('mysql:host=localhost;dbname='.$nombrebd,$usuario,$contrasena);

}catch(Exception $e){
    echo "no funciono".$e->getMessage();
}



?>