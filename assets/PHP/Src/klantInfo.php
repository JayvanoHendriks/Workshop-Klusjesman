<?php
require_once('database.php');

class Klanten extends Database
{
  public function getAllCustomers()
  {
    $query = "SELECT * FROM klanten";
    return parent::voerQueryUit($query);
  }

  public function saveCustomer($name, $adres, $phone, $email)
  {
    if ($name == "" || $adres == "" || $phone == "" || $email == "") {
      return false;
    }

    $query = "INSERT INTO klanten (name, telefooonnummer, straat, emailadres) VALUES (?, ?, ?, ?);";
    $params = [$name, $phone, $adres, $email];
    return parent::voerQueryUit($query, $params) > 0;
  }

  public function getCustomerByAddress($straat, $postcode, $woonplaats)
  { {
      $query = "SELECT * FROM klanten WHERE straat = ? AND postcode = ? AND plaats = ?";
      $params = [$straat, $postcode, $woonplaats];
      return parent::voerQueryUit($query, $params);
    }
  }
}

