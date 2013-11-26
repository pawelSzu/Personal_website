<?php 
include ('includes/header.php');
?>
			Contact<div class="hr"></div>
<?php

//FILE FORMAT: information separated by ';;'

$filename = "text/contact.txt";
$handle = fopen($filename, "r");
$content = fread($handle, filesize($filename));
fclose($handle);

$lines = explode(";;", $content);
for($i=0; $i<count($lines); $i++)
{
	echo "<p>".$lines[$i]."</p>";
	/*if($i!=(count($lines))-1)
	{
		echo "<br>";
	}*/
}

?>
<?php
include ('includes/footer.php');
?>