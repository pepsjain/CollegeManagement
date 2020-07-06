<?php include("session.php");
include("connection.php");

	$sel="select * from marks where id='".$_REQUEST['rid']."'";
	$f=mysql_query($sel);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table cellpadding="0" cellspacing="0" align="center" width="" border="1">
	<tr>
			<td><h1>Rajasthan Technical Universcity</h1></td>
	</tr>
	<tr><td>Name:</td><td><?php echo $rec[1]; ?></td><td>Father's name</td><td><?php echo $rec[1]; ?></td></tr>
</table>
</body>
</html>
