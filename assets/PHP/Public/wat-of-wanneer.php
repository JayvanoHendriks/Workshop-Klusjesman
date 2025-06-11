<?php
require_once("../src/klusinfo.php");
require_once("../src/klantInfo.php");



$Klanten = new Klanten();
$id = $_GET['id'] ?? $_POST['klant_id'] ?? null;

if (!$id) {
    die("Geen klant-ID opgegeven.");
}

$klant = $Klanten->getCustomerDetails($id)[0];

$klussen = new KlusInfo();
$alleklussen = $klussen->getAllJobs($id);
?>

<form method="POST">
    <label>
        Wat gedaan: 
        <input type="text" name="Watgedaan"><br>
    </label>
    <label>
        Datum klus: 
        <input type="date" name="datumKlus"><br><br>
    </label>
    <!-- button opslaan -->
    <input type="hidden" name="klant_id" value="<?= htmlspecialchars($id) ?>">
    <input type="submit" name="opslaan" value="Opslaan!">
</form>


<?php

if(isset($_POST['opslaan'])){
    
    $datumKlus = $_POST['datumKlus'] ?? "";
    $watgedaan = $_POST['Watgedaan'] ?? "";
    if($klussen->saveDateOrWhat($id, $watgedaan, $datumKlus)){

    
    $klantId = $_POST['klant_id'];
    header("Location: KlantDetailPagina.php?id=" . urlencode($klantId));
    exit;
    }
}

?>