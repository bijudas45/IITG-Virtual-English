

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
<br><br><p align="justify">The hunting season was on and the hunter was oiling his much-used gun. He was quietly humming a tuneless song, the reason for the suppressed giggles coming from the adjacent shed where his daughter and niece were husking paddy. As the giggles grew louder, he became aware that the girls were laughing at his efforts at singing. So he began to sing even louder and when he faltered at a particularly high note, all three of them burst out in unrestrained guffaws; the girls even let go of the husking pestle, spilling the half-husked paddy on to the mud floor. Almost immediately the chickens hovering outside the shed- flocked in, cackling in glee to peck at the fallen grain. When the girls caught their breath, the niece called out, 'Why are you so happy, uncle! Is there a big animal waiting for you?'
<br><br><p align="justify">The hunter took a deep breath and replied, 'Who knows? Maybe the big boar who has been eating our best paddy these past years will make an appearance soon. I am giving my gun a thorough cleaning so that this time I do not miss his heart.'
<br><br><p align="justify">For the last five seasons, the hunter called Imchanok had been after this particularly vicious boar which had been devastating the rice paddies of the village and in his field; the animal chose to feast in the areas where he had planted the best variety of rice. When it happened for two consecutive years, his wife suggested that they change the site and accordingly they planted this variety on the western ridge of their vast field. But to no avail; the cussed boar somehow located that very portion to feast on. The animal, sighted by the villagers on several occasions, was reported to be of enormous proportions, had a lumbering gait, and two yellowish tusks curling backwards, almost touching his hump. Not only that, he seemed to have an equally vicious nature. He ate what he could and trampled over a wide area as if to inflict the maximum damage on the paddy. Strangely, Imchanok had so far not even had a fleeting glimpse of this notorious animal, though it was on his paddy that the most damage was done. Many a night during the cold winter he had kept vigil, waiting for the boar to come to his paddy, but it seemed the animal sensed his presence from a distance and went on to other fields. As he thought of the prospect of felling this animal, whom by now he considered to be his enemy, his hands flew up and down the barrel with the greased-cloth, removing the slightest sign of earlier firings. Even the butt of the gun shone with the newly applied coat of varnish. He then stood the gun on the side of the barn and went inside to check the cartridges. He had recently bought a full packet and had lent only two of them to his closest friend, in return for which he had received a whole hind-leg of a sambar which his friend had shot. Having satisfied himself that he was ready for the big encounter, he came out to fetch the sun-warmed gun, took it inside, wrapped it in its special cloth and shoved it into the top of the wooden almirah in his bedroom.








<br><br><p align="center">For Crossword <a href="englishcrossword2.htm"><font color="blue">Click here</a>
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
