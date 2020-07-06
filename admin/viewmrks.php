<?php include("session.php");
include("connection.php");

if($_REQUEST['search']=="Search")
{
	$sel="select * from marks where semester='".$_REQUEST['sem']."' and year='".$_REQUEST['year']."'";
}
else
{
$sel="select * from marks";
}


$f=mysql_query($sel);
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
					<td align="center"><h1><?php echo $_SESSION['ut'] ?>Control Panal</h1></td>
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
					<td class="pagetitle">View Marks | Select Semester 
					<select name="sem">	
											<option>---Select Semester---</option>
											<option>I</option>
											<option>II</option>
											<option>III</option>
											<option>IV</option>
											<option>V</option>
											<option>VI</option>
											<option>VII</option>
											<option>VIII</option>
											
									</select> | Select Year <select name="year" required>	
											<option>---Select Year---</option>
												<?php for($yy=2014; $yy<=2050;$yy++)
													echo "<option value=$yy>$yy</option>";
												 ?>
									</select> <input type="submit" name="search" value="Search" /></td>
			</tr>
			<tr>
				<td height="800" valign="top">
							<table cellpadding="0" cellspacing="5" width="100%" align="center" border="0">
	<tr class="label" align="center">
	<td >Roll No</td><td>Name</td><td>Father's Name</td><td>Mother's Name</td><td>S1</td><td>S2</td>
	<td>S3</td><td>S4</td><td>S5</td><td>S6</td><td>Semester</td><td>Year</td><td>Total</td><td>Percentage</td><td>Division</td><td>Print</td>
						</tr>
						<?php 
						$sno=1;
						while($rec=mysql_fetch_array($f))
						{
						?>
						<tr align="center"> 
						
						<td><?php echo $rec[1];?></td>
						<td><?php echo $rec[2];?></td>
						<td><?php echo $rec[3];?></td>
						<td><?php echo $rec[4];?></td>
						<td><?php echo $rec[5];?></td>
						<td><?php echo $rec[6];?></td>
						<td><?php echo $rec[7];?></td>
						<td><?php echo $rec[8];?></td>
						<td><?php echo $rec[9];?></td>
						<td><?php echo $rec[10];?></td>
						<td><?php echo $rec[11];?></td>
						<td><?php echo $rec[12];?></td>
						<td><?php echo $rec[13];?></td>
						<td><?php echo $rec[14];?></td>
						<td><?php echo $rec[15];?></td>
						<td><a href="print.php?rid=<?php echo $rec[0];?>">Print</a></td>
						
						
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
