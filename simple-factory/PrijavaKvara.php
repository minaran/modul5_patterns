<?php

class PrijavaKvara
{
private $masina;
private $datum;
private $operater;
private $status;

public function __construct($masina, $datum, $operater, $status)
    {
    $this->masina = $masina; 
    $this->datum = $datum;
    $this->operater = $operater; 
    $this->status = $status; 
    }

public function ispisiPrijavuKvara()
    {
    return "Prijava kvara:<br>Masina: $this->masina;<br>Datum: $this->datum;<br>Operater: $this->operater;<br>Status: $this->status<br>";
    }
}

?>