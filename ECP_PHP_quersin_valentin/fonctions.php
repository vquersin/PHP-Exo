<?php
/////////////////////////////////// REQUIRE FUNCTION /////////////////////////////////// 
// 1°
function calculCercle($rayon){ // Initialisation fonction et récupèration $rayon...
    echo "Sa circonférence est de : ".number_format(round(($rayon*2)*pi(),2), 2, '.', ',')."\n"; // Affichage circonférence...
    echo "Sa surface est ".str_repeat(" ", 9).": ".number_format(round(pi()*($rayon*$rayon),2), 2, '.', ',')."\n\n"; // Affichage surface...
    // Utilisation de la fonction de base pi(), number_format et round()...
}
// 2°
function tableMultiply($nb){ // Initialisation fonction et récupèration $nb...
    for($i=1;$i<=10;$i++){ // Lancement boucle for pour "x10"
        echo $nb." x ".$i." = ". round(($nb*$i),2)."\n"; // Affichage calcul du nombre x $i (1,2,...10)...
    }
}
// 3°
function calculEquation($a,$b,$c){
    $delta = ($b*$b)-(4*$a*$c);
    if($delta < 0){
        echo "\nL'équation ne possède pas de racine réelle\nDelta = ".$delta."\n\n";
    }
    else if($delta > 0){
        $x1=( ((-$b)+sqrt($delta))/(2*$a) );
        $x2=( ((-$b)-sqrt($delta))/(2*$a) );
        echo "\nL'équation possède 2 racines distinctes : \nDelta = ".$delta."\nL'équation s'annule pour : \nX1 = $x1\nX2 = $x2\n\n";
    }
    else{
        $x=( -($b/(2*$a)) );
        echo "\nL'équation possède une racines double : \nDelta = ".$delta."\nX1 = X2 = $x\n\n";
    }

}
// 4°

// 5°

// 6°
?>