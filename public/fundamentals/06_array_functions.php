<?php
    /*
        count()
        in_array()
        array_combine()
        array_flip
        array_keys()
        range()
        array_map()
        array_filter()
        sort()
        för ca 50 till, se https://www.w3schools.com/php/php_ref_array.asp
    */

    $fruits = [
        'apple',
        'banana',
        'orange'
    ];

    $integers = [ 51, 4, 63, 19 ];
    $integers2 = [ 5, 4, 3, 9 ];
    $floats = [ 2.36, 54.8, 9.2, 8 ];

    echo count($fruits) . '<br><br>';

    var_dump($fruits);
    
    echo '<br><br>';
    var_dump(in_array('banana', $fruits)); //hitta något i en array, true
    var_dump(in_array('pear', $fruits)); // inte hitta något i en array, false

    echo '<br><br>';
    $together = array_combine($integers, $integers2);
    var_dump($together);

    echo '<br><br>';
    print_r($together);

    echo '<br><br>';
    $switched = array_flip($together);
    print_r($switched);

    echo '<br><br>';
    $onlyTheKeys = array_keys($together); //se nycklarna för $together 
    print_r($onlyTheKeys);

    echo '<br><br>';
    $numbers = range(1, 10); //ger en array mellan valda värden
    print_r($numbers);

    echo '<br><br>';
    $stringNr = array_map(function($number){
        return "Nummer: $number";
    }, $numbers);
    
    echo '<br>';
    foreach($stringNr as $key => $value){
        echo '<br>'. $value;
    }

    echo '<br><br>';
    $filter6 = array_filter($numbers, fn($valfritt) => $valfritt >= 5);
    foreach($filter6 as $nr) {
        echo $nr . '<br>';
    }

    echo '<br><br>';
    echo(array_reduce($numbers, fn($x, $y) => $x + $y)); // echo, var_dump, print_r kan användas "direkt"
    
    echo '<br><br>';
    $names = [ 'pelle', 'stina', 'miran', 'anna', 'mariella' ];
    sort($names);
    print_r($names);
?>