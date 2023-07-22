<?php
    $array = [1, 2, 3, 4, 5];
    array_splice($array, 2, 1);
    $array = array_values($array);
    print_r($array);