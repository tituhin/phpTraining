<?php
  require_once 'header.php';
	
   ?>
<nav class="breadcrumb sl-breadcrumb">
	<a class="breadcrumb-item" href="portfolio.php">portfolio</a>
	<span class="breadcrumb-item active">Add</span>
</nav>

<div class="sl-pagebody">
  <h4 class="text-center body-title">Add portfolio</h4>
<div class="card pd-10 pd-sm-40">
    <form action="portfolio-post.php" method="POST" class="col-lg-12 mx-auto" enctype="multipart/form-data">
        <div class="row">
         
           <div class="col-6 pd-20 mt-2">
           	<label class="text-dark tx-bold" >Title: <span class="tx-danger">*</span></label>
              <input class="form-control" placeholder="Enter Title" type="text" name="title"value="">
              <?php if (isset($_SESSION['fieldErr'])): ?><span class="text-danger"><?=$_SESSION['fieldErr']?></span><?php endif ?>
            </div>
            <div class="col-6 pd-20 mt-2">
            	<label class="text-dark tx-bold" >Category:<span class="tx-danger">*</span></label>
              <input class="form-control" placeholder="Enter category" type="text" name="category" value="">
              <?php if (isset($_SESSION['fieldErr'])): ?><span class="text-danger"><?=$_SESSION['fieldErr']?></span><?php endif ?>
            </div>
            <div class="col-6 pd-20 mt-2">
              <label class="text-dark tx-bold" >Thumbnail :<span class="tx-danger">*</span></label>
              <input class="form-control" type="file" name="thumbnail" value="" onchange ="document.getElementById('image_id').src = window.URL.createObjectURL(this.files[0])"><span class="text-danger">
              <?php if (isset($_SESSION['fieldErr'])): ?><?=$_SESSION['fieldErr']?> <?php endif ?>
              <br>
              <?php if (isset($_SESSION['thumsizeErr'])): ?><?=$_SESSION['thumsizeErr']?><?php unset($_SESSION['thumsizeErr']);endif ?></span>
            </div>
            <div class="col-6 pd-20 mt-1">
              <label class="text-dark tx-bold">Thumbnail Preview : <span class="tx-danger">*</span></label>
              <img class="ml-3 rounded rounded" id="image_id" hieght="150" width="150"  src="upload/<?=$assoc['profileImage']?>">
            </div>
            <div class="col-6 pd-20 mt-2">
              <label class="text-dark tx-bold" >Featured Image :<span class="tx-danger">*</span></label>
              <input class="form-control" type="file" name="featured_image" value="" onchange ="document.getElementById('featuredImage').src = window.URL.createObjectURL(this.files[0])"><span class="text-danger">
              <?php if (isset($_SESSION['fieldErr'])): ?><?=$_SESSION['fieldErr']?><?php endif ?>
              <br>
              <?php if (isset($_SESSION['featsizeErr'])): ?><?=$_SESSION['featsizeErr']?><?php unset($_SESSION['featsizeErr']);endif ?></span>
            </div>
            <div class="col-6 pd-20 mt-1">
              <label class="text-dark tx-bold">Featured Preview:<span class="tx-danger">*</span></label>
              <img class="ml-3 rounded" id="featuredImage" hieght="150" width="150" src="upload/<?=$assoc['profileImage']?>">
            </div>
            <div class="col-12 pd-20 mt-1">
              <label class="text-dark tx-bold">Summary:<span class="tx-danger">*</span></label>
              <textarea class="form-control" rows="auto" name="summary"></textarea>
              <?php if (isset($_SESSION['fieldErr'])): ?><span class="text-danger"><?=$_SESSION['fieldErr']?></span><?php unset($_SESSION['fieldErr']);endif ?>
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
