<?php 
	require_once "header.php";
	$messages_query = mysqli_query($connection,"SELECT * FROM `messages` ORDER BY id DESC");
	
?>

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
  
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<nav class="breadcrumb sl-breadcrumb">
	    <a class="breadcrumb-item" href="index.php">CIT</a>
	    <span class="breadcrumb-item active">Portfolios</span>
	</nav>
<div class="sl-pagebody">
<h3 class="text-center">Partner List</h3>
<div class="text-right mr-2 fw-3"> 
	<strong><a class="text-right" href="partner-add.php">
	<i class="fa fa-plus"></i>Add</a></strong>
</div>

	<div class="table-wrapper">
    <table class="table display responsive nowrap" > <!-- id="datatable" eta bad dici -->
    <thead class="bg-danger text-center">
        <tr>
        	<th>SL</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
   <?php 
        foreach ($messages_query as $key => $value) { ?> 
	    	<tr class="mx-auto" <?php if ($value['status']==1): ?>
	    		style="font-weight: bold; font-size: 18px;"
	    	<?php endif ?> >
	        	<td><label><?=++$key?></label></td>
	            <td><?=$value['name']?></td>
	            <td><?=$value['email']?></td>
	            <td><?=$value['message']?></td>
	            <td >
	            	<a href="message-read.php?id=<?=$value['id'] ?>" class="btn btn-danger"><?php if ($value['status']==1): echo "Read";
	            	else: echo "Unread"; endif; ?> </a>
	            </td>
	        </tr>
   <?php } ?>
            
 	</tbody>
   </table>
  </div>

<?php require_once 'footer.php' ?>