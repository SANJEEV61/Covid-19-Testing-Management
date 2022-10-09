<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid-19 Cases State Wise</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="jumbotron text-center">
         <h1><b> State And District Wise Cases </b></h1> 
    </div>
    <form class="container col-md-4" action="covidapi.php" method="POST">
         <div class="form-group">
             <label><b>Enter The State:</b></label>
             <input type="text" name="state" class="form-control">
         </div>
         <div class="form-group">
             <label><b>Enter The District:</b></label>
             <input type="text" name="district" class="form-control">
         </div>
         <div class="form-group text-center">
             <button type="submit" name="submit" class="btn btn-info">Get Details</button>
         </div>
    </form>
</body>
</html>



<?php
$data = file_get_contents("https://data.covid19india.org/state_district_wise.json");

$corona = json_decode($data , true);

if(isset($_POST["submit"]))
{
    $state = $_POST["state"];
    $district = $_POST["district"];

    $state = ucfirst($state);
    $district = ucfirst($district);
?>

<div class="container col-md-4 m-auto">


<?php
    echo "Active :";
    echo ($corona[$state]['districtData'][$district]['active']);
    echo "<br><br>Confirmed :";
    echo ($corona[$state]['districtData'][$district]['confirmed']);
    echo "<br><br>Decreased :";
    echo ($corona[$state]['districtData'][$district]['deceased']);
}
?>
</div>