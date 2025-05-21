    <form method="post">
        <label>Wanneer: <input type="date" name="wanneer"></label><br>
        <label>Wat: <input type="text" name="wat"></label><br><br>
        <input type="submit" value="Opslaan" name="opslaan">
    </form>


<?php
require_once("../src/klantinfo.php");
require_once("../src/klusinfo.php");

$Klanten = new Klanten();
$klussen = new KlusInfo();
$getDeltailsVanKlanten = $Klanten->getCustomerDetails($_GET["id"]);
$getJobDateAndWhat = $Klanten->SaveWhenJob($gedaan, $wanneer);

if(isset($_POST['opslaan'])){

    $gedaan = $_POST['wat'];
    $wanneer = $_POST['wanneer'];

}
echo "<table border='1'>";
echo "<tr>";
echo "<th>Wanneer?</th>";
echo "<th>Wat?</th>";
echo "</tr>";
        foreach ($allJobs as $klant) {
            echo "<tr>";
            echo "<td>" . $klant['wanneerIetsGedaan'] . "</td>";
            echo "<td>" . $klant['WatGedaan'] . "</td>";
            echo "</tr>";
    
        }

