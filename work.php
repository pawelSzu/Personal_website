<?php 
include ('includes/header.php');
?>

Work Experience<div class="hr"></div>

<?php

//FILE FORMAT: job position separated by '===', each entry related to job separated by ';;'

$filename = "text/work.txt";
$handle = fopen($filename, "r");
$content = fread($handle, filesize($filename));
fclose($handle);

$lines = explode("===", $content);
for($i=0; $i<count($lines); $i++)
{
	//The 'isset' function is used to make PHP happy and not throw notices
	//
	//$items[0]: location of image
	//$items[1]: website url of workplace
	//$items[2]: name of workplace
	//$items[3]: position
	//$items[4]: description
	//
	
	$items = explode(";;", $lines[$i]);
	echo "<div class=\"workBox\">";
	echo "<img src=\"".(isset($items[0]) ? $items[0] : "")."\" class=\"workImgNoBottom\">";
	echo "<a href=\"".(isset($items[1]) ? $items[1] : "")."\" target=\"_blank\"><i>".(isset($items[2]) ? $items[2] : "")."</i></a>: ";
	echo (isset($items[3]) ? $items[3] : "")."<br>";
	echo (isset($items[4]) ? $items[4] : "");

	echo "</div>";
}
?>

<?php
include ('includes/footer.php');
?>