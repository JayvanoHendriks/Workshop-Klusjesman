<?php
require_once('../Src/klusInfo.php');

$klusService = new KlusInfo();
$results = $klusService->getAllKlussen();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* table {
            border-collapse: collapse;
        }
        th, td {
            border: solid black 1px;
            padding: 3px;
        }  */
    </style>
</head>
<body>
    <table border="1">
        <tr>
            <th>Klant</th>
            <th>adres</th>
            <th>Datum</th>
            <th>bekijken</th>
        </tr>

        <?php
        foreach ($results as $result) {
            echo "<tr>";
            echo "<td>" . $result['name'] . "</td>";
            echo "<td>" . $result['adres'] . "</td>";
            echo "<td>" . $result['wanneerIetsGedaan'] . "</td>";
            echo "<td><a href='klus.php?id=" .$result['id'] . "'>Bekijken</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>