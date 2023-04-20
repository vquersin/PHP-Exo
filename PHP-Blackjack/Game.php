<?php
$cardNum = 0;
$cardType = 0;
$scorePlus = 0;
$scoreJ1 = 0;
$scoreCroupier = 0;
$tourJ1 = 1;
$endJ1 = 0;
$endCroupier = 0;
$cardOk = 0;
// TIRAGE DE CARTES
// Ordre joueur ...
$tour = rand(1,2);
if($tour == 1){
    $tourJ1 = 1;
}
else $tourJ1 = 0;
////////////////////////////////////////////////////////////////////////////////////
// Game start ...
while($endJ1 != 1 && $endCroupier != 1){
    // tant que $end 
    ////////////////////////////////////////////////////////////////////////////////
    while($tourJ1 == 1 && $endJ1 != 1){
        // Tour du J1...
        $J1 = readline ("Voulez-vous tirer une carte ? (O/N) ");
        if ($J1 == "O") {
            while($cardOk != 1){
                $cardType = rand(1,4);
                $cardNum = rand(1,14);
                $cardOk = analyseCard($cardType, $cardNum);
            }
            $cardOk = 0;
            $scoreJ1 += lectureCard($cardNum, $tourJ1 ,$scoreJ1 ,$scoreCroupier);
            if($scoreJ1<21){
            echo "Votre score est de : ".$scoreJ1.".\n";
            }
            else if($scoreJ1==21){
                echo "Votre score est de : ".$scoreJ1.".\n";
                $endJ1 = 1;
                $tourJ1 = 0;
            }
            else{
                echo "Votre score est de : ".$scoreJ1.".\n";
                $endJ1 = 1;
                $tourJ1 = 0;
            }
            
        }
        else{
            Echo "Stop Tirage \n";
            $endJ1 = 1;
        }     
    }
    ///////////////////////////////////////////////////////////////////////////////////
    while($tourJ1 == 0 && $endCroupier != 1){
        // Tour du J1...
        $croupier = rand(0,1);
        echo "Croupier rand \n";
        if ($croupier == 1) {
            while($cardOk != 1){
                $cardType = rand(1,4);
                $cardNum = rand(1,14);
                $cardOk = analyseCard($cardType, $cardNum);
            }
            $cardOk = 0;
            $scoreCroupier += lectureCard($cardNum, $tourJ1 ,$scoreJ1 ,$scoreCroupier);
            if($scoreCroupier<21){
            echo "Le score du croupier est de : ".$scoreCroupier.".\n";
            }
            else if($scoreCroupier==21){
                echo "Le score du croupier est de : ".$scoreCroupier.".\n";
                $endCroupier = 1;
                $tourJ1 = 1;
            }
            else{
                echo "Le score du croupier est de : ".$scoreCroupier.".\n";
                $endCroupier = 1;
                $tourJ1 = 1;
            }
            
        }
        else{
            Echo "Stop Tirage \n";
            $endCroupier = 1;
        }     
    }
}
// TEST Winner

    if(($scoreJ1>$scoreCroupier) || ($scoreJ1<21 && $scoreCroupier>21)){
        echo "Joueur 1 gagne la partie. \n";
    }
    else if(($scoreJ1<$scoreCroupier) || ($scoreJ1>21 && $scoreCroupier<21)) {
        echo "L'ordinateur gagne la partie. \n";
    }
    else echo "Match Nul \n";




// ANALYSE DE LA CARTE

function analyseCard($cardType,  $cardNum){
    //card
    //carreaux
    $carreau = [
        "1"=>0, 
        "2"=>0, 
        "3"=>0, 
        "4"=>0, 
        "5"=>0, 
        "6"=>0, 
        "7"=>0, 
        "8"=>0, 
        "9"=>0, 
        "10"=>0, 
        "11"=>0, 
        "12"=>0, 
        "13"=>0, 
        "14"=>0
    ];
    //coeur
    $coeur = [
        "1"=>0, 
        "2"=>0, 
        "3"=>0, 
        "4"=>0, 
        "5"=>0, 
        "6"=>0, 
        "7"=>0, 
        "8"=>0, 
        "9"=>0, 
        "10"=>0, 
        "11"=>0, 
        "12"=>0, 
        "13"=>0, 
        "14"=>0
    ];
    //pique
    $pique = [
        "1"=>0, 
        "2"=>0, 
        "3"=>0, 
        "4"=>0, 
        "5"=>0, 
        "6"=>0, 
        "7"=>0, 
        "8"=>0, 
        "9"=>0, 
        "10"=>0, 
        "11"=>0, 
        "12"=>0, 
        "13"=>0, 
        "14"=>0
    ];
    //trefle
    $trefle = [
        "1"=>0, 
        "2"=>0, 
        "3"=>0, 
        "4"=>0, 
        "5"=>0, 
        "6"=>0, 
        "7"=>0, 
        "8"=>0, 
        "9"=>0, 
        "10"=>0, 
        "11"=>0, 
        "12"=>0, 
        "13"=>0, 
        "14"=>0
    ];

    echo "Carte Type".$cardType."\n";
    switch($cardType){
        case 1:{
            if($carreau[$cardNum] == 0){
                $carreau[$cardNum] = 1;
                return 1;
            }
            else return 0;
        }
        case 2:{
            if($coeur[$cardNum] == 0){
                $coeur[$cardNum] = 1;
                return 1;
            }
            else return 0;
        }
        case 3:{
            if($pique[$cardNum] == 0){
                $pique[$cardNum] = 1;
                return 1;
            }
            else return 0;
        }
        case 4:{
            if($trefle[$cardNum] == 0){
                $trefle[$cardNum] = 1;
                return 1;
            }
            else return 0;
        }
    }
}

// LECTURE CARTE

function lectureCard($cardNum, $tourJ1 ,$scoreJ1 ,$scoreCroupier){
    switch($cardNum){
        case 1:
            if($tourJ1 == 1){ $scoreJ1 +=1;}
            else $scoreCroupier +=1;
            break;
        case 2:
            if($tourJ1 == 1){ $scoreJ1 +=2;}
            else $scoreCroupier +=2;
            break;
        case 3:
            if($tourJ1 == 1){ $scoreJ1 +=3;}
            else $scorePlus+=3;
            break;
        case 4:
            if($tourJ1 == 1){ $scoreJ1 +=4;}
            else $scoreCroupier +=4;
            break;
        case 5:
            if($tourJ1 == 1){ $scoreJ1 +=5;}
            else $scoreCroupier +=5;
            break;
        case 6:
            if($tourJ1 == 1){ $scoreJ1 +=6;}
            else $scoreCroupier +=6;
            break;
        case 7:
            if($tourJ1 == 1){ $scoreJ1 +=7;}
            else $scoreCroupier +=7;
            break;
        case 8:
            if($tourJ1 == 1){ $scoreJ1 +=8;}
            else $scoreCroupier +=8;
            break;
        case 9:
            if($tourJ1 == 1){ $scoreJ1 +=9;}
            else $scoreCroupier +=9;
            break;
        case 10:
        case 11:
        case 12:
        case 13:
            if($tourJ1 == 1){ $scoreJ1 +=10;}
            else $scoreCroupier +=10;
            break;
        case 14:
            {
                if($tourJ1 == 1){ 
                    if($scoreJ1>10){$scoreJ1 +=1;}
                    else $scoreJ1 +=11;
                    break;
                }
                else{
                    if($scoreCroupier>10){$scoreCroupier +=1;}
                    else $scoreCroupier +=11;
                    break;
                }
            }
    }
    if($tourJ1 == 1){
        return $scoreJ1;
    }
    else {
        return $scoreCroupier;    
    }
}


// Suite




?>
