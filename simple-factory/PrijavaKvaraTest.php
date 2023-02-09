<?php
include "PrijavaKvaraFactory.php";

$factory = new PrijavaKvaraFactory();

$prijavaKvara1 = $factory->kreiraj("Masina1","01.02.2023.", "Pera", "Zavrseno");
$prijavaKvara2 = $factory->kreiraj("Masina2","02.02.2023.", "Mika", "U toku");
$prijavaKvara3 = $factory->kreiraj("Masina3","03.02.2023.", "Laza", "U toku");

print_r($prijavaKvara1->ispisiPrijavuKvara());
print_r($prijavaKvara2->ispisiPrijavuKvara());
print_r($prijavaKvara3->ispisiPrijavuKvara());

?>