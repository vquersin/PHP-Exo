
<?php
    // Exo 1

    // $A = 1;
    // $B = $A + 3; //4
    // $A = 3;
    // echo " Exo1 : B vaut " . $B . "\n"; 


    // Exo 2 

    // $A = 5;
    // $B = 3;
    // $C = $A + $B; //8
    // echo " Exo2 : C vaut ".$C . "\n"; 
    // $A = 2;
    // $C= $B-$A; //1
    // echo "  Exo2 : C vaut ".$C . "\n"; 

    //Exo 3

    // $A = 3;
    // $B = 10;
    // $C = $A + $B; //13
    // echo " Exo3 : C vaut ".$C . "\n";
    // $B = $A + $B;
    // echo " Exo3 : B vaut ".$B . "\n";
    // $A = $C;
    // echo " Exo3 : A vaut ".$A . "\n";

    //Exo 4 
    // $X = 54;
    // $Y = 102;

    // echo " Exo3 : X vaut ".$X . "\n";
    // echo " Exo3 : Y vaut ".$Y . "\n";
    // $tmp = $X;
    // $X = $Y;
    // $Y = $tmp;
    // echo " Exo3 : X vaut ".$X . "\n";
    // echo " Exo3 : Y vaut ".$Y . "\n";

    //Exo 5

    // $A = 1;
    // $B = 2;
    // $C = 3;
    // $tmp;

    // $tmp = $A;
    // $A = $B;
    // $B = $C;
    // $C = $tmp;



    //exo readline

    // $number =(float) readline('Nombre à calculer ?');
    // $carre = $number*$number;
    // echo " Exo caré : Number au carré vaut ".$carre . "\n";

    // $nom = readline('Quel est votre nom ?');
    // echo " Exo Nom : Bonjour,  ".$nom . ".\n";

    // $article = "chips";
    // $priceHT = 1.55;
    // $numberStock = 55;
    // $TVA = 21.5;
    // $priceTTC = $priceHT+($TVA/100);
    
    // echo " Exo Magasin : L'article: '" . $article ."' vaut ". $priceHT . "$ avec une TVA de " . $TVA ."%. Donc il vous est demandé ". $priceTTC . "$ par article. Et nous avons actuellement " . $numberStock ." articles en stock. \n";


    // Structure de controle

    // $a = readline("Chiffre entre zéro et neuf?");
    // $b = rand(0,9);
    // if($a>$b){
    //     echo "You win ! Votre numéro: ". $a ."\n Et celui de l'ordi: ". $b .".";
    // }
    // else 
    //     echo "You loose ! Votre numéro: ". $a ."\n Et celui de l'ordi: ". $b .".";
    
    //1°

    // $a = readline("Donner moi un nombre. SVP ");
    // if($a>0){
    //     echo "Votre nombre: ". $a ." est positif. \n";
    // }
    // else if ($a==0) {echo "Votre nombre: ". $a ." est égal à 0. \n";}
    // else echo "Votre nombre: ". $a ." est négatif. \n";

    //2°

    // $a = readline("Donner moi un premier nombre. SVP ");
    // $b = readline("Donner moi un deuxième nombre. SVP ");

    // if($a > 0 && $b > 0 || $a < 0 && $b < 0){
    //     echo "Le produit est positif. \n";
    // }
    // else if($a == 0 || $b == 0) echo "Le produit est égale à 0. \n";
    // else echo "Le produit est négatif. \n";


    //5°

    // $age = readline("Quel âge a l'enfant ? ");
    // switch($age)
    // {
    //     case 6,7: 
    //         echo "L'enfant est Poussin. \n";
    //         break;
    //     case 8, 9:
    //         echo "L'enfant est Pupille. \n";
    //         break;
    //     case 10,11:
    //         echo "L'enfant est Minime. \n";
    //         break;
    //     case 12:
    //         echo "L'enfant est Cadet. \n";
    //         break;
    //     default:
    //         echo "Après concertation en réunion: L'enfant n'a pas l'âge requis pour ces catégories... ";
    //         break;
    // }

    //6° && 7°

        // $heure = readline("Heure(s) ? ");
        // $minute = readline("Minute(s) ? ");
        // $seconde = readline("Seconde(s) ? ");

        // $minute++;
        // $seconde++;

        // if($seconde >=59){
        //     $seconde = 0; 
        //     if($minute > 59){
        //         $minute = 1;
        //         $heure++;
        //         if($heure == 24){
        //             $heure = 0;
        //             translateEcho($heure, $minute, $seconde);
        //         }
        //         else translateEcho($heure, $minute, $seconde);
        //     }
        //     else {
        //         $minute++;
        //         translateEcho($heure, $minute, $seconde);
        //     }
            
        // }
        // else if($minute >= 59){
        //     $minute = 0;
        //     $heure++;
        //     if($heure == 24){
        //         $heure = 0;
        //         translateEcho($heure, $minute, $seconde);
        //     }
        //     else translateEcho($heure, $minute, $seconde);
        // }
        // else translateEcho($heure, $minute, $seconde);

        // function translateEcho($heure, $minute, $seconde){
        //     for($i=0; $i<3; $i++){
        //         if($heure<10 && $i==0){$heure = "0".$heure;}  
        //         else if($minute<10 && $i==1){$minute = "0".$minute;}
        //         else if ($seconde<10 && $i==2) $seconde = "0".$seconde;
        //     }
        //     echo "Dans 1 minute et 1 seconde, il sera ". $heure . "h:". $minute ."m:". $seconde ."s.";     
        // }

        //8°

    // $numberClient = readline("Nombre de reproduction souhaité ? ");
    // $facture = 0;
    // $i=1;
    // if($numberClient == 0){
    //     echo "Si vous n'en voulez pas, alors merci de laissez la place aux autres... \n";
    //     return;
    // }
    // else{
    //     switch($numberClient){
    //         case ($numberClient <= 10):
    //             for($i=0; $i<$numberClient; $i++){
    //                 $facture += 0.10; 
    //             }
    //             echo "Votre sera de ". $facture ."Eur. \n";
    //             break;
    //         case ($numberClient > 10 && $numberClient <= 30):
    //             for($i=0; $i<$numberClient; $i++){
    //                 if($i <= 10){
    //                     $facture += 0.10; 
    //                 }
    //                 else{
    //                     $facture += 0.09;
    //                 }
    //             }
    //             echo "Votre sera de ". $facture ."Eur. \n";
    //             break;
    //         case ($numberClient > 30):
    //             for($i=0; $i<$numberClient; $i++){
    //                 if($i <= 10){
    //                      $facture += 0.10; 
    //                 }
    //                 else if($i > 10 && $i <=30){
    //                     $facture += 0.09;
    //                 }
    //                 else{
    //                     $facture += 0.08;
    //                 }    
    //             }
    //             echo "Votre sera de ". $facture ."Eur. \n";
    //             break;
    //         default:
    //             break;
    //     }
    // return;
    // }

    //9°

    // $sexe = readline("De quel sexe êtes-vous? (M/F) ");
    // $age = readline("De quel âge avez-vous? ");

    // if($sexe == "M" && $age > 20){
    //     echo "Vous payerez un impôt ! \n";
    // }
    // else if($sexe == "F" && $age >=18 && $age <= 35){
    //     echo "Vous payerez un impôt ! \n";
    // }
    // else echo "Vous ne payerez pas un impôt ! \n";

    //10°

    // $year = (float) readline("Année !? ");
    // $day =  (float) readline("Jour !? ");
    // $month =  (float) readline("Mois !? ");

    
    // $r4 = fmod($year , 4);
    // $r400 = fmod($year , 400);
    // $r100 = fmod($year , 100);

    
    // if($r4 == 0 && $r100 != 0 || $r400 == 0 && $r100 != 0){
    //     if($day >29 && $month == 2 ) echo "Cette date n'existe pas !";
    //     else echo "Année bissextile";
    // }
    // else echo "Année Non-bissextile";

?>



