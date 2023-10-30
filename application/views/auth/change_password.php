<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Change Password</title>
    <link href="../css/bootstrap3.css" rel="stylesheet">
    <link href="../css/signin.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      
      <?php echo form_open("auth/change_password", 'class="form-signin"'); ?>
      <div id="infoMessage"><?php echo $message; ?></div>
      <h2 class="form-signin-heading"><?php echo lang('change_password_heading'); ?></h1>
      <p>
      <?php echo lang('change_password_old_password_label', 'old_password'); ?>
      <?php echo form_input($old_password, '', 'class="form-control" placeholder="old password" required autofocus'); ?>
      </p>
      <p>
      <?php echo sprintf(lang('change_password_new_password_label'), $min_password_length); ?>
      <?php echo form_input($new_password, '', 'class="form-control" placeholder="new password" required'); ?>
      </p>
      <p>
      <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm'); ?>
      <?php echo form_input($new_password_confirm, '', 'class="form-control" placeholder="new password confirm" required'); ?>
      </p>
      <?php echo form_input($user_id);?>
      <p><?php echo form_submit('submit', lang('change_password_submit_btn'),'class="btn btn-lg btn-primary btn-block"'); ?></p>
      <?php echo form_close(); ?>
    </div>
  </body>
</html>