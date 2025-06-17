<?php
require_once("../src/klantinfo.php");
require_once("../src/klusInfo.php");

$Klanten = new Klanten();
// Veilig ID ophalen vanuit GET of POST
$id = $_GET['id'] ?? $_POST['klant_id'] ?? null;

if (!$id) {
    die("Geen klant-ID opgegeven.");
}

$klant = $Klanten->getCustomerDetails($id)[0];


$klussen = new KlusInfo();
$alleKlussen = $klussen->getAllJobs($id);
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
<?php if ($klant): ?>
    <tr>
        <td><?= $klant['name'] ?></td>
        <td><?= $klant['telefooonnummer'] ?></td>
        <td><?= $klant['Adres'] ?></td>
    </tr>
<?php else: ?>
    <tr>
        <td colspan="3">Geen klantgegevens gevonden.</td>
    </tr>
<?php endif; ?>
</table>

<br><br><br><br>

<table border="1">
    <tr>
        <th colspan=6>Klussen:</th>
    </tr>
    <tr>
        <th>Klusnummer</th>
        <th>Wat is er gedaan?</th>
        <th>Gefactureerd</th>
        <th>Betaald</th>
        <th>Klus datum</th>
        <th>Opmerkingen</th>
    </tr>
    <?php foreach ($alleKlussen as $klus): ?>
    <tr>
            <td><?= $klus['id'] ?></td>
            <td><?= $klus['WatGedaan'] ?></td>
            <td><?php echo $klus['gefactureerd'] == 0 ? "nee" : "ja"; ?></td>
            <td><?php echo $klus['betaald'] == 0 ? "nee" : "ja"; ?></td>
            <td><?= $klus['wanneerIetsGedaan'] ?></td>
            <td><?= $klus['opmerkingen'] ?></td>
        </tr>
        <?php endforeach;?>
</table>

<br>

<!-- Formulier met ID naar wat-of-wanneer.php -->
<form method="POST">
    <input type="hidden" name="klant_id" value="<?= htmlspecialchars($id) ?>">
    <input type="submit" value="Wat en wanneer?" name="WatOfWanneer">
</form>

<br><br>
<a href="../public/nieuweKlus.php?klantId=<?=$klant['id'];?>&adres=<?=$klant['Adres'];?>">Nieuwe Klus</a>
<form method="POST">
    <input type="submit" value="Terug naar Overzicht" name="overzicht">
</form>

<?php
// Als "Overzicht" is aangeklikt
if (isset($_POST['overzicht'])) {
    header("Location: index.php");
    exit;
}

// Als "Wat en wanneer?" is aangeklikt
if (isset($_POST['WatOfWanneer'])) {
    $klantId = $_POST['klant_id'];
    header("Location: wat-of-wanneer.php?id=" . urlencode($klantId));
    exit;
}
?>
<a href="../public">terug naar overzicht</a>