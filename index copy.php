<?php
$name="Saul";
$edad=1;
// $edad=(bool)34;
var_dump($name);
var_dump($edad);
// desactivar en entorno de producion el var_dump para que no se muestre y no reciba un cirbeataque
echo gettype($name);
echo is_string($name);
$output= "hola \"mundo!!!!\" Nombre: $name <br> Edad:$edad";
$output .=", una muestra de concatenar";

// forzar en tipo de dato no usado usualmente en php
//Obligatorio purgar el codigo
// $name=(int)"ssuma";
/*
constante dos tipos 
define("legacy_hopo,"https")
agregar contantes en un solo fichero todos los constantes
ahora constantes locales de clase o de pagina con const
*/
$isOld= $edad<50;
define('legacy_hopo','https');
const FACILUPPERCASE="constante local";
//  El match una forma de condicion
// $outputAge = match ($edad){
//     0,1,2=>"Eres un bebe, $name",
//     3,4,5,6,7,8,9,10=>"Eres un kid, $name",
//     11,12,13,14,15,16,17,18 =>"Eres un adolecente, $name",
//     19,20,21,22,23,24,25,26,27,28,29,30 =>"Eres un Adulto joven, $name",
//     default => "Eres un adulto =>$name"
// }
$outputAge = match (true){
    $edad<2=>"Eres un bebe, $name",
    $edad<10=>"Eres un kid, $name",
    $edad<18 =>"Eres un adolecente, $name",
    $edad===18 =>"Ya eres un adulto, $name",
    $edad<30 =>"Eres un Adulto joven, $name",
    default => "Eres un adulto =>$name"
};

$bestlanguages = ["PHP","JavaScript", "C++"];
$bestlanguages[]="java";
// $variable =
    // $prueba<="Es una prueba";
    // $definitivamente<="se probo";
// 
// };
?>
 

<h1>
<?=$output . "<br>". FACILUPPERCASE . "<br>".$isOld
?>
<?="<br>".$outputAge?>
<?= "<br>"."Los mejores idiomas son:"; 
//  for ($i=0; $i <count($bestlanguages) ; $i++) { 
//     # code...
//     echo " ". $bestlanguages[$i];
//  }
$person=[
    "name"=>"Saul",
    "edad"=>12,
    "isDev"=>true,
    "language"=>["PHP","javascript"]
]
?>
<ul>
    <!--  foreach ($bestlanguages as $value) -->
    <?php foreach ($bestlanguages as $key => $value) :?>
    <li><?=$key . $value?></li>


    <?php endforeach;?>
</ul>
</h1>
<style>
:root{
    color-scheme: light dark;
}
body{
    display: grid;
    place-content: center;
   
}
</style>
<!-- PHP opcionalmente explicitamen el tipo de una variable esto se da en ciertos contextos expocificos donde le pudes decir cual es el tipo de dato -->
