<?php
    function aGoodName($phoneNo, $street){
        $age = 7777;
        echo 'Hello ' . $age + $phoneNo . '<br>' . $street;
    }

    // echo $age; fungerar inte så $age är lokal, jmf lokala/globala variabler
    $phone = 123456;
    $street = "Home 12";
    aGoodName($phone, $street);

    $sum = function($phone){
        $sum = $phone * 3;
        return $sum;
    };

    echo '<br>' . $sum($phone);

    //arrow functions använder "fn" i php
    $sum = fn($phone) => $phone * pi();
    echo '<br>' . $sum($phone);

?>