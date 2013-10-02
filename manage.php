<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Manage</title>
</head>
<?php 
if ($_POST['submits'])
{
	include('dbconf.php');
	$query=(mysql_query("DELETE FROM smslog WHERE id=$_REQUEST[ids]"));
	echo $query;
	if(!$query)
	{
		echo ("BAD");
	}
	else
	{
		echo ("GOD");
	}
}
 ?>
<body>

    <table cellspacing="0" align="center" style="font: italic 11px Verdana, Arial, Helvetica, sans-serif; overflow:hidden; overflow:hidden;" id="msgList">
      <tr>
        <td width="200px"><div align="center"></div></td>
        <td width="500px">&nbsp;</td>
        <td width="200px">&nbsp;</td>            
        </tr>
		<?php
        include('dbconf.php');
        $srecentsms=mysql_query("select * from smslog ORDER BY ID DESC LIMIT 100");
        while($row=mysql_fetch_array($srecentsms))
        {
			echo "
			<tr style='background:#09C; color:#FFF;'>
			<td>".$row['id']."</td>
				<td style='overflow:hidden'><input type='text' value='".$row['message']."'></input>
				</td>
				<td style='width:800px;'>
					<form action=".$_SERVER["PHP_SELF"]." method='POST'>
						<input type='hidden' name='ids' value=".$row['id']." />
						<input type='submit' name='submits' value='Delete'>
					</form>
				</td>
			</tr>
			<tr style='background:#FFF; height:5px;'>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			";
			}
        ?>
        </table>
</body>
</html>