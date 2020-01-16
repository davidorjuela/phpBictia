 <?php
    require('conexion.php');

    //Seleccionamos todos los datos de la tabla videojuegos
    $id=$_GET['id'];
    echo $id;
    $sql = "SELECT * FROM videojuegos WHEN id='$id'";
    //Crear una varialbe que guarde los datos de la consulta
    $resultado =mysqli_query($conexion,$sql);
    echo $resultado;
    //Crear variable que se encargara de manipular y contener el resultado
    $videojuego = mysqli_fetch_all($resultado);
    echo $resultado;
?> 

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar<?php echo $videojuego; ?></h1>
    <form action="editar.php" method="GET">
        <input type="text" name="videojuego" value="<?php echo $videojuego; ?>">
        <button type="submit">Editar</button>    
    </form>
</body>
</html>