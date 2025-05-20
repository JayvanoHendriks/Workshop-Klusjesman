<?php
require_once('database.php');

class Klanten extends Database
{
  public function getAllCustomers()
  {
    $query = "SELECT * FROM klanten";
    return parent::voerQueryUit($query);
  }

  public function saveCustomer($name , $straat, $postcode, $plaats, $phone, $email){
    if ($name == "" || $straat == "" || $postcode == "" || $plaats == "" || $phone == "" || $email == ""){
        return false;
      }


    $query = "INSERT INTO klanten (name, telefooonnummer, Adres, emailadres) VALUES (?, ?, ?, ?);";
    $params = [$name, $phone, $adres, $email];

    $query = "INSERT INTO klanten (name, telefooonnummer, straat, postcode, plaats, emailadres) VALUES (?, ?, ?, ?, ?, ?);";
    $params = [$name, $phone, $straat, $postcode, $plaats, $email];

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

public function getCustomerDetails($klantId)
{
      $query = "SELECT * FROM klanten as k
      where Id = ?";
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

public function getAllJobs()
{
      $query = "SELECT * FROM klus";
    return parent::voerQueryUit($query);
}

}

?>

