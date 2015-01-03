<style type="text/css">
	.wrap {
		background: #fff;
		margin-top: 20px;
		margin-left: -20px;
		max-width: 900px;
		border-right: 1px solid #ccc;
		border-bottom: 1px solid #ccc;
		display: none;
		border-radius: 0 0 7px 0;
	}
	
	.tab {
		display: none;
	}

	.tab[data-tab="loading"] {
		display: block;
		text-align: center;
		padding-top: 130px;
	}
	
	.img_wrapper img {
		max-width: 100%;
	}
	
	.img_wrapper {
		margin: -20px -1px 20px -22px;
	}
	
	h1 {
		font-weight: bold;
		color: #111;
		text-align: center;
		font-size: 30px;
		line-height: 40px;
		margin-top: 25px;
	}
	
	.wrap h2 {
		color: #444;
		text-align: center;
		font-size: 19px;
		line-height: 28px;
		margin-top: -25px;
		margin-bottom: 15px;
	}
	
	.wrap p {
		font-size: 14px;
		line-height: 23px;
		text-align: justify;
		text-indent: 15px;
		margin: 0;
		color: #111;
	}
	
	.wrap p.new_p {
		margin-top: 10px;
	}
	
	.wrap p .semi_title {
		font-weight: bold;
	}
	
	.wrap {
		font-family: Palatino, Times, Serif;
	}
	
	.wrap .column {
		width: 29%;
		float: left;
		padding: 2%;
	}
	
	.wrap .column .number {
		font-family: Arial, Sans Serif;
		color: #fff;
		background: #aaa;
		height: 18px;
		width: 20px;
		text-align: center;
		border-radius: 20px;
		font-size: 11px;
		display: inline-block;
		vertical-align: top;
		margin-left: -15px;
		margin-right: 3px;
		padding-bottom: 2px;
		text-indent: 0px;
	}
	
	@media screen and (max-width: 1078px) {
		.wrap {
			margin: 0 1px 0 -20px;
			padding: 10px 0px 10px 10px;
			border-right: 0 none;
			border-radius: 0;
		}
	}
	
	@media screen and (max-width: 800px) {
		.wrap .column {
			float: none;
			width: 100%;
			padding: 0px;
			margin-bottom: 10px;
		}
		
		.img_wrapper {
			margin: -20px -12px 20px -30px;
		}
		
		.wrap {
			border-right: 0 none;
			padding: 10px 10px 10px 20px;
		}
	}
</style>

<style type="text/css" media="print">
	#adminmenuwrap {
		display: none;
	}
	
	#wpcontent {
		margin: 0;
		padding: 0px;
	}
	
	#wpfooter {
		display: none;
	}
	
	h1 {
		font-size: 24px;
		line-height: 34px;
	}
	
	.wrap {
		border: 0 none;
		margin: 0;
	}
	
	.wrap h2 {
		font-size: 16px;
		line-height: 24px;
	}
	
	.wrap p {
		font-size: 14px;
		line-height: 19px;
	}
</style>

<div class="tab" data-tab="loading">
	<img src="<?php echo plugins_url( "lively-chat-support/assets/loading.gif" ); ?>"><br><br>
	Loading your chat-box...
</div>

<div class="wrap">
	<div class="tab" data-tab="setup">
		<div class="img_wrapper">
			<img src="<?php echo plugins_url( "lively-chat-support/assets/happy.jpg" ); ?>">
		</div>
		
		<!-- <h2>They can't help but smile &mdash; Lively</h2> -->
		<!-- <h1>When customer happiness <em>really</em> matters &mdash; use Lively for customer support</h1> -->
		<!-- <h1>What everybody ought to know... About Online Chat for Your Website</h1> -->
		<h1>How Lively Turns Visitors Into Customers &mdash; <em>Every Time</em></h1>
		<h2>The step-by-step guide to install Lively Chat and get 2x more leads.</h2>
		<!-- <h2>Use Lively 2.0 and follow this practical advice</h2> -->
		<!-- <h2>Websites that use live chat are 95% better at things then the competition.</h2> -->
		
		<div class="column">
			<p>
				<strong>If you've ever used a live chat on your website, you've probably noticed that your sales and conversions increase <em>exceptionally</em>.</strong>
				This is because customers are risk-averse and need their questions answered.
			</p>
			<p class="new_p">
				What many business owners <em>don't</em> realize is that potential customers also need to <em>feel like their future questions can be answered as well</em>.
				Today's leading chat-boxes are often cold and impersonal, so many consumers often think chat-boxes are run by UNHELPFUL ROBOTS.
			</p>
			<p class="new_p">
				To dispel this myth, Lively was shaped with trust built into every part of the chat-box experience.
			</p>
		</div>
		
		<div class="column">
			<p>
				The Lively chat-box frame and function has been fine-tuned to build trust with your visitors by using a friendly call-to-action and response-engaging prompters.
				Here's how to maximize your chat-box:
			</p>
			<p class="new_p">
				<span class="number">1</span>
				<span class="semi_title">Register.</span>
				Visit your <a href="<?php echo site_url(); ?>" target="_blank">home page</a> to register your Lively serial number (a popup should appear).
				If you're updating from a previous version of Lively, your data will be preserved.
			</p>
			<p class="new_p">
				<span class="number">2</span>
				<span class="semi_title">Introducers.</span>
				Once registered, visit the Settings > Introducers tab.
				Introducers are the information fields your visitor must fill out.
				HINT: For more leads, disable all (visitors can be prompted by an agent later).
			</p>
		</div>
		
		<div class="column">
			<p>
				<span class="number">3</span>
				<span class="semi_title">Triggers.</span>
				Go to the Settings > Triggers tab.
				Triggers are the backbone of a successful chat-box.
				Start conversations with visitors based on specific criteria.
				HINT: Use a short, casual question to bait warm leads.
			</p>
			<p class="new_p">
				<span class="number">4</span>
				<span class="semi_title">Canned Messages.</span>
				Visit Settings > Canned.
				Set up canned messages to set shortcuts for frequently used responses.
			</p>
			<p class="new_p">
				<span class="number">5</span>
				<span class="semi_title">Agents.</span>
				Visit the Agents tab.
				When you add and activate a new agent, they'll receive an email with a temporary login.
				Change your image by clicking on it.
				HINT: Use a friendly, smiling, genuine avatar for increased engagement.
			</p>
		</div>
	</div>

	<div class="tab" data-tab="activate">
		You are activated.
		<p>
			You've just joined an elite bunch of websites -- great decision.
			Lively is the most revenue-boosting WP plugin you'll ever use!
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
	</div>
	
	<div style="clear: both; "></div>

</div>

<script src="https://cdn.firebase.com/js/client/2.0.6/firebase.js"></script>
<script type="text/javascript">
	(function($) {
		if ($('.tab').length) {
			window.fb = new Firebase("https://lcs4.firebaseio.com/");
			window.fb.child('chatboxes/<?php echo get_option('livelychatsupport_token', 'xxx'); ?>').on('value', function(snapshot) {
				var chatbox = snapshot.val();
				$(".tab").hide();
				$(".wrap").fadeIn();
		
				if (chatbox) {
					if (chatbox.activated) {
						$(".tab[data-tab='activate']").show();
					} else {
						$(".tab[data-tab='help']").show();
					}
				} else {
					$(".tab[data-tab='setup']").show();
				}
			});
		}
	})(jQuery);
</script>