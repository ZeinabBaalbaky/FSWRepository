<?php 
	  include("connection.php"); 

	  $id= $_SESSION['id'];
	  $query = "Select * from products where store_id ='$id'";
      $stmt = $connection->prepare($query);
      $stmt->execute();
      $result = $stmt->get_result();

?>


<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Products
        <a href="#addnew" data-toggle="modal" class="btn btn-info pull-right fa fa-plus" id="addproduct">Add New</a>
		<!-- <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat" id="addproduct"><i class="fa fa-plus"></i> New</a> -->
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Image</th>
						<th>Actions</th>
                    </tr>
                </thead>
					<?php
					while($row = $result->fetch_assoc()){
						 $image = (!empty($row['image'])) ? 'Images/'.$row['image'] : '/Images/noimage.jpg';
				?>
				<tr>
				<td><?php echo $row["name"]; ?></td>
				<td><?php echo $row["price"]; ?></td>
				<td><?php echo $row["quantity"]; ?></td>
				<td><?php echo " <img src='".$image."' height='50px' width='50px'> <span class='pull-right'><a href='#edit_photo' class='photo' data-toggle='modal' data-id='".$row['id']."'><i class='fa fa-edit'></i></a></span>" ?></td>
				<td><?php echo "
				   
                              <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['id']."'><i class='fa fa-edit'></i> Edit</button>
                              <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['id']."'><i class='fa fa-trash'></i> Delete</button> " ?></td>
                            
					<?php
					}
				?>
            </table>
        </div>

    </div>
	    <?php include 'products_modal.php'; ?>
    <?php include 'products_modal2.php'; ?>
</div>
<?php include 'scripts.php'; ?>
<?php include 'scripts1.php'; ?>
<script>
$(function(){
  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
    $(document).on('click', '.photo', function(e){
    e.preventDefault();
    $('#edit_photo').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.photo', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.desc', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

  $('#select_category').change(function(){
    var val = $(this).val();
    if(val == 0){
      window.location = 'products.php';
    }
    else{
      window.location = 'products.php?category='+val;
    }
  });

  $('#addproduct').click(function(e){
    e.preventDefault();
    getCategory();
  });

  $("#addnew").on("hidden.bs.modal", function () {
      $('.append_items').remove();
  });

  $("#edit").on("hidden.bs.modal", function () {
      $('.append_items').remove();
  });

});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'products_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('#desc').html(response.description);
      $('.name').html(response.prodname);
      $('.prodid').val(response.prodid);
      $('#edit_name').val(response.prodname);
      $('#catselected').val(response.category_id).html(response.catname);
      $('#edit_price').val(response.price);
	  $('#edit_quantity').val(response.quantity);
      CKEDITOR.instances["editor2"].setData(response.description);
      getCategory();
    }
  });
}
function getCategory(){
  $.ajax({
    type: 'POST',
    url: 'category_fetch.php',
    dataType: 'json',
    success:function(response){
      $('#category').append(response);
      $('#edit_category').append(response);
    }
  });
}
</script>




