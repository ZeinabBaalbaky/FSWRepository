<?php
	include("connection.php"); 
    session_start();
	$output = '';

	$stmt = $connection->prepare("SELECT * FROM categories");
	$stmt->execute();
	$result = $stmt->get_result();

	foreach($result as $row){
		$output .= "
			<option value='".$row['id']."' class='append_items'>".$row['name']."</option>
		";
	}

	
	$connection->close();
	
	echo json_encode($output);


?>