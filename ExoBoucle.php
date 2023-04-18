<?php
// EXO PHP BOUCLE-------------------------------------------------------------------------------------

// EXO "TANT QUE"-------------------------------------------------------------------------------------

//1°-------------------------------------------------------------------------------------

// $nb = (float) readline("Donner un nombre entre 1 et 3 : ");

// while($nb<1 || $nb>3){
//     $nb = (float) readline("Donner un nombre: ");
// }
// echo "C'est good ma guy ! ";

//2°-------------------------------------------------------------------------------------

// $nb = (float) readline("Donner un nombre entre 10 et 20 : ");

// while($nb<10 || $nb>20){
//     if($nb<10){
//         echo "Nombre inférieur à 10. \n";
//         $nb = (float) readline("Donner un nombre entre 10 et 20 : ");
//     }
//     else{
//         echo "Nombre supérieur à 20. \n";
//         $nb = (float) readline("Donner un nombre entre 10 et 20 : ");
//     }
    
// }
// echo "C'est good ma guy ! ";

//3°-------------------------------------------------------------------------------------

// $nb = (float) readline("Donner un nombre : ");
// $saisie = $nb+10;

// while($nb != $saisie){
//     $nb++;
//     echo " " . $nb . " -";
// }
// echo " Done.";

//4°-------------------------------------------------------------------------------------

// $a = (float) readline("Donner un nombre : ");
// $b = (float) readline("Donner un nombre : ");

// function PGCD($a, $b){
//         while ($b > 0) 
//         { 
//         $r = $a % $b; 
//         $a = $b; 
//         $b = $r; 
//     } 
//     return $a; 
// }


//    $pgcd = PGCD($a, $b);
//    echo  $pgcd." - Done.";


//5°-------------------------------------------------------------------------------------

// $a = (float) readline("Donner un nombre : ");
// $b = (float) readline("Donner un nombre : ");

// function PGCD($a, $b){
//         while ($b > 0) 
//         { 
//         $r = $a % $b; 
//         $a = $b; 
//         $b = $r; 
//     } 
//     return $a; 
// }
//     $pgcd = PGCD($a, $b);
//     $ppcm = ($a*$b)/$pgcd;
//     echo  "PGCD : ".$pgcd." - Done. \n";
//     echo  "PPCM : ".$ppcm." - Done. \n";

// EXO "FOR"-------------------------------------------------------------------------------------

//1°-------------------------------------------------------------------------------------

// $numRand = rand(1,9);

// for($i=1; $i<11; $i++){
//     $r = $numRand*$i;
//     echo $i." x ".$numRand." = ".$r."\n";
// }

//2°-------------------------------------------------------------------------------------

// $saisie = (float) readline("Entrer un nombre : ");

// echo "Les 5 nombres précédents sont: \n";
// for($i=1; $i<6; $i++){
//     $r = $saisie-$i;
//     echo $r."\n";
// }
// echo "*********************\n";
// echo "Les 5 nombres suivant sont: \n";
// for($i=1; $i<6; $i++){
//     $r = $saisie+$i;
//     echo $r."\n";
// }

//3°-------------------------------------------------------------------------------------

// $saisie = (float) readline("Entrer un nombre : ");
// $r = 1;
// for($i=1; $i<=$saisie; $i++){
//     $r = $r*$i;
// }
// echo "Le factorielle de ".$saisie. " vaut : " .$r."\n";

//4°-------------------------------------------------------------------------------------

// $saveMax = 0;
// $saveMin = 0;

// for($i=1;$i<=5;$i++){
//     $saisie = (float) readline("Entrer un nombre : ");
//     if($saisie>$saveMax){
//         $saveMax = $saisie;
//         if($i==1){
//             $saveMin = $saveMax;
//         }
//     }
//     else if($saisie<$saveMin){
//         $saveMin = $saisie;
//     }
// }
// echo "Max : ".$saveMax."  -  Min : " .$saveMin;


?>