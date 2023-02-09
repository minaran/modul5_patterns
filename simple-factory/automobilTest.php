<?php
include "AutomobilFactory.php";

$factory = new AutomobilFactory();
$vozilo1 = $factory->kreiraj('BMW', 'XS');
$vozilo2 = $factory->kreiraj('Audi', 'A6');

print_r($vozilo1->ispisiMarkuModel());
print_r($vozilo2->ispisiMarkuModel());

?>