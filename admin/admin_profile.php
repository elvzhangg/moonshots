<?php

  include ("includes/header_admin.php");
  $adminID=$_SESSION['admin_id'];
  $sql_admin_details = "SELECT * FROM `admin` WHERE `admin_id`='$adminID'";
  $result = mysqli_query($conn,$sql_admin_details);
  while ($row = mysqli_fetch_assoc($result)) {

    $admin_id=$row['admin_id'];
    $admin_name=$row['admin_name'];
    $admin_email=$row['admin_email'];
    $admin_type=$row['admin_type'];
    //$id1=$row['ls_id'];
    $admin_status=$row['admin_status'];
    $admin_password=$row['admin_password'];
    $admin_added_date=$row['admin_added_date'];

  }

  if(isset($_GET['done1'])){
      ?>
      <script type="text/javascript">
          alert("Account details successfully updated!");
      </script>
      <?php
    }elseif(isset($_GET['error'])){
      ?>
      <script type="text/javascript">
          alert("Error!,Account details epdating failed");
      </script>
      <?php
    }elseif(isset($_GET['errorp2'])){
      ?>
      <script type="text/javascript">
          alert("Error!,Current password not correct");
      </script>
      <?php
    }elseif(isset($_GET['donepass'])){
      ?>
      <script type="text/javascript">
          alert("Password successfully updated");
      </script>
      <?php
    }elseif(isset($_GET['errorp'])){
      ?>
      <script type="text/javascript">
          alert("Error!,password updating failed");
      </script>
      <?php
    }
?>
<!-- Switchery -->
    <link href="vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <script type="text/javascript">
    function passCheck() {
      var pass1 = document.getElementById("passnew").value;
      var pass2 = document.getElementById("passnewa").value;
      // var ok = true;

      if (pass1 != pass2) {

          //alert("Passwords Do not match");
          document.getElementById("passnew").style.borderColor = "#E34234";
          document.getElementById("passnewa").style.borderColor = "#E34234";
          return false;
      }
      else {
          return true;
      }
      // return ok;
    }
    </script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

            <?php
              include ("includes/menu_admin.php");
            ?>

        <!-- page content -->
        <div class="right_col" role="main">

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_title">
                <h2>Account Settings</h2>

                <div class="clearfix"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="x_panel">
                  <div class="x_title">
                    <h2>Update Details</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form class="form-horizontal form-label-left"  enctype="multipart/form-data" action="includes\updates\admin_update.php"  method="post" novalidate>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="title" class="form-control col-md-7 col-xs-12" value="<?php echo $admin_name;?>"  name="name" placeholder="Jhon Smith" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="link" name="email" required="required" value="<?php echo $admin_email;?>"  placeholder="name@example.com"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label disabled class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Type* <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select disabled class="select2_single form-control" name="type" tabindex="-1">
                            <option value="1" <?php if($admin_type==1){ echo 'selected'; };?> >Super User</option>
                            <option value="2" <?php if($admin_type==2){ echo 'selected'; };?> >Admin</option>
                            <option value="3" <?php if($admin_type==3){ echo 'selected'; };?>>Data Entry</option>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Status<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="">
                             <label>
                               <input disabled type="checkbox" name="status" class="js-switch" value="1" <?php if($admin_status==1){ echo 'checked'; };?>/> Active
                             </label>
                           </div>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Registered Date<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input disabled id="" class="form-control col-md-7 col-xs-12" value="<?php echo $admin_added_date;?>" name="password" required="required" type="text">
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">

                            <input type="hidden" name="w" value="details">
                          <input type="hidden" name="page" value="admin_profile.php">
                          <!-- <input type="reset" class="btn btn-primary" name="reset" value="Clear"> -->
                          <input type="submit" class="btn btn-success" name="banner_update" value="Update">
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                      <h2>Update Password</h2>

                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                      <form  onsubmit="return passCheck()" class="form-horizontal form-label-left"  enctype="multipart/form-data" action="includes\updates\admin_update.php"  method="post">

                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Old Password *<span class="required"></span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="password" id="passold" name="passold" required="required" value=""  placeholder=""  class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">New Password *<span class="required"></span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="password" id="passnew" name="passnew" required="required" value=""  placeholder=""  class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Retype New Password *<span class="required"></span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="password" id="passnewa" name="passnewa" required="required" value=""  placeholder=""  class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-md-6 col-md-offset-3">
                            <input type="hidden" name="w" value="pass">
                            <input type="hidden" name="page" value="admin_profile.php">
                            <!-- <input type="reset" class="btn btn-primary" name="reset" value="Clear"> -->
                            <input type="submit" class="btn btn-success" name="banner_update" value="Update">
                          </div>
                        </div>

                      </form>
                    </div>
                  </div>
                </div>
            </div>

            </div>
        <!-- </div> -->
          <!-- <br /> -->



          <script src="vendors/switchery/dist/switchery.min.js"></script>

          <!-- bootstrap-daterangepicker -->
           <script src="vendors/moment/min/moment.min.js"></script>
           <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <?php

      include ("includes/footer_admin.php");

    ?>
