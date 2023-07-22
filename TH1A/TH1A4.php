<?php
$arrs = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" =>
    "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" =>
    "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin",
    "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United
Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech
Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" =>
        "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php foreach ($arrs as $key =>$values){ ?>
        <p>Thủ đo của <?= $key?> là <?= $values ?><br></p>
    <?php } ?>
</body>
</html>
