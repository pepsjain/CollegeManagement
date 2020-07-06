<?php include("session.php");
include("connection.php");
$er="select * from student where id='".$_SESSION['uid']."'";
$fr=mysql_query($er);
$rec=mysql_fetch_array($fr);



if(isset($_REQUEST['ok']))
{
mysql_query("update student set uname='".$_REQUEST['sname']."',
																	lname='".$_REQUEST['lname']."',
																	password='".$_REQUEST['pass']."',
																	mno='".$_REQUEST['mno']."',
																	mailid='".$_REQUEST['mid']."' where id='".$_SESSION['uid']."'");
																	header('location:editprofilestu.php');


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
				<td height="800" valign="top">
				<table cellpadding="10" cellspacing="10" align="center" width="50%" border="0">	
						<tr>
									<td colspan="2" align="center"><?php echo $msg; ?></td>
						</tr>
						<tr>
									<td colspan="2"><h1>Edit Profile Data</h1></td>
						</tr>
						<tr>
								<td>Student Name</td><td><input type="text" name="sname" value="<?php echo $rec[1]; ?>" required placeholder="Student Name" /></td>
						</tr>
						<tr>
								<td>Last Name</td><td><input type="text" name="lname" value="<?php echo $rec[2]; ?>" required placeholder="Last Name" /></td>
						</tr>
						<tr>
								<td>Password</td><td><input type="password" name="pass" value="<?php echo $rec[3]; ?>" required placeholder="Password" /></td>
						</tr>
						<tr>
								<td>Mobile No</td><td><input type="text" name="mno" value="<?php echo $rec[4]; ?>" required placeholder="Mobile No" /></td>
						</tr>
						<tr>
								<td>Mail Id</td><td><input type="text" name="mid" value="<?php echo $rec[5]; ?>" required placeholder="Mail Id" /></td>
						</tr>
						<tr>
								<td colspan="2" align="right"><input type="submit" name="ok" value="Register" /></td>
						</tr>	
				</table>
				</td>
			</tr>
	</table>	
	</form>
</body>
</html>
