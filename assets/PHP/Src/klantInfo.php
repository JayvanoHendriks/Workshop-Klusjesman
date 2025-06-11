<?php
require_once('database.php');

class Klanten extends Database
{
  public function getAllCustomers()
  {
    $query = "SELECT * FROM klanten";
    return parent::voerQueryUit($query);
  }

  public function saveCustomer($name , $adres, $phone, $email){
    if ($name == "" || $phone == "" || $email == ""){
        return false;
      }


    $query = "INSERT INTO klanten (name, telefooonnummer, Adres, emailadres) VALUES (?, ?, ?, ?);";
    $params = [$name, $phone, $adres, $email];

    return parent::voerQueryUit($query, $params) > 0;
  }

public function getCustomerByName($zoekterm)
{
    $query = "SELECT * FROM klanten WHERE name LIKE ?";
    $params = ['%' . $zoekterm . '%'];
    return parent::voerQueryUit($query, $params);
}

public function getCustomerByAdres($zoekterm)
{
    $query = "SELECT * FROM klanten WHERE Adres LIKE ?";
    $params = ['%' . $zoekterm . '%'];
    return parent::voerQueryUit($query, $params);
}

public function getCustomerByOldAddress($zoekterm)
{
    $query = "SELECT k.name, k.emailadres, k.telefooonnummer, k.Adres, kl.adres, k.id
    FROM klanten as k
    INNER JOIN klus as kl
    ON k.id = kl.klantid
    WHERE kl.adres like ?";
    $params = ['%' . $zoekterm . '%'];
    return parent::voerQueryUit($query, $params);
}

public function getCustomerDetails($klantId)
{
      $query = "SELECT * FROM klanten as k
      where id = ?";
      $params = [$klantId];
      return parent::VoerQueryUit($query, $params);
}


public function SaveWhenJob($gedaan, $wanneerGedaan){
      if ($gedaan == "" || $wanneerGedaan == "") {
      return false;
    }

    $query = "INSERT INTO klus (WatGedaan, wanneerIetsGedaan) VALUES (?, ?);
    ";
    $params = [$gedaan, $wanneerGedaan];
    return parent::voerQueryUit($query, $params) > 0;
}

}

?>
