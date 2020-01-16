<?php
$colores=array("RED","YLW","BLU","GRN");

foreach($colores as $valores){
    echo "$valores <br>";
}
echo "<hr>";
$autos = array("Renault","Dodge","Chevrolet");
$longArreglo =count($autos);
    for($i=0; $i < $longArreglo; $i++){
        echo $autos[$i] . "<br>";
    }
echo "<hr>";
    //ARREGLOS ASOCIATIVOS
    $persona=array("Luna"=>"18","Fernando"=>"21","Fabian L."=>"31");
    //$persona['Luna']="18";
    echo "Luna tiene " . $persona['Luna'] . " años. <br>";
    foreach($persona as $nombre => $nombre_edad){
        echo "Clave: " . $nombre . "Valor: " . $nombre_edad . "<br>";
    }
echo "<hr>";
    //ARREGLOS MULTIDIMENSIONALES
    $productos=[
        [
            'nombre' => 'Empanada',
            'precio' => 1000,
            'cantidad' => 12
        ],
        [
            'nombre' => 'Porción de Pizza',
            'precio' => 5000,
            'cantidad' => 5
        ]
    ];

    $total= 0;
    foreach($productos as $producto){
        $total+=$producto['precio']*$producto['cantidad'];
        echo $producto['nombre'] .": ". $producto['precio'] ." X ". $producto['cantidad']."<br>";
    }
    echo "Total= " . $total;
echo "<hr>";

    $peliculas=array();
    function newPelicula($nombre, $director, $year, $personaje, &$peliculas){
      $pelicula=array('nombre'=>$nombre, 'director'=>$director, 'año'=>$year, 'personaje'=>$personaje);
      $peliculas[]= $pelicula;
    }

    $pelicula1 = newPelicula('asdasda','dir','1234','pepito',$peliculas);
    $pelicula2 = newPelicula('asdasda','dir','1234','pepito',$peliculas);
    $pelicula3 = newPelicula('asdasda','dir','1234','pepito',$peliculas);
    $pelicula4 = newPelicula('asdasda','dir','1234','pepito',$peliculas);
    $pelicula5 = newPelicula('asdasda','dir','1234','pepito',$peliculas);

    // for($i=0; $i<5; $i++){
    //     echo "<h1>".$peliculas[$i]['nombre']."</h1>
    //     <b>".$peliculas[$i]['director']."</b>
    //     <u>".$peliculas[$i]['año']."</u>
    //     <i>".$peliculas[$i]['personaje']."</i>";
    // }

    foreach($peliculas as $pelicula){
        echo "<h1>".$pelicula['nombre']."</h1>
        <b>".$pelicula['director']."</b>
        <u>".$pelicula['año']."</u>
        <i>".$pelicula['personaje']."</i>";
    }

    $response = Unirest\Request::get("https://devru-bigflix-movies-download-v1.p.rapidapi.com/search.php?term=Jism+2",
    array(
      "X-RapidAPI-Host" => "devru-bigflix-movies-download-v1.p.rapidapi.com",
      "X-RapidAPI-Key" => "SIGN-UP-FOR-KEY"
    )
  );
    echo $response;
?>

<!-- $data = json_decode( file_get_contents('https://api.mercadolibre.com/users/226384143/'), true );
echo $data['nickname']; -->
<!-- $response = Unirest\Request::get("https://juanroldan1989-moviequotes-v1.p.rapidapi.com/api/v1/quotes?actor=Al+Pacino",
  array(
    "X-RapidAPI-Host" => "juanroldan1989-moviequotes-v1.p.rapidapi.com",
    "X-RapidAPI-Key" => "SIGN-UP-FOR-KEY",
    "Authorization" => "Token token=yd8WzkWNEEzGtqMSgiZBrwtt"
  )
); -->