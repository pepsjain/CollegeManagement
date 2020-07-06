<?php include("session.php");
include("connection.php");

$f=mysql_query("select * from login where id=1");
$rec=mysql_fetch_array($f);

if(isset($_REQUEST['Save']))
{
mysql_query("update login set uname='".mysql_escape_string($_REQUEST['uname'])."',
						password='".mysql_escape_string($_REQUEST['pass'])."' where id=1");		
header('location:chanpass.php');
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
<form method="post" enctype="multipart/form-data">
	<table cellpadding="0" cellspacing="0" align="center" width="1000" border="1">
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
				<td height="800" valign="top">
					<table cellpadding="0" cellspacing="10" align="center" border="0" width="50%">
							<tr>
									<td colspan="2" class="pagetitle">Change Password</td>
							</tr>
							<tr>
		<td class="label">User Name</td>
		<td><input  type="text" name="uname" value="<?php echo $rec[1];?>" required placeholder="Title"/></td>
							</tr>
							<tr>
									<td valign="top" class="label">Password</td>
									<td valign="top">
											
											<input  type="password" name="pass" value="<?php echo $rec[2];?>" required placeholder="Title"/>
									</td>
							</tr>
							<tr>
					<td colspan="2" align="right"><input type="submit" name="Save" value="Save" /></td></tr>
					</table>
				</td>
			</tr>
	</table>	
	</form>
</body>
</html>
