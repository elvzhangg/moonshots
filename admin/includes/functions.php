<?php
//General functions

//retrive status 
function ToTextStatus($i){
  if($i=='1' || $i ==1)
    return 'Active';
  else {
      return 'Deactivated';
  }
}

//Retrive deleted status
function ToTextDeleted($i){
  if($i=='1' || $i ==1)
    return 'Yes';
  else {
      return 'No';
  }
}

//Retrive last auto incrient id for any table
function getLatestIdByQry($i,$idfeiled,$conn){
  //Get last user id from db
  $r1 = mysqli_query($conn,$i);
  $row1 = mysqli_fetch_array($r1);
  $ID = $row1[$idfeiled];
  $ID+=1;

  return $ID;
}

// Image things
//Validate image size
function validate_img_size($file_size){
  if($file_size<2000000000000){
    return true;
  }
  else{
    return false;
  }
}
//validate image format
function validate_img_format($file_format){
  if($file_format == 'jpg' ){
    return true;
  }
  else{
    return false;
  }
}
//validate video format
function validate_video_format($file_format){
  if($file_format == 'mp4' ){
    return true;
  }
  else{
    return false;
  }
}


// check any file is exist .. if not retrive default image
function fileExist($file){
  if(file_exists($file)){
    return $file;
  }else{
    return '../images/filenotfound.jpg';
  }
}


//Get admin Details
function adminName($file,$conn){
  $i = "SELECT `admin_name` FROM `admin` WHERE `admin_id`='$file'";
  $r1 = mysqli_query($conn,$i);
  $row1 = mysqli_fetch_array($r1);
  $admin_name = $row1['admin_name'];
  return $admin_name;
}

//Get Lists
function getAllUsersActive($order,$conn){
  $sql_ad = "SELECT * FROM `users` WHERE `users_ststus`=1 AND `users_deleted`=1 ORDER BY `users_id` $order";
  $result=$conn->query($sql_ad);
			if ($result->num_rows > 0) {
				// output data of each row
				$i=0;
				while($row = $result->fetch_assoc()) {
					$responce[$i++]=$row;
				}
			}

      return $responce;
}

//get all delted users
function getAllUsersDeleted($order,$conn){
  $sql_ad = "SELECT * FROM `users` WHERE `users_deleted`=0 ORDER BY `users_id` $order";
  $result=$conn->query($sql_ad);
			if ($result->num_rows > 0) {
				// output data of each row
				$i=0;
				while($row = $result->fetch_assoc()) {
					$responce[$i++]=$row;
				}
			}

      return $responce;
}

//get all delted users
function getAllUsersDeactivated($order,$conn){
  $sql_ad = "SELECT * FROM `users` WHERE `users_ststus`=0 AND `users_deleted`=1 ORDER BY `users_id` $order";
  $result=$conn->query($sql_ad);
			if ($result->num_rows > 0) {
				// output data of each row
				$i=0;
				while($row = $result->fetch_assoc()) {
					$responce[$i++]=$row;
				}
			}

      return $responce;
}

 ?>
