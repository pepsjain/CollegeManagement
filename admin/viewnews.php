<?php include("session.php");
include("connection.php");
$f=mysql_query("select * from news");

if(isset($_REQUEST['delid']))
{
mysql_query("delete from news where id='".$_REQUEST['delid']."'");
header('location:viewnews.php');
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="../style.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<table cellpadding="0" cellspacing="0" align="center" width="1000" border="0">
			<tr>
					<td align="center"><h1>Control Panal</h1></td>
			</tr>
			
			<tr>
				<td><?php
				 if($_SESSION['type']==1) { include("admin_header.php"); }
				 if($_SESSION['type']==2) { include("student_admin_header.php"); }
  			 if($_SESSION['type']==3) { include("faculty_admin_header.php"); }
				  ?></td>
			</tr>
			<tr>
					<td height="20"></td>
			</tr>
			<tr>
					<td class="pagetitle">View News</td>
			</tr>
			<tr>
					<td height="20"></td>
			</tr>
			<tr>
				<td height="800" valign="top">
					<table cellpadding="10" cellspacing="0" align="center" border="0">
						<tr class="label"><td >Sno</td><td>News Title</td><td>News</td><td>Provided By</td><td>Update</td><td>Delete</td></tr>
						<?php 
						$sno=1;
						while($rec=mysql_fetch_array($f))
						{
						?>
						<tr>
						<td><?php echo $sno; ?></td>
						<td><?php echo $rec[1];?></td>
						<td><?php echo $rec[2];?></td>
						<td><?php echo $rec[3];?></td>
						<td><a href="addnews.php?nid=<?php echo $rec[0];?>">Update</a></td>
							<td><a href="viewnews.php?delid=<?php echo $rec[0];?>">Delete</a></td>
						</tr>
						<?php
						$sno++;
						}
						?>
					</table>
				</td>
			</tr>
	</table>	
</body>
</html>
