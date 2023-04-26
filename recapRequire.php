<?php
//////////////////////////////// RECAP 1 //////////////////////////////
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
function analyseQuestion($randQuest,$question,$askQuest){

    switch($randQuest){
        case 1:
            if($question[0]==0){
                $askQuest=1;
                return $askQuest;
            }
            else break;
        case 2:
            if($question[1]==0){
                $askQuest=2;
                return $askQuest;
            }
            else break;
        case 3:
            if($question[2]==0){
                $askQuest=3;
                return $askQuest;
            }
            else break;
        case 4:
            if($question[3]==0){
                $askQuest=4;
                return $askQuest;
            }
            else break;
        default:
            break;
    }
}

function searchHint($reply){
    if($reply == "true"){
        return 1;
    }
    else if($reply == "false"){
        return 0;
    }
}
function analyseHint($gender,$glasses,$mustache,$hat,$breakProg){
    switch($gender){
        case 0:
            if($glasses == 1){
                echo "Réponse : Le personnage auquel vous pensez est Mme Leblanc";
                $breakProg = 1;
                return $breakProg;
            }
            else if($glasses == 0){
                echo "Réponse : Le personnage auquel vous pensez est Mlle Rose";
                $breakProg = 1;
                return $breakProg;
            }
            else break;
        case 1:
            if($mustache==0 || $hat==1){
                if($hat==1){
                    echo "Réponse : Le personnage auquel vous pensez est le Professeur Violet";
                    $breakProg = 1;
                    return $breakProg;
                }
                else if($hat==0){
                    echo "Réponse : Le personnage auquel vous pensez est le Révérend Olive";
                    $breakProg = 1;
                    return $breakProg;
                }
                else break;
            }
            else if($mustache==1){
                echo "Réponse : Le personnage auquel vous pensez est le Colonel Moutarde";
                $breakProg = 1;
                return $breakProg;
            }
            else break;
        default:
            break;
    }
}

// 4°
function analyseNumberDivisible($nb){
    if($nb%2 == 1){
        echo "$nb est impair.\n";
    }
    else{
        if($nb%3 == 0){
            echo "$nb est pair et divisible par 3.\n";
            return 1;
        }
        else{
            echo "$nb n'est pas divisible par 3.\n";
        }
    }
}

//////////////////////////////// RECAP 2 //////////////////////////////

// 1° - 2°
function countVowels($string){
    $vowels = array("a","e","y","u","i","o","ô");
    $len = strlen($string);
    $num=0;
    for($i=0;$i<$len;$i++){
        if(in_array($string[$i], $vowels)){
            $num++;
        }
    }
    echo "Nombre de voyelles: $num";
}

// 3°
function trianNb($size){
    $suite = array();
    for($i=1;$i<=$size;$i++){
            for($j=1;$j<=$i;$j++){
                echo $i;
            }
        echo "\n";
    }
}

// 4°
function searchNb($tab, $nb){
    $position = 0;
    $find = 0;
    foreach($tab as $key => $value){
        if($value == $nb){
            $find=1;
            $position++;
            $pos[$position] = $key+1; 
        }
    }
    if($find==1){
        echo "Le nombre $nb est bien dans la table en ";
        foreach($pos as $key =>$value){
            if($key==1) echo $value;
            else echo ", ".$value; 
        }
        echo "eme position.\n";
    }
    else  echo "Le nombre $nb n'est pas dans la table.\n";

}

// 5°
function tableMultiply($nb){
    for($i=1;$i<=$nb;$i++){
        if($i==1){
            for($j=1;$j<=$nb;$j++){
                
                echo $j."   ";
            }
            
        }
        else{
            for($j=1;$j<=$nb;$j++){
                if($j==1){
                    echo $i."   ";
                } 
                else{
                    if(($j*$i)>9){
                        echo $j*$i."  ";
                    }
                    else echo $j*$i."   ";
                } 
            }
            
        }
        echo "\n"; 
    }
}
?>