<?php
    // prova med exempelkod <script>alert('Hi! Bad code incoming.')</script> i input
    //prova även utan htmlspecialchars i email, och lista ut vilket filter som ska användas

    if(isset($_POST['submit'])){
        $name = htmlspecialchars($_POST['name']);
        $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
        echo $name;
        echo ' ' . $age;
        echo $_POST['email'];
    }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Security</title>
</head>
<body>
<br><br>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div>
            <label for="name">Namn</label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label for="age">Ålder</label><br>
            <input type="text" name="age">
        </div>
        <div>
            <label for="age">E-mail</label><br>
            <input type="text" name="email">
        </div>
        <div>
            <br>
            <input type="submit" value="Skicka" name="submit">
        </div>
    </form>
</body>
</html>