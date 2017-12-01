<?php
  include ("../connection/connect.php");
  session_start();
  if(!isset($_SESSION['admin_logged'])){
  header('Location: ../index.php');
  exit;
  }else{
    $mysqli = $conn;
    $adminID=$_SESSION['admin_id'];
    date_default_timezone_set('Asia/Colombo');
    $createdDate = date('Y-m-d h:i:sa');
    $sql_rec = "INSERT INTO `admin_logged`(`admin_logged_id`, `admin_logged_admin`, `admin_logged_time`, `admin_logged_type`,`admin_logged_device`) VALUES (NULL,'$adminID','$createdDate','o','')";
    mysqli_query($mysqli,$sql_rec);
    session_destroy();

    if(isset($_SESSION['admin_logged'])){
      header('Location: ../index.php');
      exit;
    }
  }


?>
