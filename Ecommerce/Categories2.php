<?php 
	  include("connection.php"); 

	  $id= $_SESSION['id'];
	  $query = "Select * from categories";
      $stmt = $connection->prepare($query);
      $stmt->execute();
      $result = $stmt->get_result();

?>


<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Categories
        <a href="#addnew" data-toggle="modal" class="btn btn-info pull-right fa fa-plus" id="addproduct">Add New</a>
		<!-- <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat" id="addproduct"><i class="fa fa-plus"></i> New</a> -->
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Category Name</th>
						<th>Actions</th>
                    </tr>
                </thead>
				<?php	while($row = $result->fetch_assoc()){?>
				<tr>
				<td><?php echo $row["name"]; ?></td>
				<td><?php echo "
				   
                              <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['id']."'><i class='fa fa-edit'></i> Edit</button>
                              <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['id']."'><i class='fa fa-trash'></i> Delete</button> " ?></td>
                            
					<?php
					}
				?>
            </table>
        </div>
    <?php include 'category_modal.php'; ?>
    </div>

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

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
    $(document).on('click', '.fa-plus', function(e){
    e.preventDefault();
    $('#addnewcat').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'category_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.catid').val(response.id);
      $('#edit_name').val(response.name);
      $('.catname').html(response.name);
    }
  });
}
</script>


