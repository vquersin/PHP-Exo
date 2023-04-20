<?php

// EXEMPLE TABLEAU

// $notes = [];
// for($i=0;$i<3;$i++){
//     $saisie = readline("Yeet");
//     $notes[$i] = $saisie;
// }
// foreach($notes as $key => $value){
//     echo $value . "\n";
// }

// EXO TABLEAU

// 1°

// $notes = [];
// $addition = 0;
// for($i=1; $i <=9;$i++){
//     $saisie = (float) readline("Entrer votre notes: ");
//     $notes[$i] = $saisie;
// }
// foreach($notes as $key => $value){
//     $addition =  $addition+$value;
//     $diviseur++; 
// }
// echo "Votre moyenne est de : ". round($addition/$diviseur, 2). "/20. \n";

// 2°

// $notes = [];
// $nbNotes = (int) readline("Combien de notes avez-vous? ");
// $pos = 0;
// $neg = 0;
// $nulle = 0;

// for($i=0; $i<$nbNotes;$i++){
//     $saisie = (float) readline("Entrer votre notes: ");
//     $notes[$i] = $saisie;
// }
// foreach($notes as $key => $value){
//     if($value<0){
//         $neg++;
//     }
//     else if($value>0){
//         $pos++;
//     }
//     else $nulle++;
// }
// echo "Il y a ".$pos." valeur(s) positif(s) et ".$neg." valeur(s) négatif(s). Et ".$nulle." valeur(s) nulle. \n";

// 3°

// $notes = [158,61,49,-20,-269,2500];
// $addition = 0;
// foreach($notes as $key => $value){
//     $addition =  $addition+$value;
// }
// echo "La somme de vos valeurs vaut : ". round($addition, 2). ". \n";

//4°

// $tab1 = [4,8,7,9,1,5,4,6];
// $tab2 = [7,6,5,2,1,3,7,4];
// $tabAdd = [];

// foreach($tab1 as $key => $value){
//     $tabAdd[$key] = $tab1[$key]+$tab2[$key];
//     echo $tabAdd[$key]." | ";
// }

// 5°

// $notes = [];
// $position = 0;
// $valeurG = 0;
// for($i=1; $i <=5;$i++){
//     $saisie = (float) readline("Entrer votre notes: ");
//     if($i == 1) {
//         $valeurG = $saisie;
//         $notes[$i] = $saisie;
//     }
//     else {
//         $notes[$i] = $saisie;
//     }
// }
// foreach($notes as $key => $value){
//     if($value > $valeurG){
//         $valeurG = $value;
//         $position = $key;
//     }
// }
// echo "La valeur la plus grande de votre tableau est: ".$valeurG. " à la ".$position."ème position. \n";

// 6°

// $notes = [];
// $moyenne = 0;
// $posMoyenne = 0;
// $addition = 0;
// $diviseur = 0;
// for($i=1; $i <=11;$i++){
//     $saisie = (float) readline("Entrer votre notes: ");
//     $notes[$i] = $saisie;
// }
// foreach($notes as $key => $value){
//     $diviseur++;
//     $addition = $addition+$value;
// }
// $moyenne = $addition/$diviseur;
// foreach($notes as $key => $value){
//     if($value > $moyenne){
//         $posMoyenne++;
//     }
// }
// echo "La moyenne de la classe est de: ".round($moyenne,2). " et il y a ".$posMoyenne." élève(s) au dessus. \n";

// 7°

// $tabPrix = [5,50,23,11];
// $tabQuantite = [10,1,4,3];

// foreach($tabPrix as $key => $value){
//     echo $tabPrix[$key]*$tabQuantite[$key]." | ";
// }

?>