<!DOCTYPE HTML>
<html>
<head>
<title>Virtual Labs - IIT Guwahati</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
-->
</style>
<style type="text/css">@import "css/flexnav.css";</style>
<script type="text/javascript" src="js/beethoven.js"></script>
<link href="css/default.css" rel="stylesheet" type="text/css">
<link href="css/custom.css" rel="stylesheet" type="text/css">

<link href="emx_nav_right.css" rel="stylesheet" type="text/css">
<link href="default.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="dropinslideshow.js">
</script>

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
<div style="background-image:url(images/content_bg.jpg);position: relative; margin:auto; width: 1024px; min-height:650px;">
        <div id="contentBox" style=" padding:0px; padding-left:50px; padding-right:50px;">



<br>
<div id="ddtabs2">


<div style="position:absolute;margin-left:380px;margin-top:20px;background:sea green; font-family:Book Antiqua">
<h1>The Investigators</h1>
</div>

<div style="position:absolute;margin-left:100px;margin-top:70px;background:sea green; font-family:Book Antiqua">
<img src="liza.png" height="150" width="150"><br>
Dr. Liza Das<br>
Principal Investigator

</div>


<div style="position:absolute;margin-left:320px;margin-top:70px;background:sea green; font-family:Book Antiqua">
<img src="pk.png" height="150" width="150"><br>
Dr.P.K. Das<br>
Co-Principal Investigator

</div>



<hr>

<br><br>

<div style="position:absolute;margin-left:380px;margin-top:280px;background:sea green; font-family:Book Antiqua">
<h1>The Project Staff</h1>
</div>


<div style="position:absolute;margin-left:380px;margin-top:330px;background:sea green; font-family:Book Antiqua">
<img src="dwip.png" height="180" width="150"><br>
Dwipayan Das<br>
Assistant Project Engineer

</div>

<div style="position:absolute;margin-left:750px;margin-top:50px;background:sea green; font-family:Book Antiqua">
Email-<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
liza@iitg.ernet.in<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@iitg.ernet.in
<br><br>
Phone Numbers:<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0361-2582554<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0361-2582353
</div>







</div>
</ul>

</div>
<br><br>
</p>
</div>
</div>
<div style="position: relative; margin:auto; width: 1024px; background-color:#0e8de0"><img src="images/footer-curve.jpg" width="1024" height="20" alt=""><div class="copyright">Copyright &copy;2010 Department of Humanities and Social Sciences, Indian Institute of Technology Guwahati.</div><br>
</div>


</body>
</html>
