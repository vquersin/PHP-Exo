<?php
//////////////////////////////////////////////////////////////////////////////////
// DECLARATION DE VARIABLES 
$cardNum = 0;
$cardType = 0;
$scorePlus = 0;
$scoreJ1 = 0;
$scoreCroupier = 0;
$tourJ1 = 0;
$endJ1 = 0;
$endCroupier = 0;
$cardOk = 0;
///////////////////////////////////////////////////////////////////////////////////
// Ordre joueur ...
$tour = rand(1,2);
if($tour == 1){
    $tourJ1 = 1;
}
else $tourJ1 = 0;
////////////////////////////////////////////////////////////////////////////////////
// Game start ...
while($endJ1==0 || $endCroupier==0){
    // tant que $end 
    /////////////////////////////
    if($tourJ1 == 1){
        while($tourJ1 == 1 && $endJ1 != 1){
            // Tour du J1...
            echo "----------------------TOUR JOUEUR !!!----------------------------  \n";
            echo "Le score du croupier est de : ".$scoreCroupier.".\n";
            echo "Votre score est de : ".$scoreJ1.".\n";
            $J1 = readline ("Voulez-vous tirer une carte ? (O/N) ");
            if ($J1 == "O") {
                while($cardOk != 1){ // TIRAGE DE LA CARTE
                    $cardType = rand(1,4);
                    $cardNum = rand(1,14);
                    $cardOk = analyseCard($cardType, $cardNum); // EXAMINE LA CARTE TIRER
                }
                $cardOk = 0;
                $scoreJ1 = lectureCard($cardNum, $tourJ1 ,$scoreJ1 ,$scoreCroupier); // CALCUL DES SCORES PAR RAPPORT A LA CARTE
                if($scoreJ1<21){
                    echo "Votre score est de : ".$scoreJ1.".\n";
                    if($endCroupier==0){$tourJ1 = 0;}
                    
                }
                else if($scoreJ1>=21){
                    echo "Votre score est de : ".$scoreJ1.".\n";
                    $endJ1 = 1;
                    if($endCroupier==0){$tourJ1 = 0;}
                }  
            }
            else if($J1 == "N"){ // Player Out ...
                Echo "Player Out ... \n";
                $endJ1 = 1;
                $tourJ1 = 0;
            }
        }
    }
    
    //////////////////////////////
    else if($tourJ1 == 0){
        while($tourJ1 == 0 && $endCroupier != 1){
            // Tour de l'Ordi...
            echo " ----------------------TOUR CROUPIER !!!----------------------------- \n";
            echo "Le score du croupier est de : ".$scoreCroupier.".\n";
            $croupier = tourOrdinateur($scoreCroupier); // GESTION D'IA
            if ($croupier == 1) {
                echo "Le croupier joue.\n";
                while($cardOk != 1){ // TIRAGE DE LA CARTE
                    $cardType = rand(1,4);
                    $cardNum = rand(1,14);
                    $cardOk = analyseCard($cardType, $cardNum); // EXAMINE LA CARTE TIRER
                }
                $cardOk = 0;
                $scoreCroupier = lectureCard($cardNum, $tourJ1 ,$scoreJ1 ,$scoreCroupier); // CALCUL DES SCORES PAR RAPPORT A LA CARTE
                if($scoreCroupier<21){
                    echo "Le score du croupier est de : ".$scoreCroupier.".\n";
                    if($endJ1==0){$tourJ1 = 1;}
                }
                else if($scoreCroupier>=21){
                    echo "Le score du croupier est de : ".$scoreCroupier.".\n";
                    $endCroupier = 1;
                    if($endJ1==0){$tourJ1 = 1;}
                }
            }
            else{
                Echo "Croupier Out ... \n"; // Croupier Out ...
                $endCroupier = 1;
                $tourJ1 = 1;
            }     
        }
    }
    
    // if($endJ1==1 && $endCroupier==0){
    //     $tourJ1=0;
    //     echo "Joueur J1 à fini. \n";
    // }
    // else if($endJ1==0 && $endCroupier==1){
    //     $tourJ1=1;
    //     echo "Le croupier à fini. \n";
    // }
}
////////////////////////////////////////
// TEST Winner

    if(($scoreJ1>$scoreCroupier || $scoreCroupier>21) && ($scoreJ1<22)){
        echo "Joueur 1 gagne la partie. \n";
    }
    else if(($scoreCroupier>$scoreJ1 || $scoreJ1>21) && ($scoreCroupier<22)) {
        echo "Le croupier gagne la partie. \n";
    }
    else echo "Partie Nulle \n";

// FIN DE PARTIE
///////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////
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
    switch($cardType){
        case 1:{
            if($carreau[$cardNum] == 0){
                $carreau[$cardNum] = 1;
                echo "Carte tirer : ♦";
                return 1;
            }
            else return 0;
        }
        case 2:{
            if($coeur[$cardNum] == 0){
                $coeur[$cardNum] = 1;
                echo "Carte tirer : ♥";
                return 1;
            }
            else return 0;
        }
        case 3:{
            if($pique[$cardNum] == 0){
                $pique[$cardNum] = 1;
                echo "Carte tirer : ♠";
                return 1;
            }
            else return 0;
        }
        case 4:{
            if($trefle[$cardNum] == 0){
                $trefle[$cardNum] = 1;
                echo "Carte tirer : ♣";
                return 1;
            }
            else return 0;
        }
    }
}
///////////////////////////////////////////////////////////////////////////////////
// LECTURE CARTE

function lectureCard($cardNum, $tourJ1 ,$scoreJ1 ,$scoreCroupier){
    switch($cardNum){
        case 1:
            if($tourJ1 == 1){ 
                $scoreJ1 +=1;
                echo " Un. \n";
                break;
            }
            else{
                $scoreCroupier +=1;
                echo " Un. \n";
                break;
            } 
        case 2:
            if($tourJ1 == 1){ 
                $scoreJ1 +=2;
                echo " Deux. \n";
                break;
            }
            else{
                $scoreCroupier +=2;
                echo " Deux. \n";
                break;
            }
        case 3:
            if($tourJ1 == 1){ 
                $scoreJ1 +=3;
                echo " Trois. \n";
                break;
            }
            else{
                $scoreCroupier +=3;
                echo " Trois. \n";
                break;
            }
        case 4:
            if($tourJ1 == 1){ 
                $scoreJ1 +=4;
                echo " Quatre. \n";
                break;
            }
            else{
                $scoreCroupier +=4;
                echo " Quatre. \n";
                break;
            }
        case 5:
            if($tourJ1 == 1){ 
                $scoreJ1 +=5;
                echo " Cinq. \n";
                break;
            }
            else{
                $scoreCroupier +=5;
                echo " Cinq. \n";
                break;
            }
        case 6:
            if($tourJ1 == 1){ 
                $scoreJ1 +=6;
                echo " Six. \n";
                break;
            }
            else{
                $scoreCroupier +=6;
                echo " Six. \n";
                break;
            }
        case 7:
            if($tourJ1 == 1){ 
                $scoreJ1 +=7;
                echo " Sept. \n";
                break;
            }
            else{
                $scoreCroupier +=7;
                echo " Sept. \n";
                break;
            }
        case 8:
            if($tourJ1 == 1){ 
                $scoreJ1 +=8;
                echo " Huit. \n";
                break;
            }
            else{
                $scoreCroupier +=8;
                echo " Huit. \n";
                break;
            }
        case 9:
            if($tourJ1 == 1){ 
                $scoreJ1 +=9;
                echo " Neuf. \n";
                break;
            }
            else{
                $scoreCroupier +=9;
                echo " Neuf. \n";
                break;
            }
        case 10:
            if($tourJ1 == 1){ 
                $scoreJ1 +=10;
                echo " Dix. \n";
                break;
            }
            else{
                $scoreCroupier +=10;
                echo " Dix. \n";
                break;
            }
        case 11:
            if($tourJ1 == 1){ 
                $scoreJ1 +=10;
                echo " Valet. \n";
                break;
            }
            else{
                $scoreCroupier +=10;
                echo " Valet. \n";
                break;
            }
        case 12:
            if($tourJ1 == 1){ 
                $scoreJ1 +=10;
                echo " Dame. \n";
                break;
            }
            else{
                $scoreCroupier +=10;
                echo " Dame. \n";
                break;
            }
        case 13:
            if($tourJ1 == 1){ 
                $scoreJ1 +=10;
                echo " Roi. \n";
                break;
            }
            else{
                $scoreCroupier +=10;
                echo " Roi. \n";
                break;
            }
        case 14:
            {
                if($tourJ1 == 1){ 
                    if($scoreJ1>10){
                        $scoreJ1++;
                        echo " As. \n";
                        break;
                    }
                    else{ 
                        $scoreJ1 +=11;
                        echo " As. \n";
                        break;
                    }
                }
                else{
                    if($scoreCroupier>10){
                        $scoreCroupier++;
                        echo " As. \n";
                        break;
                    }
                    else{
                        $scoreCroupier +=11;
                        echo " As. \n";
                        break;
                    } 
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
///////////////////////////////////////////////////////////////////////////////////
// IA
function tourOrdinateur($scoreCroupier){
    $rand = 0;
    if($scoreCroupier<12){
        return 1;
    }
    else if($scoreCroupier>=12 && $scoreCroupier<=16){
        $rand =rand(1,10);
        switch($rand){
            case 1:
            case 2:
                return 1;
                break;
            default:
                return 0;
                break;
        }
    }
    else return 0;
}
///////////////////////////////////////////////////////////////////////////////////
?>
