<?php
require "SingletonLogin.php";

$username = "stasa";
$password = "stasa123";

$instanca1 = SingletonLogin::getInstance($username, $password);
$korisnik1 = $instanca1->korisnik();
print_r($korisnik1);

$instanca2 = SingletonLogin::getInstance($username, $password);
$korisnik2 = $instanca2->korisnik();
print_r($korisnik2);

if($instanca1 === $instanca2) {
echo "U pitanju je ista instanca. <br>";
} else {
    echo "Kreirano je dva korisnika. <br>";
}

?>