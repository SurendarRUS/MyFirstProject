<?php
require_once('connection.php');
date_default_timezone_set('Asia/Kolkata');
$date=date('Y-m-d H:i:s');
$fullname = $_POST['fullname'];
$email = $_POST['mail'];
$phone_num=$_POST['phonenum'];
$address=$_POST['address'];
$pincode=$_POST['pincode'];
$deviceselect=$_POST['deviceselect'];
$brandname=$_POST['brandname'];
$problemdescription=$_POST['problemdescription'];
// echo ($fullname);
// die();
if($fullname!='' && $email!=''&&$phone_num!=''&&$address!='' &&$pincode!=''&&$deviceselect!=''&&$brandname!=''&&$problemdescription!=''){
$sql = "INSERT INTO quick_service(c_date,full_name,email,phone,address_line,pincode,device,brand,problem_desc)
VALUES ('$date','$fullname', '$email', '$phone_num','$address','$pincode','$deviceselect','$brandname','$problemdescription')";

if (mysqli_query($con, $sql)) {
  // echo "redirect to succes page";
  header('Location: ../../index.php?submitalert=Submitted');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}
mysqli_close($con);
?>