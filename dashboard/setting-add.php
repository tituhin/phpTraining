<?php
  require_once 'header.php';
  $sql = "SELECT COUNT(*) AS total, id,tagline,copyright,logo,office_address,email,phone,about FROM `settings`";
  $setting_query = mysqli_query($connection,$sql);
  $row_cnt = mysqli_num_rows(mysqli_query($connection,"SELECT * FROM `settings`"));
  $setting_assoc = mysqli_fetch_assoc($setting_query);
  ?>
<nav class="breadcrumb sl-breadcrumb">
	<a class="breadcrumb-item" href="setting.php">Setting</a>
	<span class="breadcrumb-item active">Add system Setting</span>
</nav>

<div class="sl-pagebody">
  <h4 class="text-dark body-title">Add Setting</h4>
<div class="card pd-10 pd-sm-40">
    <form action="setting-post.php" method="POST" class="col-lg-12 mx-auto" enctype="multipart/form-data">
        <div class="row">          
           <div class="col-6 pd-10 mt-2">
            <?php if ($row_cnt>0): ?><input hidden value="<?=$setting_assoc['id']?>" name="id"></input><?php endif ?>
           	<label for="name" class="text-dark tx-bold" >Tagline: <span class="tx-danger">*</span></label>
              <input id="name" class="form-control" placeholder="Tagline" type="text" name="tagline" value="<?=$setting_assoc['tagline']?>">
               <?php if (isset($_SESSION["fieldErr"])): ?>
                <span class="text-danger display-6"><?=$_SESSION["fieldErr"]?></span>
                 <?php unset($_SESSION["fieldErr"]); endif ?>
            </div>
            <div class="col-6 pd-10 mt-2">
            	<label for="icon" class="text-dark tx-bold" >Email : <span class="tx-danger">*</span></label>
              <input id="name" class="form-control" placeholder="Enter email" type="email" name="email"value="<?=$setting_assoc['email']?>">
              <?php if (isset($_SESSION["fieldErr"])): ?>
                <span class="text-danger display-6"><?=$_SESSION["fieldErr"]?></span>
                 <?php unset($_SESSION["fieldErr"]); endif ?>
            </div>
            <div class="col-6 pd-10 mt-2">
            <label for="name" class="text-dark tx-bold" >Phone: <span class="tx-danger">*</span></label>
              <input id="name" class="form-control" placeholder="Phone Number" type="tel" name="phone"value="<?=$setting_assoc['phone']?>">
              <?php if (isset($_SESSION["fieldErr"])): ?>
                <span class="text-danger display-6"><?=$_SESSION["fieldErr"]?></span>
                 <?php unset($_SESSION["fieldErr"]); endif ?>
            </div>
            <div class="col-6 pd-10 mt-2">
              <label for="icon" class="text-dark tx-bold" >Office Address : <span class="tx-danger">*</span></label>
              <input id="name" class="form-control" placeholder="Address" type="text" name="office_address"value="<?=$setting_assoc['office_address']?>">
              <?php if (isset($_SESSION["fieldErr"])): ?>
                <span class="text-danger display-6"><?=$_SESSION["fieldErr"]?></span>
                 <?php unset($_SESSION["fieldErr"]); endif ?>
            </div>
            <div class="col-6 pd-10 mt-2">
            <label for="name" class="text-dark tx-bold" >Copyright: <span class="tx-danger">*</span></label>
              <input id="name" class="form-control" placeholder="Copyright" type="text" name="copyright"value="<?=$setting_assoc['copyright']?>">
              <?php if (isset($_SESSION["fieldErr"])): ?>
                <span class="text-danger display-6"><?=$_SESSION["fieldErr"]?></span>
                 <?php unset($_SESSION["fieldErr"]); endif ?>
            </div>
            <div class="col-6 pd-20 mt-2">
              <label class="text-dark tx-bold" >Logo:<span class="tx-danger">*</span></label>
              <input class="form-control" type="file" name="logo" value="" onchange ="document.getElementById('image_id').src = window.URL.createObjectURL(this.files[0])">
              <?php if (isset($_SESSION["fieldErr"])): ?>
                <span class="text-danger display-6"><?=$_SESSION["fieldErr"]?></span>
                 <?php unset($_SESSION["fieldErr"]); endif ?>
            </div>
            <div class="col-6 pd-10 mt-2">
              <label for="icon" class="text-dark tx-bold" >About : <span class="tx-danger">*</span></label>
              <textarea class="form-control" placeholder="Description" rows="3" name="about"><?=$setting_assoc['about']?></textarea>
              <?php if (isset($_SESSION["fieldErr"])): ?>
                <span class="text-danger display-6"><?=$_SESSION["fieldErr"]?></span>
                 <?php unset($_SESSION["fieldErr"]); endif ?>
            </div>
            <div class="col-6 pd-20 mt-1">
              <label class="text-dark tx-bold m-5">Preview:<span class="tx-danger">*</span></label>
              <img class="mx-auto rounded" id="image_id" width="150" height="150" src="upload/<?=$setting_assoc['logo']?>">
            </div>        
             <div class="col pd-auto mx-auto text-center">
              <?php if ($row_cnt < 1): ?>
                <button type="submit" value="add" name="submit" class="btn btn-outline-success"><i class="icon fa fa-plus"></i> Submit</button>
                <?php else: ?> 
                    <button type="submit" value="update" name="submit" class="btn btn-outline-success"><i class="icon fa fa-edit"></i> Update</button>
              <?php endif ?>
            </div>
            </div>
    </form>      
</div>


<?php require_once 'footer.php' ?>
