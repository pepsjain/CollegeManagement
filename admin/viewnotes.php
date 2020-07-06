<?php include("session.php");
include("connection.php");

if($_REQUEST['search']=="Search")
{
echo	$sel="select * from notes where sem='".$_REQUEST['sem']."' and title like '%".$_REQUEST['crt']."%'";
}
else
{
$sel="select * from notes";
}

$f=mysql_query($sel);

if(isset($_REQUEST['delid']))
{
$fd=mysql_query("select * from notes where id='".$_REQUEST['delid']."'");
$rd=mysql_fetch_array($fd);
unlink("notes/".$rd[2]);

mysql_query("delete from notes where id='".$_REQUEST['delid']."'");
header('location:viewnotes.php');
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
<form method="post">
	<table cellpadding="0" cellspacing="0" align="center" width="1000" border="1">
			<tr>
					<td align="center"><h1><?php echo $_SESSION['ut'] ?> Control Panal</h1></td>
			</tr>
			<tr>
				<td>
				<?php
				 if($_SESSION['type']==1) { include("admin_header.php"); }
				 if($_SESSION['type']==2) { include("student_admin_header.php"); }
  			 if($_SESSION['type']==3) { include("faculty_admin_header.php"); }
				  ?></td>
			</tr>
			<tr>
					<td class="pagetitle">View Downloads | Select Semester 
					<select name="sem">	
											<option value="">---Select Semester---</option>
											<option>I</option>
											<option>II</option>
											<option>III</option>
											<option>IV</option>
											<option>V</option>
											<option>VI</option>
											<option>VII</option>
											<option>VIII</option>
										</select>
											| Enter Detail <input type="text" name="crt" value="" />
								<input type="submit" name="search" value="Search" /></td>
			</tr>
			<tr>
				<td height="800" valign="top">
				<table cellpadding="10" cellspacing="0" width="100%" align="center" border="0">
						<tr class="label"><td >Sno</td><td>Title</td><td>Notes / Files</td><td>Semester</td><td>Update</td><td>Delete</td>
						</tr>
						<?php 
						$sno=1;
						while($rec=mysql_fetch_array($f))
						{
						?>
						<tr>
						<td><?php echo $sno; ?></td>
						<td><?php echo $rec[1];?></td>
						<td><a href="notes/<?php echo $rec[2];?>" download>Download >>>> <?php echo $rec[2];?></a></td>
						<td><?php echo $rec[3];?></td>
						<td><a href="addnotes.php?nid=<?php echo $rec[0];?>">Update</a></td>
						<td><a href="viewnotes.php?delid=<?php echo $rec[0];?>">Delete</a></td>
						</tr>
						<?php
						$sno++;
						}
						?>
					</table>
				</td>
			</tr>
	</table>	
	</form>
</body>
</html>
