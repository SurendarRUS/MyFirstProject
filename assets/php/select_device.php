<?php
require_once('connection.php');
$device_type=$_POST['device'];
$sql1="Select * from select_device where device='$device_type'";
// echo ($sql1);
// die();
$result = $con->query($sql1);

while($row = mysqli_fetch_assoc($result)) {
    echo "<option>";
    echo $row['brand'];
    echo "</option>";
  }
?>