<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a sub-category.</title>
    <link rel="stylesheet" href="http://localhost/Supermarket1/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <form action="http://localhost/Supermarket1/index.php/MainCategoryController/addSubCategory/" method="post" >
            <div class="container">

                <div class="col-12">
                    <h3 class="text-center"><span class="badge bg-warning">Sub-Category inserting form</span></h3>
                </div>

                <div class="col-12">
                    <label for="name">Sub-Category Name :</label>
                    <input type="text" name="subCatName" id="subCatName" placeholder="Enter the sub-category name" class="form-control">
                </div>

                <div class="col-12">
                    <label for="name">Sub-Category ID :</label>
                    <input type="text" name="sub_cat_id" id="sub_cat_id" placeholder="Enter the sub-category name" class="form-control">
                </div>

                <div class="col-12">
                    <label for="name"> Description :</label>
                    <input type="text" name="description" id="description" placeholder="category description" class="form-control">
                </div>

                <div class="col-12">
                    <label for="name"> Main Category Name :</label>
                
                    <div class="input-group col-3">
                        <table border="0" class="table table-striped">
                        
                            <?php foreach ($cat1 as $key ): ?>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox" value="<?php echo $key['id']; ?>" name="main_category[]"></td>
                                    <td><label><?php echo $key['cat_name']; ?></label></td>
                                </tr>
                           
                            <?php endforeach; ?>
                              
                        </table>
                    
                    </div>
                </div>
                
                

                <div class="col-12">
                    <input type="hidden" name="added_date" id="added_date" class="form-control" value="<?php echo(date("Y-m-d h:i:sa")); ?>" >
                </div>

                <div class="col-12">
                    <input type="hidden" name="edited_date" id="edited_date" class="form-control" value="<?php echo(date("Y-m-d h:i:sa")); ?>">
                </div>

                <br>

                <div class="col-12">
                    <input type="submit" class="btn btn-primary" value="Add">
                </div>
                <br><br>
            
            </div>
        
        </form>  
    </div>
</body>
</html>