<?php

require("connect.php");

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$username = $_POST['username'];
$password = $_POST['password'];

$password = hash('sha512',$password); //แปลงรหัสเป็น 128 ตัว

$sql = "INSERT INTO member(name,lastname,telephone,username,password) values('$name','$lastname','$phone','$username','$password')";
$result = mysqli_query($con,$sql);

if($result){
  echo "<script> alert('บันทึกข้อมูลสำเร็จ');</script>";
  echo "<script> window.location='register.php'</script>";
  
}else{
    echo  mysqli_error_list($con);
}   