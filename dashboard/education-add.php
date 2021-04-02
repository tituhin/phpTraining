
<?php
  require_once 'header.php';
  ?>
<nav class="breadcrumb sl-breadcrumb">
	<a class="breadcrumb-item" href="education.php">Education</a>
	<span class="breadcrumb-item active">add</span>
</nav>

<div class="sl-pagebody">
  <h4 class="text-dark body-title">add education</h4>
<div class="card pd-10 pd-sm-40">
    
    <form action="education-post.php" method="POST" class="col-lg-12 mx-auto" enctype="multipart/form-data">
        <div class="row">
           <div class="col-6 pd-20 mt-2">
           	<label for="name" class="text-dark tx-bold" >Degree: <span class="tx-danger">*</span></label>
              <input id="name" class="form-control" placeholder="Degree" type="text" name="degree"value="">
            </div>
            <div class="col-6 pd-20 mt-2">
            	<label for="icon" class="text-dark tx-bold" >Year : <span class="tx-danger">*</span></label>
              <input id="name" class="form-control" placeholder="Year" type="year" name="year"value="">
            </div>
            <div class="col-6 pd-20 mt-2 ">
              <label class="text-dark tx-bold" >Percentage :<span class="tx-danger">*</span></label>
              <input class="text-center" type="text"  id="rangevalue" name="percentage" value="" style="border:0; color:#0000A0; font-weight:bold;"><span>%</span>
              <div id="slider-range-max"></div> 
            </div>
             <div class="col-6 pd-20 mt-2"></div>
            <div class="col pd-20 mt-1 text-center">
              <button type="submit" class="btn btn-outline-success"><i class="icon fa fa-plus"></i> Add</button>
          </div>
    </form>      
</div>
<script>
  $( function() {
    $( "#slider-range-max" ).slider({
      range: "max",
      min: 1,
      max: 100,
      value: 50,
      slide: function( event, ui ) {
        $( "#rangevalue" ).val( ui.value );
      }
    });
    $( "#rangevalue" ).val( $( "#slider-range-max" ).slider( "value" ) );
  } );
  </script>

<?php require_once 'footer.php' ?>
