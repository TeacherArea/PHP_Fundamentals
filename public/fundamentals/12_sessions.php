<?php
// Seesions lagras i servern, och används för att ta med data mellan sidor
// Sesssioner måste startas på samtliga aktuella sidor med session_start(); (vanligen med en include (header))
session_start ();
if (isset($_POST['submit'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

    if($username == 'Jane' && $password == 'Doe'){
        $_SESSION['username'] = $username;
        header('Location: /learn/anotherfolder/loginpage.php');
    }
    else {
        echo 'Användarnamnet matchade inte lösenordet.<br><br>';
    }
}

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
        <div>
            <label for="username">Användarnamn</label><br>
            <input type="text" name="username"><br>
        </div>
        <label for="password">Lösenord</label><br>
            <input type="password" name="password"><br><br>
        </div>
        <div>
            <input type="submit" name="submit">
        </div>
    </form>
    <?php
    if (isset($_COOKIE['name'])) {
        echo '<h2>' . $_COOKIE['name'] . '</h2>';
    }
    ?>
</body>

</html>