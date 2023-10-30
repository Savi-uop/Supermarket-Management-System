<link rel="stylesheet" href="http://localhost/Supermarket1/bootstrap/css/bootstrap.min.css">

<table border="1" class="table table-striped">
    <h3 class="text-center">Sub Catergory List</h3>
    <tr>
        <th>ID</th>
        <th>Sub-Cat.Name</th>
        <th>Sub-Cat.ID</th>
        <th>Description</th>
        <th>Main Category</th>
        <th>Added date</th>
        <th>Edited date</th>
        <!-- <th>Status</th> -->
        <th>Action</th>
    </tr>

    <?php foreach($cat1 as $row): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['sub_cat_name']; ?></td>
            <td><?php echo $row['sub_cat_id']; ?></td>
            <td><?php echo $row['description']; ?></td>

            <td><?php echo $row['main_category']; ?></td>

            <td><?php echo $row['added_date']; ?></td>
            <td><?php echo $row['edited_date']; ?></td>
            <!-- <td><?php echo $row['status']; ?></td> -->
            <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    
                    <button type="button" class="btn btn-danger" name="delete" ><a href="deleteSubCategory/<?php echo $row['id']; ?>">Delete</a></button>
                    <button type="button" class="btn btn-success" name="edit" ><a href="editSubCategory/<?php echo $row['id']; ?>">Edit</a></button>
                </div>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
