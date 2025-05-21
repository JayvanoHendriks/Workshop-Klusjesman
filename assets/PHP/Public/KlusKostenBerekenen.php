<?php
include_once('../Src/klantInfo.php');
include_once('../src/klusInfo.php');

$Klanten = new Klanten();
$klus = new KlusInfo();
$totaal = 0.00;
if (isset($_POST['calc'])) {
    $uurtarief = $_POST['uurtarief'];
    $minutenGewerkt = $_POST['minuten'];
    $minuuttarief = $uurtarief / 60;
    $totaal = $minuuttarief * $minutenGewerkt;
    $totaalParsed = number_format((float)$totaal, 2, '.', '');
}
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
        <label>Uurtarief: </label><input type="number" name="uurtarief" step="0.01" id=""><br>
        <label>Gewerkte minuten: </label><input type="number" name="minuten" id=""><br>
        <input type="submit" value="bereken" name="calc">
    </form>
    <h3>Totaalbedrag: €<?php echo $totaalParsed;?></h3>
</body>
</html>