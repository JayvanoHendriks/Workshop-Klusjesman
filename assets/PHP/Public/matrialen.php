   
<!-- Invoer velden aanmaken -->
    <form method="post">
        <label>Naam-Materiaal: <input type="text" name="naam"></label><br>
        <label>Aantal: <input type="number" name="aantal"></label><br>
        <label>Prijs per stuk: <input type="number" name="prijs"></label><br>
        <input type="submit" value="Opslaan" name="opslaan">
        <input type="submit" value="Annuleren" name="teruggaan">
    </form>
<?php


include_once('../Src/klusInfo.php');
include_once('../src/materialen.php');

$klusService = new KlusInfo();
$results = $klusService->getAllKlussen();
$materialenService = new Materialen(); 


if(isset($_POST['opslaan'])){

    $naamMaterialen = $_POST['naam'];
    $Aantal = $_POST['aantal'];
    $Prijs = $_POST['prijs'];

    if ($materialenService->SaveMatetials($naamMaterialen, $Aantal, $Prijs)){
        header ("Location: matrialen.php");
    }
}
if (isset($_POST['teruggaan'])){
    header ("Location: index.php");
}
?>