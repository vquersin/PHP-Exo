<?php
////////////////////////////////// Function Révision ////////////////////////////////////
//1°
function convertir($somme,$pays){
    switch($pays){
        case "Angleterre":
            $somme = $somme*0.89;
            return $somme;
    }
}
?>