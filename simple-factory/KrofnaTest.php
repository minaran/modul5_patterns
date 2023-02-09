<?php
include "KrofnaFactory.php";

$factory = new KrofnaFactory();
$krofna1 = $factory->napraviKrofnu('Vanile', 'čokoladica');
$krofna2 = $factory->napraviKrofnu('Nutele', 'bombonica');

print_r($krofna1->naruciKrofnu());
print_r($krofna2->naruciKrofnu());

?>