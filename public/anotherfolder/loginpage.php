<?php
    session_start();
    if(isset($_SESSION['username'])){
        echo '<h1>Välkommen ' . $_SESSION['username'] . '!</h1>';
        echo '<a href="logout.php">Logga ut</a>';
    }
    else {
        echo '<h3>Välkommen!</h3>';
        echo '<a href="../12_sessions.php">Tillbaka</a>';
    }
?>