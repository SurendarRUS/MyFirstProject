<?php
    session_start();

    require_once('connection.php');
    $fullname= $_SESSION['fname'].' '.$_SESSION['lname'];
    $email= $_SESSION['mail'];
    $phone_num= $_SESSION['phone'];
    $address= $_SESSION['address'];
    $pincode=$_SESSION['pincode'];

    $deviceselect=$_POST['deviceselect'];
    $brandname=$_POST['brandname'];
    $problemselect=$_POST['problemselect'];
    $problemdescription=$_POST['problemdescription'];

    $sql1 = "INSERT INTO login_service(full_name,email,phone,address_line,pincode,device,brand,problem,problem_desc)
VALUES ('$fullname', '$email', '$phone_num','$address','$pincode','$deviceselect','$brandname','$problemselect','$problemdescription')";

$result=mysqli_query($con, $sql1);

if($result){
    echo "Successs";
}
else{
    echo 'Check ';
}
?>