<?php

use function PHPSTORM_META\elementType;

include 'conexion.php';

$email = $_POST['correo'];
$username = $_POST['usuario'];
$password = $_POST['contraseña'];

$query = "INSERT INTO usuarios(correo, usuario, contrasena)
          VALUES('$email', '$username', '$password')";

$verificar = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$username' ");

if(mysqli_num_rows($verificar) >  0){
    echo '
        <script>
            alert("Este usuario ya existe");
            window.location = "../index.php";
        </script>
    ';
    exit();
}

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
        <script>
            alert("Registrado correctamente");
            window.location = "../index.php";
        </script>
    ';
}

else{
    echo '
        <script>
            alert("Registro no completado");
            window.location = "../index.php";
        </script>
    ';
}

mysqli_close($conexion);

?>