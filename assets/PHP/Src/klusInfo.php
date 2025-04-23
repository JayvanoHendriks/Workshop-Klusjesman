<?php
require('database.php');

class Klanten extends Database
{
    public function getAllCustomers(){
        $query = "SELECT * FROM games";
        return parent::voerQueryUit($query);
    }
}