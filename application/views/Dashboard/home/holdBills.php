<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S.K Family Shop</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>bootstrap/css/custom.css">
    <!-- jQuery -->
    <!-- <script src="/Supermarket1/dist/js/jquery.min.js"></script> -->
    <script src="<?php echo $base_url; ?>dist/js/jquery.js"></script>
   
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> -->
    
    <!-- client.js  -->
    <script src="<?php echo $base_url; ?>bootstrap/js/bootstrap.min.js"> </script>
    <script src="<?php echo $base_url; ?>dist/js/client.js"> </script>


</head>
<body>
<div class="container-fluid">
    <div class="row content">
         <div class = "col-sm-12">
             
             <a href="<?php echo $base_url; ?>Auth/logout" > <button type="button" class="btn btn-danger">LOGOUT</button></a>
             
         </div>
        <div class="col-sm-12 sidenav">
            <div class="card text-center">
            <div class="card-header">
                <span><h2>S.K Family Shop</h2></span><br>
                <span>Login as a: <b><?php echo ucfirst($user->username); ?> </b> </span><br>
            </div>
                
            </div>
            
        </div>

        <div class="col-sm-4"><br>
            <form action="<?php echo $base_url; ?>index.php/BillController/getProductsList/" method="POST">
                <div class="form-group">
                    <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search by bill number" name="bill_no" id="bill_no">
                   
                    <span class="input-group-btn">
                    <!-- <button class="btn btn-default" type="button"> -->
                        <span class="glyphicon glyphicon-search"></span>
                    <!-- </button> -->
                    </span>
                </div>

                <br>

                <div class form-control> 
                    <button class="btn bg-success align-center">Search</button>
                </div>
            </form>
        </div>
        
        <div class="col-sm-4"><br>
            <a href="<?php echo $base_url; ?>HomeController/DashBord" class="btn btn-lg btn-info float-right">New Bill</a>
        </div>
        
        <div class="col-sm-4"><br>
            <a href="<?php echo $base_url; ?>HomeController/getHoldBills" class="btn btn-lg btn-warning float-left">Hold Bills</a>
        </div>

        <!-- hold bills viewing here -->
        <?php if(!empty($pending_bill)){ ?>
        <div class="container">
            <div class="row">
                <span class="badge badge-pill badge-success"><h5>Hold-Bill Details</h5></span>
            </div>
            <div class="col-10">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Bill No</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <?php foreach($pending_bill as $key=>$row): ?>
                        <tr>
                            <td><?php echo $key+1; ?></td>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php  echo $row['date'];?></td>
                            <td>
                                <button type="button" class="btn btn-info"><a href="<?php echo $base_url;?>/HomeController/Dashboard1/<?php echo $row['id']; ?>">Continue</a></button>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </table>
            </div>
        </div>
        <?php }?>

</body>
</html>