
<?php
require_once("../src/klantinfo.php");

$Klanten = new Klanten();
$klant = $Klanten->getCustomerDetails($_GET["id"])[0];
?>

<table border="1">
    <tr>
        <th colspan=3>Gegevens klant:</th>
    </tr>
    <tr>
        <th>Naam</th>
        <th>Telefoonnummer</th>
        <th>Adres</th>
    </tr>
    <td><?=$klant['name'];?></td>
    <td><?=$klant['telefooonnummer'];?></td>
    <td><?=$klant['Adres'];?></td>
</table>
<br><br><br><br>
<table border="1">
    <tr>
        <th colspan=3>Klussen: </th>
    </tr>
    <tr>
        <th>opmerkingen</th>
        <th>gefactureerd</th>
        <th>betaald</th>
    </tr>
    <tr>
        <td>tegels in de achtertuin aangelegd</td>
        <td>ja</td>
        <td>nee</td>
    </tr>
    <tr>
        <td>bijkeuken gesloopt</td>
        <td>nee</td>
        <td>nee</td>
    </tr>
</table>
<br><br>
<form method="POST">
    <input type="submit" value="Klus registeren!" name="nieuweKlus">
</form>
<form method="POST">
    <input type="submit" value="Terug naar Overzicht" name="overzicht">
</form>
<?php
if (isset($_POST['overzicht'])){
    header ("Location: index.php");
}
?>
<a href="../public">terug naar overzicht</a>