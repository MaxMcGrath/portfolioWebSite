<?php

echo '<!DOCTYPE html>'
	.'<html lang="en">'
	.'<head>'
	.'<title>Max McGrath</title>'
	.'<link rel="stylesheet" href="site.css">'
	.'</head>'
	.'<body>'
	. '<div style="width:100%;text-align:center;"><img src="image/banner.png" width="100%"></div>'
	.'<table style="background-color:#333333;width:100%;box-shadow: 5px 5px 5px #555555;white-space:normal;"><tr><td>'
		.'<div class="dropdown">'
			.'<form name="homeButton" id="homeButton" action="index.php" method="GET">'
			.'<input type="hidden" id="page" name="page" class="submitbutton" value="Home">'
			.'<button class="dropbtn" type="submit" form="homeButton" value="Home">Home</button></form>'
		.'</div>'
		.'<div class="dropdown">'
			.'<button class="dropbtn">Education</button>'
			.'<div class="dropdown-content">'
				.'<p><form action="index.php" method="GET"><input type="submit" id="page" name="page" class="submitbutton" value="Information"></form></p>'
				.'<p><form action="index.php" method="GET"><input type="submit" id="page" name="page" class="submitbutton" value="Class Projects"></form></p>'
			.'</div>'
		.'</div>'
		.'<div class="dropdown">'
			.'<form name="experienceButton" id="experienceButton" action="index.php" method="GET">'
			.'<input type="hidden" id="page" name="page" class="submitbutton" value="Experience">'
			.'<button class="dropbtn" type="submit" form="experienceButton" value="Experience">Work Experience</button></form>'
		.'</div>'
		.'<div class="dropdown">'
			.'<form name="hobbiesButton" id="hobbiesButton" action="index.php" method="GET">'
			.'<input type="hidden" id="page" name="page" class="submitbutton" value="Hobbies">'
			.'<button class="dropbtn" type="submit" form="hobbiesButton" value="Hobbies">Hobbies</button></form>'
		.'</div>'
		.'<div class="dropdown">'
			.'<form name="resumeButton" id="resumeButton" action="index.php" method="GET">'
			.'<input type="hidden" id="page" name="page" class="submitbutton" value="Resume">'
			.'<button class="dropbtn" type="submit" form="resumeButton" value="Resume">Resume</button></form>'
		.'</div>'
		.'<div class="dropdown">'
			.'<button class="dropbtn" value="Hobbies" onclick="window.open(\'https://www.linkedin.com/in/max-mcgrath\')">Linkedin</button>'
		.'</div>'
		.'<div class="dropdown" style="float:right;">'//
			.'<form name="contactButton" id="contactButton" action="index.php" method="GET">'
			.'<input type="hidden" id="page" name="page" class="submitbutton" value="Contact">'
			.'<button class="dropbtn" type="submit" form="contactButton" value="Contact">Contact</button></form>'
		.'</div>'
	.'</td></tr></table>';
?>