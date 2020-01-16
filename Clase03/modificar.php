<?php
    //Solicitamoos la conexión a la Db a travez del método require()
    require('conexion.php');
    //Creamos una variable que traiga los datos que el ususrario envia desde el formualrio
    $videojuego=$_GET['videojuego'];

    //crear una variable que contendra la sentencia SQL para guardar
    //los datos en la tabla de la DB
    $sql="UPDATE videojuegos SET nombre='$videojuego[nombre]' WHERE id='$videojuego[id]'";

    //El metodo mysqli_query envía los datos
    //Necesita la conexion y sentencia SQL
    mysqli_query($conexion, $sql);

    //Direccionamiento de rutas
    header('Location: mostrar.php');

?>