<?php
require_once('connection.php');
//info
$info_id = $_POST['info_id'];
// echo $info_id;
// die();
$sql5="Select * from quick_service where qs_id='$info_id' ";

$result5 = mysqli_query($con, $sql5);
while($row = mysqli_fetch_array($result5)) {
    echo 'Address:'.' '.$row['address_line'];
    echo '<br>';
    echo 'mail:'.' '.$row['email'];
}



?>