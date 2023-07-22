<?php
    function total($arrs){
        $total = 0;
        for($i = 0; $i<count($arrs); $i++){
            $total += $arrs[$i];
        }
        return $total;
    }
    $numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

    $average = total($numbers) / count($numbers);
    echo 'giá trị trung bình là: '.$average."<br>";

    echo 'Các số có giá trị lớn hơn giá trị trung bình là: ';
    foreach ($numbers as $values){
        if($values > $average)
            echo $values.' ';
    }
    echo "<br>";

    echo 'Các số có giá trị nhỏ hơn hoặc bằng giá trị trung bình là: ';
    foreach ($numbers as $values){
        if($values <= $average)
            echo $values.' ';
    }
    echo "<br>";