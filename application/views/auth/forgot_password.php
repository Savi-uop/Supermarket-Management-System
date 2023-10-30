<!-- <h1><?php echo lang('forgot_password_heading'); ?></h1>
<p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label); ?></p>

<div id="infoMessage"><?php echo $message; ?></div>

<?php echo form_open("auth/forgot_password"); ?>

      <p>
      	<label for="email"><?php echo sprintf(lang('forgot_password_email_label'), $identity_label); ?></label> <br />
      	<?php echo form_input($email); ?>
      </p>

      <p><?php echo form_submit('submit', lang('forgot_password_submit_btn')); ?></p>

<?php echo form_close(); ?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo lang('forgot_password_heading'); ?></title>
    <link rel="stylesheet" href="http://localhost/Supermarket1/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/Supermarket1/bootstrap/css/signin.css">
</head>

<body>

<div class="container">

    <form class="form-signin" role="form" action="<?php echo site_url('auth/forgot_password') ?>" method="post">
        <h2 class="form-signin-heading"><?php echo lang('forgot_password_heading'); ?></h2>

        <p>
            <label for="email">Email address</label>
            <input type="text" class="form-control" id="email" name="email" required autofocus>
        </p>

        <p>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Send password reset email</button>

        </p>
    </form>

</div>
</body>
</html>