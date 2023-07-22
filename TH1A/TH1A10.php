<?php
    $arrs = ['a', 'b', 'ABC'];
    $new_array = array_map('strtoupper', $arrs);
    print_r($new_array);