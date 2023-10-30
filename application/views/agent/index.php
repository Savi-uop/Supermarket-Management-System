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
        
        <form action="http://localhost/Supermarket1/index.php/AgentController/addAgent/" method="POST">
            <br>

            <div class="card">

                <div class="card-header">
                    <h2 class="text-center">Agent Registration form</h2>
                </div>
            
                <div class="card-body">
            
                    <div class="col-12">
                        <label > Agent/Supplier Name :</label>
                        <input type="text" name="agent_name" id="agent_name" placeholder="Enter the Agent/organization name" class="form-control">  
                    </div>

                    <div class="col-12">
                        <label> Agent ID :</label>
                        <input type="text" name="agent_id" id="agent_id" placeholder="Enter the Agent ID" class="form-control">
                    </div>

                    <div class="col-12">
                        <label> Reg No :</label>
                        <input type="text" name="reg_no" id="reg_no" placeholder="enter the agent registration number" class="form-control">
                    </div>

                    <div class="col-12">
                        <label> Address :</label>
                        <input type="text" name="address" id="address" placeholder=" no / Street/ lane / City" class="form-control">
                    </div>

                    <div class="col-12">
                        <label> Contact No :</label>
                        <input type="text" name="contact" id="contact" placeholder="07XXXXXXXX" class="form-control">
                    </div>

                    <div class="col-12">
                        <label> Name of the agent head :</label>
                        <input type="text" name="head_name" id="head_name" placeholder="enter the agent head/manager/owner" class="form-control">
                    </div>

                    <div class="col-12">
                        <label> Description :</label>
                        <input type="text" name="description" id="description" placeholder="Agent description" class="form-control">
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
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>

            </div>
        </form>
    </div>
</body>
</html>
