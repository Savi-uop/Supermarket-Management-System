<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <link rel="stylesheet" href="http://localhost/SampleProject1/bootstrap/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }

    
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">

    <div class="col-sm-5 sidenav">
      <span><h2>Home</h2></span><br>
      <span><h4>Invoice</h4></span>
      
      <div class="input-group">
        <table class="table">
          <th>#</th>
          <th>Item</th>
          <th>price</th>
          <th>Qty</th>
          <th>Amount</th>

          <tr>
              <td>1</td>
              <td>Sunlight</td>
              <td>55.00</td>
              <td><input type="number"></td>
              <td>220.00</td>
          </tr>

          <tr>
              <td>2</td>
              <td>Maggi</td>
              <td>65.00</td>
              <td><input type="number"></td>
              <td>130.00</td>
          </tr>
          
          <tr>
              <td>3</td>
              <td>Highland ice cream 1L</td>
              <td>355.00</td>
              <td><input type="number"></td>
              <td>355.00</td>
          </tr>

          <tr>
              <td>4</td>
              <td>Samba rice 5kg</td>
              <td>720.00</td>
              <td><input type="number"></td>
              <td>720.00</td>
          </tr>
          
        

        </table>
        <div class="container row">
          <div class="col"></div>
          <div class="col"></div>
          <div class="col"></div>
          <div class="col"></div>
          <div class="col"><label><strong>Total amount </strong></label></div>
          <div class="col pull-right"><label><strong>  Rs.705.00</strong></label></div>
        </div>

      </div>
    </div>

    <div class="col-sm-2"><br>

      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search product..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
      <br>
      <div class form-control> 
        <button class="btn bg-primary">Search</button>
      </div>
    </div>

    <div class="col-sm-5">
      
        <div class="row">
            <div class="col btn jumbotron bg-info">
            <h3>BABY NEEDS</h3>
            </div>
            <div class="col btn jumbotron bg-warning">
            <h3>GROCERY</h3>
            </div>
            <div class="col btn jumbotron bg-success">
               <h3>DAIRY PRODUCTS</h3>
            </div>
        </div>
      
        <div class="row">
            <div class="col btn jumbotron bg-success">
               <h3>FRUITS & VEGETABLES</h3>
            </div>
            <div class="col btn jumbotron bg-danger">
            <h3>BEVERAGES</h3>
            </div>
            <div class="col btn jumbotron bg-warning">
            <h3>SNAKS & BISCUITS</h3>
            </div>
        </div>

        <div class="row">
        <div class="col btn jumbotron bg-danger">
            <h3>FISH & MEAT</h3>
            </div>
            <div class="col btn jumbotron bg-primary">
            <h3>BSPREADS & JAM</h3>
            </div>
            <div class="col btn jumbotron bg-success">
            <h3>STATIONARY</h3>
            </div>
        </div>

        <div class="row">
            <div class="col btn jumbotron bg-info">
            <h3>PERSONAL CARE</h3>
            </div>
            <div class="col btn jumbotron bg-warning">
            <h3>HOUSEHOLDING</h3>
            </div>
            <div class="col btn jumbotron bg-secondary">
            <h3>ELECTRIC</h3>
            </div>
        </div>
      
      
    </div>
  </div>
</div>

<footer class="container-fluid">
  <p>Footer Text</p>
</footer>

</body>
</html>
