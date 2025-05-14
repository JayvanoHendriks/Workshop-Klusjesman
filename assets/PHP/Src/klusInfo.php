<?php
require_once('database.php');

class KlusInfo extends Database
{
    public function getAllKlussen(){
        $query = "SELECT * FROM klus AS k
        INNER JOIN klus_materialen AS km ON k.id = km.klus_id
        INNER JOIN klanten AS kl ON k.klantid = kl.id";
        return parent::voerQueryUit($query);
    }
}