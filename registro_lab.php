<?php

use function PHPSTORM_META\elementType;

include 'php/conexion.php';

$sampleid = $_POST['Sample_ID'];
$structure = $_POST['Structure'];
$area = $_POST['Area'];
$source = $_POST['Source'];
$depthf = $_POST['Depth_From'];
$deptht = $_POST['Depth_To'];
$materialt = $_POST['Material_Type'];
$samplet = $_POST['Sample_Type'];
$north = $_POST['North'];
$east = $_POST['East'];
$elev = $_POST['Elev'];
$mcoven = $_POST['MC_Oven'];
$mcstove = $_POST['MC_Stove'];
$mcscale = $_POST['MC_Scale'];
$atterberglimit = $_POST['Atterberg_Limit'];
$grainsize = $_POST['Grain_Size'];
$standardproctor = $_POST['Standard_Proctor'];
$specificgravity = $_POST['Specific_Gravity'];
$acidreactivity = $_POST['Acid_Reactivity'];
$sandcastle = $_POST['Sand_Castle'];
$losangelesabrasion = $_POST['Los_Angeles_Abrasion'];
$soundness = $_POST['Soundness'];
$ucs = $_POST['UCS'];
$plt = $_POST['PLT'];
$bts = $_POST['BTS'];
$hydrometer = $_POST['Hydrometer'];
$doublehydrometer = $_POST['Double_Hydrometer'];
$pinhole = $_POST['Pinhole'];
$consolidation = $_POST['Consolidation'];
$permeability = $_POST['Permeability'];
$sampledate = $_POST['Sample_Date'];
$sampleby = $_POST['Sample_By'];
$comments = $_POST['Comments'];

$sql = "INSERT INTO lab_test_requisition_form(Sample_ID, Structure, Area, Source, 
Depth_From, Depth_To, Material_Type, Sample_Type, North, East, Elev, MC_Oven, MC_Stove, 
MC_Scale, Atterberg_Limit, Grain_Size, Standard_Proctor, Specific_Gravity, Acid_Reactivity, 
Sand_Castle, Los_Angeles_Abrasion, Soundness, UCS, PLT, BTS, Hydrometer, Double_Hydrometer, 
Pinhole, Consolidation, Permeability, Comment, Sample_Date, Sample_By)
VALUES('$sampleid', '$structure', '$area', '$source', '$depthf', '$deptht', 
         '$materialt', '$samplet', '$north', '$east', '$elev', '$mcoven', '$mcstove', '$mcscale', '$atterberglimit', '$grainsize', '$standardproctor', '$specificgravity', 
         '$acidreactivity', '$sandcastle', '$losangelesabrasion', '$soundness', '$ucs', '$plt', '$bts', '$hydrometer', '$doublehydrometer', '$pinhole', 
         '$consolidation', '$permeability', '$comments', '$sampledate', '$sampleby')";

$ejecutar = mysqli_query($conexion, $sql);

if($ejecutar){
    echo '
        <script>
            alert("Muestra Registrada Correctamente.");
            window.location = "Formulario-version-1.0/index.html";
        </script>
    ';
}

else{
    echo '
        <script>
            alert("Verifique Los Datos, El ID Digitado Esta Siendo Usado.");
            window.location = "Formulario-version-1.0/index.html";
        </script>
    ';
}

mysqli_close($conexion);

?>