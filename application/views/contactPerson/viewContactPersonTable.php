<!-- <link rel="stylesheet" href="http://localhost/Supermarket1/bootstrap/css/bootstrap.min.css"> -->

<!-- Bootstrap -->
    <link rel="stylesheet" href="http://localhost/Supermarket1/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/Supermarket1/bootstrap/css/custom.css">

    <div class="card-header"> 
        <h4>S.K Family Shop</h4>
    </div>

    <div class="container">
        <br>
        <div class="row">
            <div class="col"><button class="btn btn-outline-primary pull-right" type="button"><a href="http://localhost/Supermarket1/AgentController/viewAgent">Back</a></button></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"><button class="btn btn-outline-primary pull-right" type="button"><a href="http://localhost/Supermarket1/AgentController/loadContactPersonForm/<?php echo $agent_id; ?>">Add Contact Person</a></button></div>
            
        </div>
    </div>

    <div class="container-fluid">

        <table border="1" class="table table-striped">
            <div class=" col-11">
                <span class=""><h3 class="text-center">Contact Person Details</h3></span>
            </div>
            <div class="row"></div>
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>NIC</th>
                    <th>Agent ID</th>
                    <th>Contact No1</th>
                    <th>Contact No2</th>
                    <th>Image</th>
                    <th>Added date</th>
                    <th>Edited date</th>
                    <!-- <th>Status</th> -->
                    <th>Action</th>
                </tr>
            </thead>
            <?php foreach($con1 as $row): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['fname']; ?></td>
                    <td><?php echo $row['lname']; ?></td>
                    <td><?php echo $row['nic']; ?></td>
                    <td><?php echo $row['agent_id']; ?></td>
                    <td><?php echo $row['contact1']; ?></td>
                    <td><?php echo $row['contact2']; ?></td>
                    <td> <img src="http://localhost/Supermarket1/upload/<?php echo $row['image']; ?>" width="120"></td>
                    <td><?php echo $row['added_date']; ?></td>
                    <td><?php echo $row['edited_date']; ?></td>
                    <!-- <td><?php echo $row['status']; ?></td> -->
                    
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            
                            <button type="button" class="btn btn-success" name="edit" ><a href="http://localhost/Supermarket1/AgentController/editContactPerson/<?php echo $row['id']; ?>">Edit</a></button>
                            <button type="button" class="btn btn-danger" name="delete" ><a href="http://localhost/Supermarket1/AgentController/deleteContactPErson/<?php echo $row['id']; ?>">Delete</a></button>

                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>