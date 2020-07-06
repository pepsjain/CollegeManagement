<?php 
include("admin/connection.php");

if(isset($_REQUEST['ok']))
{
$f=mysql_query("select * from faculty where uname='".$_REQUEST['sname']."' or mailid='".$_REQUEST['mid']."'");
$c=mysql_num_rows($f);
if($c>0)
{
	$msg="User Already Registered";
}
else
{
mysql_query("insert into faculty set uname='".$_REQUEST['sname']."',
																	lname='".$_REQUEST['lname']."',
																	password='".$_REQUEST['pass']."',
																	mno='".$_REQUEST['mno']."',
																	mailid='".$_REQUEST['mid']."'");
																	header('location:thankyou.php');
}

}



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
				<table cellpadding="10" cellspacing="10" align="center" width="50%" border="0">	
						<tr>
									<td colspan="2" align="center"><?php echo $msg; ?></td>
						</tr>
						<tr>
									<td colspan="2"><h1>Faculty Registration </h1></td>
						</tr>
						<tr>
								<td>Faculty Name</td><td><input type="text" name="sname" value="" required placeholder="User Name" /></td>
						</tr>
						<tr>
								<td>Last Name</td><td><input type="text" name="lname" value="" required placeholder="Last Name" /></td>
						</tr>
						<tr>
								<td>Password</td><td><input type="password" name="pass" value="" required placeholder="Password" /></td>
						</tr>
						<tr>
								<td>Mobile No</td><td><input type="text" name="mno" value="" required placeholder="Mobile No" /></td>
						</tr>
						<tr>
								<td>Mail Id</td><td><input type="text" name="mid" value="" required placeholder="Mail Id" /></td>
						</tr>
						<tr>
								<td colspan="2" align="right"><input type="submit" name="ok" value="Register" /></td>
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
