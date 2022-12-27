<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['email_admin'])) {
    header("location: login.php");
}
file_put_contents("../result/log_visitor.txt", '');
file_put_contents("../result/total_Blocked.txt", '');
echo "<script type='text/javascript'>window.top.location='index.php';</script>";