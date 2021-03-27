<?php 
	require_once "header.php";
	$users = mysqli_query($connection,"SELECT * FROM `users` WHERE status = 1");
	mysqli_close($connection);
?>

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
  
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<nav class="breadcrumb sl-breadcrumb">
	    <a class="breadcrumb-item" href="index.php">CIT</a>
	    <span class="breadcrumb-item active">Users</span>
	</nav>
<div class="sl-pagebody">
<h3 class="text-dark body-title">User List</h3>
<div class="card pd-10 pd-sm-40">
    
    <?php if (isset($_SESSION['user_deleted'])) :?>
	
		<div class="alert alert-danger" role="alert">
		            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		            <span aria-hidden="true">×</span>
		            </button>
		      <strong class="d-block d-sm-inline-block-force"><?=$_SESSION['user_deleted']?>!</strong></div>
		<?php unset($_SESSION['user_deleted']);	endif; ?>
		<?php if (isset($_SESSION['user_edited'])) :?>
			
		<div class="alert alert-success" role="alert">
		            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		            <span aria-hidden="true">×</span>
		            </button>
		      <strong class="d-block d-sm-inline-block-force">Well done!</strong> <?=$_SESSION['user_edited']?>
		</div>
		<?php unset($_SESSION['user_edited']);	endif; ?>

	<div class="table-wrapper">
    <table class="table display responsive nowrap" id="datatable">
    <thead class="bg-info">
        <tr>
        	<th>SL</th>
            <th>Name</th>
            <th>Email</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
   <?php 
        foreach ($users as $key => $value) { ?> 

	    	<tr>
	        	<td>
	            	<label><?=++$key?></label>
	            </td>
	            <td><?=$value['name']?></td>
	            <td><?=$value['email']?></td>
	            <td><img width="50" src="upload/<?=$value['profileImage']?>"></td>
	            <td>
	            	<a href="user-edit.php?user-edit=<?=$value['id'] ?>" class="btn btn-primary">Edit</a>
	                <button data-id="<?=$value['id']?>"class="btn btn-danger deleteUser">Delete</button>
	            </td>
	        </tr>
   <?php } ?>
            
 	</tbody>
   </table>
  </div>

</div>
	<script type="text/javascript">
		$(document).ready( function () {
    $('#datatable').DataTable();
	} );
		
	 // Sweet Alert
	$('.deleteUser').click(function(){

		let id = $(this).attr("data-id");
		swal({
			  title: "Are you sure?",
			  text: "Once deleted, you will not be able to recover this imaginary file!",
			  icon: "warning",
			  buttons: true,
			  dangerMode: true,
			})
			.then((willDelete) => {
			  if (willDelete) {
			    swal("Poof! Your imaginary file has been deleted!", {
			      icon: "success",
			    });
			    window.setTimeout(function(){
			    	window.location.href = "user-delete-edit.php?user-delete="+id;


			    }, 3000);
			  } else {
			    swal("Your imaginary file is safe!");
			  }
			});
	})
	</script>

<?php require_once 'footer.php' ?>