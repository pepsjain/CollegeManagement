<?php include("session.php");

include("connection.php");

$f=mysql_query("select * from notes where id='".$_REQUEST['nid']."'");
$rec=mysql_fetch_array($f);

if(isset($_REQUEST['Save']))
{
	
	$id = $_REQUEST['nid'];

	if(isset($id))
	{
		$name=$id.'_'.$_FILES['notes']['name'];
		$tname=$_FILES['notes']['tmp_name'];
		if($_FILES['notes']['name']=="")
		{
		$name=$rec[2];
		}
		move_uploaded_file($tname,"notes/".$name);
	  mysql_query("update notes set title='".mysql_escape_string($_REQUEST['title'])."',
						filename='$id_".mysql_escape_string($name)."',sem='".$_REQUEST['sem']."' where id='".$id."'");		
	}
	else
	{
  	mysql_query("insert into notes set title='".mysql_escape_string($_REQUEST['title'])."', sem='".$_REQUEST['sem']."'");
						
		$id = mysql_insert_id();
		$name=$id.'_'.$_FILES['notes']['name'];
		$tname=$_FILES['notes']['tmp_name'];
		move_uploaded_file($tname,"notes/".$name);
		mysql_query("update notes set filename='".mysql_escape_string($name)."' where id='".$id."';");
	
	}
	header('location:viewnotes.php');
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
<form method="post" enctype="multipart/form-data">
	<table cellpadding="0" cellspacing="0" align="center" width="1000" border="1">
			<tr>
					<td align="center"><h1><?php echo $_SESSION['ut'] ?> Control Panal</h1></td>
			</tr>
			<tr>
				<td>
				<?php
				 if($_SESSION['type']==1) { include("admin_header.php"); }
				 if($_SESSION['type']==2) { include("student_admin_header.php"); }
  			 if($_SESSION['type']==3) { include("faculty_admin_header.php"); }
				  ?></td>
			</tr>
			<tr>
				<td height="800" valign="top">
				<table cellpadding="10" cellspacing="10" align="center" border="0" width="50%">
							<tr>
									<td colspan="2" class="pagetitle">Add Notes Files</td>
							</tr>
							<tr>
		<td class="label">Title</td><td><input  type="text" name="title" value="<?php echo $rec[1];?>" required placeholder="Title"/></td>
							</tr>
							<tr>
									<td class="label">PDF or Word Doc</td><td valign="top" class="label"><input type="file" name="notes"  /></td>
							</tr>
							<tr>
								<td class="label">Semester </td>	<td valign="top" class="label">
											<select name="sem" required>	
													<option value="">---Select Sem---</option>
													<option value="I">I</option>
													<option value="II">II</option>
													<option value="III">III</option>
													<option value="IV">IV</option>
													<option value="V">V</option>
													<option value="VI">VI</option>
													<option value="VII">VII</option>
													<option value="VIII">VIII</option>
													<option value="Others">Others</option>
													
											</select>
									</td>
							</tr>
							<tr>
					<td colspan="2" align="right"><input type="submit" name="Save" value="Save" /></td></tr>
					</table>
				</td>
			</tr>
	</table>	
	</form>
</body>
</html>
