
<?php
  require_once 'header.php';
  // $id = $_SESSION['id'];
	$q = mysqli_query($connection,"select `id`, `name`,`email` from `users` where id = $id");
	$assoc = mysqli_fetch_assoc($q);
  
  /*if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
  }*/
  
?>
<nav class="breadcrumb sl-breadcrumb">
	<a class="breadcrumb-item" href="index.php">User</a>
	<span class="breadcrumb-item active">Edit</span>
</nav>

<div class="sl-pagebody">
  <h4 class="text-dark body-title">Edit Profile</h4>
<div class="card pd-10 pd-sm-40">
    
    <form action="profile.php" method="POST" class="col-lg-10 mx-auto" enctype="multipart/form-data">
        <div class="row">
           <div class="col-6 pd-20 mt-2">
           	<label class="text-dark tx-bold" >Name: <span class="tx-danger">*</span></label>
              <input class="form-control" placeholder="Input box" type="text" name="proname"value="<?=$assoc['name']?>">
            </div>
            <div class="col-6 pd-20 mt-2">
            	<label class="text-dark tx-bold" >Email:<span class="tx-danger">*</span></label>
              <input class="form-control" placeholder="Input box" type="email" name="proemail" value="<?=$assoc['email']?>">              
            </div>
            <div class="col-6 pd-20 mt-2">
              <label class="text-dark tx-bold" >Picture:<span class="tx-danger">*</span></label>
              <input class="form-control" placeholder="Upload Image" type="file" name="proimage" value="" onchange ="document.getElementById('image_id').src = window.URL.createObjectURL(this.files[0])">
            <div class="col pd-20 mt-1 text-left">
              <button type="submit" class="btn btn-primary col-3 mt-2 text-center">Update</button>
            </div>

            </div>
            <div class="col-6 pd-20 mt-1">
              <label class="text-dark tx-bold">Preview:<span class="tx-danger">*</span></label> <br>
              <img class="mx-auto rounded" id="image_id" width="150">
            </div>
            
        </div>
    </form>      
</div>

<?php require_once 'footer.php' ?>
