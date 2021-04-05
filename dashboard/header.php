<?php 
  require_once 'session.php';
  require_once 'dbcontext.php';
  $id = $_SESSION['id'];
  $select = " select * from users where id = $id ";
  $query = mysqli_query($connection,$select);
  $globalAssoc = mysqli_fetch_assoc($query);
  $file_location = explode("/",$_SERVER['PHP_SELF']);
  $active_location = end($file_location);
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
    <link href="./assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="./assets/css/starlight.css">
    <script src="code.jquery.com/jquery-3.6.0.js"></script>
    <script src="./assets/lib/jquery/jquery.js"></script>
    <script src="./assets/lib/jquery/jquery.js"></script>
    <script src="./assets/lib/rickshaw/rickshaw.min.js"></script>
    <script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
   
    

  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href="dashboard.php"><i class="icon ion-android-star-outline"></i> CIT</a></div>
    <div class="sl-sideleft">
      <div class="input-group input-group-search">
        <input type="search" name="search" class="form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span><!-- input-group-btn -->
      </div><!-- input-group -->

      <label class="sidebar-label">Navigation</label>
      <div class="sl-sideleft-menu">
        <a href="dashboard.php" class="sl-menu-link <?= $active_location == 'dashboard.php' ? 'active' : '' ?> ">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <!-- sl-menu-link -->
        
        
        
        <a href="index.php" class="sl-menu-link <?= $active_location == 'index.php' ? 'active' : '' ?> ">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-user tx-20"></i>
            <span class="menu-item-label">Users</span>
            <!-- <i class="menu-item-arrow fa fa-angle-down"></i> -->
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <!-- <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="index.php" class="nav-link">Basic Table</a></li>
          <li class="nav-item"><a href="index.php" class="nav-link">Data Table</a></li>
        </ul> -->        

        <a href="social.php" class="sl-menu-link <?= $active_location == 'social.php' ? 'active' : '' ?>">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-link tx-20"></i>
            <span class="menu-item-label">Socials</span>
            <!-- <i class="menu-item-arrow fa fa-angle-down"></i> -->
          </div><!-- menu-item -->
        </a>
        
        <a href="service.php" class="sl-menu-link <?= $active_location == 'service.php' ? 'active' : '' ?>">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-code tx-20"></i>
            <span class="menu-item-label">Services</span>
            <!-- <i class="menu-item-arrow fa fa-angle-down"></i> -->
          </div><!-- menu-item -->
        </a>
        <a href="setting.php" class="sl-menu-link <?= $active_location == 'setting.php' ? 'active' : '' ?>">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-wrench tx-20"></i>
            <span class="menu-item-label">Settings</span>
            <!-- <i class="menu-item-arrow fa fa-angle-down"></i> -->
          </div><!-- menu-item -->
        </a>

        <a href="education.php" class="sl-menu-link <?= $active_location == 'education.php' ? 'active' : '' ?>">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-graduation-cap tx-20"></i>
            <span class="menu-item-label">Education</span>
            <!-- <i class="menu-item-arrow fa fa-angle-down"></i> -->
          </div><!-- menu-item -->
        </a>        
        <a href="portfolio.php" class="sl-menu-link <?= $active_location == 'portfolio.php' ? 'active' : '' ?>">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-briefcase tx-20"></i>
            <span class="menu-item-label">Portfolio</span>
            <!-- <i class="menu-item-arrow fa fa-angle-down"></i> -->
          </div><!-- menu-item -->
        </a>
        <a href="partners.php" class="sl-menu-link <?= $active_location == 'partners.php' ? 'active' : '' ?>">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-handshake-o tx-20"></i>
            <span class="menu-item-label">Partners</span>
            <!-- <i class="menu-item-arrow fa fa-angle-down"></i> -->
          </div><!-- menu-item -->
        </a>
        <a href="message.php" class="sl-menu-link <?= $active_location == 'message.php' ? 'active' : '' ?>">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-envelope tx-20" style="color:red"></i>
            <span class="menu-item-label">Messages</span>
            <!-- <i class="menu-item-arrow fa fa-angle-down"></i> -->
          </div><!-- menu-item -->
        </a>
        


        <a href="../index.php" target="_blank" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-globe tx-20"></i>
            <span class="menu-item-label">Home Page</span>
            <!-- <i class="menu-item-arrow fa fa-angle-down"></i> -->
          </div><!-- menu-item -->
        </a>

        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
            <span class="menu-item-label">Pages</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="blank.php" class="nav-link">Blank Page</a></li>
          <li class="nav-item"><a href="signin.php" class="nav-link">Signin Page</a></li>
          <li class="nav-item"><a href="signup.php" class="nav-link">Signup Page</a></li>
          <li class="nav-item"><a href="page-notfound.php" class="nav-link">404 Page Not Found</a></li>
        </ul>
      </div><!-- sl-sideleft-menu -->

      <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- sl-header-left -->
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name"><?=$globalAssoc['name']?><span class="hidden-md-down"></span></span>
              <img src="upload/<?=$globalAssoc['profileImage']?>" class="wd-32 rounded-circle" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href="edit-profile.php"><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                <li><a href=""><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
                <li><a href=""><i class="icon ion-ios-download-outline"></i> Downloads</a></li>
                <li><a href="change-password.php"><i class="icon fa fa-lock"></i>Change Password</a></li>
                <li><a href=""><i class="icon ion-ios-folder-outline"></i> Collections</a></li>
                <li><a href="logout.php"><i class="icon ion-power"></i> Sign Out</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
        <div class="navicon-right">
          <a id="btnRightMenu" href="" class="pos-relative">
            <i class="icon ion-ios-bell-outline"></i>
            <!-- start: if statement -->
            <span class="square-8 bg-danger"></span>
            <!-- end: if statement -->
          </a>
        </div><!-- navicon-right -->
      </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->

            <?php 
            $msg_head_q = mysqli_query($connection,"SELECT * FROM `messages` WHERE status = 1 ORDER BY id DESC");
            $row_count = mysqli_num_rows($msg_head_q);
             ?>
    <!-- ########## START: RIGHT PANEL ########## -->
    <div class="sl-sideright">
      <ul class="nav nav-tabs nav-fill sidebar-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" role="tab" href="#messages">Messages <strong>( <?=$row_count?> )</strong></a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" data-toggle="tab" role="tab" href="#notifications">Notifications (8)</a>
        </li>
      </ul> --><!-- sidebar-tabs -->

      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane pos-absolute a-0 mg-t-60 active" id="messages" role="tabpanel">
          <div class="media-list">
            <!-- loop starts here -->
             <?php foreach ($msg_head_q as $key => $val): ?>
            <a href="message-read.php?id=<?=$val['id']?>" class="media-list-link">
              <div class="media">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13"><?=$val['name']?></p>
                  <p class="tx-13 mg-t-10 mg-b-0 text-justify"><?=$val['message']?>.</p>
                </div>
              </div><!-- media -->
            </a>
            <!-- loop ends here -->
          <?php endforeach ?>
            
          </div><!-- media-list -->
          <div class="pd-15">
            <a href="message.php" class="btn btn-secondary btn-block bd-0 rounded-0 tx-10 tx-uppercase tx-mont tx-medium tx-spacing-2">View More Messages</a>
          </div>
        </div><!-- #messages -->

        <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="notifications" role="tabpanel">
          <div class="media-list">
            <!-- loop starts here -->
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="./assets/img/img8.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                  <span class="tx-12">October 03, 2017 8:45am</span>
                </div>
              </div><!-- media -->
            </a>
            <!-- loop ends here -->
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="./assets/img/img9.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Social Network</strong></p>
                  <span class="tx-12">October 02, 2017 12:44am</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="./assets/img/img10.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700">20+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                  <span class="tx-12">October 01, 2017 10:20pm</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="./assets/img/img5.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                  <span class="tx-12">October 01, 2017 6:08pm</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="./assets/img/img8.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 12 others in a post.</p>
                  <span class="tx-12">September 27, 2017 6:45am</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="./assets/img/img10.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700">10+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                  <span class="tx-12">September 28, 2017 11:30pm</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="./assets/img/img9.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Great Pyramid</strong></p>
                  <span class="tx-12">September 26, 2017 11:01am</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="./assets/img/img5.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                  <span class="tx-12">September 23, 2017 9:19pm</span>
                </div>
              </div><!-- media -->
            </a>
          </div><!-- media-list -->
        </div><!-- #notifications -->

      </div><!-- tab-content -->
    </div><!-- sl-sideright -->
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      
