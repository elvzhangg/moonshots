<?php
session_start();
if(isset($_SESSION['admin_logged'])){
    if($_SESSION['admin_logged']==true){
        header('Location: dash.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin | Moonshot</title>

    <!-- Bootstrap -->
    <link href=" vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href=" vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href=" vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href=" vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href=" build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="includes/loginAction.php" method="post" enctype="multipart/form-data">
              <h1>Admin Login</h1>
              <div>
                <input type="text" class="form-control" name="email" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="pass" placeholder="Password" required="" />
              </div>
              <div>
                <input class="btn btn-default submit" type="submit" name="submit_login" value="Login">
              </div>

              <div class="clearfix"></div>

              <div class="separator">


                <div class="clearfix"></div>
                <br />

                <div>
                  <h1>Moonshot</h1>
                  <p>©2017 All Rights Reserved. moonshot.org</p>
                </div>
              </div>
            </form>
          </section>
        </div>


      </div>
    </div>
  </body>
</html>
