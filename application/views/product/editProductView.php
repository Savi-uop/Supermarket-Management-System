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
        <form action="http://localhost/Supermarket1/index.php/ProductController/updateProduct/" method="POST" enctype="multipart/form-data">
      
            <div class="col-12">
                <h2 class="text-center">Product Editing form</h2>
            </div>
           
            <div class="col-12">
                <input type="hidden" name="id" id="id"  value ="<?php echo $detail->id; ?>">
             </div>

            <div class="col-12">
                <label > Product Name :</label>
                <input type="text" name="pro_name" id="pro_name"  class="form-control" value ="<?php echo $detail->pro_name; ?>">
                
             </div>

            <div class="col-12">
                <label> Product ID :</label>
                <input type="text" name="pro_id" id="pro_id" class="form-control" value ="<?php echo $detail->pro_id; ?>">
            </div>

            <div class="col-12">
                <label> Retail Price :</label>
                <input type="text" name="retail_price" id="retail_price" class="form-control" value ="<?php echo $detail->retail_price; ?>">
            </div>

            <div class="col-12">
                <label> Selling Price :</label>
                <input type="text" name="selling_price" id="selling_price" class="form-control" value ="<?php echo $detail->selling_price; ?>">
            </div>

            <div class="col-12">
                <label> Description :</label>
                <input type="text" name="description" id="description" class="form-control" value ="<?php echo $detail->description; ?>">
            </div>


            <div class="row col-12">
                <div class="col-6">
                    <label> Quantity :</label>
                    <input type="text" name="quantity" id="quantity" class="form-control" value ="<?php echo $detail->quantity; ?>">
                </div>

                <div class="col-6">
                    <label for="unit">Unit:</label> <br>
                    <select name="unit" id="unit" class="form-control btn-secondary" >    
                        <?php  
                            
                                foreach ($units as $key=>$value):  ?>
                                    <?php if( $key == $detail->unit ){ ?>
                                        <option value="<?php echo $key; ?>" selected> <?php  echo $value; ?></option>
                            <?php }else{ ?>

                                <option value="<?php echo $key; ?>" > <?php  echo $value; ?></option>
                            
                            <?php } ?>
                                        
                                <?php  endforeach; ?>
                    </select>  
                    
                </div>

            </div>

            <br>

            <div class="col-12 dropdown-content" >
                <label> Re-order level :</label>
                <select name="level" id="level">

                    <?php 
                        
                        foreach ($levels as $key => $value) : ?>

                        <?php if(  $value == $detail->level ){ ?>
                           <!-- echo $level;  -->
                                <option value="<?php echo $value; ?>" selected><?php echo $value; ?></option>
                            
                        <?php }else{ ?>
                                 <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                        <?php }?>
                    <?php endforeach; ?>
                </select>
                
                
               
               
            </div>

            <div class="col-12">
                <label> Related sub-category :</label>

                <div class="input-group col-3">
                        <table border="0" class="table table-striped">
            
                            <?php foreach ($sub_category as $subcategories ): ?>
                                <?php if($subcategories['id'] == $detail->sub_category){  ?>
                                <tr>
                                        <td><input class="form-check-input" type="radio" value="<?php echo $subcategories['id']; ?>" name="sub_category" checked></td>
                                        <td><label><?php echo $subcategories['sub_cat_name']; ?></label></td>
                                    <?php }else{ ?>
                                        <td><input class="form-check-input" type="radio" value="<?php echo $subcategories['id']; ?>" name="sub_category"></td>
                                        <td><label><?php echo $subcategories['sub_cat_name']; ?></label></td>
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
                <input type="hidden" name="status" id="status" class="form-control" value="">
            </div>

            <div class="col-12">
                <label> Image of product :</label><br>
                <input type='file' name='image' id='image' size='20' />
                <img src="http://localhost/Supermarket1/upload/<?php echo $detail->image; ?>" >

            <br><br>
            <div class="col-12">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
            <br><br>

        </form>
    </div>
</body>
</html>

