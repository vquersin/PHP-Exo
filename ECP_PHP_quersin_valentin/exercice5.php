<?php
require "fonctions.php";
/////////////////////////////////// EXO 5 /////////////////////////////////// 
// Déclaration de variables...
$end = 0;
$number1 = [];
$number2 = [];
$number3 = [];
// Début prog...
echo str_repeat(" ", 10).str_repeat("*", 6)."Tableaux d'éléments".str_repeat("*", 6)."\n\nTableau 1 : \n"; // Echo Head... str_repeat pour spam des caractères...
for($i=0 ; $i<10 ; $i++){
    $number1[$i]= rand(20,100);
    echo $number1[$i]." ";
}

while($end!=1){ // Lancement boucle...
    echo "\n";
    $entry = readline("Que voulez-vous faire?\n0. Quitter\n1. Trier le tableau par ordre croissant\n2. Trier le tableau par ordre décroissant\n3. Création d'un deuxième tableau a addition avec le premier\n4. Inverser le troisième tableau ");
    switch($entry){
        case 1:
            echo "\n".str_repeat("*", 31)."\n\nTableau trié (croissant):\n";
            asort($number1);
            foreach($number1 as $key => $element){
                echo " ".$element." ";
            }
            break;
        case 2:
            echo "\n".str_repeat("*", 31)."\n\nTableau trié (décroissant):\n";
            arsort($number1);
            foreach($number1 as $key => $element){
                echo " ".$element." ";
            }
            break;
        case 3:
            echo "\n".str_repeat("*", 31)."\n\nAddition de Tableau :\n";
            for($i=0 ; $i<10 ; $i++){
                $number2[$i]= rand(20,100);
            }
            foreach($number1 as $key => $element){
                $number3[$key]= $element+$number2[$key];
                echo " ".$number3[$key]." ";
            }
            break;
        case 4:
            echo "\n".str_repeat("*", 31)."\nInversement du tableau 3 :\n";
            $number3 = array_reverse($number3);
            foreach($number3 as $key => $element){
                echo " ".$element." ";
            }
            break;
        default:
            $end++; // Incrémentation de ma variable fin de boucle pour en sortir et terminer le programme...
            echo "\nAu revoir et à bientôt"; // Au revoir...
            break;
    }
}
echo "\n";
// Fin prog...
?>