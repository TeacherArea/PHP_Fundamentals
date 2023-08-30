<?php
    if(isset($_POST['submit'])) {
        $allowed_extensions = array('png','jpg','gif');

        if(!empty($_FILES['upload']['name'])) {
            //print_r($_FILES); // för att ta reda på hur det som laddas upp tolkas, ta bort sendare
            $file_name = $_FILES['upload']['name'];
            $file_size = $_FILES['upload']['size'];
            $file_tmp = $_FILES['upload']['tmp_name'];
            $target_dir = "uploads/{$file_name}";

            $file_extension = explode('.', $file_name);
            $file_extension = strtolower(end($file_extension));
            // echo $file_extension;

            if(in_array($file_extension, $allowed_extensions)) {
                if($file_size <= 2000000) {
                    move_uploaded_file($file_tmp, $target_dir);
                    $message = '<p style="color:green";>Bilden uppladdad.</p>';
                }
                else {
                    $message = '<p style="color:red";>För stor fil. Gör den mindre än 2 MB.</p>';
                }
            }
            else {
                $message = '<p style="color:red";>Otillåten filtyp. Enbart jpg/png/gif-bilder tillåtna.</p>';
            }
        }
        else {
            $message = '<p style="color:red";>Vänligen välj en fil.</p>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <p>Välj en fil att ladda upp</p>
        <input type="file" name="upload">
        <?php echo $message ?? null ?>
        <hr>
        <input type="submit" name="submit">
    </form>
</body>
</html>