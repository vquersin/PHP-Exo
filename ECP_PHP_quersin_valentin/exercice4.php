<?php
require "fonctions.php";
/////////////////////////////////// EXO 4 /////////////////////////////////// 
// Déclaration de variables...
$element = array(
    "H"=>"Hydrogène",
    "He"=>"Hélium",
    "P"=>"Phosphore",
    "V"=>"Vanadium",
    "Pb"=>"Plomb",
    "I"=>"Iode",
    "Kr"=>"Krypton",
    "X"=>"Xénon",
    "Rn"=>"Radon",
    "Zr"=>"Zirconium"
);
// Début prog...
echo str_repeat(" ", 10).str_repeat("*", 6)."Tableau périodique des éléments chimiques".str_repeat("*", 6)."\n\n"; // Echo Head... str_repeat pour spam des caractères...
foreach($element as $key => $nom){
    echo "$key : $nom\n";
}
echo "\n".str_repeat("*", 31)."\n\nTableau trié :\n";
asort($element);
foreach($element as $key => $nom){
    echo "$key : $nom\n";
}
echo "\n";
// Fin prog...
?>