<?php

  include ("includes/header_admin.php");
  include ("includes/functions.php");
  $admins='SELECT * FROM `admin` WHERE `admin_status`=1 AND `admin_deleted`=1 ORDER BY `admin_id` DESC';

  if(isset($_GET['done'])){
      ?>
      <script type="text/javascript">
          alert("New Administrator created!");
      </script>

      <?php
    }elseif(isset($_GET['error'])){
      ?>
      <script type="text/javascript">
          alert("Admin creation failed!");
      </script>

      <?php
    }
    elseif(isset($_GET['errorp'])){
      ?>
      <script type="text/javascript">
          alert("Error!,Email already exist");
      </script>

      <?php
    }
?>
<!-- Switchery -->
    <link href="vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- validator -->
    <script src="vendors/validator/validator.js"></script>
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
              <div class="x_panel">
                  <div class="x_title">
                    <h2>New Admin</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form class="form-horizontal form-label-left"  enctype="multipart/form-data" action="includes\createAdmin_action.php"  method="post" novalidate>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="title" class="form-control col-md-7 col-xs-12" value=""  name="name" placeholder="Jhon Smith" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="link" name="email" required="required" value=""  placeholder="name@example.com"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <!-- <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Type* <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="select2_single form-control" name="type" tabindex="-1">
                            <option value="1">Super User</option>
                            <option value="2">Admin</option>
                            <option value="3">Data Entry</option>
                          </select>
                        </div>
                      </div> -->

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Status<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="">
                             <label>
                               <input type="checkbox" name="status" class="js-switch" value="1" checked  /> Active
                             </label>
                           </div>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Password<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="" class="form-control col-md-7 col-xs-12" value=""  name="password" required="required" type="password">
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <!-- <input type="hidden" name="bannerID" value="<?php echo $bannerID; ?>"> -->
                            <input type="hidden" name="w" value="details">
                          <input type="hidden" name="page" value="admin_add.php">
                          <!-- <input type="reset" class="btn btn-primary" name="reset" value="Clear"> -->
                          <input type="submit" class="btn btn-success" name="banner_update" value="Create">
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Admin List</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <form class="" id="adlist" action="includes/update_ad_status_action.php" method="post">

                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Email</th>
                          <!-- <th>Type</th> -->
                          <th>Created</th>

                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php
                        $result = mysqli_query($conn,$admins);
                        $count=1;
                          while ($row = mysqli_fetch_assoc($result)) {

                            $admin_id=$row['admin_id'];
                            $admin_name=$row['admin_name'];
                            $admin_email=$row['admin_email'];
                            $admin_type=$row['admin_type'];
                            //$id1=$row['ls_id'];
                            $admin_active=$row['admin_status'];
                            $admin_password=$row['admin_password'];
                            $admin_created_date=$row['admin_added_date'];
                            $admin_added_by=$row['admin_added_by'];


                            ?>
                            <tr>
                              <td>
                                <?php echo $admin_id; ?>
                              </td>
                              <td style="text-align:justify; width:20%;">
                                  <?php echo $admin_name; ?>
                              </td>
                              <td>
                                    <?php echo $admin_email; ?>
                              </td>
                      
                              <td><?php echo 'Added Date - '.$admin_created_date.'<br>'.'Added by - '.adminName($admin_added_by,$conn); ?></td>

                              <td>
                                <input type="hidden" name="page" value="ads_approved.php">
                               
                              </td>
                            </tr>
                            <?php
                                }
                             ?>
                      </tbody>
                    </table>

                  </form>
                  </div>
                </div>
              </div>



          </div>
</div>


          <script src="vendors/switchery/dist/switchery.min.js"></script>

          <!-- Datatables -->
          <script src=" vendors/datatables.net/js/jquery.dataTables.min.js"></script>
          <script src=" vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
          <script src=" vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
          <script src=" vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
          <script src=" vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
          <script src=" vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
          <script src=" vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
          <script src=" vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
          <script src=" vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
          <script src=" vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
          <script src=" vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
          <script src=" vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
        


    <?php

      include ("includes/footer_admin.php");

    ?>
