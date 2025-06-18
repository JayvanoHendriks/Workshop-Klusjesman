<?php
require_once('database.php');

Class Materialen extends Database {
    public function getAllMaterials() {
        $query = "SELECT * FROM materialen";
        return parent::voerQueryUit($query);
    }

    public function SaveMatetials($naamMaterialen, $Aantal, $Prijs){
      if ($naamMaterialen == "" || $Aantal == "" || $Prijs == "") {
      return false;
    }

    $query = "INSERT INTO materialen (naamMaterialen, Aantal, Prijs) VALUES (?, ?, ?);
    ";
    $params = [$naamMaterialen, $Aantal, $Prijs];
    return parent::voerQueryUit($query, $params) > 0;
}
}
