<?php
//admin login script

//include connection class
require '../connection/connect.php';
session_start();

$mysqli = $conn;

if(isset($_REQUEST['submit_login'])){

$email = $_POST['email'];
$pass = $_POST['pass'];

  $getDetails="SELECT * FROM `admin` WHERE `admin_email`='$email' LIMIT 1";

  date_default_timezone_set('Asia/Colombo');
  $createdDate = date('Y-m-d h:i:sa');

  if($res=mysqli_query($mysqli,$getDetails)){

          while ($row = mysqli_fetch_assoc($res)) {
            $adminID=$row['admin_id'];
            $passget=$row['admin_password'];
            if($passget==md5($pass)){
                $sql_rec = "INSERT INTO `admin_logged`(`admin_logged_id`, `admin_logged_admin`, `admin_logged_time`, `admin_logged_type`,`admin_logged_device`) VALUES (NULL,'$adminID','$createdDate','i','')";
                  mysqli_query($mysqli,$sql_rec);

                $_SESSION['admin_name']=$row['admin_name'];
                $_SESSION['admin_id']=$row['admin_id'];
                $_SESSION['admin_email']=$row['admin_email'];
                $_SESSION['admin_logged']=true;
                if(isset($_GET['pass_up'])){
                  header('Location: ../dash.php');
                  exit;
                }
                header('Location: ../dash.php');
                exit;
              }
              else {
                header('Location: ../');
                exit;
           }
      }
      header('Location: ../');
      exit;
    }
  else{
    header('Location: ../../');
    exit;
  }
}
 ?>
