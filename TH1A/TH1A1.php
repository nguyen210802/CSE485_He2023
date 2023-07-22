<?php
    function total($arrs){
        $total = 0;
        for($i = 0; $i<count($arrs); $i++){
            $total += $arrs[$i];
        }
        return $total;
    }
    function subtract($arrs){
        $subtract = $arrs[0];
        for($i = 1; $i<count($arrs); $i++){
            $subtract -= $arrs[$i];
        }
        return $subtract;
    }
    function multiply($arrs){
        $multiply = 1;
        for($i = 0; $i<count($arrs); $i++){
            $multiply *= $arrs[$i];
        }
        return $multiply;
    }
    function divide($arrs){
        $divide = $arrs[0];
        for($i = 1; $i<count($arrs); $i++){
            $divide /= $arrs[$i];
        }
        return $divide;
    }
    $arrs = [2, 5, 6, 9, 2, 5, 6, 12 ,5];

    echo 'tong cua mang la: '. ' ' . total($arrs). "<br>";
    echo 'hieu cua mang la: '. ' ' . subtract($arrs). "<br>";
    echo 'tich cua mang la: '. ' ' . multiply($arrs). "<br>";
    echo 'thuong cua mang la: '. ' ' . divide($arrs). "<br>";
