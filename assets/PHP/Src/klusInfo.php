<?php
require_once('database.php');

class KlusInfo extends Database
{
    public function getAllKlussen(){
        // note: INNER JOIN klus_materialen doet het niet als er niks in klus_materialen zit
        $query = "SELECT * FROM klus AS k
        INNER JOIN klanten AS kl
        ON k.klantid = kl.id";
        return parent::voerQueryUit($query);
    }
}