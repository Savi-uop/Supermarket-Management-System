<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Loging page</title>
    <link rel="stylesheet" href="http://localhost/Supermarket1/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/Supermarket1/bootstrap/css/signin.css">
    
  </head>

  <body>

    <div class="container">

      <form class="form-signin" role="form" action="http://localhost/Supermarket1/auth/login" method="post">
        <h2 class="form-signin-heading"><?php echo lang('login_heading');?></h2>
        <input type="text" class="form-control" id="identity" name="identity" placeholder="Email address" required autofocus>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <div>&nbsp;</div>
        <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
      </form>
        
    </div> 
  </body>
</html>
