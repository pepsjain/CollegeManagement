<?php
session_start();
include("connection.php");

if($_SESSION['uname']!="")
{
header('location:cpanal.php');			
}


if($_REQUEST['login']=="Login")
{
	if($_REQUEST['type']==1)
	{
	$name="Administrator";
	$select="select * from login where uname='".$_REQUEST['uname']."'
							 and password='".$_REQUEST['pass']."'";
	}
	else if($_REQUEST['type']==2)
	{
	$name="Students";
	$select="select * from student where uname='".$_REQUEST['uname']."'
							 and password='".$_REQUEST['pass']."' and status=1";
	}
	else if($_REQUEST['type']==3)
	{
	$name="Faculty";
	$select="select * from faculty where uname='".$_REQUEST['uname']."'
							 and password='".$_REQUEST['pass']."' and status=1";
	}
	



	  $f=mysql_query($select);
		$c=mysql_num_rows($f);
		$rec=mysql_fetch_array($f);
		if($c>0)
		{
		$_SESSION['ut']=$name;
		$_SESSION['type']=$_REQUEST['type'];
		$_SESSION['uid']=$rec[0];
		header('location:cpanal.php');			
		}					 
		else
		{
		$msg="Invalid User";
		}


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
	<table cellpadding="0" cellspacing="15" align="center" border="0">
			<tr>
					<td height="100" colspan="2" align="center"><h1>Control Panal Login</h1></td>
			</tr>
			<tr>
					<td ><h4>User Name</h4></td><td><input type="text" name="uname" value="" placeholder="User Name" required/></td> 
			</tr>
			<tr>
					<td><h4>Password</h4></td><td><input type="password" name="pass" value="" placeholder="Password" required/></td> 
			</tr>
			<tr>
					<td><h4>Select Type</h4></td><td>
					<select name="type" required>
						<option value="">----Select Type----</option>
						<option value="1">Admin</option>
						<option value="2">Student</option>
						<option value="3">Faculty</option>
					</select></td> 
			</tr>
			<tr>
				<td colspan="2" align="right"><input type="submit" name="login" value="Login" /></td>
			</tr>
			<tr>
				<td colspan="2" align="right"><?php echo $msg; ?></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><a href="../index.php">Back To Web Site Home Page</a></td>
			</tr>
	</table>
	</form>
</body>
</html>
