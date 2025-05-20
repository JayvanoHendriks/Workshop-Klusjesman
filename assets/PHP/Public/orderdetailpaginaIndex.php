
<?php
require_once("../src/klantinfo.php");

$Klanten = new Klanten();
$getDeltailsVanKlanten = $Klanten->getCustomerDetails($_GET["id"]);
$alleKlanten = $Klanten->getAllCustomers();

echo "<table border='5'>";
echo "<tr>";
echo "<th>Naam</th>";
echo "<th>Telefoonnummer</th>";
echo "<th>Adres</th>";
echo "<th>Klus</th>";
echo "</tr>";

foreach ($alleKlanten as $klant) {
    echo "<tr>";
    echo "<td>" . $klant['name'] . "</td>";
    echo "<td>" . $klant['telefooonnummer'] . "</td>";
    echo "<td>" . $klant['Adres'] . "</td>";
    echo "<td>" . "<a href=orderdetailpaginaKlus.php?id=" . $klant ['id'] . ">" . "Bekijk Klus!" . "</a></td>";
    echo "</tr>";
}


?>