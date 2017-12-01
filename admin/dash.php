<?php

  include ("includes/header_admin.php");
  include ("includes/functions.php");
?>
<!-- validator -->
<script src="vendors/validator/validator.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

            <?php
              include ("includes/menu_admin.php");
            ?>

        <!-- page content -->
        <div class="right_col text-center" role="main" style="padding-top:300px;font-family: 'Open Sans', sans-serif;text-align: center; vertical-align: middle; line-height: 90px;">

          <h1>
            Welcome <?php echo $_SESSION['admin_name'] ?>    </h1> <h1>
            Dash Board - Moonshot
          </h1>         

        </div>
        <!-- /page content -->


    <?php

      include ("includes/footer_admin.php");

    ?>
