

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




<script type="text/javascript" src="ddtabmenufiles/ddtabmenu.js">
</script>
<link rel="stylesheet" type="text/css" href="ddtabmenufiles/glowtabs.css" />
<link href="emx_nav_right.css" rel="stylesheet" type="text/css">
<link href="default.css" rel="stylesheet" type="text/css">
	<!--<link href="handheld.css" rel="stylesheet" type="text/css" media="handheld" />-->
<style type="text/css">

.thumb_big, .thumb
{
	border: solid 1px #ccd2d2;
	padding: 0px;
}
.thumb
{
	margin: 1px;
	display: inline;
}

.thumb_big
{
	margin: 0px 10px 20px 0px;
	float: left;
}

#projects
{
	margin: 1px 5px 0px 50px;
	width:370px;
	margin-left:2px;
	height:32px;
}

#project_description
{
	height: 50px;
	margin-left:400px;
	margin-top:0px;
}

.disabled
{
	opacity: .30;
	-ms-filter: "alpha(opacity=30)";
	cursor: default;
}

</style>



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
<br><br><p align="center">TIPS OF THE DAY
<p align="left"><br><br>1&nbsp;&nbsp;	Business communication leads to  clear misunderstanding between people and thus builds camaraderie among people
<br><br>2&nbsp;&nbsp;	 In context of human communication  meaning sent and meaning received is in the mind of the sender and the receiver – not in the words or other symbols used
<br><br>3&nbsp;&nbsp;	Rumors are based on speculation , someone’s overactive imagination , or wishful thinking , rather than on facts .
<br><br>4&nbsp;&nbsp;	For effective internal communication use management and staff meetings to solicit feedback .
<br><br>5&nbsp;&nbsp;	In order to reduce miscommunication ,an attempt should be made to reduce hierarchical levels , increase co-ordination between departments ,and encourage two way communication,
<br><br>6&nbsp;&nbsp;	In context to managerial communication ,managers need to keep their audience in mind at all times during the process of communication .Their ability to empathize with , be sensitive to and generally consider their audience’s feelings is the best essay to be effective in their communication .
<br><br>7&nbsp;&nbsp;	Ethics play a crucial role in communication as language itself as made up of words that carry values.
<br><br>8&nbsp;&nbsp;	As long as it is considered a boon and not a bane, technology can improve the effectiveness of business communication .
<br><br>9&nbsp;&nbsp;	The face can be used to communicate emotional meaning more accurately than any other medium in inter-personal communication .
<br><br>10&nbsp;&nbsp;	Use of good gestures at the proper time is beneficial to credibility.
Source

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
