<?php
include ('includes/db.php');

$sql="SELECT * FROM personas";
$result = DB::query($sql);
/*
//include ('includes/db.php');
$pru = new DB();
$pru -> init();
*/

//$con = new mysqli($host, $user, $password, $bd);

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver datos</title>
</head>
<body bgcolor="#207cf9" >
<!--
<script>
    var n = prompt("CONTRASEÑA: ");
    if(n == 12345){
        //alert("BIENVENIDO A TUS REGISTROS. ");
    }else{
        alert("Error de autenticacion");
        window.location.href = "index.php"
    }
</script>
-->

<center><br><br><br>
<font color="#ffffff">
<h2> <u>Registros Actuales</u> </h2>
</font>

<table border="1" >
        <tr>
            <th>  id  </th>
            <th>  nombre </th>
            <th>  email </th> 
            <th>  acciones  </th>       
        </tr>

<?php


//$result=mysqli_query($con,$sql);

while($mostrar=mysqli_fetch_array($result)){
?>
        <tr>
            <td>  <?php echo $mostrar['id']?>   </td>
            <td>  <?php echo $mostrar['nombre']?>  </td>
            <td>  <?php echo $mostrar['email']?>  </td>
            <td>
            <a href="editar.php?id=<?= $mostrar ['id']?>"> Editar </a>
              <a href="" Eliminar > Eliminar </a>
            </td>
        <tr>
    
 <?php
    }
 ?>
</table><br><br>
<input type="button" onclick="location.href='crear.php'" value=" Agregar Usuario "/>
<!-- <input type="button" name="button2" onclick="location.href='crear.php';" value=" Eliminar " /> -->


</center>
</body>
</html>
