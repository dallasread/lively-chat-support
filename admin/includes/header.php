<?php screen_icon("edit-comments"); ?>

<?php
$upsells = array(
  (object) array(
    "cta" => __("Use surveys to engage visitors!", "lively-chat-support"),
    "url" => "https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=T4Y8KB4RJLURW"
  ),
  (object) array(
    "cta" => __("Triggers engage visitors!", "lively-chat-support"),
    "url" => "https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=2BKE7U7LNT46U"
  ),
  (object) array(
    "cta" => __("Need Multiple Agents?", "lively-chat-support"),
    "url" => "https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=M4F2RKSLV9X6Y"
  ),
  (object) array(
    "cta" => __("Chat with visitors from your phone!", "lively-chat-support"),
    "url" => "https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=R6WMR5FYAA2DU"
  ),
  (object) array(
    "cta" => __("4 Add-ons for only $99!", "lively-chat-support"),
    "url" => "https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=4DNPUK74JEXFS"
  ),
  (object) array(
    "cta" => "&hearts; " . __("Lively Chat Support? Donate!", "lively-chat-support"),
    "url" => "https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=L5JZS6GEQ55XJ"
  ),
  (object) array(
    "cta" => __("Have you seen LivelyChatSupport.com?", "lively-chat-support"),
    "url" => "http://www.livelychatsupport.com"
  )
);

$rand = array_rand($upsells, 1);
$upsell = $upsells[$rand];

?>
<p class="upsell">
  <a href="<?php echo $upsell->url; ?>" target="_blank"><?php echo $upsell->cta; ?></a>
</p>

<h3 class="nav-tab-wrapper">
  <a href="admin.php?page=livelychatsupport&tab=visitors"    class="nav-tab <?php if ($_GET["tab"] == "visitors" || !isset($_GET["tab"]))   { echo "nav-tab-active"; } ?>"><?php _e("Visitors", "lively-chat-support"); ?> <p class="message_waiting"></p></a>
  <?php if (current_user_can("manage_options")) { ?>
    <a href="admin.php?page=livelychatsupport&tab=agents"      class="nav-tab <?php if ($_GET["tab"] == "agents") { echo "nav-tab-active"; } ?>"><?php _e("Agents", "lively-chat-support"); ?></a>
    <a href="admin.php?page=livelychatsupport&tab=schedule"    class="nav-tab <?php if ($_GET["tab"] == "schedule") { echo "nav-tab-active"; } ?>"><?php _e("Schedule", "lively-chat-support"); ?></a>
    <a href="admin.php?page=livelychatsupport&tab=triggers"    class="nav-tab <?php if ($_GET["tab"] == "triggers") { echo "nav-tab-active"; } ?>"><?php _e("Triggers", "lively-chat-support"); ?></a>
    <a href="admin.php?page=livelychatsupport&tab=surveys"     class="nav-tab <?php if ($_GET["tab"] == "surveys")  { echo "nav-tab-active"; } ?>"><?php _e("Surveys", "lively-chat-support"); ?></a>
    <a href="admin.php?page=livelychatsupport&tab=sms"         class="nav-tab <?php if ($_GET["tab"] == "sms")  { echo "nav-tab-active"; } ?>"><?php _e("SMS", "lively-chat-support"); ?></a>
    <a href="admin.php?page=livelychatsupport&tab=settings"    class="nav-tab <?php if ($_GET["tab"] == "settings") { echo "nav-tab-active"; } ?>"><?php _e("Settings", "lively-chat-support"); ?></a>
  <?php } ?>
  <a href="admin.php?page=livelychatsupport&tab=help"        class="nav-tab <?php if ($_GET["tab"] == "help") { echo "nav-tab-active"; } ?>"><?php _e("Help", "lively-chat-support"); ?></a>
</h3>

<audio id="bell" data-latest_id="<?php echo LivelyChatSupport_latest_message_id(); ?>" data-read_url="<?php echo admin_url('admin-ajax.php'); ?>" data-url="<?php echo admin_url('admin-ajax.php'); ?>">
  <source src="<?php echo plugins_url("lively-chat-support/chatbox/assets/audio/bell.mp3"); ?>" type="audio/mpeg">
  <source src="<?php echo plugins_url("lively-chat-support/chatbox/assets/audio/bell.ogg"); ?>" type="audio/ogg">
</audio>

<?php if (!empty($_POST)) { ?>
  <div class="updated">
    <p><?php _e("Your changes have been saved.", "lively-chat-support"); ?></p>
  </div>
<?php } ?>