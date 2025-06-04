<?php
include_once('../Src/klantInfo.php');
include_once('../src/klusInfo.php');

$Klanten = new Klanten();
$klus = new KlusInfo();
$totaal = 0.00;
if (isset($_POST['calc'])) {
    $uurtarief = $_POST['uurtarief'];
    $urenGewerkt = $_POST['uur'];
    $voorrijkosten = $_POST['voorrijkosten'];
    $extraKosten = $_POST['extraKosten'];
    $totaal = $uurtarief * $urenGewerkt;
    $totaal += $voorrijkosten;
    $totaal += $extraKosten;
}
$totaalParsed = number_format((float)$totaal, 2, '.', '');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label>VoorrijKosten: </label><input type="number" name="voorrijkosten" step="0.01" id="" value="<?php if(isset($_POST['calc'])) {echo $voorrijkosten;} ?>"><br>
        <label>Uurtarief: </label><input type="number" name="uurtarief" step="0.01" id="" value="<?php if(isset($_POST['calc'])) {echo $uurtarief;} ?>"><br>
        <label>Gewerkte uren: </label><input type="number" name="uur" id="" value="<?php if(isset($_POST['calc'])) {echo $minutenGewerkt;} ?>"><br>
        <label>extra Kosten: </label><input type="number" name="extraKosten" step="0.01" id="" value="<?php if(isset($_POST['calc'])) {echo $extraKosten;} ?>"><br>
        <input type="submit" value="bereken" name="calc">
    </form>
    <h3>Totaalbedrag: €<?php echo $totaalParsed;?></h3>
</body>
</html>