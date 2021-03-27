
<?php
  require_once 'header.php';
  ?>
<nav class="breadcrumb sl-breadcrumb">
	<a class="breadcrumb-item" href="index.php">User</a>
	<span class="breadcrumb-item active">Edit</span>
</nav>

<div class="sl-pagebody">
  <h4 class="text-dark body-title">Edit Profile</h4>
<div class="card pd-10 pd-sm-40">
    
    <form action="social-post.php" method="POST" class="col-lg-10 mx-auto" enctype="multipart/form-data">
        <div class="row">
           <div class="col-6 pd-20 mt-2">
           	<label for="name" class="text-dark tx-bold" >Name: <span class="tx-danger">*</span></label>
              <input id="name" class="form-control" placeholder="Name" type="text" name="name"value="">
            </div>
            <div class="col-6 pd-20 mt-2">
            	<label for="icon" class="text-dark tx-bold" >Icon : <span class="tx-danger">*</span></label>
              <select id="icon" name="icon" class="form-control" required>
                <option value>Select  Social</option>
                <option value="fab fa-facebook">Facebook</option>
                <option value="fab fa-twitter">Twitter</option>
                <option value="fab fa-linkedin">Linkedin</option>
                <option value="fab fa-github">GitHub</option>
                <option value="fab fa-pinterest">Pinterest</option>
                <option value="fab fa-instagram">Instagram</option>
              </select>
            </div>
            <div class="col-6 pd-20 mt-2">
              <label class="text-dark tx-bold" >Link:<span class="tx-danger">*</span></label>
              <input class="form-control" placeholder="Enter URL Here" type="text" name="link" value="https://" required>
            <div class="col pd-20 mt-1 text-center">
              <button type="submit" class="btn btn-outline-success"><i class="icon fa fa-plus"></i> Add</button>
        </div>
    </form>      
</div>


<?php require_once 'footer.php' ?>
