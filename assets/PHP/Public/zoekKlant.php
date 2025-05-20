<?php
require_once ('../src/klantInfo.php');

if (isset($_POST['submit'])) {
    $klantenService = new Klanten();
    $straat = $_POST['straat'];
    $name  = $_POST['name'];
    $klanten = $klantenService->getCustomerByAddress($name, $straat);
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
        <input type="text" name="naam" id="name" placeholder="naam" required><br>
        <input type="text" name="straat" id="straat" placeholder="straat" required><br>
        <input type="submit" value="Zoek klant" name="submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        if (isset($klanten) && !empty($klanten)) {
            echo "<h2>Gevonden Klanten:</h2>";
            foreach ($klanten as $klant) {
                echo "<p>" . $klant['name'] . " - " . $klant['straat'] . "</p>";
            }
        } else {
            echo "<p>Geen klanten gevonden.</p>";
        }
    }
    ?>
</body>
</html>