<?php
require_once('database.php');

class Klanten extends Database
{
    public function getAllCustomers(){
        $query = "SELECT * FROM klanten";
        return parent::voerQueryUit($query);
    }
}