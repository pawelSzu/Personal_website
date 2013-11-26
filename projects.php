<?php 
include ('includes/header.php');
?>

Various Projects<div class="hr"></div>

<?php

//FILE FORMAT: entries separated by '===', fields separated by ';;'

$filename = "text/projects.txt";
$handle = fopen($filename, "r");
$content = fread($handle, filesize($filename));
fclose($handle);

$lines = explode("===", $content);
for($i=0; $i<count($lines); $i++)
{
	//The 'isset' function is used to make PHP happy and not throw notices
	//
	//$items[0]: project name
	//$items[1]: github/website link
	//$items[2]: location/date info
	//$items[3]: description
	//
	
	$items = explode(";;", $lines[$i]);
	echo "<p>";
	echo "<u><a href=\"".(isset($items[1]) ? $items[1] : "")."\">".(isset($items[0]) ? $items[0] : "")."</a>".(isset($items[2]) ? $items[2] : "")."</u><br>";
	echo (isset($items[3]) ? $items[3] : "");

	echo "</p>";
}

?>

<?php
include ('includes/footer.php');
?>