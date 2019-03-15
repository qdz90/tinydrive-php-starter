<?php
  require('./config.php');

  session_start();
  if (!isset($_SESSION["user"])) {
    header('location: index.php');
    die();
  } else {
    $user = $_SESSION["user"];
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Editor</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-3 mb-3">
    <h1 class="h3 mb-4">Welcome <?php echo $user["fullname"]; ?> <a class="btn btn-link" href="logout.php">Logout</a></h1>
    <p>TinyMCE editor instance setup with Tiny Drive integated into the link, image and media dialogs and with a separate direct insertfile button.</p>
    <textarea></textarea>
  </div>

  <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=<?php echo $config["apiKey"]; ?>"></script>
  <script src="assets/js/init.js"></script>
</body>
</html>
