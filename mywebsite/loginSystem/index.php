<?php
require_once 'includes/config.session.inc.php';
require_once 'includes/signup_view.inc.php';
require_once 'includes/login_view.inc.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/reset.css">
</head>

<body>
  <form action="includes/login.inc.php" method="post">
    <div>
      <h3>LOGIN</h3>
    </div>
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password">
    <button type="submit">Signup</button>
  </form>

<?php
check_login_errors();
?>


  <form action="includes/signup.inc.php" method="post">
    <div>
      <h3>Signup</h3>
    </div>
    <?php
    signup_inputs()
      ?>

    <button type="submit">Signup</button>

  </form>
  <?php

  //show error messages
  check_signup_errors();

  ?>


</body>

</html>