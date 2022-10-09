<?php
$con=mysqli_connect('localhost','root','','covidtmsdb');
mysqli_query($con,"UPDATE visit set total_count=total_count+1");

?>