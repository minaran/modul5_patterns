<?php
include "PrijavaKvara.php";

class PrijavaKvaraFactory 
{
    public function kreiraj($masina, $datum, $operater, $status)
    {
            return new PrijavaKvara($masina, $datum, $operater, $status);
        }
    }
?>