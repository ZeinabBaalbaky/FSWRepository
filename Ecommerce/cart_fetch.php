<?php
	include 'connection.php';
    session_start();
    $output['count']=0;
    $output['list']='';
				  $id = $_SESSION['id'];
				  $stmt2 = $connection->prepare("SELECT products.name,products.image,cart.quantity FROM cart,products where cart.product_id=products.id  and user_id= '$id' ");
                  $stmt2->execute();
				  $result2 = $stmt2->get_result();
				 

			foreach($result2 as $row){
				 $image = (!empty($row['image'])) ? 'Images/'.$row['image'] : 'images/noimage.jpg';
				$output['count']++;
				$output['list'] .= "
					<li>
						<a href='product.php?product=".$row['name']."'>
                          <div class='pull-left'>
								<img src='".$image."' class='img-circle' alt='User Image'>
							</div>
							<h4>
		                        <b>".$row['name']."</b>
		                        <small>&times; ".$row['quantity']."</small>
		                    </h4>
		                    <p>".$row['name']."</p>
						</a>
					</li>
				";
				
			}


	
	$connection->close();			  
	echo json_encode($output);


?>

