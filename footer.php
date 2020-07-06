<?php 
include("admin/connection.php");

$sel="select * from pages where id=12";
$fet=mysql_query($sel);
$rec=mysql_fetch_array($fet);

?>

<div class="footer">
<!--footer1-->
	<div class="quik_links">
		<p>Quick Links</p>	
			<div class="quik_links1">     
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="gals.php">Photo Gallery</a></li>
					<li><a href="admin/index.php" >Login</a></li>
					<li><a href="result.php" target="_blank">Online Result</a></li>
				</ul>
			</div>
</div><!--footer2-->
	<div style="margin-left:20px;" class="quik_links">
		<p>About Us</p>
			<div class="quik_links1"> 
				<ul>    
					<li><a href="page.php?pageid=10">Introduction</a></li>
					<li><a href="page.php?pageid=4">Faculty Members</a></li>
					<li><a href="page.php?pageid=5">Our Services</a></li>
					<li><a href="page.php?pageid=13">Scholarship Scheme</a></li>
					<li><a href="page.php?pageid=12">Contact Us</a></li>
				</ul>
			</div>
	</div>
<!--footer3--><div style="margin-left:20px;" class="quik_links">
		<p>Address</p>
			<div class="quik_links1">
				    
				<P>JIET MUMBAI</br>
				OPP KAWAL PRO EXPORT</br>
				 ANDHERI</br>
				Mumbai (Mah.) 342008.</br>
				Phone: +91-0291-XXXXXXX.</br>
				Mobile: +91-9829181XXX</P>
		</div>
	</div>

<!--footer3-->
<div style="margin-left:20px;" class="quik_links">
<p>Share Us With</p>
<div class="quik_links1"> 
<a href=""><img height="60" width="70" src="images/facebook.png" /></a> 
<a href=""><img height="60" width="70" src="images/social_linkedin_box_blue.png" /></a>  
<a href=""><img height="60" width="70" src="images/social_twitter_box_blue.png" /></a> 
<a href=""><img height="60" width="70" src="images/social_google_box_blue.png" /></a>            

</div>
</div>

<!--copyryt-->
<div class="copy">
<center>  <P>© 2018 by STUDENT. Proudly made by Vikas</P></center>

</div>

</div>        