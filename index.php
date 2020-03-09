hola desde index <br>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Datos</title>
</head>
<body bgcolor="#207CF9" >
<center><br><br><br>
<font color="#ffffff">
<h2> <u>Registros Actuales</u> </h2>
</font>

<?php
//mostrar los datos de la bd y un boton de "nuevo" y me llebe a "crer.php"
//subir a GIT con el nombre de L4G03-CRUD
//include 'guardar_persona.php';

   $conexion = mysqli_connect('localhost','root','','personas');
?>

<table border="1" >
        <tr>
            <th>  id  </th>
            <th>  nombre </th>
            <th>  email </th>               
        </tr>
<?php

$sql="SELECT * FROM personas";
$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){
?>
        <tr>
            <td>  <?php echo $mostrar['id']?>  </td>
            <td>  <?php echo $mostrar['nombre']?>  </td>
            <td>  <?php echo $mostrar['email']?>  </td>
        </tr>
    <?php
        }
    ?>
</table><br><br>
<input type="button" onclick="location.href='crear.php';" value=" Agregar Usuario "/>
</center>
</body>
</html>
