<?php include("session.php");
include("connection.php");

$selall="select * from pages";
	
	$fr=mysql_query($selall);
	
	$rowcounts=mysql_num_rows($fr);
	
	$rowcounts;
	
	$start=$_GET['start'];
	
	$end=5;
	
	$max=ceil($rowcounts/$end);
	
	echo $last=$rowcounts-$max;
	
	if($_GET['start']=="")
	{
	$start=0;
	}
			$next=$start+$end;
			$pre=$start-$end;

$select="select * from pages limit ".$start.",".$end."";
$fetch=mysql_query($select);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="../style.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<table cellpadding="0" cellspacing="0" align="center" width="1000" border="0">
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
					<td height="20"></td>
			</tr>
			<tr>
					<td class="pagetitle">View Pages / Articals</td>
			</tr>
			<tr>
					<td height="20"></td>
			</tr>
			<tr>
				<td height="800" valign="top">
					<table cellpadding="10" cellspacing="0" align="center" border="0">
						<tr class="label"><td >Sno</td><td>Title</td><td>Content</td><td>Update</td></tr>
						<?php 
						$sno=1;
						while($rec=mysql_fetch_array($fetch))
						{
						?>
						<tr>
						<td><?php echo $sno; ?></td>
						<td><?php echo $rec[1];?></td>
						<td><?php echo $rec[2];?></td>
						<td><a href="addpage.php?pid=<?php echo $rec[0];?>">Update</a></td></tr>
						<?php
						$sno++;
						}
						?>
					</table>
				</td>
			</tr>
	</table>	
	
	<table align="center" cellspacing="25">
<tr>
		<?php if($_GET['start']!=0 && $_GET['start']!="")
			{
			?>
					<td><a href="viewpages.php?start=0">First Page</a></td>
			<?php }
			else
			{
			?>
					<td>First Page</td>
					
			<?php
			}
		?>


			<?php
			
			if($rowcounts>=$next)
			{
			?>
			<td><a href="viewpages.php?start=<?php echo $next;?>">Next</a></td>
			<?php
			}
			else
			{
			?>
			<td>Next</td>
			<?php
			}
			?>
	
	
			<?php
			if($_GET['start']!=0 && $_GET['start']!="")
			{
			?>
			<td><a href="viewpages.php?start=<?php echo $pre;?>">Previous Page</a></td>
			<?php
			}
			else
			{
			?>
			<td>Previous Page</td>
			<?php
			}
			?>




			<?php 
			if($last==$start) 
			{ 
			?>
			<td>Last</td>
			<?php
			}
			else 
			{?>
			<td><a href="viewpages.php?start=<?php echo $last;?>">Last</a></td>
			<?php 
			} 
			?>
	
		
</tr>
</table>
</body>
</html>
