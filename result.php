<?php 
include("admin/connection.php");

$sel="SELECT DISTINCT * FROM marks";
$fet=mysql_query($sel);




?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Commercial Art</title>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>
<form method="post">
	<div id="main_div">
		<div><?php include("header.php"); ?></div>
		<div class="content">
				<table cellpadding="10" align="center" border="0" width="100%">
						<tr>
								<td>Select Semester:</td>
								<td>
								<select name="semyear">
										<option value="">---Select Semester And Year---</option>
										<?php while($re=mysql_fetch_array($fet))
										{ ?>
										<option><?php echo $re['semester']." Semester ".$re['year']; ?></option>
										<?php
										}
										?>
								</select>
								
								</td>
						</tr>
						<tr>
								<td>Enter Roll No:</td>
								<td><input type="text" name="rollno" value="" required /></td>
						</tr>
						<tr>
							<td colspan="2" align="center"><input type="submit" name="search" value="Submit" /></td>
						</tr>
						<tr>
								<td colspan="2">
										<?php
										if(isset($_REQUEST['search']))
										{
										$sel="SELECT DISTINCT * FROM marks";
										$fet=mysql_query($sel);
										$re=mysql_fetch_array($fet);
$sr="select * from marks where rno='".$_REQUEST['rollno']."' and semester='".$re['semester']."' and year='".$re['year']."'";
										$fetch=mysql_query($sr);
										$count=mysql_num_rows($fetch);
										$rec=mysql_fetch_array($fetch);
										if($count>0)
										{
										?>
										
									<table cellpadding="5" cellspacing="5" width="100%" align="center"  border="1">
	
	<tr><td>Roll No :</td><td><?php echo $rec[1]; ?></td><td>Students's name</td><td><?php echo $rec[2]; ?></td></tr>
	<tr><td>Father's Name :</td><td><?php echo $rec[3]; ?></td><td>Mother's name</td><td><?php echo $rec[4]; ?></td></tr>
	<tr><td>Subject 1</td><td><?php echo $rec[5]; ?></td><td>Subject 2</td><td><?php echo $rec[6]; ?></td></tr>
	<tr><td>Subject 3:</td><td><?php echo $rec[7]; ?></td><td>Subject 3</td><td><?php echo $rec[8]; ?></td></tr>
	<tr><td>Subject 4:</td><td><?php echo $rec[9]; ?></td><td>Subject 6</td><td><?php echo $rec[10]; ?></td></tr>
		<tr><td>Semester </td><td><?php echo $rec[11]; ?></td><td>Year</td><td><?php echo $rec[12]; ?></td></tr>
	<tr><td>Total :</td><td><?php echo $rec[13]; ?></td><td>Percentage</td><td><?php echo $rec[14]; ?> %</td></tr>
	<tr><td colspan="2">Division</td><td colspan="2"><?php echo $rec[13]; ?></td></tr>
</table>
						
										<?php
										}
										else { $msg="Record Not Found"; }
										}
										?>
								</td>
						</tr>
						<tr>
								<td colspan="2" align="center"><?php echo $msg; ?></td>
						</tr>
					</table>
		</div>
		<div style="height:300px; background-color:#CC9900;">
			<?php include("footer.php"); ?>
		</div>
	</div>
</form>
</body>
</html>
	