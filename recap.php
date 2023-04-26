<?php
require "recapRequire.php";
//////////////////////////////// RECAP 1 //////////////////////////////
// 1°
// $nb = rand(1,20);
// analyseNumber($nb);

// 2°
// $rand = rand(0,20);
// analyseSalutation($rand);

// 3°
// personnage ("nom" => sexe(1-H/0-F) , lunette , moustache , chapeau)
// $question = [0,0,0,0];
// $firstQuest=1;
// $askQuest = 0;
// $gender=-1;
// $glasses=-1;
// $mustache=-1;
// $hat=-1;
// $breakProg=0;
// // Déroulement de la game...
// echo "Pensez à un personnage : Melle Rose, le professeur Violet, le Colonel Moutarde, Le Révérend Olive et Mme Leblanc.\ntrue : Oui - false : Non\n";
// while($breakProg!=1){
//     // Questionnement...
//     if($firstQuest == 1){ // Si première question ...
//         $firstQuest = 0;
//         $randQuest = 1;
//         $askQuest = analyseQuestion($randQuest,$question,$askQuest);
//     }
//     else if($gender == 0){ // Si femme ...
//         $randQuest = 2;
//         $askQuest = analyseQuestion($randQuest,$question,$askQuest);
//     }
//     else{ // Si homme ...
//         $randQuest = rand(2,4);
//         $askQuest = analyseQuestion($randQuest,$question,$askQuest);
//     }
//     switch($askQuest){
//     case 1:
//         $question[0]=1;
//         $reply = readline("Est-ce que votre personnage est un homme? ");
//         $gender = searchHint($reply);
//         break;
//     case 2:
//         $question[1]=1;
//         $reply = readline("Est-ce que votre personnage porte des lunettes? ");
//         $glasses = searchHint($reply);
//         break;
//     case 3:
//         $question[2]=1;
//         $reply = readline("Est-ce que votre personnage a une moustache? ");
//         $mustache = searchHint($reply);
//         break;
//     case 4:
//         $question[3]=1;
//         $reply = readline("Est-ce que votre personnage porte un chapeau? ");
//         $hat = searchHint($reply);
//         break;
//     } 
//     $breakProg = analyseHint($gender,$glasses,$mustache,$hat,$breakProg);
// }
// Fin game...

// 4°
// $breakProg=0;
// $essai=0;
// while($breakProg != 1){
//     $essai++;
//     echo "***** Essai n° ".$essai." *****\n";
//     $nb = readline("Entrer un nombre pair et divisible par 3: ");
//     $breakProg = analyseNumberDivisible($nb);
// }

//////////////////////////////// RECAP 2 //////////////////////////////

// 1° - 2°
// $string = readline("Ecrire une phrase: ");
// countVowels($string);

// 3°
// $size = (int)readline("entrer la taille du triangle: ");
// trianNb($size);

// 4°
// $tab = array();
// for($i=0;$i<10;$i++){
//         $tab[$i] = rand(1,20);
//         echo $tab[$i]." ";
// }
// $nb = readline("\nNombre à rechercher: (0/99)");
// searchNb($tab, $nb);

// 5°
$nb = 5;
tableMultiply($nb);
?>