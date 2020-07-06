<?php 
include("admin/connection.php");

$sel="select * from pages where id in(3,10,11)";
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
	<div id="main_div">
		<div><?php include("header.php"); ?></div>
		<div class="content">
				<h1 style="padding-left:25px; text-align:center; color:#FF6600; font-size:50px;">Thank You !</h1>
		</div>
		<div style="height:300px; background-color:#CC9900;">
			<?php include("footer.php"); ?>
		</div>
	</div>
</body>
</html>
