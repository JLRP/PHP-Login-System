<?php

  //Allow the config
  define('__CONFIG__', true);
  //Require the config
  require_once "inc/config.php";

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title></title>

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/css/uikit.min.css" />

  </head>

  <body>

    <div class="uk-section uk-container">
        <?php
          echo "Hello world. Today is: ";
          echo date("Y m d");
         ?>

         <p>
           <a href="login.php">Login</a>
           <a href="register.php">Register</a>
         </p>
    </div>

    <?php require_once "inc/footer.php" ?>

  </body>
</html>
