<?php
require_once("../src/klusInfo.php");

$klusInfo = new KlusInfo();

// Ophalen klant en klus ID
$klantId = $_GET['klant_id'] ?? $_POST['klant_id'] ?? null;
$klusId = $_GET['klus_id'] ?? $_POST['klus_id'] ?? null;

if (!$klantId || !$klusId) {
    die("Geen geldige klus of klant ID.");
}

// Als een opmerking is gepost
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['nieuwe_opmerking'])) {
    $opmerking = $_POST['nieuwe_opmerking'];

    // Voeg opmerking toe via een methode in klusInfo
    $klusInfo->addOpmerking($klusId, $opmerking);

    // Redirect terug naar klantdetails
    header("Location: KlantDetailPagina.php?id=" . urlencode($klantId));
    exit;

}

// Toon eventueel bestaande opmerkingen of formulier
echo "<h2>Opmerking toevoegen</h2>";
?>

<form method="POST">
    <input type="hidden" name="klant_id" value="<?= htmlspecialchars($klantId) ?>">
    <input type="hidden" name="klus_id" value="<?= htmlspecialchars($klusId) ?>">
    <textarea name="nieuwe_opmerking" rows="5" cols="40" placeholder="Schrijf je opmerking hier..."></textarea><br>
    <input type="submit" value="Opslaan">
</form>
