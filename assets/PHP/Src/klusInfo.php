<?php
require_once('database.php');

class KlusInfo extends Database
{
    public function getAllKlussen(){
        $query = "SELECT * FROM klus AS k
        INNER JOIN klanten AS kl ON k.klantid = kl.id";
        return parent::voerQueryUit($query);
    }

    public function getAllJobs($klantId)
{
     $query = "SELECT * FROM klanten
    INNER JOIN klus ON klanten.id = klus.klantid
    WHERE klantid = ?";
    $params = [$klantId];
    return parent::voerQueryUit($query, $params);
}

  public function saveDateOrWhat( $klantId , $WatGedaan , $WanneerIetsGedaan){
    if ($klantId == "" || $WatGedaan == "" || $WanneerIetsGedaan == ""){
        return false;
      }


    $query = "INSERT INTO klus (klantid, WatGedaan, wanneerIetsGedaan) VALUES (?, ?, ?);";
    $params = [ $klantId, $WatGedaan, $WanneerIetsGedaan];

    return parent::voerQueryUit($query, $params) > 0;
  }

  public function opmerkingenToevoegen($klantId, $opmerkingen){
    $query = "UPDATE klus SET opmerkingen = ?
    WHERE klanid = ?";
    $params = [$klantId, $opmerkingen];

   return parent::voerQueryUit($query, $params) > 0;
  }
}