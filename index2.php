<?php 
include ('includes/header.php');
?>
			Welcome!<div class="hr"></div>
<?php
$handle = fopen("text/index.txt", "r");

while( ($line=fgets($hadle) !==false) )
{
	echo "<p>".$line."</p>";
}

?>
			<!--
			<p>
				I am a sophomore at <a href="http://www.rutgers.edu">Rutgers University</a> 
				double majoring in <a href="http://cs.rutgers.edu">Computer Science</a> and 
				<a href="http://math.rutgers.edu">Mathematics</a>.  
			</p>
			<br>

			<p>
				On a programming note, I find MySQL JOINS to be awesome! 
				<a href="http://www.sitepoint.com/understanding-sql-joins-mysql-database/">Click here</a>
				to see the webpage that I like to
				frequent to as a reference guide.
			</p>

			<br>
			<p>
				On the <a href="http://en.wikipedia.org/wiki/X86">x86 Assembly</a> note.. 
				Even though I have not done much work with it, I've grown to 
				appreciate the <a href="http://en.wikibooks.org/wiki/X86_Assembly/Control_Flow#Jump_on_Overflow">
				overflow jumps</a>. In all of the programming languages that I've worked with I had to think
				of some elaborate way to detect whether an overflow had occured while in x86 you can simply use
				'jo' or 'jno'.
			</p>
			<br>
			<p>
				Below you will find links to my 
				<a href="https://github.com/ps">Github</a> and 
				<a href="http://www.linkedin.com/pub/pawel-szczurko/67/666/7a4">Linkedin</a> profiles.
			</p>
			-->

<?php
include ('includes/footer.php');
?>
