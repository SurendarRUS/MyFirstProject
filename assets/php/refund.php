<?php
require_once('connection.php');

$refund_name=$_POST["refund_name"];
$refund_id=$_POST["refund_id"];
$refund_mail=$_POST["refund_mail"];
$refund_phone=$_POST["refund_phone"];
$refund_msg=$_POST["refund_msg"];

if ($refund_name != "" && $refund_id != "" && $refund_mail != "" && $refund_phone != "" && $refund_msg != "") {
    $sql7 = "INSERT INTO refund_data(refund_name,refund_id,refund_mail,refund_phone,refund_msg)
    VALUES ('$refund_name', '$refund_id', '$refund_mail', '$refund_phone', '$refund_msg')";
    
if (mysqli_query($con, $sql7)) {
    // echo "redirect to succes page";
    header('Location: ../../index.php?submitalert=Submitted');
  } else {
    echo "Error: " . $sql7 . "<br>" . mysqli_error($con);
  }
  }
  mysqli_close($con);
  ?>