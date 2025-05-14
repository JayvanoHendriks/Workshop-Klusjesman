
    <h1>Welkom op de registratie pagina!</h1>

    <!-- Invoer velden aanmaken -->
    <form method="post">
        <label>Naam gebruiker: <input type="text" name="naam"></label><br>
        <label>Huidig adres: <input type="text" name="adres"></label><br>
        <label>Telefoonnummer: <input type="text" name="tellie"></label><br>
        <label>E-mailadres <input type="text" name="mail"></label><br><br>
        <input type="submit" value="Opslaan" name="opslaan">
        <input type="submit" value="Annuleren" name="teruggaan">
    </form>
<?php


include_once('../Src/klantInfo.php');

$Klanten = new Klanten();
$alleKlanten = $Klanten->getAllCustomers();

include('../src/klusInfo.php');
$klus = new KlusInfo();
$alleKlussen = $klus->getAllKlussen();


echo "<table border='1'>";
echo "<th>Id</th>";
echo "<th>Naam</th>";
echo "<th>Telefoonnummer</th>";
echo "<th>E-mailadres</th>";
echo "<th>Straat</th>";
echo "<th>Postcode</th>";
echo "<th>Plaats</th>";

    
foreach ($alleKlussen as $klus) {
    echo "<tr>";
    echo "<td>" . $klus['klantId']. "</td>";
    echo "<td>$klus[adres]</td>";
    echo "<td>$klus[gewerkteMinuten]</td>";
    echo "<td>$klus[voorrijkosten]</td>";
    echo "<td>$klus[uurtarief]</td>";
    echo "<td>$klus[inkopenNodig]</td>";
    echo "<td>$klus[extraKosten]</td>";
    echo "<td>$klus[totaalBedrag]</td>";
    echo "<td>$klus[omschijving]</td>";
    echo "<td>$klus[wanneerIetsGedaan]</td>";
    echo "<td>$klus[opmerkingen]</td>";
    echo "<td>$klus[gefactureerd]</td>";
    echo "<td>$klus[betaald]</td>";
    echo "</tr>";
}

echo "</table>";