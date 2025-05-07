
    <h1>Welkom op de registratie pagina!</h1>

    <!-- Invoer velden aanmaken -->
    <form method="post">
        <label>Naam gebruiker: <input type="text" name="naam"></label><br>
        <label>Huidig adres: <input type="text" name="adres"></label><br>
        <label>Telefoonnummer: <input type="text" name="tellie"></label><br><br>
        <input type="submit" value="Opslaan!" name="opslaan">
    </form>
<?php

include_once('../Src/klantInfo.php');

$Klanten = new Klanten();
$alleKlanten = $Klanten->getAllCustomers();

echo "<table border='1'>";
echo "<th>Id</th>";
echo "<th>Naam</th>";
echo "<th>Telefoonnummer</th>";
echo "<th>E-mailadres</th>";
echo "<th>Straat</th>";
echo "<th>Postcode</th>";
echo "<th>Plaats</th>";

    
foreach ($alleKlanten as $klant) {
    echo "<tr>";
    echo "<td>$klant[id]</td>";
    echo "<td>$klant[name]</td>";
    echo "<td>$klant[telefoonnummer]</td>";
    echo "<td>$klant[emailadres]</td>";
    echo "<td>$klant[straat]</td>";
    echo "<td>$klant[postcode]</td>";
    echo "<td>$klant[plaats]</td>";
    echo "</tr>";
}

echo "</table>";