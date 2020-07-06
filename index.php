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

    <link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
		<link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<div id="main_div">
		<div><?php include("header.php"); ?></div>
		<div class="content" style="padding-top:25px;">
			 <div id="wrapper" >
							<div class="slider-wrapper theme-default">
									<div id="slider" class="nivoSlider">
											<img src="imagess/toystory.jpg" data-thumb="imagess/toystory.jpg" alt="" />
											<img src="imagess/up.jpg" data-thumb="imagess/up.jpg" alt="" title="" />
											<img src="imagess/walle.jpg" data-thumb="imagess/walle.jpg" alt="" data-transition="slideInLeft" />
											<img src="imagess/nemo.jpg" data-thumb="imagess/nemo.jpg" alt="" title="#htmlcaption" />
									</div>
							</div>
			</div>
			<table cellpadding="0" cellspacing="0" align="center" width="90%" border="0">
			
				<?php while($rec=mysql_fetch_array($fet))
				{
				?>
					<tr>
							<td><h2><?php echo $rec[1]; ?></h2></td>
					</tr>
					<tr>
							<td>
							<?php echo substr($rec[2], 0,470).""."........<a style='color:red;' href='page.php?pageid=$rec[0]'>read more</a>";?></td>
					</tr>
				<?php
				}
				?>
				</table>
 <script type="text/javascript" src="scripts/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>

		</div>
		<div style="height:300px; background-color:#CC9900;">
			<?php include("footer.php"); ?>
		</div>


	</div>
</body>
</html>
