<?php 
include("admin/connection.php");

$sel="select * from news";
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
				<table cellpadding="0" cellspacing="0" align="center" width="90%" border="0">
					<tr>
							<td><h2>Latest News</h2> </td>
					</tr>
				<?php while($rec=mysql_fetch_array($fet))
				{
				?>
					<tr>
							<td><h4><?php echo $rec[1]; ?></h4></td>
					</tr>
					<tr>
							<td><?php echo $rec[2]; ?></td>
					</tr>
					<tr>
							<td><h5> Provided By : <?php echo $rec[3]; ?></h5></td>
					</tr>
					
				<?php
				}
				?>
				</table>
		</div>
		<div style="height:300px; background-color:#CC9900;">
			<?php include("footer.php"); ?>
		</div>
	</div>
</body>
</html>
