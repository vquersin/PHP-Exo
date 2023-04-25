<?php
// 1°
function analyseNumber($nb){
    switch($nb){
        case $nb<6:
            echo "Il est compris entre 1 et 5.";
            break;
        case $nb>=6 && $nb<=10:
            echo "Il est compris entre 6 et 10.";
            break;
        case $nb>=11 && $nb<=15:
            echo "Il est compris entre 11 et 15.";
            break;
        case $nb>15:
            echo "Il est compris entre 16 et 20.";
            break;
    }
}

// 2°
function analyseSalutation($rand){
    switch($rand){
        case $rand<7:
            echo "Nombre: ".$rand."\n";
            echo "Bonjour";
            break;
        case $rand>=7 && $rand<14:
            echo "Nombre: ".$rand."\n";
            echo "Salut";
            break;
        case $rand>=14:
            echo "Nombre: ".$rand."\n";
            echo "hello";
            break;
    }
}

// 3°
function analyseQuestion($randQuest,$question){

    switch($randQuest){
        case 1:
            if($question[0]==0){
                $question[0]=1
                return $question;
            }
            else break;
        case 2:
            if($question[1]==0){
                $question[1]=1
                return $question;
            }
            else break;
        case 3:
            if($question[2]==0){
                $question[2]=1
                return $question;
            }
            else break;
        case 4:
            if($question[3]==0){
                $question[3]=1
                return $question;
            }
            else break;
        default:
            break;
    }
}

function searchHint($reply){}

// 4°

?>