<?php
    /*
        Superglobals = alltid tillgängliga, inbyggda variabler (just nu ganska tomma)
        
        $_SERVER
        
        $_GET
        $_POST
        $COOKIE
        $_SESSION
        $_ENV
        $_FILES
        $REQUEST
    */

    //var_dump($_SERVER);

    echo '<h3>Host: ' . $_SERVER['HTTP_HOST'] . '</h3>';
    echo '<h3>Dokumentrot: ' . $_SERVER['DOCUMENT_ROOT'] . '</h3>';
    echo '<h3>Server mjukvara: ' . $_SERVER['SERVER_SOFTWARE'] . '</h3>';
    echo '<h3>Server namn: ' . $_SERVER['SERVER_NAME'] . '</h3>';
    echo '<h3>Filplats: ' . $_SERVER['PHP_SELF'] . '</h3>';
    echo '<h3>Klientinformation: ' . $_SERVER['HTTP_USER_AGENT'] . '</h3>';
    echo '<h3>Host: ' . $_SERVER['SCRIPT_FILENAME'] . '</h3>';
    echo '<h3>Remote port: ' . $_SERVER['REMOTE_PORT'] . '</h3>';
    echo '<h3>Remote address: ' . $_SERVER['REMOTE_ADDR'] . '</h3>';  
?>