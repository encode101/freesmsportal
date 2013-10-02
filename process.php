<?php
	include('dbconf.php');
	$reqid=$_REQUEST['reqid'];
	switch($reqid)
	{
		case "1":			
			$tomobile=$_REQUEST['mobile'];
			$message=mysql_real_escape_string($_REQUEST["message"]);
			$tomobile = htmlspecialchars($tomobile);
			$message = htmlspecialchars($message);
			$query=mysql_query("INSERT INTO smslog(mobile, message) VALUES ('$tomobile','$message')");
			if(!$query){
				echo mysql_error();
				die;
			} else{
				echo "<span class='successMsg'>Message Sent Successfully!</span><br/><a href='index.php' style='display:block; margin:0 0px 0 25px;'>Send Another</a>";
			}
		break;
		
		/////////////////////	Load SMS History	/////////////////////////
		
		case "2":
		
			$query=mysql_query("SELECT * FROM smslog ORDER BY id DESC LIMIT 15");
				if(!$query){
					echo mysql_error();
					die;
				}
			?>
          <table class="smslog" width="100%">
            <?php
				while($row=mysql_fetch_array($query)){
					echo "<tr><td width='40'><img src='images/profile.png' class='profileImage' /></td><td>".$row['message']."</td></tr>";
				}
			?>
          </table>
          <?php
			
		break;
		
		default:
			echo "Invalid Request.";
	}
?>