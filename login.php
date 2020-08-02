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
        <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk.grid>
          <form class="uk-form-stacked js.login">

            <h2>Login</h2>

              <div class="uk-margin">
                  <label class="uk-form-label" for="form-stacked-text">Email</label>
                  <div class="uk-form-controls">
                      <input class="uk-input" id="email" type="email" required="required" placeholder="email@example.com">
                  </div>
              </div>

              <div class="uk-margin">
                  <label class="uk-form-label" for="form-stacked-text">Password</label>
                  <div class="uk-form-controls">
                      <input class="uk-input" id="password" type="password" required="required" placeholder="Your password">
                  </div>
              </div>

              <div class="uk-margin">
                  <button class="uk.button uk-button-default" type="submit">Login</button>
              </div>

          </form>
        </div>
    </div>

    <?php require_once "inc/footer.php" ?>

  </body>
</html>
