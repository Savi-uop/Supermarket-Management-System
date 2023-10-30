<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo lang('reset_password_heading');?></title>
    <link href="/anim8c2/css/bootstrap3.css" rel="stylesheet">
    <link href="/anim8c2/css/signin.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <?php echo form_open('auth/reset_password/' . $code, 'class="form-signin"'); ?>
      <div id="infoMessage"><?php echo $message; ?></div>
      <h2 class="form-signin-heading"><?php echo lang('reset_password_heading'); ?></h1>
      <p>
      <?php echo sprintf(lang('reset_password_new_password_label'), $min_password_length); ?>
      <?php echo form_input($new_password, '', 'class="form-control" placeholder="new password" required autofocus'); ?>
      </p>
      <p>
      <?php echo lang('reset_password_new_password_confirm_label', 'new_password_confirm'); ?>
      <?php echo form_input($new_password_confirm, '', 'class="form-control" placeholder="new password confirm" required'); ?>
      </p> 
        <?php echo form_input($user_id);?>
        <?php echo form_hidden($csrf); ?>
      <p><?php echo form_submit('submit', lang('reset_password_submit_btn'),'class="btn btn-lg btn-primary btn-block"'); ?></p>
      <?php echo form_close(); ?>
      
    </div>
  </body>
</html>
<!--

<h1><?php echo lang('reset_password_heading');?></h1>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open('auth/reset_password/' . $code);?>

	<p>
		<label for="new_password"><?php echo sprintf(lang('reset_password_new_password_label'), $min_password_length);?></label> <br />
		<?php echo form_input($new_password);?>
	</p>

	<p>
		<?php echo lang('reset_password_new_password_confirm_label', 'new_password_confirm');?> <br />
		<?php echo form_input($new_password_confirm);?>
	</p>

	<?php echo form_input($user_id);?>
	<?php echo form_hidden($csrf); ?>

	<p><?php echo form_submit('submit', lang('reset_password_submit_btn'));?></p> 

 <?php echo form_close();?> -->