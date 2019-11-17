<?php
    include 'db_connection.php';
    $conn = OpenCon();
    echo "Connected Successfully \r\n";
	
	echo "<br>";
	
	$result = SelectDb($conn);
	if ($result->num_rows > 0) 
		 {
			// Output data of each row.
			while($row = $result->fetch_assoc()) 
			{
				echo "id: " . $row["id"]. 
				",<br> Client: ". $row["clients"]. 
				",<br>  Hitman: " . $row["hitmen"]. 
				",<br>  Target: " . $row["targets"]. 
				"<br><br>";
			}
		} else {
			echo "0 results";
		}
		
	echo "<br>";
	
    CloseCon($conn);
	echo "Closed Successfully";
?>