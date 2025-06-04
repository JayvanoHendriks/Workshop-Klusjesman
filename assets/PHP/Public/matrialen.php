   
<!-- Invoer velden aanmaken -->
    <form method="post">
        <label>Naam-Materiaal: <input type="text" name="naam"></label><br>
        <label>Aantal: <input type="number" name="aantal"></label><br>
        <input type="submit" value="Opslaan" name="opslaan">
        <input type="submit" value="Annuleren" name="teruggaan">
    </form>
<?php


include_once('../Src/klusInfo.php');

$klussen = new KlusInfo();
$results = $klusService->getAllKlussen();

if(isset($_POST['opslaan'])){

    $naamMaterialen = $_POST['naam'];
    $Aantal = $_POST['aantal'];
    
    // if ($straat != null || $postcode != null || $plaats != null){
    //     $adres = $straat . ', ' . $postcode . ', ' . $plaats;
    // }
    // $_POST = [];


    if ($Klanten->SaveMatetials($naamMaterialen, $Aantal)){
        header ("Location: index.php");
    }
}
if (isset($_POST['teruggaan'])){
    header ("Location: index.php");
}
?>