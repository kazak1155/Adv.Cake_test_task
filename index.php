<?php

function rereseWord($inputString)
{
//$inputString входящая строка
    $arrayFromInputString = explode(' ', $inputString); //разбивка строки на массив по разделителю пробел


    $arraySplitWord = [];
    for ($i = 0; $i < count($arrayFromInputString); $i++) {
        if (preg_match("#^[aA-zZ0-9\-_]+$#", $arrayFromInputString[$i])) //проверка  что в строке нет знаков препинания
        {
            $arrayFromInputString[$i] = strrev($arrayFromInputString[$i]); //разворачиваем буквы в словах задом наперед
        } else {
            $arraySplitWord[$i] = str_split($arrayFromInputString[$i]); //разделяем слово на буквы и знаки препинания
            $lastElementWordInArray = array_pop($arraySplitWord[$i]); //получаем знак препиния из строки
            $arrayFromInputString[$i] = strrev(implode('', $arraySplitWord[$i])) . $lastElementWordInArray; //разворачиваем буквы в словах задом наперед добовляем изначальный знак препинания
        }
    }
    $outputString = implode(' ', $arrayFromInputString); //делаем из массива строку
    echo $outputString;
}

rereseWord('123 234, 345?'); //просто проверка
