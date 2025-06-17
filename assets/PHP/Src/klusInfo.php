<?php
require_once('database.php');

class KlusInfo extends Database
{
    public function voegKlusToe($naam, $opmerkingen, $voorrijkosten, $uurtarief, $gewerkteUren, $datum, $klantId, $adres)
    {
        $query = "INSERT INTO klus (WatGedaan, opmerkingen, voorrijkosten, uurtarief, gewerkteMinuten, wanneerIetsGedaan, klantid, adres) 
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $params = [
            $naam,
            $opmerkingen,
            $voorrijkosten,
            $uurtarief,
            $gewerkteUren,
            $datum,
            $klantId,
            $adres
        ];
        return parent::voerQueryUit($query, $params);
    }

    public function getLastInsertId()
    {
        $query = "SELECT LAST_INSERT_ID() AS last_id";
        $result = parent::voerQueryUit($query);
        return $result[0]['last_id'] ?? null;
    }

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
}