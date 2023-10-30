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
        
        <?php echo form_open("auth/create_user",'class="form-signin"');?>
      <h2 class="form-signin-heading"><?php echo lang('create_user_heading');?></h1>
      <div id="infoMessage"><?php echo $message;?></div>
      <p>
      <?php echo lang('create_user_fname_label', 'first_name');?>
      <?php echo form_input($first_name, '', 'class="form-control" placeholder="First name" required autofocus'); ?>
      </p>
      <p>
      <?php echo lang('create_user_lname_label', 'last_name');?>
      <?php echo form_input($last_name, '', 'class="form-control" placeholder="last name" required'); ?>
      </p>
      <p>
      <?php echo lang('create_user_company_label', 'company');?>
      <?php echo form_input($company,'', 'class="form-control" placeholder="Company" required');?>
      </p>
      <p>
      <?php echo lang('create_user_email_label', 'email');?>
      <?php echo form_input($email,'', 'class="form-control" placeholder="Email" required');?>
      </p>
      <p>
      <?php echo lang('create_user_phone_label', 'phone');?>
      <?php echo form_input($phone,'', 'class="form-control" placeholder="Phone"');?>
      </p>
      <p>
      <?php echo lang('create_user_password_label', 'password');?>
      <?php echo form_input($password,'', 'class="form-control" placeholder="Password" required');?>
      </p>
      <p>
      <?php echo lang('create_user_password_confirm_label', 'password_confirm');?>
      <?php echo form_input($password_confirm,'', 'class="form-control" placeholder="Confirm password" required');?>
      </p>
      
      
      
      <p><button type="submit" class="btn btn-primary">Create User</button>
          <a href="http://localhost/Supermarket1/auth/"><button type="button" class="btn btn-default">Cancel</button></a></p>
      <?php echo form_close(); ?>
      
          
        
    </div> 
  </body>
</html>












