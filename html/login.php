<?php include_once('libs/login_users.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script
			  src="https://code.jquery.com/jquery-3.2.1.min.js"
			  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			  crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/css/style.css">
    <title>Todo Maker</title>
    <script>
      $(() => {
        $('#show_register').click(() => {
          $('#login_form').hide()
          $('#register_form').show()
          return false;
        })
        $('#show_login').click(() => {
          $('#login_form').show()
          $('#register_form').hide()
          return false;
        })
      })
    </script>
  </head>
  <body>
    <div class="content">
      <h2><strong>To</strong>do<strong>Ma</strong>ker</h2>
    </div>
    <div class="content">
        <?php if(isset($error)) {echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';} ?>
    </div>
    <div id="login_form">
      <div class="content wrapper">
          <div class="brand">
            <h3><strong>Login</strong>Here</h3>
          </div>
          <form class="" action="login.php" method="post">
            <div class="form-group">
              <label for="Username">Username</label>
              <input type="text" name="login_username" class="form-control" placeholder="username">
            </div>
            <div class="form-group">
              <label for="Password">Password</label>
              <input type="password" name="login_password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
              <input type="submit" name="login" class="btn btn-success" value="Login" id="login">
            </div>
            <a href="#" id="show_register">Don't have an account?</a>
          </form>
        </div>
    </div>

    <div id="register_form">
      <div class="content wrapper">
          <div class="brand">
            <h3><strong>Register</strong>Here</h3>
          </div>
          <form class="" action="login.php" method="post">
            <div class="form-group">
              <label for="Username">Username</label>
              <input type="text" name="username" class="form-control" placeholder="username">
            </div>
            <div class="form-group">
              <label for="Email">Email</label>
              <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="Password">Password</label>
              <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="RePassword">Repeat Password</label>
              <input type="password" name="repassword" class="form-control" placeholder="Repeat Password">
            </div>
            <div class="form-group">
              <input type="submit" name="register" class="btn btn-success" value="Register" id="register">
            </div>
            <a href="#" id="show_login">Already have an account?</a>
          </form>
      </div>
    </div>


  </body>
</html>
