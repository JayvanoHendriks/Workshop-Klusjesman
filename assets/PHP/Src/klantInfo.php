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

    $query = "INSERT INTO klanten (name, telefooonnummer, straat, postcode, plaats, emailadres) VALUES (?, ?, ?, ?, ?, ?);";
    $params = [$name, $phone, $straat, $postcode, $plaats, $email];
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
