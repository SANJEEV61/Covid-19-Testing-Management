<?php
try{
    $con=new PDO ("mysql:host=localhost;dbname=covidtmsdb","root","");
}
catch(PDOException $e)
{
    echo $e->getMessage();
}

$sql="SELECT count(State) as tcount,State FROM tblpatients GROUP BY State";

$stmt=$con->prepare($sql);
$stmt->execute();
$arr=$stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Test', 'Test per State'],
          <?php foreach($arr as $key=>$val){?>
          ['<?php echo $val['State']?>', <?php echo $val['tcount']?>],
          <?php }?>
         
        ]);

        var options = {
          title: 'StateWise Covid Testing',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
   <center><div id="donutchart" style="width: 900px; height: 400px;"></div></center>
  </body>
</html>