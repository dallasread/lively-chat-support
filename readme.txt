=== Lively Chat Support ===
Version: 2.0
URI: http://www.livelychatsupport.com
Contributors: dallas22ca
Author: Dallas Read
Author URI: http://www.DallasRead.com
Donate link: Purchase an addon!
Tags: Chat, chat free, chat live, chat plugin, chat support, chat tool, Chat Widget, instant chat, live chat, live chat button, live chat plugin, live chat software, live chat support, live chat tool, live chat widget, live support, live support button, lively chat support, website chat, customer help, customer support, pure chat, online support, support, zendesk, Zopim, clickdesk, olark, snapengage
Requires at least: 3.6
Tested up to: 4.1
Stable tag: trunk
License: MIT

Live Chat Support is a free live chat plugin for your WordPress website. Live chat will instantly capture leads and turn visitors into customers. Lively is a world-class personalized, engaging chat solution refined for businesses that need high conversions. Try it free!

== Description ==

## How Lively Turns Visitors Into Customers — Every Time**

#### *The step-by-step guide to install Lively Chat and get 2x more leads*

If you've ever used a live chat on your website, you've probably noticed that your sales and conversions increase exceptionally. This is because customers are risk-averse and need their questions answered.
What many business owners don't realize is that potential customers also need to feel like their future questions can be answered as well.

[KM QUOTE]

Today's leading chat-boxes are often cold and impersonal, so many consumers often think chat-boxes are run by UNHELPFUL ROBOTS.

To dispel this myth, Lively was shaped with trust built into every part of the chat-box experience.

The Lively chat-box frame and function has been fine-tuned to build trust with your visitors by using a friendly call-to-action and response-engaging prompters. Here's how to maximize your chat-box:

1. **Install.** Install Lively Chat Support by searching for it in the WordPress Plugins in the Admin area of your WordPress site.
1. **Register.** Visit your home page to register your Lively serial number (a popup should appear). If you're updating from a previous version of Lively, your data will be preserved.
1. **Introducers.** Once registered, visit the Settings > Introducers tab. Introducers are the information fields your visitor must fill out. HINT: For more leads, disable all (visitors can be prompted by an agent later).
1. **Triggers.** Go to the Settings > Triggers tab. Triggers are the backbone of a successful chat-box. Start conversations with visitors based on specific criteria. HINT: Use a short, casual question to bait warm leads.
1. **Canned Messages.** Visit Settings > Canned. Set up canned messages to set shortcuts for frequently used responses.
1. **Agents.** Visit the Agents tab. When you add and activate a new agent, they'll receive an email with a temporary login. Change your image by clicking on it. HINT: Use a friendly, smiling, genuine avatar for increased engagement.

== Installation ==

1. Visit the Plugins page. Click "Add New", search for "Lively Chat Support", and click install. "Activate" Lively Chat Support.
1. On the left sidebar, click on "Lively Chat".
1. Visit your site's home page to register your chat-box and begin using it!

== Frequently Asked Questions ==

= After installing Lively, my site is showing a memory error. How do I fix it? =
* The issue is likely caused from having many plugins installed in a 

== Screenshots ==

1. A great looking chatbox that is easy to tailor to your brand.
2. Admin view is clean and easy to operate. 
3. Customize your chatbox with your brand's colours, and upload your own Call To Action images.
4. Set your chat to always be online, always be offline, or never show. In version 1.0, we'll be introducing a new way to schedule your online hours.
5. Manage who your visitors will be chatting with.
6. Offline mode functions as the perfect lead generation form.
7. Schedule the hours you are available (pairs perfectly with our SMS Addon).

== Feature Suggestions ==

Here's some scheduled features to be added:

* SMS alert when new contact registers
* Phone field
* http://wordpress.org/support/topic/issue-about-name-and-email-box?replies=2#post-5683726
* DB bloat
* change subscriber name and email
* sound in chrome
* initial chat notice go to multiple email addresses
* I resolved this by changing port to ssl. Thanks.
* Initial message from agent.
* Mark agents as busy
* Constant bell in the admin
* Detect which agents are online automatically
* Don't require email address before starting a conversation.
* Button for visitors to "Introduce Yourself"
* Automatic first message from agent
* Have a peek at audio files playing for new messages, new visitors, etc. (esp cross-browser)
* alert to repeat (say once every 10-20 seconds) until a reply is sent
* Store Offline Mode form submissions

== Changelog ==

= 1.0.41 =
* Tweaked how LCS responds to Twilio (SMS Addon).

= 1.0.39 =
* Added 4.0 style icon.
* Added feedback section.

= 1.0.38 =
* Annual plan added.

= 1.0.37 =
* French version added.
* SMS FAQ updated.

= 1.0.36 =
* Fix for issue where SMS was not being received (switch from accepting POST vars to REQUEST).

= 1.0.35 =
* Fix sound issue.

= 1.0.33 =
* Avoid errors showing on the Name & Email boxes.

= 1.0.33 =
* Optional track hits for lively
* Guaranteed support times added (24 hours for customers, 72 for non-customers)

= 1.0.32 =
* If no agents are online, the chat stays in Offline mode.
* Bug fix while polling for new messages.
* Fixed a bug in the scheduling algorithm.

= 1.0.31 =
* Repaired permissions for multi-agent addon.

= 1.0.30 =
* Fixed a security issue.
* Fixed an issue where triggers were occurring more than once.

= 1.0.29 =
* WPML fix (thanks Dmitry).
* Cookie fix (was showing errors in the footer).

= 1.0.28 =
* Cache support for button text whether in online or offline mode.
* New bell!

= 1.0.27 =
* Bug fix where fields weren't saving if they were blank strings.

= 1.0.26 =
* Scheduling bug squashed.

= 1.0.25 =
* SMS bug squashed.

= 1.0.24 =
* Bug when registering the plugin.

= 1.0.23 =
* Updating issue when not administrator.

= 1.0.22 =
* Cleared a few errors that were showing up if your theme had error reporting turned on.
* Fixed an issue where some themes were (inappropriately) hijacking links, causing Lively to not function.

= 1.0.20 =
* The Golden IE Fix: Removed 2 trailing commas in JS that were causing Lively to break in IE.
* To combat memory issues, Lively stores all its configuration in one options hash (1000 less cache hits and more than 50% less get_options() calls)! To upgrade, you just need to install the latest version of the plugin - we update your old data to the new format automatically.
* We're preselling Screen Sharing! To be released sometime this summer... :D
* SMS is now supported in "Online" mode (instead of just "Office Hours").
* Empty triggers no longer validate - body text is required.
* Emails are now using wp_mail() function instead of mail().
* New header for the plugin page on wordpress.org!

= 1.0.19 =
* Fixed an issue where previously sent messages would trigger a "ding" on page load.

= 1.0.18 =
* Removed whitespace appearing at the top of the chat on mobile devices.
* Instructions update for SMS.
* Removed extra slashes in Survey's "Thank You" field.
* Lithuanian translation added.
* Monthly plans added for addons ($6.99/month).

= 1.0.17 =
* Just bumping stable tag (sorry about all the updates!).

= 1.0.13 =
* Nearly useless update.

= 1.0.12 =
* Mobile styling bug fix where chatbox title had white space above it.
* Bug fixed where W3 Total Cache was not getting cleared.

= 1.0.11 =
* Chatbox visibility - an easy way to show Lively on certain pages - no shortcode necessary!
* Flushing caches when changes are made (supports W3 Total Cache and WP Super Cache)
* Deleting history in chatbox should keep the 
* Fixed a bug where quick, consecutive messages would fall through the cracks.
* Caching support for Online/Offline/Hours features
* Added Danish translation!

= 1.0.10 =
* menu item shows for all users, so agents don't have to be admins to chat.
* Slashes appearing in chatbox message (Don\'t)
* Twilio sign up link fixed.
* Help PDF added to the assets folder (Thanks Sharon!).
* Profile hooks removed on lively-chat-support.php.
* Updated SMS documentation.
* Visitor conversations are now print friendly!
* Remote HTTPS requests are allowed (some users were unable to connect to the Twilio API for SMS Addon)

= 1.0.9 =
* Twilio credentials fixed.
* FreeIP failures caught.

= 1.0.8 =
* Translations added.
* Curl requests now using WP HTTP.
* Swapped left/right CSS for chatbox position.
* Cleaned up agent interface.

= 1.0.5 =
* MULTI AGENT ADDON IS AVAILABLE!
* Show LivelyChat only on certain pages.
* New "Schedule" tab allows you to say who's online and when.
* Push finish date if clicking on unread convo.
* Green dot appears on a conversation when you receive a new message (no refresh necessary).
* Message Template for convos (generate on the fly instead of clone)... causing issues with some other plugins.
* jQuery scope more obvious and effective so there are not conflicts with your theme.
* Header min-height reset to be compatible with your theme.

= 1.0.4 =
* Fix strange DB multiple primary key error.

= 1.0.3 =
* Fix logout button (somehow didn't update from 1.0.1).

= 1.0.2 =
* Brought back the "Online via SMS" option for those that have purchased the SMS Addon.

= 1.0.1 =
* We've Hit 1,000 Downloads!
* Pre-Order the all new Multi Agent feature through the link in the top right of the plugin page (will be released October 15)
* Schedule your online hours (with screenshot!)
* Sort convos by date!
* Fix chatbox text colour issue
* Apostrophes for chatbox titles and messages
* Visitor logout
* Delete specific convo and delete all conversation history
* Trim twilio credentials and activation code for SMS Addon (so that they work even with an extra space on the end or beginning)
* Option to remove "Powered By Lively Chat" (but we'd prefer if you didn't ;])
* Database tables are charsetted and collated to support unicode (utf8)

= 1.0.0 =
* Caching support for triggers, surveys, and loading messages.
* jQuery noConflict used to prevent JS issues.

= 0.9.9 =
* Survey's addon released! Get specific information from your customers with the most unintrusive tool in town!

= 0.9.8 =
* All chat registrations are emailed to the admin (set on the Settings page).
* Prepping for Triggers addon.

= 0.9.7 =
* Preparing plugin for Addons plus a few other bug fixes.

= 0.9.6 =
* Fixed a problem with the offline form not submitting. Added an option on the settings page to change the email address the form response is sent to.

= 0.9.1, 0.9.2, 0.9.3, 0.9.4, 0.9.5 =
* Working on the plugin screenshots

= 0.9 =
* Lively Chat Support is released into the wild.