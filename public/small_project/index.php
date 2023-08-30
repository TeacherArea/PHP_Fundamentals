<?php include 'inc/header.php'; ?>
<?php
$name = $email = $msg = '';
$nameErr = $emailErr = $msgErr = '';

if (isset($_POST['name'])) {
  if (empty($_POST['name'])) {
    $nameErr = 'Name  is required!';
  } else {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
  }
  if (empty($_POST['email'])) {
    $emailErr = 'Email is required!';
  } else {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  }

  if (empty($_POST['message'])) {
    $msgErr = 'Message is required!';
  } else {
    $msg = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);
  }

  if(empty($nameErr) && empty($emailErr) && empty($msgErr)){
    $sql = "INSERT INTO small_project(name, email, msg) VALUES ('$name', '$email', '$msg')";
    
    if(mysqli_query($conn, $sql)){
      header('Location: feed-db.php');
    }
    else {
      echo 'Something went wrong!' . mysqli_error($conn);
    }
  }
}
?>
<h2>Feedback</h2>
<p class="lead text-center">Give feedback on something</p>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="mt-4 w-75">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control <?php echo $nameErr ? 'is-invalid' : null ?>" id="name" name="name" placeholder="Enter your name">
    <div class="invalid-feedback">
      <?php echo $nameErr ?>
    </div>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control <?php echo $emailErr ? 'is-invalid' : null ?>" id="email" name="email" placeholder="Enter your email">
    <div class="invalid-feedback">
      <?php echo $emailErr ?>
    </div>
  </div>
  <div class="mb-3">
    <label for="message" class="form-label">Feedback</label>
    <textarea class="form-control <?php echo $msgErr ? 'is-invalid' : null ?>" id="body" name="message" placeholder="Enter your feedback"></textarea>
    <div class="invalid-feedback">
      <?php echo $msgErr; ?>
    </div>
  </div>
  <div class="mb-3">
    <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
  </div>
</form>
<?php include 'inc/footer.php'; ?>