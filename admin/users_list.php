<?php
  include ("includes/header_admin.php");
  include ("includes/functions.php");

?>
<!-- Switchery -->
    <link href="vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- validator -->
    <script src="vendors/validator/validator.js"></script>

    <!-- Datatables -->
    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- validator -->
    <script src="vendors/validator/validator.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        $('#datatable').DataTable( {
            "order": [[ 0, "desc" ]]
        } );
      } );
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
              <div class="x_panel">
                <div class="x_title">
                  <h2>Customers List</h2>

                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                <form class="" id="adlist" action="includes/deletes/userDelete_action.php" method="post">
                <input type="hidden" name="page" value="users_list.php">
                  <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Country</th>
                        <th>Registered Date</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php
                      $all_adds="SELECT * FROM `customers` ORDER BY `customers_id` DESC";
                      $result = mysqli_query($conn,$all_adds);
                        while ($row = mysqli_fetch_assoc($result)) {
                          $customers_id=$row['customers_id'];
                          $customers_fname=$row['customers_fname'];
                          $customers_lname=$row['customers_lname'];
                          $customers_email=$row['customers_email'];
                          $customers_registered_date=$row['customers_registered_date'];
                          $customers_country=$row['customers_country'];
                          ?>
                          <tr>
                            <td style="text-align:justify; width:20%;"><?php echo $customers_id; ?></td>

                            <td>
                            <?php echo $customers_fname; ?>
                            </td>

                            <td><?php echo $customers_lname; ?></td>
                            <td><?php echo $customers_email; ?></td>
                            <td><?php echo $customers_country; ?></td>
                            <td><?php echo $customers_registered_date; ?></td>
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
        <script src=" vendors/jszip/dist/jszip.min.js"></script>
        <script src=" vendors/pdfmake/build/pdfmake.min.js"></script>
        <script src=" vendors/pdfmake/build/vfs_fonts.js"></script>

        <!-- Custom Theme Scripts -->
        <script src=" build/js/custom.min.js"></script>


    <?php

      include ("includes/footer_admin.php");

    ?>
