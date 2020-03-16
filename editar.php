
<?php
include('includes/db.php');
//  VALIDAR SI EXISTE UNA VARIABLE...

if(isset($_GET['id']) == false){
    echo "es necesario enviar un id";
    die;
}

$id = $_GET['id'];
$sql = "SELECT * from personas where id = $id";
$persona = DB::query($sql);

$persona = mysqli_fetch_object($persona);
//var_dump($persona);// -> $nombre

if(!$persona){//$persona == false){
    echo "el usuario no existe";
    die;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar</title>
</head>
<body bgcolor="#207cf9" ><br><br><br>
<center>
<form action="guardar_persona.php" method="post">
<font color="#ffffff">
<h2> <u>Editar usuarios</u> </h2>
</font>  
      <input  type="hidden" name="id"  value="<?=$persona->id?>">
  
  <div >
    <label for=""><b>Nombre: </b> </label>  <br>
    <input type="text" name="nombre" size="30" value="<?=$persona->nombre?>">
  </div><br>

  <div>
    <label for=""><b>Email: </b> </label>  <br>
    <input type="text" name="email" size="30" value="<?=$persona->email?>">
  </div> <br><br><br>
 <div>
 <input type="submit" value="Guardar"/> 
 <!-- <a href ="index.php">mostrar datos registrados</a>-->
 <input type="button" onclick="location.href='index.php';" value=" Ver Registros "/>
 </div>
 
<!--
 <input type="button" onclick="location.href='index.php';" value=" Ver Registros "/>
--> 
</form>
</center>
</body>
</html>
