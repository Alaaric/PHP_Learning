<?php
$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)];

switch ($opponentWeapon) {
    case 'fists':
        $indyWeapon = $weapons[2];
        break;
    case 'whip':
        $indyWeapon = $weapons[0];
        break;
    case 'gun': ;
    $indyWeapon = $weapons[1];
    break;
}

echo $indyWeapon;