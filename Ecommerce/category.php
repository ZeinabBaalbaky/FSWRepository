
<?php include 'header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'navbar.php';
					$id = $_GET['category'];
					$name = $_GET['name'];
					$_SESSION['CatId'] =$id ;
					$_SESSION['CatName'] = $name;
					?>
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
		            <h1 class="page-header"><?php echo $name; ?></h1>
		       		<?php
					include 'connection.php'; 



	try{
		$stmt = $connection->prepare("SELECT * FROM categories WHERE id = '$id'");
		$stmt->execute();
		$result = $stmt->get_result();
		$row = $result->fetch_assoc();
		$catName = $row['name'];
		$stmt2 = $connection->prepare("SELECT * FROM products WHERE category_id = '$id'");
	    $stmt2->execute();
		$result = $stmt2->get_result();

	}
	catch(PDOException $e){
		echo "There is some problem in connection: " . $e->getMessage();
	}

		       			
		       			try{
		       			 	$inc = 3;	
						    while($row = $result->fetch_assoc()) {
						    	$image = (!empty($row['image'])) ? 'Images/'.$row['image'] : 'Images/noimage.jpg';
						    	$inc = ($inc == 3) ? 1 : $inc + 1;
	       						if($inc == 1) echo "<div class='row'>";
								if(isset($_SESSION['id'])){
	       						echo 
	       							" <div class='col-sm-4'>
	       								<div class='box box-solid'>
		       								<div class='box-body prod-body'>
		       									<img src='".$image."' width='100%' height='230px' class='thumbnail'>
		       									<h5><a href='product.php?product=".$row['id']."'>".$row['name']."</a></h5>
											
		       								</div>
		       								<div class='box-footer'>
		       									<b>&#36; ".number_format($row['price'], 2)."</b>";
												if($row['quantity'] >0){ echo "
												<a href='addCart.php?product=".$row['id']."' class='pull-right cart'><i class='fa fa-shopping-cart'></i></a> ";}
												if($row['quantity'] ==0){ echo "<h5 class='pull-right'>out of stock!</h5>";}
												echo "&ensp;<i class='fal fa-heart'></i>
		       								</div>

											
	       								</div>
	       							</div>
	       						";
								}
								else{
									echo "
	       							<div class='col-sm-4'>
	       								<div class='box box-solid'>
		       								<div class='box-body prod-body'>
		       									<img src='".$image."' width='100%' height='230px' class='thumbnail'>
		       									<h5><a href='product.php?product=".$row['id']."'>".$row['name']."</a></h5>
		       								</div>
		       								<div class='box-footer'>
		       									<b>&#36; ".number_format($row['price'], 2)."</b>
		       								</div>
	       								</div>
	       							</div>
	       						";
									
								}
	       						if($inc == 3) echo "</div>";
						    }
						    if($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>"; 
							if($inc == 2) echo "<div class='col-sm-4'></div></div>";
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}


		       		?> 
	        	</div>
	        	<div class="col-sm-3">
	        	</div>
	        </div>
	      </section>
	     </form>
	    </div>
	  </div>
  
  	<?php include 'footer.php'; ?>
</div>

<?php include 'scripts1.php'; ?>
<script>
$(document).ready(function(){
  $(".fa-heart").click(function(){

    $(this).toggleClass("heart");

	
  });
});
</script>
</body>
</html>