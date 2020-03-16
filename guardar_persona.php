
<?php
//Datos de conexion server
include ('includes/db.php');

/*
    //prueba conexion
    if($con->connect_error){        //$con->connect_error){
        echo "Base de datos no disponible";
    }else{
        echo "conectados a la base de datos";
    }
    */
    $id = $_POST["id"];
    $nombre = $_POST["nombre"]; //error por si sola
    $email = $_POST["email"];   //error por si sola
/*
    echo "la informacion enviada es: Nombre : $nombre email: $email";  
    echo "<br><br>";
*/

if($nombre=="" || $email==""){

}else{
if(isset($id) == false){
    header ('Location: crear.php');
    $sql = "INSERT into personas(nombre,email)values('$nombre', '$email')"; 
}else{
    header ('Location: index.php');
    $sql = "UPDATE personas set nombre='$nombre', email='$email' WHERE id='$id'";
}
}
DB::query($sql);
    
   /*
    if(DB::query($sql)){        //$con->query($query)){
        echo "persona guardada correctamente..."."<br>";
    }else{
        echo "no se ha podido guardar la persona."."<br>";
    }
    */
    
    //$con->close();

    //header ('Location: crear.php'); //para q limpie y guarde los datos
?>

