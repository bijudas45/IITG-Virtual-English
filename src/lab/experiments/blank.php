

<!DOCTYPE HTML>
<html>
<head>
<title>Virtual Labs - IIT Delhi</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
-->
</style>
<style type="text/css">@import "css/flexnav.css";</style>
<script type="text/javascript" src="js/beethoven.js"></script>
<link href="css/default.css" rel="stylesheet" type="text/css">
<link href="css/custom.css" rel="stylesheet" type="text/css">




<script type="text/javascript" src="ddtabmenufiles/ddtabmenu.js">
</script>
<link rel="stylesheet" type="text/css" href="ddtabmenufiles/glowtabs.css" />




</head>
<body bgcolor="#FFFFFF">
<div id="header_main"><img src="" align="right" style="padding-right:20px"></div>
 <div id="no_print">
<!-- start header -->
<div id="header">
         <ul id="menuTop">
		 
<?php
include_once("config.inc.php");
 global $db, $db_host, $db_user, $db_password;

$conn = mysql_connect($db_host,$db_user,$db_password);
 if (!$conn) {

  die("ERROR: " . mysql_error() . "\n");

 }
mysql_select_db ($db);
$stuff = mysql_query("SELECT * FROM `topmenu`") or die("MySQL Login Error: ".mysql_error()); 

if (mysql_num_rows($stuff) > 0) { 

$row=mysql_num_rows($stuff);

 

while($row = mysql_fetch_array($stuff))
  {
  $caption=$row['caption'];	
  $link=$row['link'];
	
echo "<li><a href=\"$link\" target=\"_self\">$caption</a></li>";
  }	

}

?>
 
		 </ul>

		 
</div>
<div style="position: relative; margin:auto; width: 1024px; background-color:#e3f2fc"><br/>
 
</div>
 <div id="no_print">

</div>
<div style="background-image:url(images/content_bg.jpg);position: relative; margin:auto; width: 1024px; min-height:550px;">
        <div id="contentBox" style=" padding:0px; padding-left:50px; padding-right:50px;">



<br>
<div id="ddtabs2">

<h2 align="center"><strong><u>HOME</u></strong></h2>
<p align="center">&nbsp;</p>
<br/>

<h2 align="center"><u>Virtual Wireless Lab</u></h2>

<br/>
<p align="justify"> <font size="4" face="Calibri"> &nbsp; &nbsp; &nbsp; Physical distances and the availability of resources limit doing  experiments, especially when they involve sophisticated instruments.  Also, good teachers are always a scarce resource. Web-based and  video-based courses address the issue of teaching to some extent.  Conducting joint experiments by two participating institutions and also  sharing costly resources have always been a challenge. With the present  day internet and computer technologies the above limitations need not  limit students and researchers in enhancing their skills. Also, in a  country such as ours, costly instruments and equipment need to be  shared with fellow researchers to the extent possible. Web enabled  experiments can be designed for remote operation and viewing so as to  enthuse the curiosity and innovation of students. These would help in  learning basic and advanced concepts through remote experimentation.Today most equipment has a computer interface for control and data storage. It is possible to design good experiments around some of this equipment which would enhance the learning of a student. Internet-based experimentation further permits use of resources - knowledge, software, and data available on the web, apart from encouraging skillful experiments being simultaneously performed at points separated in space (and possibly, time).</font></p>
</div>
</ul>

</div>
<br><br>
</p> 
</div>
</div>
<div style="position: relative; margin:auto; width: 1024px; background-color:#0e8de0"><img src="images/footer-curve.jpg" width="1024" height="31" alt=""><div class="copyright">Copyright &copy; 2009-2010</div><br>
</div>


</body>
</html>
