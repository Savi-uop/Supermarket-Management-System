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
        
       <h1><?php echo lang('index_heading');?></h1>
        <p><?php echo lang('index_subheading');?></p>

        <div id="infoMessage"><?php echo $message;?></div>

    <table class="table table-striped table-hover" cellpadding=0 cellspacing=10>
        <thead class="table-dark">
    <tr>
        <th><?php echo lang('index_fname_th');?></th>
        <th><?php echo lang('index_lname_th');?></th>
        <th><?php echo lang('index_email_th');?></th>
        <th><?php echo lang('index_groups_th');?></th>
        <th><?php echo lang('index_status_th');?></th>
        <th><?php echo lang('index_action_th');?></th>
    </tr>
    </thead>
    <?php foreach ($users as $user):?>
        <tr>
            <td><?php echo $user->first_name;?></td>
            <td><?php echo $user->last_name;?></td>
            <td><?php echo $user->email;?></td>
            <td>
                <?php foreach ($user->groups as $group):?>
                    <?php echo anchor("auth/edit_group/".$group->id, $group->name) ;?><br />
                <?php endforeach?>
            </td>
            <td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link'),'class="badge badge-pill badge-success"') : anchor("auth/activate/". $user->id, lang('index_inactive_link'),'class="badge badge-pill badge-danger"');?></td>
            <!-- <td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td> -->
            <td><a href="http://localhost/Supermarket1/auth/edit_user/<? echo $user->id;?>">
                <button type="button" class="btn btn-info btn-sm">Edit</button>
            </a>
            </td>
        </tr>
    <?php endforeach;?>
</table>

<p><?php echo anchor('auth/create_user', lang('index_create_user_link'))?> | <?php echo anchor('auth/create_group', lang('index_create_group_link'))?></p>

    </div> 
  </body>
</html>




