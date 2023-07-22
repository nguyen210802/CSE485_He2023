<?php
    $arrs = ['1', 'B', 'C', 'E'];
    $new_array = array_map('strtolower', $arrs);
    print_r($new_array);
