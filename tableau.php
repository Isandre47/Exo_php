<?php

$films = [
    "Les aventuriers de l'arche perdu" => ["Harrison Ford", "KAren Allen", "Paul Freeman."],
    "Indiana Jones et le temple maudit" => ["Harrison Ford", "Kate Capshaw", "Jonathan Ke Quan."],
    "Indiana Jones et la dernière croisade" => ["Harrison Ford", "Sean Connery", "Denholm Elliot."]
];

foreach ($films as $key => $value){
    $nb = count ($films[$key]);
    echo("Dans le film " . $key .  " les principaux acteurs sont");
    for($i = 0; $i <= $nb; $i++){
        echo (" " . $films[$key][$i]);
    }    
    echo("<br>");
}
?>
