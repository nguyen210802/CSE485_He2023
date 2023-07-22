<?php
    $arrs = ['PHP', 'HTML', 'CSS', 'JS'];
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
    <table border="1">
        <tr>
            <th>Tên khóa học</th>
        </tr>
        <?php foreach ($arrs as $item){ ?>
            <tr>
                <td><?= $item?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
