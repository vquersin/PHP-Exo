
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
    //     case ($age == 6 || $age == 7): 
    //         echo "L'enfant est Poussin. \n";
    //         break;
    //     case ($age == 8 || $age == 9):
    //         echo "L'enfant est Pupille. \n";
    //         break;
    //     case ($age == 10 || $age == 11):
    //         echo "L'enfant est Minime. \n";
    //         break;
    //     case 12:
    //         echo "L'enfant est Cadet. \n";
    //         break;
    //     default:
    //         echo "L'enfant n'a pas l'âge requis pour ces catégories... ";
    //         break;
    // }

    //6° && 7°

        $heure = readline("Heure(s) ? ");
        $minute = readline("Minute(s) ? ");
        $seconde = readline("Seconde(s) ? ");

        $seconde++;
        $minute++;

        if($seconde >59 || $minute >59){
            
            if($minute >59){
                switch($minute){
                    case 60:{
                        $minute = 0;
                        if($heure > 23){
                            $heure = 0;
                        } 
                        else{
                            $heure++;
                        } 
                        break;
                        
                    } 
                    case 61:
                        {
                            $minute = 1;
                            if($heure > 23){
                                $heure = 0;
                            } 
                            else{
                                $heure++;
                            } 
                            
                        }
                        break; 
                }
            }
            else{
                $minute++;
                $seconde = 0;
            }
        }



        echo "Dans 1 minute et 1 seconde, il sera ". $heure . "h:". $minute ."m:". $seconde ."s.";
        return;

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
    //                 $facture = $facture + 0.10; 
    //             }
    //             echo "Votre sera de ". $facture ."Eur. \n";
    //             break;
    //         case ($numberClient > 10 && $numberClient <= 30):
    //             for($i=0; $i<$numberClient; $i++){
    //                 if($i <= 10){
    //                     $facture = $facture + 0.10; 
    //                 }
    //                 else{
    //                     $facture = $facture + 0.09;
    //                 }
    //             }
    //             echo "Votre sera de ". $facture ."Eur. \n";
    //             break;
    //         case ($numberClient > 30):
    //             for($i=0; $i<$numberClient; $i++){
    //                 if($i <= 10){
    //                      $facture = $facture + 0.10; 
    //                 }
    //                 else if($i > 10 && $i <=30){
    //                     $facture = $facture + 0.09;
    //                 }
    //                 else{
    //                     $facture = $facture + 0.08;
    //                 }    
    //             }
    //             echo "Votre sera de ". $facture ."Eur. \n";
    //             break;
    //         default:
    //             break;
    //     }
    // return;
    // }
?>



