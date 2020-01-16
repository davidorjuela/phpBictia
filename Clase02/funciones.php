<?php
    function edadPersona($edadMinima=18){
        if($edadMinima >= 18){
            echo "La edad es: $edadMinima <br>";
        }else{
            echo "Eres menor de edad, lo siento :( <br>";
        }
    }

    edadPersona(20);
    edadPersona(15);
    edadPersona();
    echo "<hr>";

    function sumar(int $x, int $y){
        $z= $x + $y;
        return $z;
    }

    echo "5 +10 = ". sumar(5,10)."<br>";
    echo "53 +150 = ". sumar(53,150)."<br>";
    echo "<hr>";
    
    function imprime100($boolean=false){
        $val=100;
        if($boolean){
            $val=0;    
        }
        for($i=1; $i<=100; $i++){
           echo $i + $val . "<br>";
        }
        echo "<hr>";
    }

    imprime100(true);
    imprime100();

    function tablas(){
        echo "<table>";
        for($i=1; $i<=10; $i++){
            echo "<tr>";
            for($j=1; $j<=10; $j++){
                echo "<td style='border: 1px solid black'>$j X $i = ".$j*$i."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        
    }
    tablas();

    function multiplos(int $val){
        echo "1 <br>";
        for($i=$val; $i<=500; $i+=$val){
                echo $i . "<br>";
        }
        echo "<hr>";
    }
    multiplos(8);
?>