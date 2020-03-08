<br>
<?php
    //Datos de conexion server
    $host = "localhost";
    $user = "root";
    $password = "";
    $bd = "personas";


    //crear la conexion
    $con = new mysqli($host, $user, $password, $bd);

    //prueba conexion
    if($con->connect_error){
        echo "Base de datos no disponible";
    }else{
        echo "conectados a la base de datos";
    }

    $nombre = $_POST["nombre"]; //error por si sola
    $email = $_POST["email"];   //error por si sola

    echo "la informacion enviada es: Nombre : $nombre email: $email";  
    echo "<br><br>";

    $query = "insert into personas(nombre,email)
        values('$nombre', '$email')";

    if($con->query($query)){
        echo "persona guardada correctamente..."."<br>";
    }else{
        echo "no se ha podido guardar la persona."."<br>";
    }

    $con->close();

    header ('Location: crear.php'); //para q limpie y guarde los datos


?>

