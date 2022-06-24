<?php
session_start();
$receiver=$_SESSION['rece'];
$subject= "your order was successfull";
$sender="From:mizukimise@gmail.com";
$sender .="MIME-Version:1.0\r\n";
$sender .="Content-Type:text/html; charset=ISO-8859-1\r\n";

$body="<html>
<body>
<div style=\"border-radius:20px; border:solid blue 2px; overflow:hidden; margin-right:10px; margin-left:20px;\">
			<img src=\"https://ci5.googleusercontent.com/proxy/vdb4vg0dG6AImZxlekXH0bhKEe6QNu7kiX2Mcd8h2MsN0LbriDHtf_LimgeCLTnLDFaBCwIvbTt52dHo_p8jyLviChYutR2HaXUthyjcCB_Q27plT2G_4uD8EwDhQfWA=s0-d-e1-ft#https://coolwallpapers.me/th700/6031730-doll-blonde-girl-lolita-doll-loli.jpg\" width=\"135\" height=\"100\" alt=\"logo\" class=\"CToWUd\">
			<font color=\"#888888\">
		    <h1 style=\"text-align:center;font-weight:800;font-size:40px\"><span style=\"color:green\">mizuki</span><span style=\"color:blue\"> mise</span></h1>
			<h2 style=\"padding-left:20px; color: black\">Dear,customer</h2>
			<h2 style=\"padding-left:20px;color:red\">YOUR PACKAGE WILL BE DELIVERED IN 3 TO 4 WORKING DAYS</h2>
		</font></div>

</body>
</html>";



if(mail($receiver,$subject,$body,$sender)){
	echo "email sent to $receiver";
	echo"<br>";
	echo"<a href=\"cart.php\"><input type=\"button\" value=\"show my order\"></a>";
}else{
	echo "soory failed while sending the message";
}
?>