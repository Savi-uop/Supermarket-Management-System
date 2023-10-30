<html>
<head>
  <title>How to Implement Google bar Chart using Codeigniter - XpertPhp</title>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
  <script type="text/javascript">
      google.charts.load('visualization', "1", {
          packages: ['corechart']
      });
  </script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://localhost/Supermarket1/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/Supermarket1/bootstrap/css/custom.css">
    
</head>
<body>
<div id="bar_date_wise" style="width: 900px; height: 500px; margin: 0 auto"></div>
<script language="JavaScript">
  // Draw the Bar chart 
  google.charts.setOnLoadCallback(barChart);   
    // for year wise
  function barChart() {
 
    /* Define the chart to be drawn.*/
    var data = google.visualization.arrayToDataTable([
        ['item', 'number'],
        <?php 
         foreach ($chart_data as $row){
         echo "['".$row['pro_name']."',".$row['quantity']."],";
         }
         ?>
    ]);
    var options = {
        title: 'Annual sold items List',
        vAxis : {title : 'products'},
        hAxis : {title : '# of items'},
        seriesType : 'bars',
        is3D: true,
    };
    /* Instantiate and draw the chart.*/
    var chart = new google.visualization.BarChart(document.getElementById('bar_date_wise'));
    chart.draw(data, options);
  }
</script>

</body>
</html>