<?php
    $numbers = [
        'key1' => 12,
        'key2' => 30,
        'key3' => 4,
        'key4' => -123,
        'key5' => 1234,
        'key6' => -12565,
    ];
    $first = reset($numbers);
    $end = end($numbers);

    echo 'Phần tử đầu tiên là '.$first."<br>";
    echo  'Phần tử cuối cùng là '.$end."<br>";

    sort($numbers);
    echo 'Sắp xếp mảng theo chiều tăng của giá trị: ';
    print_r($numbers);
    echo "<br>";

    rsort($numbers);
    echo 'Sắp xếp mảng theo chiều giảm của giá trị: ';
    print_r($numbers);
    echo "<br>";

    ksort($numbers);
    echo 'Sắp xếp mảng theo chiều tăng của key: ';
    print_r($numbers);
    echo "<br>";

    krsort($numbers);
    echo 'Sắp xếp mảng theo chiều giảm của key: ';
    print_r($numbers);
    echo "<br>";
