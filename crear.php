hola desde crear<br>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body><br><br><br><br>
<center>
<h2>Formulario de registro</h2>

 <form action="guardar_persona.php" method="post">
  
  <div class="form-group">
    <label for="">Nombre: </label>  <br>
    <input tipe="text" name="nombre"> <br><br>
  </div>

  <div class="form-group">
    <label for="">Email:  </label>  <br>
    <input tipe="text" name="email">
  </div> <br>
 
 <input type="submit" value="Guardar"/> 
 <input type="button" onclick="location.href='index.php';" value=" Ver Registros "/>
 </form>
</center>
<!------------------------------------------------------------------------>
<br>
<br><br><br>

</body>
</html>