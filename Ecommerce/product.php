<?php
    include 'connection.php'; 
	$productID = $_GET['product'];

	try{	
	    $stmt = $connection->prepare("SELECT products.name , products.price,products.image,categories.id as catID,categories.name AS catname, products.id AS prodid FROM products LEFT JOIN categories ON categories.id=products.category_id WHERE products.id = '$productID'");
	    $stmt->execute();
		$result = $stmt->get_result();	
        $product = $result->fetch_assoc();
		//$result = $stmt->get_result();

		
	}
	catch(PDOException $e){
		echo "There is some problem in connection: " . $e->getMessage();
	}


?>
<?php include 'header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">

<div class="wrapper">

	<?php include 'navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<div class="callout" id="callout" style="display:block">
	        			<button type="button" class="close"><span aria-hidden="true">&times;</span></button>
	        			<span class="message"></span>
	        		</div>
		            <div class="row">
		            	<div class="col-sm-6">
		            		<img src="<?php echo (!empty($product['image'])) ? 'Images/'.$product['image'] : 'Images/noimage.jpg'; ?>" width="100%" class="zoom" data-magnify-src="Images/large-<?php echo $product['image']; ?>">
		            		<br><br>
                            <h3><a href='category.php?category=<?php echo $product['catID']; ?>&name=<?php echo $product['catname']; ?>'>Back To List</a></h3>
		            	</div>
		            	<div class="col-sm-6">
		            		<h1><?php echo $product['name']; ?></h1>
		            		<h3><b>Price:</b>&#36; <?php echo number_format($product['price'], 2); ?></h3>
		            		<h3><b>Category:</b> <a href='category.php?category=<?php echo $product['catID']; ?>'><?php echo $product['catname']; ?></a></h3>
		            	</div>
		            </div>
		            <br>
				    <div class="fb-comments" data-href="http://localhost/ecommerce/product.php?product=<?php echo $productID; ?>" data-numposts="10" width="100%"></div> 
	        	</div>
	        	<div class="col-sm-3">
	        	</div>
	        </div>
	      </section>
	     
	    </div>
	  </div> 
  	<?php include 'footer.php'; ?>
</div>

<?php include 'scripts.php'; ?>
<script>
$(function(){
	$('#add').click(function(e){
		e.preventDefault();
		var quantity = $('#quantity').val();
		quantity++;
		$('#quantity').val(quantity);
	});
	$('#minus').click(function(e){
		e.preventDefault();
		var quantity = $('#quantity').val();
		if(quantity > 1){
			quantity--;
		}
		$('#quantity').val(quantity);
	});

});
</script>
</body>
</html>