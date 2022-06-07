<?php
    session_start();

require_once('assets/php/connection.php');
$name=$_SESSION['user_name'];

$sql1="Select * from registration where email='$name' OR phone='$name'";
$result = mysqli_query($con, $sql1);

while ($row = $result->fetch_assoc()) {
    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RUS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&family=Ubuntu:ital,wght@0,700;1,500&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/400media.css">
    <link rel="stylesheet" href="assets/css/600media.css">
    <link rel="stylesheet" href="assets/css/767media.css">
    <link rel="stylesheet" href="assets/css/900media.css">
    <link rel="stylesheet" href="assets/css/1300media.css">
</head>

<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <div class="logo_brand">
                <img clsss="navbar-brand" src="assets/img/RUS.png" alt="" style="max-width:80px;">
                <h3 class="navbar-brand" style="padding-top:10px">RUS</h3>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"> <a class="nav-link active" aria-current="page" href="#"> Home</a> </li>
                    <li class="nav-item"> <a class="nav-link" aria-current="page" href="#empty"> Our Services</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#contact" tabindex="-1"
                            aria-disabled="true">Contact</a> </li>
                    <li class="nav-item"> <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">
                            Products</a> </li>
                </ul>

            </div>
            <div class="nav_list" id="">
                <ul class="navbar-nav ">
                    <li> <a class="nav-link active" aria-current="page" href="#"> <i class="fas fa-home-lg-alt"></i>
                        </a> </li>
                    <li> <a class="nav-link" aria-current="page" href="#empty"> <i class="fas fa-cubes"></i></a> </li>
                    <li> <a class="nav-link" href="#contact" tabindex="-1" aria-disabled="true"><i
                                class="fas fa-phone-alt"></i></a> </li>
                    <li> <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">
                            <i class="fas fa-store-alt"></i></a> </li>
                </ul>

            </div>
            <button class="login" id="loginid" onclick="log()"><a href='#login-pop'><?php echo $row['first_name']."<br>";
        $_SESSION['fname']=$row['first_name'];
        $_SESSION['lname']=$row['last_name'];
        $_SESSION['mail']=$row['email'];
        $_SESSION['phone']=$row['phone'];
        $_SESSION['address']=$row['address_line'];
        $_SESSION['pincode']=$row['pincode'];
         
        }?></a></button>
        
        </div>
    </nav>
    <div id='top'>
        <p style="margin-top:2em;"> </p>
    </div>
    <!-- loginpage -->
    
    <div class="profile-pop">
        <div class="profile-container">
            <a href="#" class="edit">Edit Profile</a>
            <a href="#" class="track_status">Track your Order</a>
            <a href="#" class="settings">settings</a>
            <a class="btn btn-danger" href="assets/php/logout.php">Logout</a>

        </div>
    </div>

    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000"> <img src="assets/img/label1.png"
                    class="d-block w-100" alt="..." style="max-width:1300px;max-height:100px;">
                <!-- <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div> -->
            </div>
            <div class="carousel-item" data-bs-interval="3000"> <img src="assets/img/label2.png" class="d-block w-100"
                    alt="..." style="max-width:1300px;max-height:100px;">
                <!-- <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div> -->
            </div>
            <div class="carousel-item"> <img src="assets/img/label3.png" class="d-block w-100" alt="..."
                    style="max-width:1300px;max-height:100px;">
                <!-- <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div> -->
            </div>
        </div>
        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span
                class="visually-hidden">Previous</span> </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span> <span
                class="visually-hidden">Next</span> </button> -->
    </div>
    
    <!-- loginpage-end -->
    <div class="top_section">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/computer.png" class="d-block w-100" style="max-width:550px;max-height:475px;"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/laptop.png" class="d-block w-100" style="max-width:550px;max-height:475px;"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/computer.png" class="d-block w-100" style="max-width:550px;max-height:475px;"
                        alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="qscard">
            <div class="card-header bg-primary">
                <h3>Service</h3>
            </div>
            <div class="card-body">
                <form action="assets/php/login_service.php" method="POST">

                    <div class="select">
                        <div class="form-group">
                            <select class="formcontrol" id="deviceselect" name="deviceselect" required>
                                <option value='Select Device'>Select Device</option>
                                <option value="desktop">Desktop Monitor</option>
                                <option value="desktop">CPU</option>
                                <option value="mobile">SMPS</option>
                                <option Value="laptop">Laptop</option>
                                <option value="power">UPS</option>
                                <option value="tv">LED Tv</option>
                                <option value="tv">LCD TV</option>
                                <option value="av">Speaker</option>
                                <option value="av">Soundbar</option>
                                <option value="av">Woofer</option>
                                <option value="av">Bluetooth Speaker</option>
                                <option value="power">Inverter</option>
                                <option value="power">Stabilizers</option>
                                <option value="av">Amplifier</option>
                                <option value="av">DVD Player</option>
                            </select>

                        </div>
                        <div class="form-group">

                            <!-- <select class="formcontrol2" id="brandname" name="brandname" required>
                                <option>Brand</option>
                                <option>Acer</option>
                                <option>Lenovo</option>
                                <option>Asus</option>
                                <option>hp</option>
                                <option>Toshiba</option>
                                <option>Compaq</option>
                                <option>Samsung</option>
                            </select> -->
                            <select class="formcontrol2" id="brandname" name="brandname" required>

                            </select>

                        </div>
                    </div>
                    <div class="form-group">
                        <select class="formcontrol2" id="problemselect" name="problemselect" required>
                            <option>Select Problem</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="problemdescription" name="problemdescription" rows="3"
                            placeholder="Describe the problem briefly"></textarea>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Do you Agree our <a href="http://"
                                target="_blank">Privacy Statement</a> ?</label>
                    </div>
                    <div class="qs_btn">
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="service_process">
        <div class="process_header">
            <h3>OUR SERVICE PROCESS</h3>
            <div class="line"></div>
        </div>
        <div class="process_icons">

            <i class="far fa-diagnoses"><br><span>Diagnose</span> </i>
            <i class="fas fa-arrow-right"></i>
            <i class="fal fa-money-check-edit"><br> <span>Quotation</span></i>
            <i class="fas fa-arrow-right"></i>
            <i class="far fa-toolbox"><br> <span>Repair</span></i>
            <i class="fas fa-arrow-right"></i>
            <i class="fal fa-badge-check"><br> <span>QC</span></i>
            <i class="fas fa-arrow-right"></i>
            <i class="fal fa-truck-loading"><br> <span>Delivery</span></i>
        </div>
    </div>
    <div id="empty">

    </div>


    <div class="ourservice">
        <h3 id="service_section">Our Services</h3>
        <div class="line1"></div>
    </div>
    <div class="slate-group">
        <div class="slate_panel">
            <div class="slate1">

                <ul class="slate-text">
                    <li><i class="fad fa-chevron-right"></i> Display Change</li>
                    <li><i class="fad fa-chevron-right"></i> No Power On</li>
                    <li><i class="fad fa-chevron-right"></i> Blue Screen Error</li>
                    <li><i class="fad fa-chevron-right"></i> HardDisk Failure</li>
                    <li><i class="fad fa-chevron-right"></i> Heat Problem</li>
                </ul>
                <ul class="slate-text">
                    <li><i class="fad fa-chevron-right"></i> Peripheral Changes</li>
                    <li><i class="fad fa-chevron-right"></i> Mother Board Service</li>
                    <li><i class="fad fa-chevron-right"></i> OS Installation</li>

                </ul>


            </div>
            <div class="slate_img">
                <img src="assets/img/computer.png" style="max-width:250px;max-height:175px;" alt="">
                <h5 class="slate-title">Desktop Computer</h5>

            </div>
        </div>
        <div class="slate_panel">
            <div class="slate_img">
                <img src="assets/img/laptop.png" style="max-width:250px;max-height:175px;" alt="">
                <h5 class="slate-title">Laptop Computer</h5>

            </div>
            <div class="slate2">
                <p>We will be handling laptop brand that we specified<br> at the bottom for various problems.</p>
                <ul class="slate-text">
                    <li><i class="fad fa-chevron-right"></i> Display Change</li>
                    <li><i class="fad fa-chevron-right"></i> Hinge Replacement</li>
                    <li><i class="fad fa-chevron-right"></i> No Power On</li>
                    <li><i class="fad fa-chevron-right"></i> Blue Screen Error</li>
                    <li><i class="fad fa-chevron-right"></i> HardDisk Failure</li>
                    <li><i class="fad fa-chevron-right"></i> Heat Problem</li>
                </ul>
                <ul class="slate-text">
                    <li><i class="fad fa-chevron-right"></i> Peripheral Changes</li>
                    <li><i class="fad fa-chevron-right"></i> Mother Board Service</li>
                    <li><i class="fad fa-chevron-right"></i> OS Installation</li>
                    <li><i class="fad fa-chevron-right"></i> Skin Change</li>

                </ul>
            </div>

        </div>
        <div class="slate_panel">
            <div class="slate3">
                <ul class="slate-text">
                    <li><i class="fad fa-chevron-right"></i> Display Change</li>
                    <li><i class="fad fa-chevron-right"></i> Hinge Replacement</li>
                    <li><i class="fad fa-chevron-right"></i> No Power On</li>
                    <li><i class="fad fa-chevron-right"></i> Blue Screen Error</li>
                    <li><i class="fad fa-chevron-right"></i> HardDisk Failure</li>
                    <li><i class="fad fa-chevron-right"></i> Heat Problem</li>
                </ul>
                <ul class="slate-text">
                    <li><i class="fad fa-chevron-right"></i> Peripheral Changes</li>
                    <li><i class="fad fa-chevron-right"></i> Mother Board Service</li>
                    <li><i class="fad fa-chevron-right"></i> OS Installation</li>
                    <li><i class="fad fa-chevron-right"></i> Skin Change</li>

                </ul>

            </div>
            <div class="slate_img">
                <img src="assets/img/lcdtv.png" style="max-width:250px;max-height:175px;" alt="">
                <h5 class="slate-title">Television</h5>

            </div>
        </div>
        <div class="slate_panel">
            <div class="slate_img">
                <img src="assets/img/inverter.png" style="max-width:250px;max-height:175px;" alt="">
                <h5 class="slate-title">Power Supplies</h5>

            </div>
            <div class="slate4">
                <ul class="slate-text">
                    <li><i class="fad fa-chevron-right"></i> Server SMPS</li>
                    <li><i class="fad fa-chevron-right"></i> Industrial Power Supplies</li>
                    <li><i class="fad fa-chevron-right"></i> Medical Power SUpply</li>
                    <li><i class="fad fa-chevron-right"></i> Adapters</li>
                    <li><i class="fad fa-chevron-right"></i> Stabilizers</li>
                </ul>
                <ul class="slate-text">
                    <li><i class="fad fa-chevron-right"></i> Inverters
                        <ul class="subcard-text">
                            <li><i class="fad fa-chevron-double-right"></i> Online Inverter</li>
                            <li><i class="fad fa-chevron-double-right"></i> Offline Inverter</li>
                        </ul>
                    </li>
                    <li><i class="fad fa-chevron-right"></i> Motor Drivers</li>
                </ul>
            </div>
        </div>
        <div class="slate_panel">
            <div class="slate5">
                <ul class="slate-text">
                    <li><i class="fad fa-chevron-right"></i> Display Change</li>
                    <li><i class="fad fa-chevron-right"></i> Hinge Replacement</li>
                    <li><i class="fad fa-chevron-right"></i> No Power On</li>
                    <li><i class="fad fa-chevron-right"></i> Blue Screen Error</li>
                    <li><i class="fad fa-chevron-right"></i> HardDisk Failure</li>
                    <li><i class="fad fa-chevron-right"></i> Heat Problem</li>
                </ul>
                <ul class="slate-text">
                    <li><i class="fad fa-chevron-right"></i> Peripheral Changes</li>
                    <li><i class="fad fa-chevron-right"></i> Mother Board Service</li>
                    <li><i class="fad fa-chevron-right"></i> OS Installation</li>
                    <li><i class="fad fa-chevron-right"></i> Skin Change</li>

                </ul>

            </div>
            <div class="slate_img">
                <img src="assets/img/laptop.png" style="max-width:250px;max-height:175px;" alt="">
                <h5 class="slate-title">Back Up Units</h5>

            </div>
        </div>
        <div class="slate_panel">
            <div class="slate_img">
                <img src="assets/img/Audio.png" style="max-width:250px;max-height:175px;" alt="">
                <h5 class="slate-title">Audio Devices</h5>

            </div>
            <div class="slate6">
                <ul class="slate-text">
                    <li><i class="fad fa-chevron-right"></i> 2-way Speakers</li>
                    <li><i class="fad fa-chevron-right"></i> 3-way Speakers</li>
                    <li><i class="fad fa-chevron-right"></i> No Power On</li>
                    <li><i class="fad fa-chevron-right"></i> Woofer
                        <ul class="subcard-text">
                            <li><i class="fad fa-chevron-double-right"></i> 2.1</li>
                            <li><i class="fad fa-chevron-double-right"></i> 5.1</li>
                            <li><i class="fad fa-chevron-double-right"></i> 7.1</li>
                        </ul>
                    </li>
                </ul>
                <ul class="slate-text">
                    <li><i class="fad fa-chevron-right"></i> Sound Bars</li>
                    <li><i class="fad fa-chevron-right"></i> Tower Speakers</li>
                    <li><i class="fad fa-chevron-right"></i> Amplifiers</li>
                    <li><i class="fad fa-chevron-right"></i> AV Receivers</li>
                    <li><i class="fad fa-chevron-right"></i> DVD Players</li>
                    <li><i class="fad fa-chevron-right"></i> Blueray Players</li>

                </ul>
            </div>
        </div>
    </div>
    <div class="card-group">
        <div class="card mb-3" style="max-width: 540px;border-radius:30px">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="assets/img/computer.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Desktop Computer</h5>
                        <ul class="card-text">
                            <li><i class="fad fa-chevron-right"></i> Display Change</li>
                            <li><i class="fad fa-chevron-right"></i> No Power On</li>
                            <li><i class="fad fa-chevron-right"></i> Blue Screen Error</li>
                            <li><i class="fad fa-chevron-right"></i> HardDisk Failure</li>
                            <li><i class="fad fa-chevron-right"></i> Heat Problem</li>
                            <li><i class="fad fa-chevron-right"></i> Peripheral Changes</li>
                            <li><i class="fad fa-chevron-right"></i> Mother Board Service</li>
                            <li><i class="fad fa-chevron-right"></i> OS Installation</li>

                        </ul>
                    </div>
                    <button class="explore" id="explore-desktop">Explore</button>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 540px;border-radius:30px">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="assets/img/Laptop.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Laptop Computer</h5>
                        <ul class="card-text">
                            <li><i class="fad fa-chevron-right"></i> Display Change</li>
                            <li><i class="fad fa-chevron-right"></i> Hinge Replacement</li>
                            <li><i class="fad fa-chevron-right"></i> No Power On</li>
                            <li><i class="fad fa-chevron-right"></i> Blue Screen Error</li>
                            <li><i class="fad fa-chevron-right"></i> HardDisk Failure</li>
                            <li><i class="fad fa-chevron-right"></i> Heat Problem</li>
                            <li><i class="fad fa-chevron-right"></i> Peripheral Changes</li>
                            <li><i class="fad fa-chevron-right"></i> Mother Board Service</li>
                            <li><i class="fad fa-chevron-right"></i> OS Installation</li>
                            <li><i class="fad fa-chevron-right"></i> Skin Change</li>
                        </ul>
                    </div>
                    <button class="explore" id="explore-laptop">Explore</button>

                </div>
            </div>
        </div>
    </div>
    <div class="card-group">
        <div class="card mb-3" style="max-width: 540px;border-radius:30px">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="assets/img/inverter.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Power Supplies and Back-Ups</h5>
                        <ul class="card-text">
                            <li><i class="fad fa-chevron-right"></i> Server SMPS</li>
                            <li><i class="fad fa-chevron-right"></i> Industrial Power Supplies</li>
                            <li><i class="fad fa-chevron-right"></i> Medical Power SUpply</li>
                            <li><i class="fad fa-chevron-right"></i> Adapters</li>
                            <li><i class="fad fa-chevron-right"></i> Stabilizers</li>
                            <li><i class="fad fa-chevron-right"></i> Inverters
                                <ul class="subcard-text">
                                    <li><i class="fad fa-chevron-double-right"></i> Online Inverter</li>
                                    <li><i class="fad fa-chevron-double-right"></i> Offline Inverter</li>
                                </ul>
                            </li>
                            <li><i class="fad fa-chevron-right"></i> Motor Drivers</li>
                        </ul>
                    </div>
                    <button class="explore" id="expore-power">Explore</button>

                </div>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 540px;border-radius:30px">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="assets/img/Audio.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Audio Devices</h5>
                        <ul class="card-text">
                            <li><i class="fad fa-chevron-right"></i> 2-way Speakers</li>
                            <li><i class="fad fa-chevron-right"></i> 3-way Speakers</li>
                            <li><i class="fad fa-chevron-right"></i> No Power On</li>
                            <li><i class="fad fa-chevron-right"></i> Woofer
                                <ul class="subcard-text">
                                    <li><i class="fad fa-chevron-double-right"></i> 2.1</li>
                                    <li><i class="fad fa-chevron-double-right"></i> 5.1</li>
                                    <li><i class="fad fa-chevron-double-right"></i> 7.1</li>
                                </ul>
                            </li>
                            </li>
                            <li><i class="fad fa-chevron-right"></i> Sound Bars</li>
                            <li><i class="fad fa-chevron-right"></i> Tower Speakers</li>
                            <li><i class="fad fa-chevron-right"></i> Amplifiers</li>
                            <li><i class="fad fa-chevron-right"></i> AV Receivers</li>
                            <li><i class="fad fa-chevron-right"></i> DVD Players</li>
                            <li><i class="fad fa-chevron-right"></i> Blueray Players</li>
                        </ul>
                    </div>
                    <button class="explore" id="explore-audio">Explore</button>

                </div>
            </div>
        </div>
    </div>
    <div class="logo_heading">
        <h3>Brands we support</h3>
        <div class="line"></div>
    </div>
    <div class="service_logos">
        <div class="computer_brands">
            <h3>Computer </h3>
            <div class="line1"></div>

            <img src="assets/img/all_brands.png" alt="" style="max-width:450px;">
        </div>
        <div class="inverter_brands">
            <h3>Power Supply and Back up</h3>
            <div class="line1"></div>

            <img src="assets/img/power_panel.png" alt="" style="max-width:450px;">
        </div>

        <div class="audio_brands">
            <h3>Audio Devices</h3>
            <div class="line1"></div>

            <img src="assets/img/audio_panel.png" alt="" style="max-width:450px;">
        </div>
        <div class="tv_brands">
            <h3>Television</h3>
            <div class="line1"></div>

            <img src="assets/img/tv_panel.png" alt="" style="max-width:450px;">
        </div>
    </div>


    <div class="up-nav-btn">
        <button><a href='#top'><i class="fas fa-arrow-circle-up" style="color:#1fbb65"></i></a></button>
    </div>
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>

            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <div class="footer-brand">
                            <img clsss="navbar-brand" src="assets/img/RUS.png" alt="" style="max-width:80px;">
                            <h3 class="navbar-brand">RUS</h3>
                        </div>
                        <p>

                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            feedback
                        </h6>
                        <input type="textarea">

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Vendor</a>
                        </p>


                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4" id="contact">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Contact
                        </h6>
                        <p><i class="fas fa-home me-3"></i> Rathnapuri,Coimbatore,<br>Tamil Nadu-641 027</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            <a href="mailto:rus.servicesindia@gmail.com" class="contactmail">info@ruselectronics.com</a>

                        </p>

                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            <a class="text-reset fw-bold" href="dashboard\index.php" target="_blank">dashboard</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</body>
<script src="assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script>

  $('#deviceselect').change(function(){
    var device=$('#deviceselect').val();

     
 $.ajax({
    type: 'POST',
    url: "assets/php/select_device.php",
    data: {device:device},
    dataType: "html",
    success: function(resultData) {
        // alert("Save Complete");
        $('#brandname').html(resultData);
    }
});
});
</script>
</html>