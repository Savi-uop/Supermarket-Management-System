<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit user</title>
    <link rel="stylesheet" href="http://localhost/Supermarket1/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/Supermarket1/bootstrap/css/signin.css">
    
  </head>

  <body>

    <div class="container">
        

<?php echo form_open(uri_string(),'class="form-signin"');?>

       <h1><?php echo lang('edit_user_heading');?></h1>
        <p><?php echo lang('edit_user_subheading');?></p>

        <div id="infoMessage"><?php echo $message;?></div>

      <p>
            <?php echo lang('edit_user_fname_label', 'first_name');?> <br />
            <?php echo form_input($first_name,'','class="form-control"');?>
      </p>

      <p>
            <?php echo lang('edit_user_lname_label', 'last_name');?> <br />
            <?php echo form_input($last_name,'','class="form-control"');?>
      </p>

      <p>
            <?php echo lang('edit_user_company_label', 'company');?> <br />
            <?php echo form_input($company,'','class="form-control"');?>
      </p>

      <p>
            <?php echo lang('edit_user_phone_label', 'phone');?> <br />
            <?php echo form_input($phone,'','class="form-control"');?>
      </p>

      <p>
            <?php echo lang('edit_user_password_label', 'password');?> <br />
            <?php echo form_input($password,'','class="form-control"');?>
      </p>

      <p>
            <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?><br />
            <?php echo form_input($password_confirm,'','class="form-control"');?>
      </p>

     <h3><?php echo lang('edit_user_groups_heading');?></h3>
    <?php foreach ($groups as $group):?>
    <label class="checkbox">
    <?php
        $gID=$group['id'];
        $checked = null;
        $item = null;
        
        foreach($currentGroups as $grp) {
            if ($gID == $grp->id) {
                $checked= ' checked="checked"';
               
            break;
            }
        }
    ?>
    <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
    <?php echo $group['name'];?>
    </label>
    <?php endforeach?>

      <?php echo form_hidden('id', $user->id);?>
      <?php echo form_hidden($csrf); ?>

      <p><button type="submit" class="btn btn-primary">Edit User</button></p>

<?php echo form_close();?>
        
        
        
      
      
      
      
      
          
        
    </div> 
  </body>
</html>
























