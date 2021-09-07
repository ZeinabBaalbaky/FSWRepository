	<?php include 'navbar.php'; ?>
<?php

	if(!isset($_SESSION['id'])){
		header('location: HomeUser.php');
	}
?>
<?php include 'header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">


	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">

	        		<div class="box box-solid">
	        			<div class="box-body">

	        				<div class="col-sm-9">
	        					<div class="row">
	        						<div class="col-sm-3">
	        							<h4>Name:</h4>
	        							<h4>Email:</h4>
	        						</div>
	        						<div class="col-sm-9">
	        							<h4><?php echo $_SESSION['first_name'].' '.$_SESSION['last_name']; ?>
	        							</h4>
	        							<h4><?php echo $_SESSION['email']; ?></h4>

	        						</div>
	        					</div>
	        				</div>
	        			</div>
	        		</div>

	        	</div>

	        </div>
	      </section>
	     
	    </div>
	  </div>
  
  	<?php include 'footer.php'; ?>

</div>

</body>
</html>