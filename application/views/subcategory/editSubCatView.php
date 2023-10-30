<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermarket Management System</title>
    <link rel="stylesheet" href="http://localhost/Supermarket1/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <form action="http://localhost/Supermarket1/index.php/MainCategoryController/updateSubCategory/" method="POST" >
      
            <div class="col-12">
                <h3 class="text-center"><span class="badge bg-warning">Sub-Category editing form</span></h3>
            </div>
            
            <div class="col-12">
                <!-- <label > ID :</label> -->
                <input type="hidden" name="id" id="id"  value ="<?php echo $detail->id; ?>">
                
             </div>

            <div class="col-12">
                <label >Sub Category Name :</label>
                <input type="text" name="subCatName" id="subCatName" placeholder="Enter the Main category" class="form-control" value ="<?php echo $detail->sub_cat_name; ?>">
                
             </div>

            <div class="col-12">
                <label> Category ID :</label>
                <input type="text" name="sub_cat_id" id="sub_cat_id" placeholder="Enter the category ID" class="form-control" value ="<?php echo $detail->sub_cat_id; ?>">
            </div>

            <div class="col-12">
                <label> Description :</label>
                <input type="text" name="description" id="description" placeholder="category description" class="form-control" value ="<?php echo $detail->description; ?>">
            </div>
            
            <div class="col-12">
                    <label for="name"> Main Category Name :</label>
                
                    <div class="input-group col-3">
                        <table border="0" class="table table-striped">
                        
                        
                            <?php foreach ($mainCat as $key ): ?>
                                <tr>
                                <?php if(in_array($key['id'],$select_cat)){  ?>
                                            <td><input class="form-check-input" type="checkbox" value="<?php echo $key['id']; ?>" name="main_category[]" checked></td>
                                            <td><label><?php echo $key['cat_name']; ?></label></td>
                                 <?php   }else{ ?>
                                            <td><input class="form-check-input" type="checkbox" value="<?php echo $key['id']; ?>" name="main_category[]" ></td>
                                            <td><label><?php echo $key['cat_name']; ?></label></td>

                                <?php } ?>
                                            
                                            
                                        
                                    

                                        
                                </tr>
                           
                            <?php endforeach; ?>
                              
                        </table>
                    
                    </div>
            </div>
           
            <div class="col-12">
                <!-- <label > Added Date :</label> -->
                <input type="hidden" name="added_date" id="added_date" class="form-control" value="<?php echo(date("Y-m-d h:i:sa")); ?>" >
            </div>

            <div class="col-12">
                <!-- <label > Edited Date :</label> -->
                <input type="hidden" name="edited_date" id="edited_date" class="form-control" value="<?php echo(date("Y-m-d h:i:sa")); ?>">
            </div>

            <div class="col-12">
                <!-- <label for="status"> Status :</label> -->
                <!-- <input type="hidden" name="status" id="status" class="form-control" value ="<?php echo $status; ?>"> -->
            </div>

            <br>
            <div class="col-12">
                <input type="submit" class="btn btn-success" value="Save">
            </div>
            <br><br>

        </form>
    </div>
</body>
</html>