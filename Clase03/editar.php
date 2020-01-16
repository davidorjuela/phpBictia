 <?php
    require('conexion.php');

    //Seleccionamos todos los datos de la tabla videojuegos
    $id=$_GET['id'];
    $sql = "SELECT * FROM videojuegos WHERE id='$id'";
    //Crear una varialbe que guarde los datos de la consulta
    $resultado =mysqli_query($conexion,$sql);
    //Crear variable que se encargara de manipular y contener el resultado
    $videojuego = mysqli_fetch_all($resultado);
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
    <h1>Editar "<?php echo $videojuego[0][1]; ?>"</h1>
    <form action="modificar.php" method="GET">
        <input type="text" name="videojuego[id]" value="<?php echo $videojuego[0][0]; ?>" style="display:none">
        <input type="text" name="videojuego[nombre]" value="<?php echo $videojuego[0][1]; ?>">
        <button type="submit">Guardar</button>    
    </form>
</body>
</html>