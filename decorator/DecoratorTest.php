<?php
include "Burger.php";
include "Kackavalj.php";
include "Kecap.php";

$b = new Burger();
$bk = new Kackavalj($b);
$bkecap = new Kecap($b);
$bkecapkack = new Kecap($bk);

echo $b->cena() . " <br> ";  // treba da ispise 100
echo $bk->cena() . " <br> ";  // treba da ispise +50 = 150
echo $bkecap->cena() . " <br> ";  // treba da ispise 100+40 = 140
echo $bkecapkack->cena() . " <br> ";  // treba da ispise 150+40 = 190

?>