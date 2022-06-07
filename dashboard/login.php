<?php
session_start();
if(!isset($_SESSION['useradmin']))
{
  
    header('Location:index.php');
}



require_once('../assets/php/connection.php');

$sql1="Select * from registration";
$result = mysqli_query($con, $sql1);
$row_count =  mysqli_num_rows ($result);

$sql2="Select * from login_service";
$result2 = mysqli_query($con, $sql2);
$row_count2 =  mysqli_num_rows ($result2);

$sql3="Select * from quick_service";
$result3 = mysqli_query($con, $sql3);
$row_count3 =  mysqli_num_rows ($result3);

$total_service_count=$row_count2+$row_count3;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&family=Ubuntu:ital,wght@0,700;1,500&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="index.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>

<body>


    <?php require_once('header.php');?>

    <div class="content" id="header">




        <div class="detail_cards" id="detail-cards">
            <div class="total_users">
                <h4>Total User</h4>
                <p> <?php echo $row_count;?></p>

            </div>
            <div class="total_services">
                <h4>Total Service</h4>
                <p><?php echo $total_service_count;?></p>
            </div>
            <div class="total_income">
                <h4>Total Income</h4>
                <p> Number</p>
            </div>
            <div class="total_expense">
                <h4>Total Expense</h4>
                <p> Number</p>
            </div>

        </div>
        <div class="middle_section">
            <div class="service_chart">
                <canvas id="myChart" style="max-width:600px"></canvas>
            </div>
            <div class="order_chart">
                <canvas id="my2Chart" style="max-width:600px"></canvas>
            </div>
        </div>
    </div>
</body>
<script src="script.js"></script>

</html>