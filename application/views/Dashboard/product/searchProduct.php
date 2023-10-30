<link rel="stylesheet" href="http://localhost/Supermarket1/bootstrap/css/bootstrap.min.css">

<table border="1" class="table table-striped">
    <h3 class="text-center">Main Catergory List</h3>
    <tr>
        <th>ID</th>
        <th>Product.Name</th>
        <th>Product.ID</th>
        <th>Retail Price</th>
        <th>Selling Price</th>
        <th>Description</th>
        <th>Quantity</th>
        <th>Unit</th>
        <th>Re-Order level</th>
        <th>Related Sub Category</th>
        <th>Added date</th>
        <th>Edited date</th>
        <th>Status</th>
        <th>Image</th>
        <th>Action</th>
    </tr>

    <?php foreach($query11 as $row): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['pro_name']; ?></td>
            <td><?php echo $row['pro_id']; ?></td>
            <td><?php echo $row['retail_price']; ?></td>
            <td><?php echo $row['selling_price']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['quantity']; ?></td>
            <td><?php echo $row['unit']; ?></td>
            <td><?php echo $row['level']; ?></td>
            <td><?php echo $row['sub_category']; ?></td>
            <td><?php echo $row['added_date']; ?></td>
            <td><?php echo $row['edited_date']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td> <img src="http://localhost/Supermarket1/upload/<?php echo $row['image']; ?>" ></td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    
                    <button type="button" class="btn btn-success" name="edit" ><a href="editProduct/<?php echo $row['id']; ?>">Edit</a></button>
                    <button type="button" class="btn btn-danger" name="delete" ><a href="deleteProduct/<?php echo $row['id']; ?>">Delete</a></button>

                </div>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
