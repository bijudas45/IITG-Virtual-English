

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
<br><br><p align="justify">One hot and sultry day a woman, who was many months into her pregnancy, suddenly developed an intense yearning for lemon, or anything Sour to quench her terrible thirst. As there was no one at home, and as she could find nobody to get the lemons for her, she decided to venture into the nearby forest to look for them herself.
<br><br><p align="justify">Having gone deep into the forest, she came upon a large tree laden with small Sour-sweet fruits that the Khasis call sohphie. Seeing these, she became mad with desire. But how could she, a woman big with child, get at them? How could she climb so tall and so big a tree? Looking at the fruit with her mouth watering and her eyes tearful, she exclaimed in her misery. 'Ahl If only there was someone to shake the tree or pluck the fruits for me! I'd give him anything in my power.'
<br><br><p align="justify">Hearing that, the Tiger, who was dozing on the branches under the thick leaves of the tree, away from the blazing sun, looked down and roared out his reply, 'If you promise to give me what I will ask from you, I will throw down these fruits to you.'
<br><br><p align="justify">Startled by the deep-throated voice, the woman looked up, to see none other than the dreaded Tiger. But, tormented by her craving, the woman forgot her fear for the moment and pleaded with the Tiger to pass a few sohphie down to her so that she could return home with her thirst quenched. She added that it was not auspicious for a gestating woman to be denied her desire. Not getting what she wanted, she said, would surely affect the baby in the womb.
<br><br><p align="justify">But the Tiger was unmoved. He reminded her of the cruel trick her kind had played on him, trying to cut out his very tongue while they were felling the Diengtei. I He also told her of his vow to avenge himself by killing and devouring any human that he met for what they had done to him. So nothing but her promise to give him whatever he would ask would save her and persuade him to help her get the fruits she desired.
<br><br><p align="justify">The woman was silent for some time, and thought hard. 'If I shake my head at his demand,' she mused, 'he will surely kill me. On the other hand, if I say yes to whatever he asks, I will not only be saved, but also get the fruits. And once out of this forest and his grasp, how is he ever to find me again to force his demand on me?' And so she said, 'All right, my lord, I agree to your condition so long as it does not endanger my life in any way.'
<br><br><p align="justify">
Pleased with her words, the Tiger took hold of the tree and shook it with all his might so that the fruits came tumbling down like the hails of iaiong, the black month of thunderstorms. Then the woman picked them up one by one, collected them in her apron and ate to her heart's Content. The Tiger watched the woman enjoying the fruit with a mischievous twinkle in his eyes and a smirk on his lips. When she had done her eating, he reminded her of her promise. In a voice as loud as a thunder clap, he spelled out his sinister desire and said, 'Now that you have taken my fruits, you must keep your pledge. I see that you are two¬bodied, and about to give birth to your child .... My wish is this: if it is a boy, he may be yours, but if it is a girl, she must be mine.'
<br><br><p align="justify">Stunned, the woman gaped at him as he glided gracefully away. There was so much beauty in his movements, and yet so much cruelty in his heart. However, she soon took consolation from the thought that he would probably never see her again once she was back in the human world.
<br><br><p align="justify">One night, sometime after the frightening incident in the forest, the woman began to experience her birth pangs. As was the Custom at such ti~s, many of her friends and neighbours went to her house carrying 'flambeaux called dongmusa with them, to light their way. The Tiger, who had discovered the woman's dwelling place through his own initiative, and who had been spying on it all the while from the Outskirts of the village, noticed the women with their dongmusa and instantly guessed that the time had come for the woman to deliver her child. So he stole to the house and lay in wait beneath it. After what seemed an agonizing eternity to him, the sound of an infant crying and the voices of several people shouting, 'A baby girl! A baby girl!' were heard. The Tiger, who had been very attentive, was overwhelmed with joy to think that the infant would soon be his. He began to laugh silently, beating his breast with pleasure. But just then he heard another chorus of voices shouting, 'Oh no! It's a boy after all!' That so upset him, that he turned tail and returned to his lair with a gloomy face, brooding on his own bad luck.







<br><br><p align="center">For Crossword <a href="englishcrossword4.htm"><font color="blue">Click here</a>
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
