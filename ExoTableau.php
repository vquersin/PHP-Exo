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

// for($i=1; $i<=$nbNotes;$i++){
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
// $nbNotes = (int) readline("Entrer nombres d'élèves: ");
// for($i=1; $i <=$nbNotes;$i++){
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
// $total = 0;

// foreach($tabPrix as $key => $value){
//     echo $tabPrix[$key]*$tabQuantite[$key]." | ";
//     $total += ($tabPrix[$key]*$tabQuantite[$key]);
// }
// echo "\n Total : ".$total." EUR.\n";

// Switch NOTES ENTRY

// DECLARATION DE VARIABLE
// $tab = [];
// $option = 0;
// $add = 0;
// $breakProg = 0;

// // PROGRAMME 

// while($breakProg != 1){
//     $option = (int) readline("Que voulez-vous savoir ? \n1- La somme.\n2- La valeur Max.\n3- La valeur Min.\n4- Entrer des notes.\nN- Quitter.");
//     switch($option){
//         case 1:
//             foreach($tab as $key => $value){
//                 $add += $value; 
//             }
//             echo "La somme est ".$add.".\n";
//             break;
//         case 2:
//             echo "La valeur max  est : " . max($tab). ".\n";
//             break;
//         case 3:
//             echo "La valeur min  est : " . min($tab). ".\n";
//             break;
//         case 4:
//             for($i=1 ; $i<=5 ; $i++){
//                 $tab[$i] = (float) readline("Entrer une notes: ");
//             }
//             break;
//         default:
//             $breakProg = 1;
//             break;
//     }
// }

// FIN PROGRAMME

// Switch CALCULATRICE

// VARIABLES

// $firstEntry=1;
// $entry=0;
// $lastEntry=0;
// $result=0;
// $breakProg=0;


// // PROGRAMME

// while($breakProg != 1){
//     if($firstEntry==1){
//         echo "--------------------------------------------------------------\n~~~~~~ ".  round($result,2) . " ~~~~~~\n";
//         $entry = readline("Entry (R to finish): \n");
//         $decimal = explode(".", $entry);
//         $firstEntry = 0;
//         switch($decimal[0]){
//             case 1:
//             case 2:
//             case 3:
//             case 4:
//             case 5:
//             case 6:
//             case 7:
//             case 8:
//             case 9:
//             case 0:
//                 $entier=$decimal[0];
//                 $decimal[0] = 0;
//                 $virgule= implode(".",$decimal);
//                 $result += ($entier+$virgule);
//                 break;
//             case "R":
//                 echo "Resultat = ".round($result,2)."\n";
//                 $breakProg=1;
//                 break;
//             default:
//                 break;
//         }
//     }
//     else{
//         echo "--------------------------------------------------------------\n~~~~~~ ".  round($result,2). " ~~~~~~\n";
//         $entry = readline("Entry (R to finish): \n");
//         $decimal = explode(".", $entry);
//         switch($decimal[0]){
//             case "+":
//                 $lastEntry = 1;
//                 break;
//             case "-":
//                 $lastEntry = 2;
//                 break;
//             case "*":
//                 $lastEntry = 3;
//                 break;
//             case "/":
//                 $lastEntry = 4;
//                 break;
//             case 1:
//             case 2:
//             case 3:
//             case 4:
//             case 5:
//             case 6:
//             case 7:
//             case 8:
//             case 9:
//             case 0:
//                 switch($lastEntry){
//                     case 1:
//                         $entier=$decimal[0];
//                         $decimal[0] = 0;
//                         $virgule= implode(".",$decimal);
//                         $result += ($entier+$virgule);
//                         break;
//                     case 2:
//                         $entier=$decimal[0];
//                         $decimal[0] = 0;
//                         $virgule= implode(".",$decimal);
//                         $result -= ($entier+$virgule);
//                         break;
//                     case 3:
//                         $entier=$decimal[0];
//                         $decimal[0] = 0;
//                         $virgule= implode(".",$decimal);
//                         $result *= ($entier+$virgule);
//                         break;
//                     case 4:
//                         $entier=$decimal[0];
//                         $decimal[0] = 0;
//                         $virgule= implode(".",$decimal);
//                         $result /= ($entier+$virgule);
//                         break;
//                 }
//                 break;
//             case "R":
//                 echo "Resultat = ". round($result,2)."\n";
//                 $breakProg=1;
//                 break;
//             default:
//                 break;
//         }
//     }
    
// }

// FIN PROGRAMME

// TABLEAU ASSOCIATIF

// 1°

// $chomage = array('Autriche' =>4.9, 'Allemagne' =>9.3 , 'Danemark' =>4.8 , ' Espagne' =>9.4 , 'France' =>9.7); 
// $minimum=0;
// foreach($chomage as $pays => $taux){
//     //1
//     echo " ".$pays." --> ".$taux." | ";
// }
// //2
// echo "\n Pays au faible taux de chomage : ";
// foreach($chomage as $pays => $taux){
//     if($taux<=5){
//         echo " ".$pays." --> ".$taux." | ";
//     }
// }
// //3
// foreach($chomage as $pays => $valeur){
//     $minimum=min($chomage);
//     if($valeur==$minimum){
//         echo "\nLe pays ayant le taux de chômage le plus faible est : ". $pays . "\n";
//     }
// }




// 2°

// $tabNotes = array
// (
//     'boucher' =>16, 
//     'bourdette' =>13,
//     'filou' =>8,
//     'tradulo' =>2
// );
// $add=0;
// $diviseur=0;
// foreach($tabNotes as $noms => $note)
// {
//     echo "- ".$noms." - ".$note."\n" ;
//     $add += $note;
//     $diviseur++;
// }
// echo "Moyenne: ". $add/$diviseur."\n";


// 3°

// $tabNotes = array('prenot' => array (2,10,14), 'perthuis' => array (10,18,12));
// $option = 0;
// $add = 0;
// $diviseur=0;
// $breakProg = 0;

// while($breakProg != 1){
//     $option = (int) readline("Que voulez-vous savoir ? \n1- La liste des notes.\n2- La moyenne élèves.\n3- Choix élèves.\nN- Quitter.");
//     switch($option){
//         case 1:
//             foreach($tabNotes as $noms => $notes){
//                 echo "Nom : ".$noms;
//                 foreach($notes as $key => $note){
//                     echo " - ".$notes[$key] ;
//                 }
//             echo "\n";
//             }
//             break;
//         case 2:
//             foreach($tabNotes as $noms => $notes){
//                 echo "Nom : ".$noms;
//                 foreach($notes as $key => $note){
//                     $add += $notes[$key];
//                     $diviseur++;
//                 }
//                 echo " - Moyenne : ". round($add/$diviseur,2) ."\n";
//             }
//             break;
//         case 3:
//             $entry = readline("Noms de l'élève: ");
//             foreach($tabNotes as $noms => $notes){
//                 if($noms == $entry){
//                     echo "Nom : ".$noms;
//                     foreach($notes as $key => $note){
//                         $add += $notes[$key];
//                         $diviseur++;
//                         echo " - ".$notes[$key] ;
//                     }
//                     echo " - Moyenne : ". round($add/$diviseur,2) ."\n";
//                 }
//             }
//             break;
//         default:
//             $breakProg = 1;
//             break;
//     }
// }


// TABLEAU MULTIDIMENSIONNEL

// 1°

// $suite = array();
// $Max=[];
// for($i=0;$i<8;$i++){
//    for($j=1;$j<=12;$j++){
//     $suite[$i][$j] = rand(0,99);
//     echo $suite[$i][$j]." ";
//    }
//    $Max[$i] = max($suite[$i]);
//    echo "\n";
// }
// echo "La valeur maximun est : ". max($Max) ."\n";

//2°

// $suite = array();
// for($i=1;$i<=13;$i++){
//     if($i<=7){
//         for($j=1;$j<=$i;$j++){
//             $suite[$i][$j]="♦";
//             echo $suite[$i][$j];
//         }
//     }
//     else{
//         for($j=(13-$i);$j>=0;$j--){ 
//             $suite[$i][$j]="♦";
//             echo $suite[$i][$j];
//         }
//     }
//     echo "\n";
// }

// //

$suite = array();
for($i=1;$i<=8;$i++){
        for($j=1;$j<=$i;$j++){
            switch($j){
                case $j<2 || $j==$i:
                    $suite[$i][$j]="♦";
                    echo $suite[$i][$j];
                    break;
                case $j>1&&$j<$i && $i!=8:
                    $suite[$i][$j]="○";
                    echo $suite[$i][$j];
                    break;
                default:
                    $suite[$i][$j]="♦";
                    echo $suite[$i][$j];
                    break;

            }
        }
    echo "\n";
}
?>