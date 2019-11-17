<?php
    function OpenCon()
     {
		 $dbhost = "localhost";
		 $dbuser = "testUser1";
		 $dbpass = "newPassword";
		 $db = "example";
		 $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);
		 
		 return $conn;
     }

	 function SelectDb($conn)
	 {
		 $sql = "SELECT id, clients, hitmen, targets FROM `table1`;";
		 
		 $result = $conn->query($sql);
		 
		 return $result;
	 }
     
    function CloseCon($conn)
     {
		$conn -> close();
     }
       
?>