<?php 
	require_once "header.php";
	$query = mysqli_query($connection,"SELECT * FROM `settings`");
	$row_cnt = mysqli_num_rows($query);
	mysqli_close($connection);
?>

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
  
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<nav class="breadcrumb sl-breadcrumb">
	    <a class="breadcrumb-item" href="index.php">CIT</a>
	    <span class="breadcrumb-item active">System setting</span>
	</nav>
<div class="sl-pagebody">
<h3 class="text-center">System Settings</h3>
<div class="text-right mr-2 fw-3"> 
	<?php if ($row_cnt > 0): ?>
			<strong><a class="text-right" href="setting-add.php"><i class="fa fa-edit"></i> Edit</a></strong>
		<?php else: ?>
			<strong><a class="text-right" href="setting-add.php"><i class="fa fa-plus"></i>Add</a></strong>
	<?php endif ?>
	
</div>

	<div class="table-wrapper">
    <table class="table display responsive nowrap" > <!-- id="datatable" eta bad dici -->
    <thead class="bg-grey text-center">
        <tr>
        	<th>SL</th>
            <th>Logo</th>
            <th>Copy Rights</th>
            <th>Tagline</th>
            <th>Office Address</th>
            <th>Email</th>
            <th>Phone</th>
            <th>About</th>
        </tr>
    </thead>
    <tbody>
   <?php 
        foreach ($query as $key => $value) : ?> 
	    	<tr>
	        	<td><label><?=++$key?></label></td>
	            <td><?=$value['logo']?></td>
	            <td><?=$value['copyright']?></td>
	             <td><?=$value['tagline']?></td>
	            <td><?=$value['office_address']?></td>
	            <td><?=$value['email']?></td>
	            <td><?=$value['phone']?></td>
	            <td><?=substr($value['about'],0,50)?></td>
	            <td >
	            	
	            </td>
	        </tr>
   <?php endforeach; ?>
            
 	</tbody>
   </table>
  </div>

<?php require_once 'footer.php' ?>