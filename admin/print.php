<?php include("session.php");
include("connection.php");

	$sel="select * from marks where id='".$_REQUEST['rid']."'";
	$f=mysql_query($sel);
	$rec=mysql_fetch_array($f);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table cellpadding="10" cellspacing="0" width="50%" align="center"  border="1">
	<tr>
			<td colspan="4"><h1>Rajasthan Technical University</h1></td>
	</tr>
	<tr><td>Roll No :</td><td><?php echo $rec[1]; ?></td><td>Students's name</td><td><?php echo $rec[2]; ?></td></tr>
	<tr><td>Father's Name :</td><td><?php echo $rec[3]; ?></td><td>Mother's name</td><td><?php echo $rec[4]; ?></td></tr>
	<tr><td>Subject 1</td><td><?php echo $rec[5]; ?></td><td>Subject 2</td><td><?php echo $rec[6]; ?></td></tr>
	<tr><td>Subject 3:</td><td><?php echo $rec[7]; ?></td><td>Subject 3</td><td><?php echo $rec[8]; ?></td></tr>
	<tr><td>Subject 4:</td><td><?php echo $rec[9]; ?></td><td>Subject 6</td><td><?php echo $rec[10]; ?></td></tr>
		<tr><td>Semester </td><td><?php echo $rec[11]; ?></td><td>Year</td><td><?php echo $rec[12]; ?></td></tr>
	<tr><td>Total :</td><td><?php echo $rec[13]; ?></td><td>Percentage</td><td><?php echo $rec[14]; ?></td></tr>
	<tr><td colspan="2">Division</td><td colspan="2"><?php echo $rec[13]; ?></td></tr>
</table>
</body>
</html>
