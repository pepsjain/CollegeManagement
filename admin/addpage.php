<?php include("session.php");
include("connection.php");

$f=mysql_query("select * from pages where id='".$_REQUEST['pid']."'");
	$rec=mysql_fetch_array($f);

if(isset($_REQUEST['Save']))
{
	if(isset($_REQUEST['pid']))
	{
	
	mysql_query("update pages set title='".mysql_escape_string($_REQUEST['title'])."',
						description='".mysql_escape_string($_REQUEST['editor1'])."' where id='".$_REQUEST['pid']."'");		
	}
	else
	{
	mysql_query("insert into pages set title='".mysql_escape_string($_REQUEST['title'])."',
						description='".mysql_escape_string($_REQUEST['editor1'])."'");
	}
header('location:viewpages.php');
}



?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script src="ckeditor/ckeditor.js"></script>
<link href="../style.css" type="text/css" rel="stylesheet" />
<link href="ckeditor/samples/sample.css" type="text/css" rel="stylesheet" />

</head>

<body>
<form method="post">
<div >
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
				<td height="800" valign="top">
					<table cellpadding="0" cellspacing="10" align="center" border="0">
							<tr>
									<td colspan="2" class="pagetitle">Add Pages / Articals</td>
							</tr>
							<tr>
		<td class="label">Title</td><td><input  type="text" name="title" value="<?php echo $rec[1];?>" required placeholder="Title"/></td>
							</tr>
							<tr>
									<td valign="top" class="label">Details</td>
									<td>
									<textarea class="ckeditor"  id="editor1" name="editor1" >
									<?php echo $rec[2];?>
									</textarea>
									</td>
							</tr>
							<tr>
					<td colspan="2" align="right"><input type="submit" name="Save" value="Save" /></td></tr>
					</table>
				
				</td>
			</tr>
			
	</table>
</div>	
	</form>

</body>
</html>
