<?php
require_once('../assets/php/connection.php');

$sql10="Select * from quick_service where notification_status=0";
$result10 = mysqli_query($con, $sql10);
$row_count10 =  mysqli_num_rows ($result10);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    

<div class="header">
    <div class="brand">
        <img class="img" src="../assets/img/RUS.png">

        <h3 class="brand">RUS</h3>
    </div>
    <div class="list">

        <a href="index.php"> Dashboard</a>
        <a href="order.php">Order <span class="notification" id="notify_icon"><?php
        echo $row_count10;
        ?>
        </span></a>
        <a href="#analytics">Analytics</a>
        <a href="#revenue">Revenue</a>
        <a href="#stats">Stats</a>
        <a href="customer.php">Customers</a>
        <a href="#vendors">Vendors</a>
    </div>
    <div class="acc_set">
        <a href="#settings">Settings</a>
        <a href="#account">Account</a>
        <a href="../assets/php/alogout.php">Logout</a>

    </div>
</div>
</div>
</body>

<script>
// $( document ).ready(function() {
       
//     $.ajax({
//         type: 'POST',
//         url: "../assets/php/notification.php",
        
//         dataType: "html",
//         success: function(resultData) {
            
//             $('#notify_icon').html(resultData);
//         }
//     });
// });
</script>
</html>