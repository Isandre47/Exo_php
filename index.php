<?php

// initialisation de variable pour tester la fonction et le résultat avec une valeur

$animals = "Le lapin";
$chose = "la lune";

// fonction

function writeSecretSentence(string $param1, string $param2){
    $resultat = array($param1, $param2);
    return $resultat;
}

echo writeSecretSentence($animals, $chose)[0] . " s'incline face à " . writeSecretSentence($animals, $chose)[1]; ;
?>
