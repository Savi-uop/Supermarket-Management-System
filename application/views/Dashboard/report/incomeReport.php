
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

   <script type="text/javascript" src="https://gstatic.com/charts/loader.js"></script>
   
   <script type="text/javascript">
       google.charts.load('current',{'packages':['corechart']});
       google.charts.setOnLoadCallback(drawVisualization);


       function drawVisualization(){    
           
           var data1 = google.visualization.arrayToDataTable( [
               ['item', 'number'],
       <?php 
        foreach ($income as $row){
        echo "['".$row['date']."',".$row['amount']."],";
        }
        ?>
               ]);
           
           var options = {
               title : 'Income Report',
               vAxis : {title : 'Income'},
               hAxis : {title : 'Date'},
               seriesType : 'bars',
               series : {4 : {type : 'line'}}
           };
           var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
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
                        <h5 class="text-center"> Income Report :  
                        <?php 
                                echo $date1." to ".$date2;
                        ?>
                        </h5>
                    </div>
                    <div class="col pull-right"><button type="button" class="btn btn-outline-success btn-lg"><a href="http://localhost/Supermarket1/ReportController/IncomeReports/">Prev</a></button></div>
                </div>
            </span>
        </div>
        <?php if(empty($income)){ ?>
            <div class="card-body">
                <div class="alert alert-danger" role="alert">
                    <h4 class="text-lg-center text-danger">No Bills issued on this time period!</h4>
                </div>   
            </div>
            <?php }else{?>

            <div class="container col-10">
                <table class="table table-bordered align-center">
                    <tr>
                        
                        <!-- <th>Bill No</th> -->
                        <th>Date</th>
                        <th># of Items sold</th>

                        <th>Amount</th>
                        
                    </tr>

                    <?php foreach($income as $row): ?>
                        <tr>
                        
                            <td><?php echo $row['date']; ?></td>
                            <td><?php echo $row['quantity']; ?></td>
                            <td><?php echo $row['amount']; ?></td>
                            
                            
                        </tr>
                    <?php endforeach ?>
                            <tr class="table-secondary text-center">
                                <td colspan="2" class="text-right"><b>Amount</b></td>
                                <td class="text-left"><b><?php echo $total; ?></b></td>
                            </tr>
                </table>
            </div>
   </div>

   <!-- graph -->
   <div class="comtainer-fluid">
       <div class="card-body">
           <div id="chart_div" style ="width:1600px; height:800px;"></div>
       </div>
   </div>

   <!-- graph -->
   <?php } ?>
</body>
</html>