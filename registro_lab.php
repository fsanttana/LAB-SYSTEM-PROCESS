<?php

use function PHPSTORM_META\elementType;

include 'php/conexion.php';

$sample = $_POST['Sample'];
$structure = $_POST['Structure'];
$area = $_POST['Area'];
$source = $_POST['Source'];
$depthf = $_POST['Depth From'];
$deptht = $_POST['Depth To'];
$materialt = $_POST['Material Type'];
$samplet = $_POST['Sample Type'];
$north = $_POST['North'];
$east = $_POST['East'];
$elev = $_POST['Elev'];
$comments = $_POST['Comments'];

$query = "INSERT INTO lab_test_requisition_form(Sample_ID, Structure, Area, Source, 
Depth_From, Depth_To, Material_Type, Sample_Type, North, East, Elev, Comment) 
VALUES('$sample', '$structure', '$area', '$source', '$depthf', '$deptht', 
         '$materialt', '$samplet', '$north', '$east', '$elev', '$comments')";

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
        <script>
            alert("Registrado correctamente");
            
        </script>
    ';
}

else{
    echo '
        <script>
            alert("Registro no completado");
            
        </script>
    ';
}

mysqli_close($conexion);

?>