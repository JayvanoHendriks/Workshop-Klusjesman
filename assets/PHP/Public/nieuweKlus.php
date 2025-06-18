<?php
require_once("../Src/materialen.php");
require_once("../Src/klusInfo.php");
require_once("../Src/klusMaterialen.php");
if (isset($_POST["submit"]))
{
    $adres = $_GET["adres"];
    $klantId = $_GET["klantId"];
    $materialenService = new Materialen();
    $klusService = new KlusInfo();
    $klusMaterialenService = new KlusMaterialen();
    $naam = $_POST["naam"];
    $opmerkingen = $_POST["opmerkingen"];
    $voorrijkosten = $_POST["voorrijkosten"];
    $uurtarief = $_POST["uurtarief"];
    $gewerkteUren = $_POST["gewerkteUren"];
    $gewerkteMinuten = $_POST["gewerkteUren"] * 60;
    $datum = $_POST["datum"];
    $klusService->voegKlusToe($naam, $opmerkingen, $voorrijkosten, $uurtarief, $gewerkteUren, $datum, $klantId, $adres);
    $klusId = $klusService->getLastInsertId();
    foreach ($materialenService->getAllMaterials() as $materiaal) {
        if (isset($_POST["aantal" . $materiaal['id']])) {
            $aantal = $_POST["aantal" . $materiaal['id']];
            $totaalPrijs = $materiaal['prijs'] * $aantal;
            $klusMaterialenService->voegKlusMaterialenToe($klusId, $materiaal['id'], $aantal, $totaalPrijs);
        }
    }
    header("Location: ../Public/klantDetailPagina.php?id=" . $klantId);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voeg een klus toe</title>
    <script src="../../Js/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function () {
            let materiaalArray = [];
            $('#addMateriaal').on('click', function () {
                const materiaalId = $('#materials').val();
                const materiaalNaam = $('#materials option:selected').text();
                if (!materiaalArray.includes(materiaalId)) {

                    const row = `<tr>
                        <td>${materiaalNaam}</td>
                        <td>
                            <input type='number' name='aantal${materiaalId}' value='1' min='1' required />
                            <input type='hidden' name='materiaalNaam${materiaalNaam}' value='${materiaalId}' />
                        </td>
                        <td><button class='remove'>Verwijder</button></td>
                    </tr>`;
                    $('#materiaalTabel').append(row);
                    materiaalArray.push(materiaalId);
                }
            });
        });
    </script>
</head>

<body>
    <form method="Post">
        <label>Naam klus: <input type="text" name="naam" required></label><br>
        <label>Opmerkingen: </label><textarea name="opmerkingen"></textarea><br>
        <label>Voorrijkosten: <input type="number" name="voorrijkosten" step="0.01" required></label><br>
        <label>Uurtarief: <input type="number" name="uurtarief" step="0.01" required></label><br>
        <label>Gewerkte Uren: <input type="text" name="gewerkteUren" required></label><br>
        <label>Datum: <input type="date" name="datum" required></label><br>
        <label>Materialen: <select id="materials">
                <?=
                require_once("../Src/materialen.php");
                $materialenService = new Materialen();
                $rows = $materialenService->getAllMaterials();
                foreach ($rows as $materiaal) {
                    echo "<option value='" . $materiaal['id'] . "'>" . $materiaal['naam'] . "</option>";
                }

                ?>
            </select></label>
        <button type="button" id="addMateriaal">Voeg toe</button>
        <table id="materiaalTabel"></table>
        <input type="submit" value="Voeg toe" name="submit">
    </form>
</body>

</html>