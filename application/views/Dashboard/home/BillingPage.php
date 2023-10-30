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
    <script src="/Supermarket1/dist/js/jquery.js"></script>
   
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> -->
    
    <!-- client.js  -->
    <script src="<?php echo $base_url; ?>bootstrap/js/bootstrap.min.js"> </script>
    <script src="<?php echo $base_url; ?>dist/js/client.js"> </script>
    <script src="<?php echo $base_url; ?>dist/js/qty.js"> </script>
    <script src="<?php echo $base_url; ?>dist/js/pro_del.js"> </script>

</head>
<body>
<div class="container-fluid">
    <div class="row content">

        <div class="col-sm-6 sidenav">
            <div class="card text-left">
            <div class="card-header">
                <span><h2>S.K Family Shop</h2></span><br>
                <span>Login as a: <b><?php echo $user->username; ?> </b></span>
                <a href="<?php echo $base_url; ?>Auth/logout" > <button type="button" class="btn btn-danger">Log Out</button></a>
                <?php if($user->company == 'ADMIN') { ?>
                <a href="<?php echo $base_url; ?>productController/viewProduct" > <button type="button" class="btn btn-success">Dashbord</button></a>
                <?php } ?>
                <!-- Example single danger button -->
<div class="btn-group">
  
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
</div>
                
            </div>

            <div class="card-body">
                <span class="card-title"><h4>Invoice #<?php echo $billNo; ?></h4></span>
                <form action="#" method="POST" >
                    <table class="table table-hover">
                        <th style="width: 3%">#</th>
                        <th style="width: 50%">Item</th>
                        <th style="width: 10%">price</th>
                        <th style="width: 10%">Qty</th>
                        <th style="width: 10%">unit</th>
                        <th style="width: 15%">Amount(Rs)</th>
                       <?php foreach($billDetail as $key=>$row): ?>
                        <tr class="pointer qty-row" data-id="<?php echo $row['pro_id']; ?>" bill-id="<?php echo $billNo; ?>">
                            <td><?php echo $key+1; ?></td>
                            <td><?php echo $row['pro_name']; ?></td>
                            <td><?php echo number_format($row['unit_price'],2); ?></td>
                            <td>
                                <div class="input-group input-group-sm">
                                    
                                  <span class="badge badge-success" name="<?php echo $row['pro_id']; ?>"><?php echo $row['quantity']; ?></span>
                                  <!-- <div class="input-group-append">
                                    <span class="pointer qty-row" data-id="<?php echo $row['pro_id']; ?>" bill-id="<?php echo $billNo; ?>">
                                        <button class="btn btn-outline-secondary btn-sm" type="button" name="qty_<?php echo $row['pro_id']; ?>" id="<?php echo $row['pro_id']; ?>" data-toggle="modal">More
                                        </button>
                                    </span> 
                                  </div> -->
                                </div>
                                
                            </td>
                            <td><?php echo $row['unit']; ?></td>
                            <!-- <td><input type="number" name="<?php echo $row['pro_id']; ?>" value="<?php echo $row['quantity']; ?>"></td> -->
                            <td align="right"><?php echo number_format($row['unit_price']*$row['quantity'],2); ?></td>
                        </tr>

                        <?php endforeach; ?>
                    </table>
                </form>
                    <div class="card-footer text-left">
                        <div class="container row">
                            <div class="col-10">
                                <div class="col"><label><strong>Total Amount </strong></label></div>
                            </div>
                            <div class="col-2">
                            <div class="col pull-right"><label><strong>  Rs.<?php echo number_format($sum,2); ?></strong></label></div>
                            </div>
                        </div>
                    </div>
                    
                    
           <form action="<?php echo $base_url; ?>HomeController/billComplete/" method="POST">
                <div class="form-group">
                   <input type="hidden" name="sum_val" id="sum_val" value="<?php echo $sum; ?>" />
                   <input type="hidden" name="bill_no" id="bill_no" value="<?php echo $billNo; ?>" />
            
                

                <br>

                <div> 
                    <div class="row content">
                        <div class="col-4">
                            <select class="form-control" name="payment" id="payment">
                                <option value="cash" selected>Cash</option>
                                <option value="card">Card</option>
                            </select>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Bill Process">
                        <div class="col"><button type="button" class="btn btn-dark"><a href="http://localhost/Supermarket1/HomeController/adminBillpage">Hold Bill</a></button></div>
                    </div>
                </div>
                </div>
            </form>
                    
                
                    
            </div>
            </div>
        </div>

        <!-- <div class="col-sm-2"><br>
            <form action="http://localhost/Supermarket1/index.php/BillController/getProductsList/" method="POST">
                <div class="form-group">
                    <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search by bill number" name="bill_no" id="bill_no">
            
                    <span class="input-group-btn">
                        <span class="glyphicon glyphicon-search"></span>
                    </span>
                </div>

                <br>

                <div class form-control> 
                    <button class="btn bg-success align-center">Search</button>
                </div>
            </form>
        </div> -->

        <div class="col-sm-6 sidenav">
        <?php //var_dump($cat1); ?>
            <div class="card">
                <div class="card-header text-center">
                    <!-- <span><h2>|Main Categories|</h2></span><br> -->
                <div>
                
                <div class="card-body"> 
                    <div class="row">
                        <div class="col btn jumbotron bg-primary">
                            <h3><span class="pointer client-row" data-id="6"><button type="button" class="btn btn-lg btn-primary" name="baby" id="6" data-toggle="modal">BABY NEEDS</button></span></h3>
                        </div>
                        <div class="col btn jumbotron bg-warning">
                            <h3><span class="pointer client-row" data-id="13"><button type="button" class="btn btn-lg btn-warning" name="grocery" id="13" data-toggle="modal">GROCERY</button></span></h3>
                        </div>
                        <div class="col btn jumbotron bg-success">
                            <h3><span class="pointer client-row" data-id="12">
                                <button type="button" class="btn btn-lg btn-success" name="dairy" id="12" data-toggle="modal">DAIRY PRODUCTS</button>
                                </span> 
                            </h3>
                            
                        </div>
                    </div>
            
                    <div class="row">
                        <div class="col btn jumbotron bg-success">
                            <h3><span class="pointer client-row" data-id="9">
                                <button type="button" class="btn btn-lg btn-success" name="fruit" id="9" data-toggle="modal">FRUITS & VEGETABLES</button>
                                </span> 
                            </h3>
                            
                        </div>
                        <div class="col btn jumbotron bg-danger">
                            <h3><span class="pointer client-row" data-id="5">
                                <button type="button" class="btn btn-lg btn-danger" name="beverages" id="5" data-toggle="modal">BEVERAGES</button>
                                </span> 
                            </h3>
                            
                        </div>
                        <div class="col btn jumbotron bg-warning">
                            <h3><span class="pointer client-row" data-id="7">
                                <button type="button" class="btn btn-lg btn-warning" name="snak" id="7" data-toggle="modal">SNAKS & BISCUITS</button>
                                </span> 
                            </h3>
                            
                        </div>
                    </div>

                    <div class="row">
                        <div class="col btn jumbotron bg-danger">
                            <h3><span class="pointer client-row" data-id="10">
                                <button type="button" class="btn btn-lg btn-danger" name="fish" id="10" data-toggle="modal">FISH & MEAT</button>
                                </span> 
                            </h3>
                            
                        </div>
                        <div class="col btn jumbotron bg-primary">
                            <h3><span class="pointer client-row" data-id="16">
                                <button type="button" class="btn btn-lg btn-primary" name="spread" id="16" data-toggle="modal">SPREADS & JAM</button>
                                </span> 
                            </h3>
                            
                        </div>
                        <div class="col btn jumbotron bg-success">
                            <h3><span class="pointer client-row" data-id="15">
                                <button type="button" class="btn btn-lg btn-success" name="stationary" id="15" data-toggle="modal">STATIONARY</button>
                                </span> 
                            </h3>
                            
                        </div>
                    </div>

                    <div class="row">
                        <div class="col btn jumbotron bg-info">
                            <h3><span class="pointer client-row" data-id="8">
                                <button type="button" class="btn btn-lg btn-info" name="personal" id="8" data-toggle="modal">PERSONAL CARE</button>
                                </span> 
                            </h3>
                            
                        </div>
                        <div class="col btn jumbotron bg-warning">
                            <h3><span class="pointer client-row" data-id="11">
                                <button type="button" class="btn btn-lg btn-warning" name="household" id="11" data-toggle="modal">HOUSEHOLDINGS</button>
                                </span> 
                            </h3>
                            
                        </div>
                        <div class="col btn jumbotron bg-secondary">
                            <h3><span class="pointer client-row" data-id="17">
                                <button type="button" class="btn btn-lg btn-secondary" name="electric" id="17" data-toggle="modal">ELECTRIC</button>
                                </span> 
                            </h3>
                            
                        </div>
                    </div>
                </div>
                
            </div>
        
        </div>  <!--end of tile set -->
  </div>
</div>

<!-- Qunty change Modals -->

<!-- Modal -->
<div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" id="edit-qty-modal">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalheader">Change Quantity</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div id="errId" class="alert alert-danger d-none" role="alert">
                  Over the quntity limit ! <br />
                 Curent Limit is : <span id="Qlimit"></span>
            </div>
        <form name="edit-qty-form" method="post" id="edit-qty-form">
            
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-9">
                  <div class="badge badge-success text-wrap" id="productName" style="width: 12rem;">
                    This text should wrap.
                  </div>
                </div>
                
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Quantity</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="qty" name="qty" value="">
                </div>
                <input type="hidden" class="form-control" id="bid" name="bid" value="">
                <input type="hidden" class="form-control" id="pid" name="pid" value="">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <button type="submit" class="btn btn-danger" id="delete-product">Delete</button>
        <button type="submit" class="btn btn-primary" id="save-qty">Update</button>
        
      </div>
    </div>
  </div>
</div>







<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="edit-qty-modal222">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
              
              <form>
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword">
                </div>
              </div>
            </form>

            </div>
        </div>
    </div>
    
    <!-- end modals -->


<div class="container">
            
            
    
        <!-- /// models Baby needs area -->
              <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="edit-client-modal">
              <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><b>BABY NEEDS </b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    
                  <table id="quote" class="table sortable table-hover">
                   <thead>
                        <tr><th>ID</th><th>Product.Name</th></tr>
                    </thead>
                    <?php foreach($product as $row): ?>
                        <tbody>
                        <tr class="pointer product-row" data-id="<?php echo $row['id']; ?>" bid="<?php echo $billNo; ?>">
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['pro_name']; ?></td>
                           
                        </tr>
                        </tbody>
                    <?php endforeach; ?>
                    </table>
                        
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Understood</button> -->
                  </div>
                </div>
              </div>
            </div>
        <!-- end modal area -->
        

        
    <!-- // grocery modal area -->
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="grocery-modal">
              <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><b>GROCERY </b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    
                  <table id="quote" class="table sortable table-hover">
                   <thead>
                        <tr><th>ID</th><th>Product.Name</th></tr>
                    </thead>
                    <?php foreach($grocery as $row): ?>
                        <tbody>
                        <tr class="pointer product-row" data-id="<?php echo $row['id']; ?>" bid="<?php echo $billNo; ?>">
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['pro_name']; ?></td>
                           
                        </tr>
                        </tbody>
                    <?php endforeach; ?>
                    </table>
                        
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Understood</button> -->
                  </div>
                </div>
              </div>
            </div>
    
        
    
    <!-- dairy Modals -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="dairy-modal">
              <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><b>DAIRY PRODUCTS </b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    
                  <table id="quote" class="table sortable table-hover">
                   <thead>
                        <tr><th>ID</th><th>Product.Name</th></tr>
                    </thead>
                    <?php foreach($dairy as $row): ?>
                        <tbody>
                        <tr class="pointer product-row" data-id="<?php echo $row['id']; ?>" bid="<?php echo $billNo; ?>">
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['pro_name']; ?></td>
                           
                        </tr>
                        </tbody>
                    <?php endforeach; ?>
                    </table>
                        
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Understood</button> -->
                  </div>
                </div>
              </div>
            </div>
    
    
    <!-- fruit Modals -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="fruit-modal">
              <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><b>FRUITS & VEGETABLES </b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    
                  <table id="quote" class="table sortable table-hover">
                   <thead>
                        <tr><th>ID</th><th>Product.Name</th></tr>
                    </thead>
                    <?php foreach($fruit as $row): ?>
                        <tbody>
                        <tr class="pointer product-row" data-id="<?php echo $row['id']; ?>" bid="<?php echo $billNo; ?>">
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['pro_name']; ?></td>
                           
                        </tr>
                        </tbody>
                    <?php endforeach; ?>
                    </table>
                        
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Understood</button> -->
                  </div>
                </div>
              </div>
            </div>
    
    <!-- beverages Modals -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="beverages-modal">
              <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><b>BEVERAGES </b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    
                  <table id="quote" class="table sortable table-hover">
                   <thead>
                        <tr><th>ID</th><th>Product.Name</th></tr>
                    </thead>
                    <?php foreach($beverages as $row): ?>
                        <tbody>
                        <tr class="pointer product-row" data-id="<?php echo $row['id']; ?>" bid="<?php echo $billNo; ?>">
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['pro_name']; ?></td>
                           
                        </tr>
                        </tbody>
                    <?php endforeach; ?>
                    </table>
                        
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Understood</button> -->
                  </div>
                </div>
              </div>
            </div>
    
    <!-- snak Modals -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="snak-modal">
              <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><b>SNAKS & BISCUITS  </b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    
                  <table id="quote" class="table sortable table-hover">
                   <thead>
                        <tr><th>ID</th><th>Product.Name</th></tr>
                    </thead>
                    <?php foreach($snak as $row): ?>
                        <tbody>
                        <tr class="pointer product-row" data-id="<?php echo $row['id']; ?>" bid="<?php echo $billNo; ?>">
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['pro_name']; ?></td>
                           
                        </tr>
                        </tbody>
                    <?php endforeach; ?>
                    </table>
                        
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Understood</button> -->
                  </div>
                </div>
              </div>
            </div>
    
    <!-- fish Modals -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="fish-modal">
              <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><b>FISH & MEAT  </b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    
                  <table id="quote" class="table sortable table-hover">
                   <thead>
                        <tr><th>ID</th><th>Product.Name</th></tr>
                    </thead>
                    <?php foreach($fish as $row): ?>
                        <tbody>
                        <tr class="pointer product-row" data-id="<?php echo $row['id']; ?>" bid="<?php echo $billNo; ?>">
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['pro_name']; ?></td>
                           
                        </tr>
                        </tbody>
                    <?php endforeach; ?>
                    </table>
                        
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Understood</button> -->
                  </div>
                </div>
              </div>
            </div>
    
    <!-- spread Modals -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="spread-modal">
              <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><b>SPREADS & JAM  </b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    
                  <table id="quote" class="table sortable table-hover">
                   <thead>
                        <tr><th>ID</th><th>Product.Name</th></tr>
                    </thead>
                    <?php foreach($spread as $row): ?>
                        <tbody>
                        <tr class="pointer product-row" data-id="<?php echo $row['id']; ?>" bid="<?php echo $billNo; ?>">
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['pro_name']; ?></td>
                           
                        </tr>
                        </tbody>
                    <?php endforeach; ?>
                    </table>
                        
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Understood</button> -->
                  </div>
                </div>
              </div>
            </div>
    
    
    <!-- stationary Modals -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="stationary-modal">
              <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><b>STATIONARY  </b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    
                  <table id="quote" class="table sortable table-hover">
                   <thead>
                        <tr><th>ID</th><th>Product.Name</th></tr>
                    </thead>
                    <?php foreach($stationary as $row): ?>
                        <tbody>
                        <tr class="pointer product-row" data-id="<?php echo $row['id']; ?>" bid="<?php echo $billNo; ?>">
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['pro_name']; ?></td>
                           
                        </tr>
                        </tbody>
                    <?php endforeach; ?>
                    </table>
                        
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Understood</button> -->
                  </div>
                </div>
              </div>
            </div>
    
    <!-- personal Modals -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="personal-modal">
              <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><b>PERSONAL CARE   </b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    
                  <table id="quote" class="table sortable table-hover">
                   <thead>
                        <tr><th>ID</th><th>Product.Name</th></tr>
                    </thead>
                    <?php foreach($personal as $row): ?>
                        <tbody>
                        <tr class="pointer product-row" data-id="<?php echo $row['id']; ?>" bid="<?php echo $billNo; ?>">
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['pro_name']; ?></td>
                           
                        </tr>
                        </tbody>
                    <?php endforeach; ?>
                    </table>
                        
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Understood</button> -->
                  </div>
                </div>
              </div>
            </div>
    
   
    <!-- household Modals -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="household-modal">
              <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><b>HOUSEHOLDINGS</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    
                  <table id="quote" class="table sortable table-hover">
                   <thead>
                        <tr><th>ID</th><th>Product.Name</th></tr>
                    </thead>
                    <?php foreach($household as $row): ?>
                        <tbody>
                        <tr class="pointer product-row" data-id="<?php echo $row['id']; ?>" bid="<?php echo $billNo; ?>">
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['pro_name']; ?></td>
                           
                        </tr>
                        </tbody>
                    <?php endforeach; ?>
                    </table>
                        
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Understood</button> -->
                  </div>
                </div>
              </div>
            </div>
    
    
    <!-- electric Modals -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="electric-modal">
              <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><b>ELECTRIC</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    
                  <table id="quote" class="table sortable table-hover">
                   <thead>
                        <tr><th>ID</th><th>Product.Name</th></tr>
                    </thead>
                    <?php foreach($electric as $row): ?>
                        <tbody>
                        <tr class="pointer product-row" data-id="<?php echo $row['id']; ?>" bid="<?php echo $billNo; ?>">
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['pro_name']; ?></td>
                           
                        </tr>
                        </tbody>
                    <?php endforeach; ?>
                    </table>
                        
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Understood</button> -->
                  </div>
                </div>
              </div>
            </div>
    
    <!-- warning Modals -->
    
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="electric-modal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                Ohh No Product Please select others
            </div>
        </div>
    </div>
    
  
</div>
</body>
</html>