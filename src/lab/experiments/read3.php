

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
<br><br><p align="center">
<p align="left"><br><br>&nbsp;&nbsp;	<b>Read the following passage carefully and the solve the crossword.</b>
<br><br><p align="justify">Every May, something extraordinary happens in the new cemetery of the sleepy little town. Standing beyond the southernmost corner of the vast expanse of the old cemetery-dotted with concrete vanities, both ornate and simple-the humble Indian laburnum bush erupts in glory, with its blossoms of yellow mellow beauty. The first time it happened, some years ago, surprised visitors to the concrete memorials assumed that it was an accident of nature. But each year as the bush grew taller and the blossoms more plentiful, the phenomenon stood out as a magnificent incongruity, in the space where man tries to cling to a make-believe permanence, wrenched from him by death. His inheritors try to preserve his presence in concrete structures, erected in his homage, vying to out-do each other in size and style. This consecrated ground has thus become choked with the specimens of human conceit. More recently, photographs of the dead have begun to adorn the marble and granite headstones.
<br><br><p align="justify">But nature has a way of upstaging even the hardest rock and granite edifices fabricated by man. Weeds and obstinate bramble sprout from every inch of soil uncovered by sand and cement. So every Easter week, the community comes together to spruce up headstones and get rid of the intruding natural growth. The names on individual gravesites are lovingly wiped clean of dust and bird-shit by loved ones; occasional strangers read them as incidental pastime.
<br><br><p align="justify">But the laburnum bush will not or cannot reveal readily who or what lies beneath its drooping branches during its annual show of yellow splendour. That particular spot displays nothing that man has improvised; only nature, who does not possess any script, abides there: she only owns the seasons. And the seasons play out a pantomime of beauty and baldness on the tree standing on the edge of the lifeless opulence, spread over the remains of the assorted dead: rich and poor, young and old, and mourned and un-mourned. The headstones in the old cemetery bear mute testimony to duties performed by willing and unwilling offspring and relatives. The laburnum tree on the other hand is alive and ever unchanging in its seasonal cycles: it is resplendent in May; by summer-end the stalks holding its yellow blossoms turn into brown pods; by winter it begins to look scraggly and shorn. Springtime brings back pale green shoots and by May it is wearing its yellow wreaths again, to out-do all the vainglorious specimens erected in marble and granite









<br><br><p align="center">For Crossword <a href="englishcrossword3.htm"><font color="blue">Click here</a>
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
