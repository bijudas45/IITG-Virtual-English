

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
<script type="text/javascript">
<!--
var timeout         = 500;
var closetimer		= 0;
var ddmenuitem      = 0;

// open hidden layer
function mopen(id)
{
	// cancel close timer
	mcancelclosetime();

	// close old layer
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';

	// get new layer and show it
	ddmenuitem = document.getElementById(id);
	ddmenuitem.style.visibility = 'visible';

}
// close showed layer
function mclose()
{
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
}

// go close timer
function mclosetime()
{
	closetimer = window.setTimeout(mclose, timeout);
}

// cancel close timer
function mcancelclosetime()
{
	if(closetimer)
	{
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}

// close layer when click-out
document.onclick = mclose;
// -->
</script>
<script type="text/javascript" src="js/beethoven.js"></script>
<link href="css/default.css" rel="stylesheet" type="text/css">
<link href="css/custom.css" rel="stylesheet" type="text/css">




<script type="text/javascript" src="ddtabmenufiles/ddtabmenu.js">
</script>
<link rel="stylesheet" type="text/css" href="ddtabmenufiles/glowtabs.css" />

<script language="javascript">

function validate_form (form)
{
    valid = true;

    if ( document.feedback.nameis.value == "" )
    {
        alert ( "Please fill in the 'Name/Institution' box." );
        form.nameis.focus();
        valid = false;
    }

    if ( document.feedback.email.value == "" )
	    {
	        alert ( "Please fill in the 'Email' box." );
	        form.email.focus();
	        valid = false;
    }

    if ( document.feedback.namevlab.value == "" )
		    {
		        alert ( "Please fill in the 'Name of the Virtual Lab' box." );
		        form.namevlab.focus();
		        valid = false;
    }

    if ( ( document.feedback.typevlab[0].checked == false )
	    &&( document.feedback.typevlab[1].checked == false )&&( document.feedback.typevlab[2].checked == false ) )
	    {
	        alert ( "Please choose the type of Virtual Lab:Repository/ Interactive/Web Portal" );
	        form.typevlab.focus();
	        valid = false;
	    }

	f ( document.feedback.nameexper.value == "" )
		    {
		        alert ( "Please fill in the 'Name of the experiment' box." );
		        form.email.focus();
		        valid = false;
	    	}

	    	if ( ( document.feedback.rating[0].checked == false )
				    && ( document.feedback.rating[1].checked == false )  && ( document.feedback.rating[2].checked == false ) && ( document.feedback.rating[3].checked == false )
				    && ( document.feedback.rating[4].checked == false ))
				    {
				        alert ( "Please rate the online performance of the experiment" );
				        form.rating.focus();
				        valid = false;
	    }

	    if ( ( document.feedback.interactionrating[0].checked == false )
						    && ( document.feedback.interactionrating[1].checked == false )  && ( document.feedback.interactionrating[2].checked == false ) && ( document.feedback.interactionrating[3].checked == false )
						    && ( document.feedback.interactionrating[4].checked == false ))
						    {
						        alert ( "You havent filled up the form entirely!!!!" );
						        form.interactionrating.focus();
						        valid = false;
	    }

	    if ( ( document.feedback.labenvironment[0].checked == false )
								    && ( document.feedback.labenvironment[1].checked == false )  && ( document.feedback.labenvironment[2].checked == false ) && ( document.feedback.labenvironment[3].checked == false )
								    && ( document.feedback.labenvironment[4].checked == false ))
								    {
								        alert ( "You havent filled up the form entirely!!!!" );
								        form.labenvironment.focus();
								        valid = false;
	    }


    return valid;
}

//-->
</script>

</script>


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
<div style="background-image:url(images/content_bg.jpg);position: relative; margin:auto; width: 1024px; min-height:500px;">
        <div id="contentBox" style=" padding:0px; padding-left:50px; padding-right:50px;">



<br>
<div id="ddtabs2">
<br/>


</p><form name="feedback" action="feedbackcheck.php" method="post" onsubmit="return validate_form(this)">

<h2 align="center">Virtual Lab Feedback Form</h2>
<p>&nbsp;</p>
<p>
  Name/Institution :
  <input type="text" name="nameis" size="80" />
  </p>
</p>

<p>&nbsp;</p>
<p>Email:
  <input type="text" name="email" size="40" />
</p>
<p>&nbsp;</p>
<p>Name of the virtual lab :
<input type="text" name="namevlab" size="40" />
</p>
<p>&nbsp;</p>
<p> Type of virtual lab:<br/>
  [
  <input checked="checked" name="typevlab" type="radio" value="Repository" />
  Repository]   [
  <input name="typevlab" type="radio" value="Interactive" />
  Interactive]   [
  <input name="typevlab" type="radio" value="Web Portal" />
 Web Portal]</p>

<p>&nbsp;</p>
<p> 1. Which experiment number did you perform ? :
<input type="text" name="nameexper" size="40" />
</p>
<p>&nbsp;</p>
<p> 2. Please tell your agreement with the following statements excellent,  very good, good, average, poor</p>
<p> a) How do you rate the online performance of the experiment? :<br/>
  [
  <input checked="checked" name="rating" type="radio" value="Excellent" />
  Excellent]   [
  <input name="rating" type="radio" value="Very good" />

  Very good]   [
  <input name="rating" type="radio" value="Good" />
  Good]
  [
  <input name="rating" type="radio" value="Average" />
  Average][
  <input name="rating" type="radio" value="Poor" />
  Poor] </p>
<p>&nbsp;</p>
<p> b) To what extent did you have control over the interactions? :<br/>
  [
  <input checked="checked" name="interactionrating" type="radio" value="Excellent" />

  Excellent]   [
  <input name="interactionrating" type="radio" value="Very good" />
  Very good]   [
  <input name="interactionrating" type="radio" value="Good" />
  Good]
  [
  <input name="interactionrating" type="radio" value="Average" />
  Average][
  <input name="interactionrating" type="radio" value="Poor" />
  Poor]</p>
<p>&nbsp;</p>
<p>c) To what degree was the actual lab environment presented? :<br/>

[
  <input checked="checked" name="labenvironment" type="radio" value="Excellent" />
Excellent]   [
<input name="labenvironment" type="radio" value="Very good" />
Very good]   [
<input name="labenvironment" type="radio" value="Good" />
Good]
  [
<input name="labenvironment" type="radio" value="Average" />
Average][
<input name="labenvironment" type="radio" value="Poor" />
Poor]</p>
<p>&nbsp;</p>
<p>d) The presentation of information was well designed and sufficient for any user group? :<br/>
[
  <input checked="checked" name="informationrating" type="radio" value="Excellent" />

Excellent]   [
<input name="informationrating" type="radio" value="Very good" />
Very good]   [
<input name="informationrating" type="radio" value="Good" />
Good]
  [
<input name="informationrating" type="radio" value="Average" />
Average][
<input name="informationrating" type="radio" value="Poor" />
Poor]</p>
<p>&nbsp;</p>
<p>e) The manuals were found to be helpful? :<br/>
[
  <input checked="checked" name="manualrating" type="radio" value="Excellent" />
Excellent]   [
<input name="manualrating" type="radio" value="Very good" />

Very good]   [
<input name="manualrating" type="radio" value="Good" />
Good]
  [
<input name="manualrating" type="radio" value="Average" />
Average][
<input name="manualrating" type="radio" value="Poor" />
Poor]</p>
<p>&nbsp;</p>
<p>f) The links provided were consistent with the objectives of the experiment? :<br/>
[
  <input checked="checked" name="linkrating" type="radio" value="Excellent" />
Excellent]   [
<input name="linkrating" type="radio" value="Very good" />
Very good]   [
<input name="linkrating" type="radio" value="Good" />

Good]
  [
<input name="linkrating" type="radio" value="Average" />
Average][
<input name="linkrating" type="radio" value="Poor" />
Poor]</p>
<p>&nbsp;</p>
<p>g) The results of experiment were easily interpretable? :<br/>
[
  <input checked="checked" name="interpretrating" type="radio" value="Excellent" />
Excellent]   [
<input name="interpretrating" type="radio" value="Very good" />
Very good]   [
<input name="interpretrating" type="radio" value="Good" />
Good]
  [
<input name="interpretrating" type="radio" value="Average" />

Average][
<input name="interpretrating" type="radio" value="Poor" />
Poor]</p>
<p>&nbsp;</p>
<p>h) A clear understanding of the experiment and related topics was gained? :<br/>
[
  <input checked="checked" name="understandrating" type="radio" value="Excellent" />
Excellent]   [
<input name="understandrating" type="radio" value="Very good" />
Very good]   [
<input name="understandrating" type="radio" value="Good" />
Good]
  [
<input name="understandrating" type="radio" value="Average" />
Average][
<input name="understandrating" type="radio" value="Poor" />

Poor]</p>
<p>&nbsp;</p>
<p>3. How helpful do you feel the system is? :
  <input type="text" name="namesystem" size="40" />
</p>
<p>&nbsp;</p>
4. Did you experience any problem?
<p align="center">
  <textarea name="feedback1" rows="6" cols="80"></textarea>
</p>
<p align="center">&nbsp;</p>
<p>5. Is there anything you would like to tell us?</p>
<h3 align="center">

  <textarea name="feedback2" rows="6" cols="80"></textarea>
</h3>
<p>6. Did you feel confident enough while performing the experimen?:<br/>
[
  <input checked="checked" name="confirating" type="radio" value="yes" />
Yes]   [
<input name="confirating" type="radio" value="no" />
No]   [
<input name="confirating" type="radio" value="can't say" />
Can't say] </p>
<p>&nbsp;</p>
<p>7. Was the experiment/process motivating enough?:<br/>

[
  <input checked="checked" name="motivaterating" type="radio" value="yes" />
Yes]   [
<input name="motivaterating" type="radio" value="no" />
No]   [
<input name="motivaterating" type="radio" value="can't say" />
Can't say] </p>
<p>&nbsp;</p>
<p>8. Did you go through the manual/step by step method before performing the experiments?:<br/>
[
  <input checked="checked" name="manualrating" type="radio" value="yes" />
Yes]   [
<input name="manualrating" type="radio" value="no" />
No]</p>

<p>&nbsp;</p>
<h2><strong>Please answer the following questions</strong></h2>
<p>&nbsp;</p>
<p>1. Did you get the feel &quot;actual lab&quot; while performing the experiments? [
  <input checked="checked" name="labrating" type="radio" value="yes" />
Yes]   [
<input name="labrating" type="radio" value="no" />
No]</p>
<p>&nbsp;</p>
<p>2. Did you feel the absence of an instructor?
[
  <input checked="checked" name="rating15" type="radio" value="yes" />
Yes]   [

<input name="rating15" type="radio" value="no" />
No]</p>
<p>&nbsp;</p>
<p>3. Could you run the experiments smoothly, i.e., without any interruptions?
[
  <input checked="checked" name="rating16" type="radio" value="yes" />
Yes]   [
<input name="rating16" type="radio" value="no" />
No]</p>
<p>&nbsp;</p>
<p>4. Could you analyze the information successfully?
[
  <input checked="checked" name="analyze" type="radio" value="yes" />
Yes]   [
<input name="analyze" type="radio" value="no" />
No]</p>

<p>&nbsp;</p>
<p>5. Did you follow the step by step method before running the live experiment?
[
  <input checked="checked" name="manual" type="radio" value="yes" />
Yes]   [
<input name="manual" type="radio" value="no" />
No]</p>
<p>&nbsp;</p>
<p>6. Could you compare your results with the given typical results?
[
  <input checked="checked" name="rating19" type="radio" value="yes" />
Yes]   [
<input name="rating19" type="radio" value="no" />
No]</p>
<p>&nbsp;</p>
<p>7. Was it helpful in view of your academic studies?
[
  <input checked="checked" name="academic" type="radio" value="yes" />

Yes]   [
<input name="academic" type="radio" value="no" />
No]</p>
<p>&nbsp;</p>
<p>8. Specify three problems/difficulties you faced while performing the experiments?</p>
<p align="center">
  <textarea name="feedback3" rows="6" cols="80"></textarea>
</p>
<p align="left">9. Give three interesting things about the experiments</p>
<p align="center">
  <textarea name="feedback4" rows="6" cols="80"></textarea>

</p>
<p align="center">&nbsp;</p>
<p align="left">10. Do you think doing experiments through virtual lab gives scope for more innovative and creative research work?
[
  <input checked="checked" name="experiments" type="radio" value="Yes" />
Yes]   [
<input name="experiments" type="radio" value="No" />
No]</p>
<p align="left">&nbsp;</p>
<p align="center">
  <input type="submit" value="Submit Feedback" />
</p>
	</form>
	</p>

</div>
</ul>

</div>
<br><br>
</p>
</div>
</div>
<div style="position: relative; margin:auto; width: 1024px; background-color:#0e8de0"><img src="images/footer-curve.jpg" width="1024" height="31" alt=""><div class="copyright">Copyright &copy;2010 Department of Humanities and Social Sciences, Indian Institute of Technology Guwahati.</div><br>
</div>


</body>
</html>
