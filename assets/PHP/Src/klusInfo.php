<?php
require('database.php');

class Games extends Database
{
    public function getAllGamesWithGenre(){
        $query = "SELECT * FROM games
        JOIN genre ON games.genreid = genre.genreid
        JOIN publisher ON games.publisherid = publisher.publisherid
        ORDER BY gameName";
        return parent::voerQueryUit($query);
    }
}