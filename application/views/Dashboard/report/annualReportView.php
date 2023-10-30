


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

    <!-- jquery -->
    <script src="/Supermarket1/dist/js/jquery.js"></script>
    
    <script type="text/javascript" src="https://gstatic.com/charts/loader.js"></script>
    
    <script type="text/javascript">
        google.charts.load('current',{'packages':['corechart']});
        google.charts.setOnLoadCallback(drawVisualization);

                // ['products','id', '#'],
                // ['jam', 12, 45],
                // ['mango',3,100],
                // ['milk pack',13,50]

        function drawVisualization(){    
            
            var data1 = google.visualization.arrayToDataTable( [
                ['item', 'number'],
        <?php 
         foreach ($sold_items as $row){
         echo "['".$row['pro_name']."',".$row['quantity']."],";
         }
         ?>
                ]);
            
            var options = {
                title : 'Anual sold Item List',
                vAxis : {title : 'number'},
                hAxis : {title : 'products'},
                seriesType : 'bars',
                series : {4 : {type : 'line'}}
            };
            var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
            chart.draw(data1,options);

        }
    </script>

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
                        <h5 class="text-center"> Annual Sales of   
                        <?php 
                                echo " ".$year;
                        ?>
                        </h5>
                    </div>
                    <div class="col pull-right"><button type="button" class="btn btn-outline-success btn-lg"><a href="http://localhost/Supermarket1/ReportController/SalesReports/">Prev</a></button></div>
                </div> 
            </span>
        </div>

        <?php if(empty($sold_items)){ ?>
            <div class="card-body">
                <div class="alert alert-danger" role="alert">
                    <h4 class="text-lg-center text-danger">No Records Found on this year!</h4>
                </div>   
            </div>
            <?php }else{?>
                <div class="container">
                    <table class="table table-bordered align-middle" >
                        <tr>
                            
                            <th>Date</th>
                            <th>Product Id</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Amount</th>
                            
                        </tr>

                        <?php foreach($sold_items as $row): ?>
                            <tr>
                            
                                <!-- <td><?php //echo $year;  ?></td>  -->
                                <td><?php echo $row['added_date']; ?></td>
                                <td><?php echo $row['pro_id']; ?></td>
                                <td><?php echo $row['pro_name']; ?></td>
                                <td><?php echo $row['quantity']; ?></td>
                                <td><?php echo $row['amount']; ?></td>
                                
                                
                            </tr>
                        <?php endforeach ?>
                    </table>
                </div>    
    </div>

    <div class="comtainer-fluid">
        <div class="card-body">
            <div id="chart_div" style ="width:1600px; height:750px;"></div>
        </div>
    </div>

    <?php } ?>
</body>
</html>