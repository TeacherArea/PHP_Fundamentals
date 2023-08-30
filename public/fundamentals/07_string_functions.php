<?php
    $string = 'Hello there!';

    echo strlen($string) . '<br>';
    echo strpos($string, 't') . '<br>';
    echo strrpos($string, 't') . '<br>';
    echo strrev($string) . '<br>';
    echo strtolower($string) . '<br>';
    echo strtoupper($string) . '<br>';
    echo str_word_count($string) . '<br>';
    echo str_replace('Hello', 'Right', $string) . '<br>';
    echo ucwords($string) . '<br>';
    echo substr($string, 3, 6) . '<br>';
    if(str_starts_with($string, 'Hello')) { echo 'yes';} else{ echo 'no';};
    
    //specialaren printf() och "specifiers"
    printf('<br>Är 12 + 12 = %u?', 5 + 10);
    printf('<br>%s är ett bra %s', 'Hypatia', 'kattnamn');
    $witchChar = 90;
    printf('<br>'. $witchChar . ' = %c', $witchChar);
    // se vidare https://www.w3schools.com/php/func_string_printf.asp
?>