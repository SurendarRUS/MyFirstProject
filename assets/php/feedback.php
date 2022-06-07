<?php
require_once('connection.php');

$feedback_name=$_POST["feedback_name"];
$feedback_msg=$_POST["feedback_msg"];

if ($feedback_name != "" && $feedback_msg != "") {
    $sql2 = "INSERT INTO feedback(feedback_name,feedback_msg)
    VALUES ('$feedback_name', '$feedback_msg')";
if (mysqli_query($con, $sql2)) {
    // echo "redirect to succes page";
    header('Location: ../../index.php?submitalert=Submitted');
  } else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
  }
  }
  mysqli_close($con);
  ?>