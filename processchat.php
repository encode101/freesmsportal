<?php 
	include("dbconf.php");
	
	$reqid = $_REQUEST['reqid'];
		
	switch($reqid){
		case "1":
		// Insert Request
		mysql_query("INSERT INTO chatroom(message) VALUES('$_REQUEST[chatmessage]')");
		break;
		case "2":
		// Retrieve Request
		$query = mysql_query("SELECT * FROM chatroom");
		while($row=mysql_fetch_array($query)){
			//echo $row['username'];
			echo "<li>".$row['message']."</li>";
		}		
		break;
		default: echo "Invlaid Request";		
	}
	
?>