<h1>Informatie met tabel</h1>

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
    <label>Oud Adres: <input type="text" placeholder="Oud adres" name="zoektermOudAdres" /></label>
    <br>
    <input type="submit" value="Zoeken op naam" name="zoekenNaam">
    <input type="submit" value="Zoeken op adres" name="zoekenAdres">
    <input type="submit" value="Zoeken op oud adres" name="zoekenOudAdres">
    </form>
    
<?php
if (isset($_POST['zoekenNaam'])) 
{
        $alleKlanten = $Klanten->getCustomerByName($_POST['zoektermNaam']);
    }
    if (isset($_POST['zoekenAdres'])){
        $alleKlanten = $Klanten->getCustomerByAdres($_POST['zoektermAdres']);
        
}
if (isset($_POST['zoekenOudAdres'])) {
    $alleKlanten = $Klanten->getCustomerByOldAddress($_POST['zoektermOudAdres']);
}

echo "<table border='1'>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Naam</th>";
echo "<th>Telefoonnummer</th>";
echo "<th>E-mailadres</th>";
echo "<th>Adres</th>";
if (isset($_POST['zoekenOudAdres'])) {
    echo "<th>Oud Adres</th>";        
   }
echo "<th>Bekijken</th>";
echo "</tr>";


foreach ($alleKlanten as $klant) {
    echo "<tr>";

    echo "<td>" . $klant['id'] . "</td>";
    echo "<td>" . $klant['name'] . "</td>";
    echo "<td>" . $klant['telefooonnummer'] . "</td>";
    echo "<td>" . $klant['emailadres'] . "</td>";
    echo "<td>" . $klant['Adres'] . "</td>";
    if (isset($_POST['zoekenOudAdres'])) {
        echo "<td>" . $klant['adres'] . "</td>";
    }
    echo "<td>" . "<a href=KlantDetailpagina.php?id=" . $klant ['id'] . ">" . "KlantInformatie Bekijken" . "</a></td>";

}
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
