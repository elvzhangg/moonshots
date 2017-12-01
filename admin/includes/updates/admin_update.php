<?php
session_start();
if(!isset($_SESSION['admin_logged'])){
  header('Location: ../../../index.php');
  exit;
}
$adminID=$_SESSION['admin_id'];
include ("../../connection/connect.php");

if(isset($_POST['w'])){

  if($_POST['w']=="details"){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $type=$_POST['type'];
    $status=$_POST['status'];
    $password=$_POST['password'];

    $sql_ban="UPDATE `admin` SET `admin_name`='$name',`admin_email`='$email' WHERE `admin_id`='$adminID'";
    if(mysqli_query($conn,$sql_ban)){
      $_SESSION['admin_name']=$name;
      $_SESSION['admin_email']=$email;
      header("Location: ../../admin_profile.php?done1");
      exit;
    }
    else{
      header("Location: ../../admin_profile.php?error");
      exit;
    }

  }
  elseif($_POST['w']=="pass"){

    $passold=$_POST['passold'];
    $passnew=$_POST['passnew'];

    $encyrpted_passold=md5($passold);
    $encyrpted_passnew=md5($passnew);
    $sql_get_pass = "SELECT `admin_password` FROM `admin` WHERE `admin_id`='$adminID'";

    $result_pass = mysqli_query($conn,$sql_get_pass);
    while ($row = mysqli_fetch_assoc($result_pass)) {
        if($encyrpted_passold!=$row['admin_password']){
          header("Location: ../../admin_profile.php?errorp2");
          exit;
        }
        else{
          $sql_ban="UPDATE `admin` SET `admin_password`='$encyrpted_passnew' WHERE `admin_id` = '$adminID'";
          if(mysqli_query($conn,$sql_ban)){
            header("Location: ../../admin_profile.php?donepass");
            exit;
          }
          else{
            header("Location: ../../admin_profile.php?errorp");
            exit;
          }
        }
    }
  }
  else {
    header("Location: ../../admin_profile.php");
    exit;
  }
}
else {
  header("Location: ../../admin_profile.php");
  exit;
}
 ?>
