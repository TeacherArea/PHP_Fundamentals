<?php
    session_start();
    session_destroy();

    echo 'Du är nu utloggad.<br><br>';
    echo '<a href="../12_sessions.php">Tillbaka till inloggningen</a>';
?>