<?php
//Script for create new admin

session_start();
//If the user not logged in they can't access this page
if(!isset($_SESSION['admin_logged'])){
  header('Location: ../index.php');
  exit;
}

//include connection class
include ("../connection/connect.php");

      //get all variables
      $admin =$_SESSION['admin_id'];
      $name=$_POST['name'];
      $email=$_POST['email'];

      if(isset($_POST['status'])){
        $status=$_POST['status'];
      }
      else{
        $status=0;
      }
      $password=$_POST['password'];

      $sql = "SELECT * FROM `admin` WHERE `admin_email`='$email'";
      $res=mysqli_query($conn,$sql);
      if(mysqli_num_rows($res)!=0){
        header("Location: ../admin_add.php?errorp");
        exit;
      }
      else{
        date_default_timezone_set('Asia/Colombo');
        $createdDate = date('Y-m-d h:i:sa');
        $encyrpted_pass=md5($password);

        $sql_ban="INSERT INTO `admin`(`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_type`, `admin_added_date`, `admin_added_by`, `admin_deleted_date`, `admin_deleted_by`, `admin_status`, `admin_deleted`) VALUES (NULL,'$name','$email','$encyrpted_pass','1','$createdDate','$admin','','','$status','1')";
        if(mysqli_query($conn,$sql_ban)){
          header("Location: ../admin_add.php?done");
          exit;
        }
        else{
          header("Location: ../admin_add.php?error");
          exit;
        }
      }





 ?>
