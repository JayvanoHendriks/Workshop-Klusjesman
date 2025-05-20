<?php
require_once('database.php');

class KlusInfo extends Database
{
    public function getAllKlussen(){
        $query = "SELECT * FROM klus AS k
        INNER JOIN klanten AS kl ON k.klantid = kl.id";
        return parent::voerQueryUit($query);
    }
}