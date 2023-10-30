<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Loging page</title>
    <link href="../css/bootstrap3.css" rel="stylesheet">
    <link href="../css/signin.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      
      <?php echo form_open("auth/login", 'class="form-signin"'); ?>
      <div id="infoMessage"><?php echo $message; ?></div>
      <h2 class="form-signin-heading"><?php echo lang('login_heading'); ?></h1>
      <p>
      <?php echo lang('login_identity_label', 'identity'); ?>
      <?php echo form_input($identity, '', 'class="form-control" placeholder="Email address" required autofocus'); ?>
      </p>
      <p>
      <?php echo lang('login_password_label', 'password'); ?>
      <?php echo form_input($password, '', 'class="form-control" placeholder="Password" required'); ?>
      </p>
      <p>
      <?php echo lang('login_remember_label', 'remember'); ?>
      <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?>
      </p> 
      <p><?php echo form_submit('submit', lang('login_submit_btn'),'class="btn btn-lg btn-primary btn-block"'); ?></p>
      <?php echo form_close(); ?>
      <div class="form-signin">
      <p><a href="../auth/forgot_password"><?php echo lang('login_forgot_password'); ?></a></p>
      </div>
    </div>
  </body>
</html>