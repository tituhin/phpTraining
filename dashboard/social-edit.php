<?php 
	require_once 'session.php';
	require_once 'header.php';
	$id = $_GET['user-edit'];
	$q = mysqli_query($connection,"select `id`, `name`,`icon`,`link` from `socials` where id = $id");
	$assoc = mysqli_fetch_assoc($q);
 ?>

<nav class="breadcrumb sl-breadcrumb">
	<a class="breadcrumb-item" href="index.php">User</a>
	<span class="breadcrumb-item active">Edit</span>
</nav>
<div class="sl-pagebody">
  
<div class="card pd-20 pd-sm-40">
    <h6 class="card-body-title">Edit User</h6>
    <form action="user-delete-edit.php" method="post" class="col-lg-6 mx-auto">
        
           <div class="col-lg pd-20 mt-2">
           	<input class="form-control" placeholder="Input box" type="hidden" name="idedit" value="<?=$id ?>">
           	<label class="text-dark tx-bold">Name: <span class="tx-bold tx-danger">*</span></label>
              <input class="form-control" placeholder="Input box" type="text" name="nameedit"value="<?=$assoc['name']; unset($assoc['name']); ?>">
            </div>
            <div class="col-lg pd-20 mt-2">
              <label for="icon" class="text-dark tx-bold" >Icon : <span class="tx-danger">*</span></label>
              <select id="icon" name="icon" class="form-control" required>
                <option value>Select  Social</option>
                <option value="fa fa-facebook">Facebook</option>
                <option value="fa fa-twitter">Twitter</option>
                <option value="fab fa-linkedin">Linkedin</option>
                <option value="fab fa-github">GitHub</option>
                <option value="fab fa-pinterest">Pinterest</option>
                <option value="fab fa-instagram">Instagram</option>
              </select>
            </div>
            <div class="col-lg pd-20 mt-2">
            	<label class="text-dark tx-bold" >Email:<span class="tx-danger">*</span></label>
              <input class="form-control" placeholder="Input box" type="email" name="emailedit" value="<?=$assoc['link']; unset($assoc['link']);?>">
              <button type="submit" class="btn btn-primary mt-2 text-center">Update</button>
            </div>
        
    </form>
</div>

  


 <?php 
 require_once 'footer.php';
  ?>