<?php 
include("admin/connection.php");

$f=mysql_query("select * from gals");
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
			<table cellpadding="20" cellspacing="20" align="center"  border="0">
						
              <tr>
							   <?php $i=1; while($rec=mysql_fetch_array($f)){ ?>   
										<td align="center"><a href="lagrge.php?id=<?php echo $rec[0]; ?>">
												<img src="admin/pics/<?php echo $rec[2]; ?>"  alt="" height="200" width="200" border="8"/>
												<br />
												<?php echo $rec[1]; ?>
												</a>
												
										</td>
                            
								<?php
								if($i==3)
								{
									echo '</tr><tr>';
									$i=0;
								}
								$i++;
								}
								?>
							</tr>
			</table>


		</div>
		<div style="height:300px; background-color:#CC9900;">
			<?php include("footer.php"); ?>
		</div>
	</div>
</body>
</html>
	