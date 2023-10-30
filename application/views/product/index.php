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
        <form action="http://localhost/Supermarket1/index.php/ProductController/addProduct/" method="POST" enctype="multipart/form-data">
      
            <div class="col-12">
                <h2 class="text-center">Product inserting form</h2>
            </div>
            
            <div class="col-12">
                <label > Product Name :</label>
                <input type="text" name="pro_name" id="pro_name" placeholder="Enter the product" class="form-control">
                
             </div>

            <div class="col-12">
                <label> Product ID :</label>
                <input type="text" name="pro_id" id="pro_id" placeholder="Enter the product ID" class="form-control">
            </div>

            <div class="col-12">
                <label> Retail Price :</label>
                <input type="text" name="retail_price" id="retail_price" placeholder="enter retail price" class="form-control">
            </div>

            <div class="col-12">
                <label> Selling Price :</label>
                <input type="text" name="selling_price" id="selling_price" placeholder="enter selling price" class="form-control">
            </div>

            <div class="col-12">
                <label> Description :</label>
                <input type="text" name="description" id="description" placeholder="category description" class="form-control">
            </div>


            <div class="row col-12">
                <div class="col-6">
                    <label> Quantity :</label>
                    <input type="text" name="quantity" id="quantity" placeholder="enter the quantity" class="form-control">
                </div>

                <div class="col-6">
                    <label for="unit">Unit:</label> <br>
                    <!-- <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Dropdown button</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">----------</a>
                            <a class="dropdown-item" href="#">gram(g)</a>
                            <a class="dropdown-item" href="#">kilo-gram(Kg)</a>
                            <a class="dropdown-item" href="#">mili-litter(ml)</a>
                            <a class="dropdown-item" href="#">litter(L)</a>
                        </div>
                    </div>    -->

                    <select name="u" id="u" class="form-control btn-secondary" >
                        <option value="-">--------</option>
                        <option value="g">gram(g)</option>
                        <option value="kg">kilo-gram(Kg)</option>
                        <option value="ml">mili-litter(ml)</option>
                        <option value="L">litter(L)</option>
                    </select>
                </div>

            </div>

            <br>

            <div class="col-12 dropdown-content">
                <label> Re-order level :</label>
                <select name="level" id="level">
                    <option value="15">15</option>
                    <option value="25">25</option>
                    <option value="40">40</option>
                    <option value="50">50</option>
                    <option value="50">75</option>
                </select>
               
            </div>

            <div class="col-12">
                <label> Related sub-category :</label>

                <div class="input-group col-3">
                        <table border="0" class="table table-striped">
            
                            <?php foreach ($cat1 as $key ): ?>
                                    
                                <tr>
                                    <td><input class="form-check-input" type="radio" value="<?php echo $key['id']; ?>" name="sub_category"></td>
                                    <td><label><?php echo $key['sub_cat_name']; ?></label></td>
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

            <br><br>
            <div class="col-12">
                <input type="submit" class="btn btn-primary" value="Add">
            </div>
            <br><br>

        </form>
    </div>
</body>
</html>

