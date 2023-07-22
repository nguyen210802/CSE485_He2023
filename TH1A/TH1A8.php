<?php
    $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
    $max_length = strlen($array[0]);
    $min_length = strlen($array[0]);
    foreach ($array as $values){
        $length = strlen($values);
        if($length > $max_length){
            $max_length = $length;
        }
        if($length < $min_length){
            $min_length = $length;
        }
    }
    foreach ($array as $values){
        if (strlen($values) == $max_length)
            echo 'Chuỗi lớn nhất là '. $values.', dộ dài là '.$max_length."<br>";
        if (strlen($values) == $min_length)
            echo 'Chuỗi nhỏ nhất là '. $values.', dộ dài là '.$min_length."<br>";
    }
