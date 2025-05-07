<?php
require_once ('../src/klantInfo.php');

if (isset($_POST['submit'])) {
    $klantenService = new Klanten();
    $straat = $_POST['straat'];
    $postcode = $_POST['postcode'];
    $woonplaats = $_POST['woonplaats'];
    $klanten = $klantenService->getCustomerByAddress($straat, $postcode, $woonplaats);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoek Klant</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="straat" id="straat" placeholder="straat" required><br>
        <input type="text" name="postcode" id="postcode" placeholder="postcode" required><br>
        <input type="text" name="woonplaats" id="woonplaats" placeholder="woonplaats" required><br>
        <input type="submit" value="Zoek klant" name="submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        if (isset($klanten) && !empty($klanten)) {
            echo "<h2>Gevonden Klanten:</h2>";
            foreach ($klanten as $klant) {
                echo "<p>" . $klant['name'] . " - " . $klant['straat'] . ", " . $klant['postcode'] . ", " . $klant['plaats'] . "</p>";
            }
        } else {
            echo "<p>Geen klanten gevonden.</p>";
        }
    }
    ?>
</body>
</html>