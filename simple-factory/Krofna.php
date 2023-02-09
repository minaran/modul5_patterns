<?php

class Krofna
{
private $fil;
private $dodatak;

public function __construct($fil, $dodatak)
{
    $this->fil = $fil; 
    $this->dodatak = $dodatak; 
}
public function naruciKrofnu()
    {
    return "Naručujem krofnu sa punjenjem od: " . $this->fil . 
           " sa dodatkom: " . $this->dodatak . " <br> ";
    }

}

?>