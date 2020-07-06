<?php 
include("admin/connection.php");

$f=mysql_query("select * from gals where id='".$_REQUEST['id']."'");





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
				 <?php while($rec=mysql_fetch_array($f))?>   
				<img src="admin/pics/<?php echo $rec[2]; ?>" />
		</div>
		<div style="height:300px; background-color:#CC9900;">
			<?php include("footer.php"); ?>
		</div>
	</div>
</body>
</html>
	