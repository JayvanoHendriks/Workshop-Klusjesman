<?php
require_once('database.php');

class KlusInfo extends Database
{
    public function getAllKlussen(){
        $query = "SELECT * FROM klus AS k
        INNER JOIN klanten AS kl ON k.klantid = kl.id";
        return parent::voerQueryUit($query);
    }

    public function getAllJobs($name)
    {
        $query = "SELECT * FROM klanten
        INNER JOIN klus ON klanten.id = klus.klantid
        WHERE naam = ?";
        $params = [$name];
        return parent::voerQueryUit($query, $params);
    }

    public function getAllMaterials()
    {
        $query = "SELECT * FROM materialen";
        return parent::voerQueryUit($query);
    }
}