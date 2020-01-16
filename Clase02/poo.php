<?php
    // class Persona{
    //     //Declarar las variables que utilizará la clase
    //     public $nombre;
    //     public $apellido;
    //     public $edad;

    //     //inicializar el constructor
    //     //inicia las variables (atributos) de la clase
    //     //para que puedad ser utilizadas en el moment de realizar una instancia

    //     public function __construct($nombre,$apellido,$edad){
    //         $this->nombre= $nombre;
    //         $this->apellido= $apellido;
    //         $this->edad= $edad;
    //     }

    //     //Un método es una función propia de la clase
    //     public function saludar(){
    //         echo "Hola soy $this->nombre $this->apellido y tengo $this->edad  años";
    //     }
    //  }
    //  $persona = new Persona('Geral','Romero',18);
    //  $persona->saludar();
    //  echo "<hr>";

     class Desayuno{
        public $fruta;
        public $huevos;
        public $caldo;
        public $bebida;
        public $harina;

        public function __construct($fruta,$huevos,$caldo,$bebida,$harina){
            $this->fruta= $fruta;
            $this->huevos= $huevos;
            $this->caldo= $caldo;
            $this->bebida= $bebida;
            $this->harina= $harina;
        }

        public function servirFruta(){
            echo "<h3>Servir la fruta:</h3>
            <ol>
            <li>Toma la $this->fruta y lavala bien</li>
            <li>Con un cuchillo pelala y cortala en trozos pequeños</li>
            <li>Sirvela en un plato para postre y añadele un poco de avena en hojuelas</li>
            <li>Si deseas puedes endulzar con miel</li>
            </ol>";
        }

        public function prepararHuevos(){
            echo "<h3>Preparar $this->huevos:</h3>
            <ol>
            <li>Pon un sarten pequeño a fuego medio</li>
            <li>Añadele un poco de aceite y sal</li>";
            if($this->huevos=='Huevos revueltos' || $this->huevos=='Huevos pericos'){
                if($this->huevos=='Huevos pericos'){
                    echo "<li>Añade cebolla y tomate a tu gusto</li>
                          <li>Deja que que el tomate cambie de color</li>";
                }
                echo "<li>Toma 2 huevos y batelos en un plato hondo hasta que se vea uniforme</li>";
            }
            echo "<li>Añade los huevos y espera que esten cocidos a tu gusto</li>
                <li>Si deseas puedes decorar con trozos de perejil</li>
                </ol>";
        }
     }

     $myDesayuno = new Desayuno('Papaya','Huevos pericos','Caldo de costilla','Chocolate','Arepa');
     echo $myDesayuno->servirFruta();
     echo $myDesayuno->prepararHuevos();
     echo "<hr>";
     $myDesayuno = new Desayuno('Manzana','Huevos revueltos','Caldo de costilla','Chocolate','Arepa');
     echo $myDesayuno->servirFruta();
     echo $myDesayuno->prepararHuevos();
     echo "<hr>";
     $myDesayuno = new Desayuno('Banana','Huevos fritos','Caldo de costilla','Chocolate','Arepa');
     echo $myDesayuno->servirFruta();
     echo $myDesayuno->prepararHuevos();
?>