<?php
require('connect.php');

session_start();
$username = $_POST['username'];
$password = $_POST['password'];

//เข้ารหัสด้วย sha512
$password = hash('sha512', $password);

$sql = "SELECT * from member where username='$username' and password='$password' ";
$result = mysqli_query($con, $sql);


$row = mysqli_fetch_array($result);


if ($row > 0) {
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['lastname'] = $row['lastname'];
    $show = header('location:index.php');
} else {
    $_SESSION['error'] = '<p> Your username or password is invalid </p>';
    $show = header('location:login.php');
}
