<?php 
include ('includes/header.php');
?>
			Various Projects<div class="hr"></div>
			<p>
				<u><a href="https://github.com/pawelSzu/Smart_Dino">Smart Dino</a> (HackNY, Columbia 
				Univserity Spring 2013)</u><br>
				This was my first solo hackathon hack. The little service would first check the users' GMail inboxes 
				for a specific email that they were waiting for. The users would input their GMail
				account information as well as a keyword to look for in emails. If such keyword was found in an email, 
				Smart Dino would send that email to the provided phone number via text message. The hack was accomplished
				via cron job, GMail API, and PHP/MySQL. The basic code is on Github, it could deffinitely use a lot more
				work, but I have not gotten around to it.
			</p>

<?php
include ('includes/footer.php');
?>