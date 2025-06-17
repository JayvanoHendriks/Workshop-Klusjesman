<?php

Class KlusMaterialen extends Database {
    public function voegKlusMaterialenToe($klusId, $materiaalId, $aantal, $totaalPrijs = null) {
        $query = "INSERT INTO klus_materialen (klus_id, materiaal_id, aantal_gebruikt, TotaalPrijs) VALUES (?, ?, ?, ?)";
        $params = [
            $klusId,
            $materiaalId,
            $aantal,
            $totaalPrijs
        ];
        return parent::voerQueryUit($query, $params);
    }

    public function getMaterialenVoorKlus($klusId) {
        $query = "SELECT * FROM klus_materialen WHERE klus_id = ?";
        $params = [$klusId];
        return parent::voerQueryUit($query, $params);
    }
}