<?php
    function inverse($x) {
        if(!$x) {
            throw new Exception('Försök till division av 0!');
        }
        return 1/$x;
    }

    echo inverse(2.45) . '<br>';

    try {
        echo inverse(4) . '<br>';
        echo inverse(0);
    }
    catch(Exception $e) {
        echo 'Ett fel inträffade: ', $e->getMessage(), ' ';
    }
    finally {
        echo '<br>Programmet går vidare i finally, oavsett fel ...';
    }
?>