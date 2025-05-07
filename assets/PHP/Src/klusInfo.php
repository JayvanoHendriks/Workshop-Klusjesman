<?php
require('database.php');

class KlusInfo extends Database
{
    public function getAllKlussen(){
        $query = "SELECT * FROM klus AS k
        JOIN klus_materialen AS km ON k.id = km.klus_id";
class Klanten extends Database
{
    public function getAllCustomers(){
        $query = "SELECT * FROM games";
        return parent::voerQueryUit($query);
    }
}