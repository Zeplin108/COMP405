<?php
    include 'db_connection.php';
    $conn = OpenCon();
    echo "Connected Successfully";
	
	echo "<br>";
	
	$result = SelectAllDb($conn);
	if ($result->num_rows > 0) 
		 {
			// Output data of each row.
			while($row = $result->fetch_assoc()) 
			{
				echo "item_id: " . $row["item_id"]. 
				",<br> product_name: ". $row["product_name"].
				",<br> product_desc: ". $row["product_desc"].
				",<br>  price: " . $row["price"]. 
				",<br>  date_created: " . $row["date_created"].
				",<br>  review_id: " . $row["review_id"]. 
				",<br>  user_id: " . $row["user_id"]. 
				"<br><br>";
			}
		} else {
			echo "0 results";
		}
		
	echo '<br>';
	
    CloseCon($conn);
	echo "Closed Successfully";
?>