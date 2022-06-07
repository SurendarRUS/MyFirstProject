<?php
require_once('connection.php');

$human_name=$_POST["human_name"];
$order_id=$_POST["Order_id"];
$help_message=$_POST["message_text"];

if($human_name!='' && $order_id!=''&&$help_message!=''){
    $sql1 = "INSERT INTO help(help_name,Order_id,help_message)
    VALUES ('$human_name', '$order_id', '$help_message')";
if (mysqli_query($con, $sql1)) {
    // echo "redirect to succes page";
    header('Location: ../../index.php?submitalert=Submitted');
  } else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($con);
  }
  }
  mysqli_close($con);
  ?>