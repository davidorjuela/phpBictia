<?php
    require('conexion.php');

    //Seleccionamos todos los datos de la tabla videojuegos
    $sql = "SELECT * FROM videojuegos";
    //Crear una varialbe que guarde los datos de la consulta
    $resultado =mysqli_query($conexion,$sql);
    //Crear variable que se encargara de manipular y contener el resultado
    $videojuegos = mysqli_fetch_all($resultado);
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
    <form action="insertar.php" method="GET">
        <input type="text" name="videojuego" id="">
        <button type="submit">Agregar</button>    
    </form>
    <?php foreach($videojuegos as $videojuego): ?>
        <div>
            <?php echo $videojuego[1]; ?>
            <a href="eliminar.php?id=<?php echo $videojuego[0]; ?>">x</a>
            <a href="editar.php?id=<?php echo $videojuego[0]; ?>">Edit</a>
        </div>
    <?php endforeach; ?>
</body>
</html>