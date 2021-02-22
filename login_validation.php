<?php
$emal=$_POST['email'];
$pass=$_POST['password'];
//echo $ema;
include"connection.php";
$sql="select *from school where email='$emal' AND password='$pass'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if($row['email'] == $emal && $row['password'] == $pass)
{
echo"<script>alert('login success')</script>";
echo"<script>location.replace('complete.php')</script>";
}
else
{
echo"<script>alert('wrong password')</script>";
echo"<script>location.replace('login_page.php')</script>";
}
?>

