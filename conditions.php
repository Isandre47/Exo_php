<?php

$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.

echo ("Ennemy arm's: " . $opponentWeapon);

switch ($opponentWeapon){
    case 'fists':
        $indyWeapon = 'gun';
        break;
    case 'whip':
        $indyWeapon = 'fists';
        break;
    case 'gun':
        $indyWeapon = 'whip';
        break;
    default:
        echo 'No arms';
}

echo ("<br> Indy arm's: " . $indyWeapon);

        
?>
