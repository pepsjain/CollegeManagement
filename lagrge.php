<?php 
include("admin/connection.php");

 $s="select * from gals where id='".$_REQUEST['id']."'";

$f=mysql_query($s);

$r=mysql_fetch_array($f);



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Commercial Art</title>
<link href="style.css" type="text/css" rel="stylesheet" />
 
		<style type="text/css">
		.quik_links1 ul li {
			margin-left:0px;
			font-weight:normal;
			}
		</style>
</head>

<body>
	<div id="main_div">
		<div><?php include("header.php"); ?></div>
		<div class="content">
			<table align="center" width="100%" border="0" cellspacing="0"  cellpadding="0">
				<tr>
					<td height="10"></td>
				</tr>
				<tr>
						<td align="center"><h1><?php echo $r[1]; ?></h1></td>
				</tr>
				<tr>
					<td align="center">				  
				<img src="admin/pics/<?php echo $r[2]; ?>" height="500" width="500" /></td>
				</tr>
				<tr>
				<td align="center">		<a href="gals.php">  Back To Gallery</a></td>
				</tr>
					<tr>
					<td height="10"></td>
				</tr>
			</table>
			</div>
		<div style="height:300px; background-color:#CC9900;">
			<?php include("footer.php"); ?>
		</div>
	</div>
</body>
</html>
	