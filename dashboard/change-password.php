<?php require_once 'header.php' ?>

<nav class="breadcrumb sl-breadcrumb">
	<a class="breadcrumb-item" href="index.php">User</a>
	<span class="breadcrumb-item active">Change Password </span>
</nav>

<div class="sl-pagebody">
<h4 class="text-dark body-title">Change Password</h4>
<div class="card pd-20 pd-sm-40">
    <!-- <h6 class="card-body-title">Change Password</h6> -->
    <?php if (isset($_SESSION['passchange'])):?>
      <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <strong class="d-block d-sm-inline-block-force"><?=$_SESSION['passchange']?></strong>
          </div>
    <?php unset($_SESSION['passchange']); endif ?>
    <form action="change-pass.php" method="post" class="col-lg-10 mx-auto">
        
           <div class="col-6 mx-auto pd-2">
           	<label >Current Password: <span class="tx-danger">*</span></label>
              <input class="form-control" placeholder="Current Password" type="password" name="curentpass">
                  <?php if (isset($_SESSION['CurpassErr'])): ?>
                     <span class="text-danger"> <?=$_SESSION['CurpassErr'] ?> </span>
                  <?php unset($_SESSION['CurpassErr']); endif ?>
                    
            </div>

            <div class="col-6 mx-auto pd-2 mt-2">
            	<label >New Password:<span class="tx-danger">*</span></label>
              <input class="form-control" placeholder="New Password" type="password" name="newpass">
            </div>

            <div class="col-6 mx-auto pd-2 mt-2">
              <label >Confirm Password:<span class="tx-danger">*</span></label>
              <input class="form-control" placeholder="Re Type Password" type="password" name="repass" value="">
              <?php if (isset($_SESSION['ComPassErr'])): ?>
                <span class="text-danger"> <?=$_SESSION['ComPassErr']?> </span>
              <?php unset($_SESSION['ComPassErr']); endif ?>
            </div>

            <div class="col pd-2 mt-2 text-center">
              <button type="submit" class="btn btn-primary col-3 mt-2 text-center">Change</button>
            </div>
    </form>      
</div>

<?php require_once 'footer.php' ?>