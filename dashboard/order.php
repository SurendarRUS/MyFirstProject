<?php
require_once('../assets/php/connection.php');

$sql1="Select * from registration";
$result = mysqli_query($con, $sql1);
$row_count =  mysqli_num_rows ($result);

$sql2="Select * from login_service";
$result2 = $con->query($sql2);
$row_count2 =  mysqli_num_rows ($result2);

$sql3="Select * from quick_service ORDER BY qs_id DESC";

$result3 = mysqli_query($con, $sql3);
$row_count3 =  mysqli_num_rows ($result3);

$total_service_count=$row_count2+$row_count3;

// vendor
$sql4="Select * from vendor";
$result4 = mysqli_query($con, $sql4);
$row_count =  mysqli_num_rows ($result4);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customer-table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&family=Ubuntu:ital,wght@0,700;1,500&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>

<body>

    <?php require_once('header.php');?>

    <div class="table-responsive">
        <table class="table table-striped table-hover bordered" id="order_tab" style="width:99%;margin:10px auto;">
            <thead>

                <tr style="text-align:center">

                    <th scope="col" width="2%">Sid</th>
                    <th scope="col" width="10%">When?</th>
                    <th scope="col" width="10%">Which?</th>
                    <th scope="col" width="25%">What?</th>
                    <th scope="col" width="10%">Who?</th>
                    <th scope="col" width="10%">info</th>
                    <th scope="col" width="10%">phone</th>
                    <th scope="col" width="5%">Status</th>
                    <th scope="col" width="5%">Assign</th>
                    <th scope="col" width="5%">Quotation</th>
                </tr>
            </thead>
            <tbody>
                <?php
while($row = mysqli_fetch_assoc($result3)) {
    
      ?>

                <tr style="text-align:center">

                    <td><?php echo $row['qs_id'];?></td>
                    <td><?php echo $row['c_date'];?></td>
                    <td><?php echo $row['device'];?>-<?php echo $row['brand'];?></td>
                    <td><?php echo $row['problem_desc'];?></td>
                    <td><?php echo $row['full_name'];?></td>
                    <td><button class="btn btn-primary info_class" data-bs-toggle="modal"
                            name="<?php echo $row['qs_id']; ?>" id="info_btn" data-bs-target="#exampleModal2"><i
                                class="fas fa-info-circle"></i></button>
                    </td>
                    <td><?php 
                    echo $row['phone'];?></td>
                    <td>Soon</td>
                    <td><button type="button" class="btn_assign" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            YTA</button></td>
                    <td><button type="button" class="btn_quote" data-bs-toggle="modal1" data-bs-target="#exampleModal1">
                            View</button></td>

                    <?php } ?>
                </tr>

            </tbody>
        </table>

        <div class="modal-dialog modal-dialog-scrollable">

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Choose Vendor</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?php while($row1 = mysqli_fetch_assoc($result4)) {
          $id=$row1['v_id'];
      echo '<input id="'.$id.'" class="vendorclass" type="checkbox" name="vendorid[]">
      <span class="vendor" id="'.$id.'">';
          echo $row1['name'];
          echo '</span><br>';
        }
    ?>
                        </div>

                        <style>



                        </style>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="assignbtn">Assign Task</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-dialog modal-dialog-scrollable">

            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel1">Choose Vendor</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                        </div>

                        <style>



                        </style>





                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Send</button>
                            <button type="button" class="btn btn-primary" id="assignbtn">Download</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- info -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel2">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p id="address_mail"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- info end -->
    </div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>
$(document).ready(function() {
    $("#assignbtn").click(function() {
        if ($('input[type="checkbox"]').prop("checked") == true) {
            alert("Checkbox is checked.");
            if (confirm("Make sure right vendor")) {

                var id = [];
                var checkbox = $(':checkbox:checked').length;
                $(':checkbox:checked').each(function(i) {
                    if ($(':checkbox:checked').length) {
                        id[i] = $(this).attr('id');
                        // id.push(checkbox[i]);
                        // alert(id);
                    }


                });

                // alert(id)
                $.ajax({
                    type: 'POST',
                    url: "assets/php/vendor_assign.php",
                    data: {
                        id: id
                    },
                    dataType: "html",
                    success: function(resultData) {
                        // alert("Save Complete");
                        // $('#dummy').html(resultData);
                    }
                });
            }
        } else if ($('input[type="checkbox"]').prop("checked") == false) {
            alert("Please Check any one");
        }

    });
});
</script>
<script>
$("#assignbtn").click(function() {
    $.ajax({
        type: 'POST',
        url: "assets/php/info_btn.php",
        data: {
            info_id:info_id
        },
        dataType: "html",
        success: function(resultData) {
            // alert("Save Complete");
            $('#dummy').html(resultData);
        }
    });
});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#order_tab').DataTable();
});
</script>
<script>
$('.info_class').click(function() {
    // var info_id = $(this).val();
    var info_id = $(this).attr("name");


    $.ajax({
        type: 'POST',
        url: "../assets/php/info_btn.php",
        data: {
            info_id: info_id
        },
        dataType: "html",
        success: function(resultData) {
            // alert("Save Complete");
            $('#address_mail').html(resultData);
        }
    });
});
</script>

</html>