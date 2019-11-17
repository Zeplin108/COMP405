<?php
	// List of functions to query MySQL database (Mostly for SELECT statements) about various information needed for the website.
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
	 
	 function SelectProductDb($conn)
	 {
		$sql = "SELECT product_name, product_desc, price FROM `items`;";

		$result = $conn->query($sql);

		return $result;
	 }
	 
	 function SelectUserAndReviewDb($conn, $review_id)
	 {
		$sql = "SELECT comments, username FROM `reviews` WHERE review_id = " . $review_id.";";

		$result = $conn->query($sql);

		return $result;
	 }
	 
     
    function CloseCon($conn)
     {
		$conn -> close();
     }
       
?>