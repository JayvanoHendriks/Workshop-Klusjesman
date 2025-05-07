<?php
require_once('database.php');

class Klanten extends Database
{
    public function getAllCustomers(){
        $query = "SELECT * FROM klanten";
        return parent::voerQueryUit($query);
    }

    public function getCustomerByAddress($straat, $postcode, $woonplaats){
        {
        $query = "SELECT * FROM klanten WHERE straat = ? AND postcode = ? AND woonplaats = ?";
        $params = [$straat, $postcode, $woonplaats];
        return parent::voerQueryUit($query, $params);
        }
    }
}