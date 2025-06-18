<?php
require_once('database.php');

Class Materialen extends Database {
    public function getAllMaterials() {
        $query = "SELECT * FROM materialen";
        return parent::voerQueryUit($query);
    }
}