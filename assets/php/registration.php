<?php
require_once('connection.php');

$firstname= $_POST['First_Name'];
$valid_fn=preg_match('/^[a-zA-z]*$/', $firstname);
$lastname = $_POST['Last_Name'];
$valid_ln=preg_match('/^[a-zA-z]*$/', $lastname);

$email = $_POST['reg-mail'];
$valid_mail=preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email);

$phone=$_POST['reg-number'];
$length = strlen ($phone);  
$valid_phone=preg_match('/^[6789]\d{9}$/', $phone);

$address_line=$_POST['reg-address'];
$pincode=$_POST['reg-pincode'];
$passwd=$_POST['reg-password'];
$cpasswd=$_POST['reg-conf-password'];
$sql1="Select * from registration where phone='$phone' OR email='$email'";

$sql = "INSERT INTO registration(first_name,last_name,email,phone,passwd,address_line,pincode)
    VALUES ('$firstname','$lastname', '$email', '$phone','$passwd','$address_line','$pincode')";
    $result = mysqli_query($con, $sql1);
 $row_count =  mysqli_num_rows ($result);
if($row_count==0){
  
if($firstname!='' && $lastname!='' &&$email!=''&&$phone!=''&&$passwd!=''&&$address_line!='' &&$pincode!='')

{
  if($valid_fn && $valid_ln){
  
  }
  else{
    header('Location:../../registration-form.php?name_valid=Name must be in alphabets only & $fn=$firstname');
    return FALSE;
  }

  if($valid_mail){
    
  }
  else{
    header('Location:../../registration-form.php?mail_valid=Please enter valid email');

    return FALSE;

  }
  if ($valid_phone){
    
    
    
}
else{
  // echo 'Please enter valid number';
  header('Location:../../registration-form.php?phone_valid=Please enter valid number');

  return FALSE;

}

if(!empty($cpasswd) && $passwd==$cpasswd) {
  
  if (strlen($passwd) <= '7') {
      // echo "Your Password Must Contain At Least 8 Characters!";
      header('Location:../../registration-form.php?passwd_valid=Your Password Must Contain At Least 8 Characters!');

      return FALSE;

  }
  elseif(!preg_match("#[0-9]+#",$passwd)) {
    // echo "Your Password Must Contain At Least 1 Number!";
    header('Location:../../registration-form.php?passwd_valid=Your Password Must Contain At Least 1 Number!!');

    return FALSE;

  }
  elseif(!preg_match("#[A-Z]+#",$passwd)) {
    // echo "Your Password Must Contain At Least 1 Capital Letter!";
    header('Location:../../registration-form.php?passwd_valid=Your Password Must Contain At Least 1 Capital Letter!');

    return FALSE;

  }
  elseif(!preg_match("#[a-z]+#",$passwd)) {
    // echo "Your Password Must Contain At Least 1 Lowercase Letter!";
    header('Location:../../registration-form.php?passwd_valid=Your Password Must Contain At Least 1 Lowercase Letter!');

    return FALSE;

  } 
  if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
    return FALSE;

  } 
}
else {
  // echo "Please Check You've Entered Or Confirmed Your Password!";
  header("Location:../../registration-form.php?passwd_valid=Please Check You've Entered Or Confirmed Your Password!");

  return FALSE;

  
}


}

}
else{
  echo "You are already registered";
}
mysqli_close($con);
?>