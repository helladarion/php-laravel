<?php include_once('libs/login_users.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script
			  src="https://code.jquery.com/jquery-3.2.1.min.js"
			  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			  crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/css/style.css">
    <title>Todo Maker</title>
  </head>
  <body>
    <div class="content">
        <?php if(isset($error)) {echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';} ?>
        <form class="" action="login.php" method="post">
          <h2>Register Here</h2>
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
        </form>



    </div>
  </body>
</html>
