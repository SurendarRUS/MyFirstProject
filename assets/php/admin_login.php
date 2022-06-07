<?php 
session_start();
require_once('connection.php');
$username=$_POST['user'];
$pass=$_POST['pass'];
$sql1="Select * from admin_rus where username='$username' AND pass='$pass'";
// echo $sql1;die();
$result = mysqli_query($con, $sql1);
$row_count =  mysqli_num_rows ($result);
if($row_count==1)
{
    $_SESSION['useradmin']=$_POST['user'];
header('Location:../../dashboard/login.php');
}
else
{
    echo "please check username or password";
}


?>