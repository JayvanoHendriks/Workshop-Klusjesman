<?php

include('../src/games.php');

$games = new Games();
$alleGames = $games->getAllGamesWithGenre();

echo "<table border='1'>";
echo "<th colspan=3>overzicht van alle games:</th>";
echo "<th>Uitgever</th>";

    
foreach ($alleGames as $game) {
    echo "<tr>";
    echo "<td>$game[gameName]</td>";
    echo "<td>$game[platform]</td>";
    echo "<td>$game[genre]</td>";
    echo "<td>$game[name]</td>";
    echo "</tr>";
}

echo "</table>";