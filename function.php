<?php

// FUNCTION PRIX TTC

//1°

function TTC($HT, $Q, $TVA){
    $TTC = ($HT+($HT/100*$TVA))*$Q;
    echo "Cela vous vaudra: ".round($TTC,2)."EUR.\n";
    return $TTC;
}

// 2°

function PGCD($a, $b){
    while ($b > 0) 
    { 
    $r = $a % $b; 
    $a = $b; 
    $b = $r; 
} 
echo  "PGCD : ".$a." - Done. \n";
return $a; 
}

// 3°
function PPCM($a, $b){
    $a1 = $a;
    $b1 = $b;
    while ($b > 0) 
    { 
    $r = $a % $b; 
    $a = $b; 
    $b = $r; 
}
$ppcm = ($a1*$b1)/$a;
echo  "PPCM : ".$ppcm." - Done. \n";
return $ppcm; 
}

//4°
function tableMultiply($nb){
    for($i=1;$i<=10;$i++){
        echo $nb." x ".$i." = ". round(($nb*$i),2)."\n";
    }
}

// 5°
function factorielle($nb){
    $fact = 1;
    for($i=1; $i<=$nb; $i++){ 
        $fact = $fact*$i;
    }
    echo "Le factorielle de ".$nb. " vaut : " .$fact."\n";
    return $fact;
}

// 6°
function sommeTab($tab){
    $somme =0;
    foreach($tab as $key => $value){
        $somme += $value;
    }
    echo "La somme vaut : ".round($somme,2)."\n";
    return round($somme,2);
}

// 7°
function pyramide($size){
    $suite = array();
    for($i=1;$i<=$size;$i++){
        if($i<=$size/2){
            for($j=1;$j<=$i;$j++){
                $suite[$i][$j]="♦";
                echo $suite[$i][$j];
            }
        }
        else{
            for($j=($size-$i);$j>=0;$j--){ 
                $suite[$i][$j]="♦";
                echo $suite[$i][$j];
            }
        }
        echo "\n";
    }
}
?>