<?php
$nome = "guilherme";
$anoNasc = 2004;
$idade = 2023 - $anoNasc;
$altura = 1.83;
$peso = 70.0;
$imc = $peso/pow($altura,2);


echo "<h1 style='color: red; text-align: center;'>
Ola $nome me disseram que você tem $idade anos ";

echo" seu peso é de $peso e sua altura $altura <br>";
echo"seu IMC é de $imc <br> </h1>";

if($imc<17 ){
    echo"$nome come seu filho da puta";
} else if($imc >= 17 && $imc <18.5){
    echo"$nome continue comendo seu arrombado";
} else if($imc >= 18.5 && $imc <24.9){
    echo"$nome ta ficando  bonito seu projeto de gente";
}else if($imc >= 25 && $imc <29.9){
    echo"$nome larga a bolacha seu gordo fudido";
}else if($imc >= 30 && $imc <34.9){
    echo"$nome larga o Mac seu baleia do karalho";
}else if($imc >= 35 && $imc <40){
    echo"$nome seu merda,ta querendo virar a thais carla?";
}else {
    echo"$nome parabens, você se tornou a nova thais carla";
}