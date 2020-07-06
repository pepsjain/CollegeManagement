<?php 
include("admin/connection.php");

$sel="select * from pages where id='".$_REQUEST['pageid']."'";
$fet=mysql_query($sel);

if(isset($_REQUEST['ok']))
{
mysql_query("insert into feedback set name='".$_REQUEST['un']."',
																			mno='".$_REQUEST['mno']."',
																			mailid='".$_REQUEST['mi']."',
																			feedback='".$_REQUEST['fback']."'");
			header('location:thankyou.php');													
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
	<div id="main_div">
		<div><?php include("header.php"); ?></div>
		<div class="content" style="clear:both;">
				<table cellpadding="0" cellspacing="0" align="center" width="90%" border="0">
				<?php while($rec=mysql_fetch_array($fet))
				{
				?>
					<tr>
							<td><h2><?php echo $rec[1]; ?></h2></td>
					</tr>
					<tr>
							<td>
							<?php echo $rec[2]; ?></td>
					</tr>
				<?php
				}
				?>
				</table>
				<?php if($_REQUEST['pageid']==12) { ?>
				<form method="post">
						<table cellpadding="0" cellspacing="0" align="left" border="0" width="50%" style="margin-left:48px;">
							<tr>
								<td colspan="2"><h2>Feedback</h2></td>
								
							</tr>
							<tr>
								<td>Name : </td>
								<td><input type="text" name="un" value="" required  placeholder="Your Name"/></td>
							</tr>
							<tr><td>Mobile No : </td>
							<td><input type="text" name="mno" value="" required  placeholder="Mobile No:"/></td></tr>
							<tr><td>Mail Id : </td><td><input type="text" name="mi" value="" required  placeholder="Mailid"/></td></tr>
							<tr><td>Feedback : </td>
							<td>
								<textarea placeholder="Responce...." required name="fback"></textarea>
							</td>
							</tr>
							<tr>
								<td colspan="2"><input type="submit" name="ok" value="Send" /></td>
							</tr>
						</table>
				</form>
				<?php } ?>
		</div>
		<div style="height:300px; background-color:#CC9900;">
			<?php include("footer.php"); ?>
		</div>
	</div>
</body>
</html>
