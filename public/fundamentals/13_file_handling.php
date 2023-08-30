<?php
    $file = 'anotherfolder/users.txt';

    if(file_exists($file)){
        echo readfile($file) . '<br><br>'; //kan enbart läsa

        $filecontainer = fopen($file, 'r'); // r betyder read, se manualen för andra möjligheter
        $content = fread($filecontainer, filesize($file));
        fclose($filecontainer); // viktigt att stänga!
        echo $content;

        echo '<br><br>';
        $toArray = explode("\n", $content);
        sort($toArray);
        print_r($toArray);
    }
    else {
        echo 'Filen hittades inte. Skriver en ny med namnen Anna, Örjan, Sture';
        $filecontainer = fopen($file, 'w');
        $content = 'Anna' . PHP_EOL . 'Örjan' . PHP_EOL . 'Sture' . PHP_EOL . 'i en ny fil!';
        fwrite($filecontainer, $content);
        fclose($filecontainer);
    }
?>