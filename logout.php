<?php

session_start(); //เปิด session
session_destroy(); //เคลียร์ session ทั้งหมด
header("location:login.php");

?>