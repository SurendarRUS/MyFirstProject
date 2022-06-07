<?php
$host="localhost";
$user="root";
$password="";
$db_name="rus";
$con=mysqli_connect($host,$user,$password,$db_name);
if($con) {
} else {
   echo '
MySQL Server is not connected
';
}
?>