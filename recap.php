<?php
require "recapRequire.php";
// 1°
// $nb = rand(1,20);
// analyseNumber($nb);

// 2°
// $rand = rand(0,20);
// analyseSalutation($rand);

// 3°
// personnage ("nom" => array(sexe(0-H/1-F) , lunette , moustache , chapeau))
$personnage = array("Mlle Rose"=> array(1,0,0,0),"Mme Leblanc"=> array(1,1,0,0),"Professeur Violet"=> array(0,1,0,1),"Colonel Moutarde"=> array(0,1,1,0),"Revérend Olive"=> array(0,1,0,0));
$question = [0,0,0,0];
$indice = [0,0,0,0];
$breakProg=0;
// Déroulement de la game...
echo "Pensez à un personnage : Melle Rose, le professeur Violet, le Colonel Moutarde, Le Révérend Olive et Mme Leblanc.\nTrue : Oui - False : Non\n";
while($breakProg!=1){
    // Questionnement...
    $randQuest = rand(1,4);
    $question = analyseQuestion($randQuest,$question);
    foreach($question as $key => $value){
        echo "\n question : ". $value ."\n";
        switch($question[$key]){
        case 1:
            $reply = readline("Est-ce que votre personnage est un homme? ");
            searchHint($reply);
            break;
        case 2:
            $reply = readline("Est-ce que votre personnage porte des lunettes? ");
            searchHint($reply);
            break;
        case 3:
            $reply = readline("Est-ce que votre personnage a une moustache? ");
            searchHint($reply);
            break;
        case 4:
            $reply = readline("Est-ce que votre personnage porte un chapeau? ");
            searchHint($reply);
            break;
        default:
            break;
    }
    }
    
}
// Fin game...
// 4°

?>