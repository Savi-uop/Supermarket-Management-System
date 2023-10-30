<!-- <link rel="stylesheet" href="http://localhost/SampleProject1/bootstrap/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="http://localhost/Supermarket1/bootstrap/css/bootstrap.min.css">

<table border="1" class="table table-striped">
    <h3 class="text-center">Main Catergory List</h3>
    <tr>
        <th>ID</th>
        <th>Cat.Name</th>
        <th>Cat.ID</th>
        <th>Description</th>
        <th>Added date</th>
        <th>Edited date</th>
        <th>Status</th>
        <th>Action</th>
    </tr>

    <?php foreach($cat1 as $row): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['cat_name']; ?></td>
            <td><?php echo $row['cat_id']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['added_date']; ?></td>
            <td><?php echo $row['edited_date']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <!-- <button type="button" class="btn btn-danger" name="delete" formaction="http://[::1]/Supermarket1/index.php/MainCategoryControllerdeleteCategory/<?php echo $row['id']; ?>">Delete</button> -->
                    <!-- <button type="button" class="btn btn-success" name="edit" formaction="http://[::1]/Supermarket1/index.php/MainCategoryController/editCategory/<?php echo $row['id']; ?>">Edit</button> -->
                
                    <button type="button" class="btn btn-danger" name="delete" ><a href="deleteCategory/<?php echo $row['id']; ?>">Delete</a></button>
                    <button type="button" class="btn btn-success" name="edit" ><a href="editCategory/<?php echo $row['id']; ?>">Edit</a></button>
                    </div>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
