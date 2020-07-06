<?php include("session.php");
include("connection.php");

$f=mysql_query("select * from gals where id='".$_REQUEST['iid']."'");
$rec=mysql_fetch_array($f);

if(isset($_REQUEST['Save']))
{

	if(isset($_REQUEST['iid']))
	{
	
	}
	else
	{
	$total=$_REQUEST['s1']+$_REQUEST['s2']+$_REQUEST['s3']+$_REQUEST['s4']+$_REQUEST['s5']+$_REQUEST['s6'];
	$per=$total*(100/600);
	if($per>=60)
	{
		$div="First";
	}
	else if($per>=45)
	{
		$div="Second";
	}
	else if($per>=36)
	{
		$div="Third";
	}
	else
	{
	$div="Fail";
	}
	
$insert="insert into marks set rno=".$_REQUEST['rno'].",
						                         sname='".$_REQUEST['sname']."',
																		 fname='".$_REQUEST['fname']."',
						                         mname='".$_REQUEST['mname']."',
																		 s1=".$_REQUEST['s1'].",
						                         s2=".$_REQUEST['s2'].",
																		 s3=".$_REQUEST['s3'].",
						                         s4=".$_REQUEST['s4'].",
																		 s5=".$_REQUEST['s5'].",
						                         s6=".$_REQUEST['s6'].",
																		 semester='".$_REQUEST['sem']."',
						                         year='".$_REQUEST['year']."',
																		 totalm=".$total.",
						                         pert=".$per.",
																		 divp='".$div."'";
	
	mysql_query($insert);

	}
header('location:viewmrks.php');
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
				<td height="800" valign="top" align="left">
						<table cellpadding="10" cellspacing="10" align="center"  border="0">
							<tr>
									<td colspan="4" align="center"><h2>Add Marks </h2></td>
							</tr>
							<tr>
									<td>Roll No:</td><td><input type="text" name="rno" value="" placeholder="Roll No" required/></td>
									<td>Student's Name</td>
								<td><input type="text" name="sname" value="" placeholder="Student's Name" required /></td>
							</tr>
							<tr>
								<td>Father's Name</td>
								<td><input type="text" name="fname" value="" placeholder="Father's Name" required /></td>
									<td>Mother's Name</td>
								<td><input type="text" name="mname" value="" placeholder="Mother's Name" required /></td>
							</tr>
							<tr>
									<td>S1</td><td><input type="text" name="s1" value=""  placeholder="Subject One" required /></td>
									<td>S2</td><td><input type="text" name="s2" value=""  placeholder="Subject Two" required /></td>
									
							</tr>
								<tr>
									<td>S3</td><td><input type="text" name="s3" value=""  placeholder="Subject Three" required /></td>
									<td>S4</td><td><input type="text" name="s4" value=""  placeholder="Subject Four" required /></td>
									
							</tr>
								<tr>
									<td>S5</td><td><input type="text" name="s5" value=""  placeholder="Subject Five" required /></td>
									<td>S6</td><td><input type="text" name="s6" value=""  placeholder="Subject Six" required /></td>
									
							</tr>
							<tr>
									<td>Semester</td>
									<td>
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
											
									</select>
									</td>
									<td>Year</td>
									<td><select name="year" required>	
											<option>---Select Year---</option>
												<?php for($yy=2014; $yy<=2050;$yy++)
													echo "<option value=$yy>$yy</option>";
												 ?>
											
									</select></td>
							</tr>
							<tr>
								<td colspan="4" align="right"><input type="submit" name="Save" value="Save" /></td>
							</tr>
						</table>
				</td>
			</tr>
	</table>	
</form>
</body>
</html>
