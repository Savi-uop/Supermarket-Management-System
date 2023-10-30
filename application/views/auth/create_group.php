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

              <h1><?php echo lang('create_group_heading');?></h1>
        <p><?php echo lang('create_group_subheading');?></p>
        
        <div id="infoMessage"><?php echo $message;?></div>
        
        <?php echo form_open("auth/create_group");?>
        
              <p>
                    <?php echo lang('create_group_name_label', 'group_name');?> <br />
                    <?php echo form_input($group_name);?>
              </p>
        
              <p>
                    <?php echo lang('create_group_desc_label', 'description');?> <br />
                    <?php echo form_input($description);?>
              </p>
        
              <p><?php echo form_submit('submit', lang('create_group_submit_btn'));?></p>
        
        <?php echo form_close();?>
        
    </div> 
  </body>
</html>