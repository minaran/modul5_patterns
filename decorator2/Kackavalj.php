<?php
include "BurgerDecorator.php";
class Kackavalj extends BurgerDecorator  // izmenjeno sto je bilo: implements Prilog
{

private const cenaKack = 50;  // ovde smo a pocetku dali cenu u slucaju da ce se menjati pa da bude lakse

// private $prilog;
/* public function __construct(Prilog $prilog){
   $this->prilog = $prilog;} */  // sad nam ovo ne treba kad smo uveli novu abstraktnu klasu: BurgerDecorator.php

public function cena()
{
    return $this->prilog->cena() + self::cenaKack;
}


}


?>