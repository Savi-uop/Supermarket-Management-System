<!-- <link rel="stylesheet" href="http://localhost/SampleProject1/bootstrap/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="http://localhost/Supermarket1/bootstrap/css/bootstrap.min.css">

<table border="1" class="table table-striped">
    <h3 class="text-center">Agent Details</h3>
    <tr>
        <th>ID</th>
        <th>Agent.Name</th>
        <th>Agent.ID</th>
        <th>Reg.No</th>
        <th>Address</th>
        <th>Contact No</th>
        <th>Agent Head</th>
        <th>Description</th>
        <th>Added date</th>
        <th>Edited date</th>
        <th>Status</th>
        <th>Action</th>
    </tr>

    <?php foreach($agent1 as $row): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['agent_name']; ?></td>
            <td><?php echo $row['agent_id']; ?></td>
            <td><?php echo $row['reg_no']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['contact']; ?></td>
            <td><?php echo $row['head_name']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['added_date']; ?></td>
            <td><?php echo $row['edited_date']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                   
                    <button type="button" class="btn btn-success" name="edit" ><a href="editAgent/<?php echo $row['id']; ?>">Edit</a></button>
                    <button type="button" class="btn btn-danger" name="delete" ><a href="deleteAgent/<?php echo $row['id']; ?>">Delete</a></button>
                    
                </div>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
