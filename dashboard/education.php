<?php 
	require_once "header.php";
	$users = mysqli_query($connection,"SELECT * FROM `education` ORDER BY year DESC ");
	mysqli_close($connection);
?>

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
  
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<nav class="breadcrumb sl-breadcrumb">
	    <a class="breadcrumb-item" href="index.php">CIT</a>
	    <span class="breadcrumb-item active">Education</span>
	</nav>
<div class="sl-pagebody">
<h3 class="text-center">Education History</h3>
<div class="text-right mr-2 fw-3"> 
	<strong><a class="text-right" href="education-add.php">
	<i class="fa fa-plus"></i>Add</a></strong>
</div>

	<div class="table-wrapper">
    <table class="table display responsive nowrap" > <!-- id="datatable" eta bad dici -->
    <thead class="bg-grey text-center">
        <tr>
        	<th>SL</th>
            <th>Degree</th>
            <th>Year</th>
            <th>Percentage</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
   <?php 
        foreach ($users as $key => $value) { ?> 
	    	<tr>
	        	<td><label><?=++$key?></label></td>
	            <td><?=$value['degree']?></td>
	            <td><?=$value['year']?></td>
	            <td><?=$value['percentage']?></td>
	            <td >
	            	<a href="social-edit.php?id=<?=$value['id'] ?>" class="btn btn-primary">Edit</a>
	                <button data-id="<?=$value['id']?>"class="btn btn-danger deleteUser">Delete</button>
	            </td>
	        </tr>
   <?php } ?>
            
 	</tbody>
   </table>
  </div>

<?php require_once 'footer.php' ?>