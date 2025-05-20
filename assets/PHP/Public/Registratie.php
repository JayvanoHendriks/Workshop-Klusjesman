    <h1>Welkom op de registratie pagina!</h1>

    <!-- Invoer velden aanmaken -->
    <form method="post">
        <label>Naam gebruiker: <input type="text" name="naam"></label><br>
        <label>Straat & Huisnummer: <input type="text" name="straat"></label><br>
        <label>Postcode: <input type="text" name="postcode"></label><br>
        <label>Plaats: <input type="text" name="plaats"></label><br>
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
    $straat = $_POST['straat'];
    $postcode = $_POST['postcode'];
    $plaats = $_POST['plaats'];
    $telefoonnummer = $_POST['tellie'];
    $emailadres = $_POST["mail"];

    $adres = "";
    
    if ($straat != null || $postcode != null || $plaats != null){
        $adres = $straat . ', ' . $postcode . ', ' . $plaats;
    }
    $_POST = [];


    if ($Klanten->saveCustomer($naam, $adres, $telefoonnummer, $emailadres)){
        header ("Location: index.php");
    }
}
if (isset($_POST['teruggaan'])){
    header ("Location: index.php");
}
?>