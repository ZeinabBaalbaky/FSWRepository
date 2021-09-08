<?php
    include 'conn.php';
	if(isset($_POST['upload'])){
		$id = $_POST['id'];


		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT * FROM products WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();
		
         $filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			$ext = pathinfo($filename, PATHINFO_EXTENSION);
			$new_filename =  $row['name'].'_'.time().'.'.$ext;
			move_uploaded_file($_FILES['photo']['tmp_name'], 'Images/'.$new_filename);	
		}
		else{
				$new_filename = '';
			}
          
		  

			$stmt = $conn->prepare("UPDATE products SET image=:photo WHERE id=:id");
			$stmt->execute(['photo'=>$new_filename, 'id'=>$id]);

	

		$pdo->close();

	}


	header('location: HomeStore.php');
?>