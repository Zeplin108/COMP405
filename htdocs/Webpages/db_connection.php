<?php
    function OpenCon()
     {
		 $dbhost = "localhost";
		 $dbuser = "testUser1";
		 $dbpass = "newPassword";
		 $db = "website";
		 $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);
		 
		 return $conn;
     }

	 function SelectAllDb($conn)
	 {
		 $sql = "SELECT item_id, product_name, product_desc, price, date_created, review_id, user_id FROM `items`;";
		 
		 $result = $conn->query($sql);
		 
		 return $result;
	 }
	 
	 function SelectReviewsDb($conn)
	 {
		 $sql = "SELECT product_name, product_desc, review_id, user_id FROM `items`;";
		 
		 $result = $conn->query($sql);
		 
		 return $result;
	 }
     
    function CloseCon($conn)
     {
		$conn -> close();
     }
       
?>