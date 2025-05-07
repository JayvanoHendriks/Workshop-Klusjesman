<?php

include('../src/klusInfo.php.php');

$klus = new KlusInfo();
$alleKlussen = $klussen->getAllKlussen();

echo "<table border='1'>";
echo "<th colspan=3>overzicht van alle games:</th>";
echo "<th>Uitgever</th>";

    
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