<!doctype html>

<html lang="sv">
<head>
  <meta charset="utf-8">

  <title>Grundkod i HTML5</title>
  <meta name="description" content="Grundkod i HTML5">
  <meta name="author" content="InfoMedia">

  <link rel="stylesheet" href="css/style.css?v=1.0">

</head>

<body>

  <?php
  $password = "123abc";
  $username = "admin";
  $wrongpass = "Användarnamn och lösenord matchade inte.";

  if ($password == "123abc" || $username == "admin") {
    echo "Lösenordet stämde!";
  } else {
    echo "Lösenordet stämde inte!";
  }

  ?>


  <script src="js/scripts.js"></script>
</body>
</html>
