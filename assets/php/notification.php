<?php
require_once('../assets/php/connection.php');

$sql10="Select * from quick_service where notification_status=0";
$result10 = mysqli_query($con, $sql10);
$row_count10 =  mysqli_num_rows ($result10);

echo $row_count10;

?>