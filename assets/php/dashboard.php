<?php
require_once('connection.php');

$sql6="Select * from registration";
$result = mysqli_query($con, $sql6);
$row_count =  mysqli_num_rows ($result);
?>