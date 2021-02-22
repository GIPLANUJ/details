<?php
include"connection.php";
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$father=$_POST['father_name'];
$mother=$_POST['mother_name'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$adhar=$_POST['adhaar_card'];
$pincode=$_POST['pincode'];
$state=$_POST['state'];
$distict=$_POST['distict'];
$village=$_POST['village'];
$DOV=$_POST['DOV'];
$class=$_POST['class'];
$persents=$_POST['persents'];
$email=$_POST['email'];
$password=$_POST['password'];
$conf_pass=$_POST['conf_pass'];
$gender=$_POST['gender'];
$sql="INSERT INTO school(first_name,last_name,father_name,mother_name,address,mobile,adhaar_card,pincode,state,distict,village,DOV,class,persents,email,password,conf_pass,gender) values('$fname','$lname','$father','$mother','$address','$mobile','$adhar','$pincode','$state','$distict','$village','$DOV','$class','$persents','$email','$password','$conf_pass','$gender')";
$insert=mysqli_query($conn,$sql);
if($insert)
{
echo"record insert succesfully";
}
else{
echo"record not insert";
}
?>