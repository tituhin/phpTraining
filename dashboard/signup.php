

<?php 
    session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Starlight Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="./assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="./assets/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="./assets/lib/select2/css/select2.min.css" rel="stylesheet">


    <!-- Starlight CSS -->
    <link rel="stylesheet" href="./assets/css/starlight.css">
    <script src="./assets/js/starlight.js"></script>
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-md-100v">

      <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">CIT <span class="tx-info tx-normal">Sign Up</span></div>
        <div class="tx-center mg-b-60">Professional Web Development</div>

        <form action="register_user.php" method="post">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Full Name" name="name"
              value="<?php if (isset($_SESSION['name'])) 
              { echo $_SESSION['name']; unset($_SESSION['name']); } ?>">
              <span class="text-danger"><?php if (isset($_SESSION['nameErr'])) 
              { echo $_SESSION['nameErr']; unset($_SESSION['nameErr']); } ?>
              </span>
            </div><!-- form-group -->

            <div class="form-group">
              <input type="email" class="form-control" placeholder="Enter email" name="email"
              value="<?php 
                if (isset($_SESSION['email'])){ echo $_SESSION['email']; unset($_SESSION['email']); } ?>">
              <span class="text-danger"> <?php 
                if (isset($_SESSION['emailErr'])){ 
                    echo $_SESSION['emailErr']; unset($_SESSION['emailErr']); } ?>
              </span>
            </div><!-- form-group -->

            <div class="form-group">
              <input type="password" class="form-control" placeholder="Enter your password" name="password" value="<?php if (isset($_SESSION['password'])) 
              { echo $_SESSION['password']; unset($_SESSION['password']); } ?>">
              <span class="text-danger"><?php if (isset($_SESSION['passErr'])) 
              { echo $_SESSION['passErr']; unset($_SESSION['passErr']); } ?>
              </span>
            </div><!-- form-group -->

            <div class="form-group">
              <input type="password" class="form-control" placeholder="Confirm password" name="confirmpassword" value="<?php if (isset($_SESSION['confirmpassword'])) 
              { echo $_SESSION['confirmpassword']; unset($_SESSION['confirmpassword']); } ?>">
              <span class="text-danger"><?php if (isset($_SESSION['confirmpassErr'])) 
              { echo $_SESSION['confirmpassErr']; unset($_SESSION['confirmpassErr']); } ?>
              </span>
            </div><!-- form-group -->
            
            <!-- form-group -->
            <div class="form-group tx-12">By clicking the Sign Up button below, you agreed to our privacy policy and terms of use of our website.</div>
            <button type="submit" class="btn btn-info btn-block">Sign Up</button>
        </form>

        <div class="mg-t-40 tx-center">Already have an account? <a href="./signin.php" class="tx-info">Sign In</a></div>
        
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <script src="./assets/lib/jquery/jquery.js"></script>
    <script src="./assets/lib/popper.js/popper.js"></script>
    <script src="./assets/lib/bootstrap/bootstrap.js"></script>
    <script src="./assets/lib/select2/js/select2.min.js"></script>
    <script>
      $(function(){
        'use strict';

        $('.select2').select2({
          minimumResultsForSearch: Infinity
        });
      });
    </script>

  </body>
</html>