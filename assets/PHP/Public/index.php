
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

if(isset($_POST['opslaan'])){

    $naam = $_POST['naam'];
    $adres = $_POST['adres'];
    $telefoonnummer = $_POST['tellie'];
}

if ($Klanten->saveCustomer($naam, $adres, $telefoonnummer)){
    echo "Klant is opgeslagen";
}
$_POST = [];


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
    echo "<td>" . $klant['id'] . "</td>";
    echo "<td>" . $klant['name'] . "</td>";
    echo "<td>" . $klant['telefooonnummer'] . "</td>";
    echo "<td>" . $klant['emailadres'] . "</td>";
    echo "<td>" . $klant['straat'] . "</td>";
    echo "<td>" . $klant['postcode'] . "</td>";
    echo "<td>" . $klant['plaats'] . "</td>";
    echo "</tr>";
}






























// include('../src/klusInfo.php');
// $klussen = new KlusInfo();
// $alleKlussen = $klussen->getAllKlussen();

echo "<table border='1'>";
echo "<th>klantId</th>";
echo "<th>adres</th>";
echo "<th>gewerkteMinuten</th>";
echo "<th>voorrijkosten</th>";
echo "<th>uurtarief</th>";
echo "<th>inkopenNodig</th>";
echo "<th>extraKosten</th>";

// foreach ($alleKlussen as $klus) {
//     echo "<tr>";
//     echo "<td>" . $klus['klantId']. "</td>";
//     echo "<td>" . $klus['adres']. "</td>";
//     echo "<td>" . $klus['gewerkteMinuten']. "</td>";
//     echo "<td>" . $klus['voorrijkosten']. "</td>";
//     echo "<td>" . $klus['uurtarief']. "</td>";
//     echo "<td>" . $klus['inkopenNodig']. "</td>";
//     echo "<td>" . $klus['extraKosten']. "</td>";
//     echo "<td>" . $klus['totaalBedrag']. "</td>";
//     echo "<td>" . $klus['omschijving']. "</td>";
//     echo "<td>" . $klus['wanneerIetsGedaan']. "</td>";
//     echo "<td>" . $klus['opmerkingen']. "</td>";
//     echo "<td>" . $klus['gefactureerd']. "</td>";
//     echo "<td>" . $klus['betaald']. "</td>";
//     echo "<td>" . $klus['klantId']. "</td>";
//     echo "</tr>";
// }

echo "</table>";