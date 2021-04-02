<?php
  require_once 'header.php';
	
   ?>
<nav class="breadcrumb sl-breadcrumb">
	<a class="breadcrumb-item" href="partners.php">Partner</a>
	<span class="breadcrumb-item active">Add</span>
</nav>

<div class="sl-pagebody">
  <h4 class="text-center body-title">Add portfolio</h4>
<div class="card pd-10 pd-sm-40">
    <form action="partners-post.php" method="POST" class="col-lg-12 mx-auto" enctype="multipart/form-data">
        <div class="row">
           <div class="col-6 pd-20 mt-2">
           	<label class="text-dark tx-bold" >Brand Name: <span class="tx-danger">*</span></label>
              <input class="form-control" placeholder="Enter Brand Name" type="text" name="name"value="">
              <?php if (isset($_SESSION['fieldErr'])): ?><span class="text-danger"><?=$_SESSION['fieldErr']?></span><?php endif ?>
            </div>
             <div class="col-6 pd-20 text-right mt-1"></div>
            <div class="col-6 pd-20 mt-2">
              <label class="text-dark tx-bold" >Logo :<span class="tx-danger">*</span></label>
              <input class="form-control" type="file" name="brandlogo" value="" onchange ="document.getElementById('image_id').src = window.URL.createObjectURL(this.files[0])"><span class="text-danger">
              <?php if (isset($_SESSION['fieldErr'])): ?><?=$_SESSION['fieldErr']?> <?php endif ?>
              <br>
              <?php if (isset($_SESSION['thumsizeErr'])): ?><?=$_SESSION['thumsizeErr']?><?php unset($_SESSION['thumsizeErr']);endif ?></span>
            </div>

            <div class="col-6 pd-20 mt-1">
              <label class="text-dark tx-bold ">Thumbnail Preview : <span class="tx-danger">*</span></label> 
              <span><img class="text-right ml-8 rounded rounded" id="image_id" hieght="150" width="150"  src="upload/<?=$assoc['profileImage']?>"></span>
            </div>
            

            <div class="col-12 text-center pd-20 mt-1 text-left">
              <button type="submit" class="btn btn-primary m-auto text-center">Submit</button>
            </div>
             
        </div>
    </form>      
</div>
        <script>
              CKEDITOR.replace( 'summary' );
        </script>

<?php require_once 'footer.php' ?>
