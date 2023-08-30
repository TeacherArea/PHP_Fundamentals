<?php
    // här efterfrågas name och age med GET. Dessa är ännu inte tilldelade,
    // och därför ges ett varningsmeddelande (om varningar är påslagna)
    echo $_GET['name'];
    echo $_GET['age'];

    // isset() används fota för att se om formulär är tomt eller inte.
    // Skrivs ex enbart echo $_POST['name']; här ges en varning.
    if (isset($_POST['submit'])) {
        echo $_POST['name'];
        echo $_POST['age'];

    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET/POST</title>
</head>

<body>
    <!-- lägg märke till att det går bra att skriva url-variabler antingen i webbläsaren eller direkt i kod. Testa! -->
    <br>
    <hr><br>
    <h3>GET variabler från antingen URL eller kod</h3>
    <a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Pelle&age=30">Hämta</a>

    <h3>Formulär med GET</h3>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div>
            <label for="name">Namn: </label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="age">Ålder: </label>
            <input type="text" name="age">
        </div>
        <div>
            <input type="submit" value="Skicka" name="skicka">
        </div>
    </form>
    <p>väldigt osäkert och fungerar kanske bäst med sök</p>

    <h3>Formulär med POST</h3>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div>
            <label for="name">Namn: </label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="age">Ålder: </label>
            <input type="text" name="age">
        </div>
        <div>
            <input type="submit" value="Skicka" name="submit">
        </div>
    </form>
    <p>säkrare och används till input för databas, mail, blogg, etc</p>
</body>

</html>