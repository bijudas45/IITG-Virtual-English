
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
<div style="background-image:url(images/content_bg.jpg);position: relative; margin:auto; width: 1024px; min-height:820px;">
        <div id="contentBox" style=" padding:0px; padding-left:50px; padding-right:50px;">



<br>
<div id="ddtabs2">

     <div style="margin-left:2%;position:absolute; margin-top:10px; font-family:Baskerville Old face;font-weight:bold;">
     	<font size="5" color="#2b60de">Welcome to Virtual English and Communication Skills Laboratory
     </div>


     <div style="margin-left:400px;position:absolute; margin-top:50px; font-family:verdana;font-size:5px; width:300px;">
     <font size="2">Lab facilities for effective learning of English and Communication Skills do not exist in many institutions of higher learning over different areas of the country. The Virtual English and Communication Skills Lab aims to address this gap. It has a virtual platform through which students of Engineering (and other) institutions will be able to carry out experiments and interactive learning in the subject with ease.  The rapid developments in technology-aided learning tools in the area of Humanities Computing are today harnessed by many universities abroad to help students develop their communication skills, an area that needs to be given its due importance. This facility needs to be brought to our students to help them in developing their English and communication skills, a subject that is taught in all undergraduate engineering institutes. The Virtual Lab is developed as a collaborative and interdisciplinary effort at IIT Guwahati in an effort to create computer-aided experimental and instructional tools as well as self-learning and self-appraisal kits for students in the use of English and communication skills.</font>
	</div>


     <div style="position:absolute;margin-top:20px;margin-left:70%; background:aliceblue;font-family:Verdana; width:218px;height:330px;">
     	<div style="position:relative; margin-left:50px; margin-top:30px;font-size:8px;">
			<a href="postcomments.php"><font size="2" color="black">Post Comments</a><br><hr></div>
				<div style="margin-left: 1%;position:absolute;margin-top:10px"><EMBED SRC="animation.wmv" CONTROLS="true" LOOP="1" AUTOSTART="TRUE" HEIGHT="220" WIDTH="220" BORDER="0"></embed>


				</div>
		</div>
	</div>


<div id="content">
<br>
      <div style="margin-left:10px;position:absolute; margin-top:20px; font-family:Book Antiqua;width:400px; height:370px;font-size:10px;">

	  			<a href="ls.php"><img src="ls.jpg" alt="map" width="169" height="94"></a><br>
	  </div>

		<div style="margin-left:184px;position:absolute; margin-top:20px; font-family:Book Antiqua;width:400px; height:370px;font-size:10px;">

		  			<a href="RC.php"><img src="rc.jpg" alt="map" width="169" height="94"></a><br>
		</div>

		  <div style="margin-left:10px;position:absolute; margin-top:120px; font-family:Book Antiqua;width:400px; height:370px;font-size:10px;">

		  			<a href="vocab.php"><img src="vocab.jpg" alt="map" width="169" height="94"></a><br>
		  </div>

		<div style="margin-left:184px;position:absolute; margin-top:120px; font-family:Book Antiqua;width:400px; height:370px;font-size:10px;">

	  			<a href="tw.php"><img src="tw.jpg" alt="map" width="169" height="94"></a><br>
   	    </div>


		<div style="margin-left:10px;position:absolute; margin-top:220px; font-family:Book Antiqua;width:400px; height:370px;font-size:10px;">

	  			<a href="cs.php"><img src="cs.jpg" alt="map" width="169" height="94"></a><br>
		</div>


		<div style="margin-left:184px;position:absolute; margin-top:220px; font-family:Book Antiqua;width:400px; height:370px;font-size:10px;">

	  			<a href="gr.php"><img src="gr.jpg" alt="map" width="169" height="94"></a><br>
		</div>




</div>

</div>
</ul>

</div>
</p>
</div>
</div>
<div style="position: relative; margin:auto; width: 1024px; background-color:#0e8de0"><img src="images/footer-curve.jpg" width="1024" height="31" alt=""><div class="copyright">Copyright &copy; 2009-2010</div><br>
</div>


</body>
</html>