<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermarket Management System</title>
    <link rel="stylesheet" href="http://localhost/Supermarket1/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        
        <form action="http://localhost/Supermarket1/index.php/AgentController/updateContactPerson/" method="POST" enctype="multipart/form-data">
            <br>

            <div class="card">

                <div class="card-header">
                    <h2 class="text-center">Contact-Person Editing form</h2>
                </div>
            
                <div class="card-body">
            
                    <div class="col-12">
                        <input type="hidden" name="id" id="id" value ="<?php echo $detail->id; ?>">
                    </div>

                    <div class="col-12">
                        <input type="hidden" name="agent_id" id="agent_id" value ="<?php echo $detail->agent_id; ?>">
                    </div>

                    <div class="col-12">
                        <!-- <label> Agent Name :</label> -->
                        <!-- <input type="text" name="agent_name" id="agent_name" class="form-control" value ="<?php/echo $detail->agent_name; ?>" read-only>   -->
                        
                        <!-- <div class="input-group dropdown-content">
                            
                            <select name="agent_id" id="agent_id" class="form-control">

                                <?php //foreach ($agent as $agents ): ?>
                                    <?php //if($agents['id'] == $detail->agent_id){  ?>
                                        <option value="<?php //echo $agents['id']; ?>" name="agent[]" selected><?php //echo $agents['agent_name']; ?> </option>
                                    <?php// }else{ ?>
                                        <option value="<?php //echo $agents['id']; ?>" name="agent[]"><?php //echo $agents['agent_name']; ?> </option>
                                    <?php// } ?>
                                         
                                
                                <?php// endforeach; ?>   
                              
                            </select>        
                        </div> -->
                    </div>
                    
                    <div class="col-12">
                        <div class="row">
                            <div class="col-4">
                                <label > First Name :</label>
                                <span style="color:red;">*</span>
                                <input type="text" name="fname" id="fname" class="form-control" value ="<?php echo $detail->fname; ?>" REQUIRED />  
                            </div>

                            <div class="col-4">
                                <label> Last Name :</label>
                                <span style="color:red;">*</span>
                                <input type="text" name="lname" id="lname" class="form-control" value ="<?php echo $detail->lname; ?>" required />
                            </div>

                            <div class="col-4">
                                <label> NIC No :</label>
                                <span style="color:red;">*</span>
                                <input type="text" name="nic" id="nic" class="form-control" value ="<?php echo $detail->nic; ?>" REQUIRED />
                            </div>
                        </div>
                    </div>      
                    <br>

                    <div class="col-12">
                        <div class="row">
                            <div class="col-6">
                                <label> Contact No1 :</label>
                                <span style="color:red;">*</span>
                                <input type="text" name="contact1" id="contact1" class="form-control" value ="<?php echo $detail->contact1; ?>" REQUIRED minlength="10" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"  />
                            </div>
                            <div class="col-6">
                                <label> Contact No2 :</label>
                                <input type="text" name="contact2" id="contact2" class="form-control" value ="<?php echo $detail->contact2; ?>" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="col-12">
                        <label for="">Please upload photo of you </label>
                        <span style="color:red;">*</span>
                         <br>
                        <input type='file' name='image' id='image' size='20' />
                        <img src="http://localhost/Supermarket1/upload/<?php echo $detail->image; ?>" width="100">
                    </div>

                    <div class="col-12">
                        <input type="hidden" name="added_date" id="added_date" class="form-control" value="<?php echo(date("Y-m-d h:i:sa")); ?>" >
                    </div>

                    <div class="col-12">
                        <input type="hidden" name="edited_date" id="edited_date" class="form-control" value="<?php echo(date("Y-m-d h:i:sa")); ?>">
                    </div>

                    <div class="col-12">
                        <input type="hidden" name="status" id="status" class="form-control" value="">
                    </div>

                </div>

                <div class="card-footer">
                    <input type="submit" class="btn btn-primary" value="Save">
                </div>

            </div>
        </form>
    </div>
</body>
</html>
