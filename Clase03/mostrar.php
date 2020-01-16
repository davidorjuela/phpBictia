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
<body style="font-size:1.5em;">
    <h1>Mis videojuegos</h1>
    <form action="insertar.php" method="GET" style="margin:50px;">
        <input type="text" name="videojuego" id="">
        <button type="submit">Agregar</button>    
    </form>
    <table style="border:1px solid black;border-spacing:10px;">
    <?php foreach($videojuegos as $videojuego): ?>
        <tr>
            <td  style="border:1px solid black;pading:5px;"><?php echo $videojuego[1]; ?></td>
            <td><a href="eliminar.php?id=<?php echo $videojuego[0]; ?>">X</a></td>
            <td><a href="editar.php?id=<?php echo $videojuego[0]; ?>">Edit</a></td>
        </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>