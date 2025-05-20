<h1>Tabel van alle klanten!</h1>
<?php

include_once('../Src/klantInfo.php');

$Klanten = new Klanten();
$alleKlanten = $Klanten->getAllCustomers();
    include_once('../src/klusInfo.php');
    $klus = new KlusInfo();
    $alleKlussen = $klus->getAllKlussen();
?>

<form method="POST">
    <label>Naam: <input type="text" placeholder="Naam" name="zoektermNaam"></label><br>
    <label>Adres: <input type="text" placeholder="Adres" name="zoektermAdres"></label><br>
    <br>
    <input type="submit" value="Zoeken op naam" name="zoekenNaam">
    <input type="submit" value="Zoeken op adres" name="zoekenAdres">
    </form>
    
<?php
if (isset($_POST['zoekenNaam'])) 
{
        $alleKlanten = $Klanten->getCustomerByName($_POST['zoektermNaam']);
    }
    if (isset($_POST['zoekenAdres'])){
        $alleKlanten = $Klanten->getCustomerByAdres($_POST['zoektermAdres']);
        
}



echo "<table border='5'>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Naam</th>";
echo "<th>Telefoonnummer</th>";
echo "<th>E-mailadres</th>";
echo "<th>Adres</th>";
echo "<th>Bekijken</th>";
echo "</tr>";

foreach ($alleKlanten as $klant) {
    echo "<tr>";
    echo "<td>" . $klant['id'] . "</td>";
    echo "<td>" . $klant['name'] . "</td>";
    echo "<td>" . $klant['telefooonnummer'] . "</td>";
    echo "<td>" . $klant['emailadres'] . "</td>";
    echo "<td>" . $klant['Adres'] . "</td>";
    echo "<td>" . "<a href=orderdetailpaginaIndex.php?id=" . $klant ['id'] . ">" . "KlantInformatie Bekijken" . "</a></td>";
    echo "</tr>";
}

// <!-- // include('../src/klusInfo.php');
// // $klussen = new KlusInfo();
// // $alleKlussen = $klussen->getAllKlussen();

// // echo "<table border='1'>";
// // echo "<th>klantId</th>";
// // echo "<th>adres</th>";
// // echo "<th>gewerkteMinuten</th>";
// // echo "<th>voorrijkosten</th>";
// // echo "<th>uurtarief</th>";
// // echo "<th>inkopenNodig</th>";
// // echo "<th>extraKosten</th>";

// // foreach ($alleKlussen as $klus) {
// //     echo "<tr>";
// //     echo "<td>" . $klus['klantId']. "</td>";
// //     echo "<td>" . $klus['adres']. "</td>";
// //     echo "<td>" . $klus['gewerkteMinuten']. "</td>";
// //     echo "<td>" . $klus['voorrijkosten']. "</td>";
// //     echo "<td>" . $klus['uurtarief']. "</td>";
// //     echo "<td>" . $klus['inkopenNodig']. "</td>";
// //     echo "<td>" . $klus['extraKosten']. "</td>";
// //     echo "<td>" . $klus['totaalBedrag']. "</td>";
// //     echo "<td>" . $klus['omschijving']. "</td>";
// //     echo "<td>" . $klus['wanneerIetsGedaan']. "</td>";
// //     echo "<td>" . $klus['opmerkingen']. "</td>";
// //     echo "<td>" . $klus['gefactureerd']. "</td>";
// //     echo "<td>" . $klus['betaald']. "</td>";
// //     echo "<td>" . $klus['klantId']. "</td>";
// //     echo "</tr>";
// // } -->

echo "</table>";
?>
<br><br>
<form method="POST">
    <input type="submit" value="Registeren" name="AnderePagina">
</form>
<?php
if (isset($_POST['AnderePagina'])){
    header ("Location: Registratie.php");
}
?>