<?php
require('database.php');

class KlusInfo extends Database
{
    public function getAllKlussen(){
        $query = "SELECT * FROM klus AS k
        JOIN klus_materialen AS km ON k.id = km.klus_id
        JOIN klanten AS kl ON k.klantid = kl.id";
        return parent::voerQueryUit($query);
    }
}