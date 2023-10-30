


 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S.K.Family Shop </title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://localhost/Supermarket1/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/Supermarket1/bootstrap/css/custom.css">

</head>
<body>
    <div class="container-fluid">
        <div>
            <div class="card-header"> 
                <h4>S.K Family Shop</h4>
            </div>
        </div>

        <div class="contentainer">
            <span class="card-body"> 
                <div class="row">
                <div class="col"></div>
                    <div class="col">
                        <h5 class="text-center"> Stock out products list :  
                        <?php 
                                echo $date;
                        ?>
                        </h5>
                    </div>
                    <div class="col pull-right"><button type="button" class="btn btn-outline-success btn-lg"><a href="http://localhost/Supermarket1/ReportController/">Prev</a></button></div>
                </div>
            </span>
        </div>
        <div class="container">
            <table class="table table table-bordered" align="center">
                <tr>
                    <th>Product Id</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Re-Order level</th>
                    
                    
                </tr>

                <?php foreach($outOfStock as $row): ?>
                    <?php 
                        if($row['quantity'] == 0){?>
                            <tr class="table-danger">
                        <?php }else{ ?> <tr>
                        <?php } ?>
                
                        
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['pro_name']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                        <td><?php echo $row['level']; ?></td>
                        
                        
                    </tr>
                <?php endforeach ?>
            </table>
        </div>    
    </div>
</body>
</html>