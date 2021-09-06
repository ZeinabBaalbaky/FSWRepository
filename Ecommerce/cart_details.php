<?php
	include 'connection.php';
	session_start();
    $id = $_SESSION['id'];
	$output = '';
	$total = 0;

	$query="select cart.id as cartid,cart.quantity as quantity, products.image as image,products.name as name,products.price as price
           from cart,products
           where cart.product_id = products.id and cart.user_id='$id'";
        
	$stmt = $connection->prepare("select cart.id as cartid,cart.quantity as quantity, products.image as image,products.name as name,products.price as price
           from cart,products
           where cart.product_id = products.id and cart.user_id='$id'");
    $stmt->execute();
	$result= $stmt->get_result();
	while($row = $result->fetch_assoc()){
		$image = (!empty($row['image'])) ? 'Images/'.$row['image'] : 'Images/noimage.jpg';
				$subtotal = $row['price']*$row['quantity'];
				$total += $subtotal;
				$output .= "
					<tr>
						<td><button type='button' data-id='".$row['cartid']."' class='btn btn-danger btn-flat cart_delete'><i class='fa fa-remove'></i></button></td>
						<td><img src='".$image."' width='30px' height='30px'></td>
						<td>".$row['name']."</td>
					    <td>&#36; ".number_format($row['price'], 2)."</td>
						<td class='input-group'>
							<span class='input-group-btn'>
            					<button type='button' id='minus' class='btn btn-default btn-flat minus' data-id='".$row['cartid']."'><i class='fa fa-minus'></i></button>
            				</span>
            				<input type='text' class='form-control' value='".$row['quantity']."' id='qty_".$row['cartid']."'>
				            <span class='input-group-btn'>
				                <button type='button' id='add' class='btn btn-default btn-flat add' data-id='".$row['cartid']."'><i class='fa fa-plus'></i>
				                </button>
				            </span>
						</td>
		                <td>&#36; ".number_format($subtotal, 2)."</td>
					</tr>
				";
			}
			$output .= "
				<tr>
					<td colspan='5' align='right'><b>Total</b></td>
					
					<td><b>&#36; ".number_format($total, 2)."</b></td>
				<tr>
			";
            $_SESSION['total']=$total;


	
	$connection->close();			  
	echo json_encode($output);


?>

