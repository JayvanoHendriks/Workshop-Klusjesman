    <h1>Welkom op de registratie pagina!</h1>

    <!-- Invoer velden aanmaken -->
    <form method="post">
        <label>Naam gebruiker: <input type="text" name="naam"></label><br>
        <label>Huidig adres: <input type="text" name="adres"></label><br>
        <label>Telefoonnummer: <input type="text" name="tellie"></label><br>
        <label>E-mailadres <input type="text" name="mail"></label><br><br>
        <input type="submit" value="Opslaan" name="opslaan">
        <input type="submit" value="Annuleren" name="teruggaan">
    </form>
<?php


include_once('../Src/klantInfo.php');

$Klanten = new Klanten();
$alleKlanten = $Klanten->getAllCustomers();

if(isset($_POST['opslaan'])){

    $naam = $_POST['naam'];
    $adres = $_POST['adres'];
    $telefoonnummer = $_POST['tellie'];
    $emailadres = $_POST["mail"];
    $_POST = [];


    if ($Klanten->saveCustomer($naam, $adres, $telefoonnummer, $emailadres)){
        header ("Location: index.php");
    }
}
if (isset($_POST['teruggaan'])){
    header ("Location: index.php");
}
?>
