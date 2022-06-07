<?php
    session_start();

require_once('connection.php');
$loginid=$_POST['login_id'];
$pswd=$_POST['login_pswd'];
$sql="Select * from registration where (phone='$loginid' OR email='$loginid') AND passwd='$pswd'";
$result = mysqli_query($con, $sql);
$row_count =  mysqli_num_rows ($result);

if($row_count==1){
    $_SESSION['user_name']=$loginid;
    header('Location: ../../homepage.php');
}
else{
    echo 'does not exist';
}
?>