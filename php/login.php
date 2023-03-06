<?php

    include 'conexion.php';

    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    $validar = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' 
    and contrasena='$contraseña' ");

    if(mysqli_num_rows($validar) > 0){
        header("location: ../bienvenido.php");
        exit;
    }else{
        echo '
            <script>
                alert("Usuario no existe, por favor verifique los datos introducidos");
                window.location = "../index.php";
            </script>
        ';
        exit;
    }

?>