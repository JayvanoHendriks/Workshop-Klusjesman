    <form method="post">
        <label>Wanneer: <input type="date" name="wanneer"></label><br>
        <label>Wat: <input type="text" name="wat"></label><br><br>
        <input type="submit" value="Opslaan" name="opslaan">
    </form>


<?php
require_once("../src/klantinfo.php");

$Klanten = new Klanten();
$getDeltailsVanKlanten = $Klanten->getCustomerDetails($_GET["id"]);
$alleKlussen = $Klanten->getAllJobs();

if(isset($_POST['opslaan'])){

    $gedaan = $_POST['wat'];
    $wanneer = $_POST['wanneer'];


    $Klanten->SaveWhenJob($gedaan, $wanneer);
        
    
    
}
echo "<table border='1'>";
echo "<tr>";
echo "<th>Wanneer?</th>";
echo "<th>Wat?</th>";
echo "</tr>";
        foreach ($alleKlussen as $klant) {
            echo "<tr>";
            echo "<td>" . $klant['wanneerIetsGedaan'] . "</td>";
            echo "<td>" . $klant['WatGedaan'] . "</td>";
            echo "</tr>";
    
        }

