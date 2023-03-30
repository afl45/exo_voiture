<?php

// autoload les classes
function chargerClasse($classe) {
    require $classe.'.php';
}

spl_autoload_register('chargerClasse');


$supercar1 = new Mercedes("Mercedes", "190E", "essence", "200", false);
$supercar2 = new Mercedes("Mercedes", "G-Class", "essence", "300", false);
$supercar3 = new Ferrari("Ferrari", "F40", "essence", "300", false);

$garage1 = new Garage("Los Santos");

$garage1->add_garage($supercar1);
$garage1->add_garage($supercar2);
$garage1->add_garage($supercar3);
$garage1->affiche_garage();

?>