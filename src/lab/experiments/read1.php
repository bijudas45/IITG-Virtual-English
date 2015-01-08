

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
<br><br><p align="justify">This is a tale of friendship, the most ennobling kind of friendship, a story of two men, each of whom would rather have died than hurt the feelings of the other.
<p><br>It all began a long time ago, when the world was still in a state of innocence, when no discrimination was known between the rich and the poor. During that time there lived, in a small and ancient Khasi village called Rangjyrwit, two great and loving friends, U Nik Mahajon, a rich bachelor, and U Shing Raitoi, a poor man with a poor Wife, ironically called Ka Lak, meaning 'great wealth'.
<p><br>The love between the two friends was a very strange one by present-day standards. From the point of view of material wealth, they had nothing in common. Nik Mahajon, who was a prosperous merchant, never lacked anything in his life. Shing Rairoi, on the other hand, was a mere labourer, who had to cut wood, break stones and do all sorts of odd jobs just for a handful of rice each day. But his rich friend never looked down on him. He respected Shing Raitoi and treated him as he would an equal. Often, he invited his poor friend to his house, and whenever Shing visited him, Nik Mahajon never let him go away empty-handed, but always gave him something useful to carry back home. Shing was by no means a covetous man, but however hard he tried to say no to these gifts, his rich friend simply would not hear of it.
<p><br>This state of affairs continued for a long, long time and quite troubled poor Shing, who realized how one-sided things were. Every time he returned from a visit he never failed to discuss things with his wife as to how to repay his friend for his goodness. Eventually, the couple decided to forget their shame and invite Nik to their place at least once, in spite of the bareness of their home and the emptiness of their larder.
<p><br>So, one day, Shing went over to the rich man's house and said to him: 'My dearest friend, Nik, I have been here so many times, but my home has never even seen your shadow.' Jokingly, he added, 'Is it that you dislike witnessing my poverty!'
<p><br>'Why do you say that, my dearest Shing,' Nik replied, 'when I have always wanted to visit you at your home to see what kind of things you do to spend your spare time, and perhaps enjoy a meal with you!'
<p><br>'If that is how you feel,' replied Shing, 'you must surely drop by at my humble dwelling one of these days. I hope it doesn't matter to you if we can provide only a simple dish of rice and salt.'
<p><br>To this meek submission, Nik said, 'Surely not, my friend! When the heart is loving, anything tastes good.'
<p><br>So pleased was Shing with this assurance that he left his friend's house without even waiting to finalize the date of Nik's visit to his own home. Perhaps, if he had not overlooked this, the ensuing tragedy would not have happened at all.
<p><br>Sometime after this, Nik called on Shing for the first time in his life. Shing and his wife were pleased with their kind friend's graciousness, and received him as only true and loving hearts like theirs could. After a brief exchange of pleasantries, Lak left the two men to themselves, to enjoy their get-together according to their liking, while she went to the kitchen to busy herself with her own chores.
<p><br>Having basked for some time in the glory of his friend's only visit, Shing thought it was fit and proper for him to entertain Nik with whatever food they had in the house. Excusing himself for a moment, he went to the kitchen and asked his wife to prepare something for all of them, so they could enjoy dinner together. He was determined that his friend should not leave his house without something to eat, partly because of his love for him and partly because he did not want him to think that he was mean.
<br><br><p align="center">For Crossword <a href="englishcrossword1.htm"><font color="blue">Click here</a>
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
