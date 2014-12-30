<h1>Welcome to the all-new Lively 2.0!</h1>

<p>
	You've just joined an elite bunch of websites -- great decision.
</p>

[THREE TESTIMONIALS]

<p>
	<?php

	if (get_option('livelychatsupport_settings')) {
		echo "TO ACTIVATE YOUR ALREADY EXISTING CHATBOX,";
	} else {
		echo "TO ACTIVATE YOUR NEW CHATBOX,";
	}
	
	echo ' <a href="' . site_url() . '">Visit Your Home Page.</a>';

	?>
</p>

<p>
	Need help? Use our live chat at LivelyChatSupport.com or email dallas@excitecreative.ca!
</p>