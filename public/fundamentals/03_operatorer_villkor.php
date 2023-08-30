<?php
// operatorer: == === < > <= >= && || !=

$x = 12.54;
$y = 12.55;

//villkor: if/else, switch/case, ? : (ternary operator)
if($x > $y) {
    echo 'x är större än y <br>';
}
else {
    echo 'y är större än x <br>';
}

switch($x) { // dåligt exempel, $x är ju 12.54
    case 1: echo 'x är större än y';
        break;
    case 2: echo 'y är större än x';
        break;
    default: echo 'x är vare sig 1 eller 2 (det som faktiskt efterfrågas).';
}

$color = 'green'; // bättre exempel
echo '<br>';
switch($color){
    case 'red': echo 'Efterfrågad färg är röd: ' . $color;
        break;
    case 'green': echo 'Efterfrågad färg är grön: ' . $color;
        break;
    default: echo 'Kan inte avgöra vad den efterfrågade färgen är.';
}
echo '<br><br>';
$time = date('H:i:s'); //stort H för 0-23, litet för 1-12 
$hour = date('H');

echo $time . ' och ' . $hour;
echo '<br><br>';
echo $hour < $time ? $time : 'Du har lyckats pricka in exakt en hel timme';
// ett betydligt mer intressant exempel kan vara när vi undersöker om en viss post,
// som kommentarer/blogg finns eller inte
?>