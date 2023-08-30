<?php
    // Cookies lagras i den egna klienten
    // syntax setcookie(key, value, expire). Expire sätts i sekunder (86400 = en dag, fem dagar = 86400 * 5).
    if(isset($_POST['name'])){
        setcookie('name', htmlspecialchars($_POST['name']), time() +  300);
    }

    // man kan manuellt rensa i kod med att sätta $_COOKIE['name', '', time() - 1]; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <label for="name">Namn</label><br>
        <input type="text" name="name"><br><br>
        <input type="submit" name="submit">
    </form>
    <?php
        if(isset($_COOKIE['name'])){
            echo '<h2>' . $_COOKIE['name'] .'</h2>';
        }
    ?>
</body>
</html>