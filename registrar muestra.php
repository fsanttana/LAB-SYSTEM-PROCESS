<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
</head>
<body>

    <h1><center>Lab Requisition Form</center></h1>

    <form action="registro_lab.php" method="POST">

            <h3>Sample ID</h3>
            <input type="text" placeholder="Sample ID" name="Sample">

            <h3>Structure</h3>
            <input type="text" placeholder="Structure" name="Structure">

            <h3>Area</h3>
            <input type="text" placeholder="Area" name="Area">
<br>

            <h3>Source</h3>
            <input type="text" placeholder="Source" name="Source">

            <h3>Depth From</h3>
            <input type="number" placeholder="Depth Form" name="Depth From">
            

            <h3>Depth To</h3>
            <input type="number" placeholder="Depth To" name="Depth To">
<br> </p>

            <h3>Material Type</h3> 
            <input type="text" placeholder="Material Type" name="Material Type">

            <h3>Sample Type</h3>
            <input type="text" placeholder="Sample Type" name="Sample Type">


<br> <p>     

            <h3>North</h3>
            <input type="number" placeholder="North" name="north">

            <h3>East</h3>
            <input type="text" placeholder="East" name="east">

            <h3>Elev</h3>
            <input type="text" placeholder="Elev" name="elev">

<br> </p>

            <h3>MC (Oven)</h3>
            <select name="selecion">
                <option value="no"></option>
                <option value="si">x</option>
            </select>

<br> <br>
            <h3>Comments</h3>
            <input type="text" placeholder="Comments" name="comments">

            <button>Insertar</button>
        
        </form>

</body>
</html>