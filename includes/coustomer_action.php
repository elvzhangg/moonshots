<?php
//include connection class
include ("../admin/connection/connect.php");
include ("functions.php");

      //get all variables
      $fname =$_POST['fname'];
      $lname=$_POST['lname'];
      $email=$_POST['email'];
      $country=$_POST['country'];
      

      $sql = "SELECT * FROM `customers` WHERE `customers_email`='$email'";
      $res=mysqli_query($conn,$sql);
      if(mysqli_num_rows($res)!=0){
        header("Location: ../index.php?sign=exist");
        exit;
      }
      else{
        date_default_timezone_set('America/New_York');
        echo $createdDate = date('Y-m-d h:i:sa');
       
        $sql_ban="INSERT INTO `customers`(`customers_id`, `customers_fname`, `customers_lname`, `customers_email`, `customers_registered_date`, `customers_country`) VALUES (NULL,'$fname','$lname','$email','$createdDate','$country')";
        if(mysqli_query($conn,$sql_ban)){
          header("Location: ../index.php?sign=done");
          exit;
        }
        else{
          header("Location: ../index.php?sign=error");
          exit;
        }
      }

 ?>
