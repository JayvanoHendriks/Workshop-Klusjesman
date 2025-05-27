
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
</table>
<br><br>
<form method="POST">
    <input type="submit" value="Klus registeren!" name="nieuweKlus">
</form>
<?php
if (isset($_POST['nieuweKlus'])){
    header ("Location: NieuweKlus.php");
}
?>
<a href="../public">terug naar overzicht</a>