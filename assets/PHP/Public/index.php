<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop-Klusjesman</title>
    <link rel="stylesheet" href="assets/Css/Index.Css">
    <link rel="stylesheet" href="assets/PHP/Public/Index.php">
    <script src="assets/Js/Index.Js"></script>
    <script src="assets/Js/jquery-3.7.1.min.js"></script>
</head>
<body>
    <h1>Welkom op de registratie pagina!</h1>

    <!-- Invoer velden aanmaken -->
    <form method="post">
        <label>Naam gebruiker: <input type="text" name="naam"></label><br>
        <label>Huidig adres: <input type="text" name="adres"></label><br>
        <label>Telefoonnummer: <input type="text" name="tellie"></label><br><br>
        <input type="submit" value="Opslaan!" name="opslaan">
    </form>
</body>
</html>


<?php

include('../Src/klusinfo.php');

// $Klanten = new Klanten();
// $alleKlanten = $Klanten->getAll();

// echo "<table border='1'>";
// echo "<th colspan=3>overzicht van alle games:</th>";
// echo "<th>Uitgever</th>";

    
// foreach ($alleGames as $game) {
//     echo "<tr>";
//     echo "<td>$game[gameName]</td>";
//     echo "<td>$game[platform]</td>";
//     echo "<td>$game[genre]</td>";
//     echo "<td>$game[name]</td>";
//     echo "</tr>";
// }

// echo "</table>";

if (isset($_POST['opslaan'])){

    echo "GELUKT";
}