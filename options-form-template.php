<div class="wrap"><h2>BBCode Deluxe</h2>
<p>BBCode (Bulletin Board Code) is a lightweight markup language used as an alternative to HTML for formatting. <a href="http://www.bbcode.org/reference.php">http://www.bbcode.org/reference.php</a></p>
<?php if($whitelist_enabled) {
	if($bbcodes_active){ ?>
<p>BBCodes are enabled and <a href="http://wordpress.org/extend/plugins/bbpress2-shortcode-whitelist/">bbPress shortcode whitelist</a> has been detected as activated. Users should be able to use BBCodes in blogs, comments, and forums.</p>
	<?php } else { ?>
<p>BBCodes are installed and <a href="http://wordpress.org/extend/plugins/bbpress2-shortcode-whitelist/">bbPress shortcode whitelist</a> has been detected as activated.  However, it seems that BBCode Deluxe needs to be added to the whitelist settings. However, if some BBcodes are included in the manual whitelist, then those BBCodes should work.</p>
	<?php } ?>
<?php } else { ?>
<p>BBCodes are enabled and working in the forums. However, to be safe, install the <a href="http://wordpress.org/extend/plugins/bbpress2-shortcode-whitelist/">bbPress shortcode whitelist</a> to stop unsafe shortcodes like <code>[bbp-register]</code> from being used.</p>
<?php } ?>
<div><h3 id="extras">Extras</h3>
<h4>Your Info</h4><ul>
<li>HTTP_USER_AGENT - <?php echo $_SERVER['HTTP_USER_AGENT'];?></li>
<li>REMOTE_ADDR - <?php echo $_SERVER['REMOTE_ADDR'];?></li>
<li>REMOTE_HOST - <?php echo ((!empty($_SERVER['REMOTE_HOST'])) ? $_SERVER['REMOTE_HOST'] : 'Your web server must be configured to create this variable. For instance, Apache needs <code>HostnameLookups On</code> in <em>httpd.conf</em>.');?></li>
<li>REMOTE_PORT - <?php echo $_SERVER['REMOTE_PORT'];?></li>
<li>REQUEST_METHOD - <?php echo $_SERVER['REQUEST_METHOD'];?></li>
<li>HTTP_REFERER - <?php echo ((!empty($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : 'No referer found.');?></li>
</ul>
<h4>Server's Info</h4><ul>
<li>SERVER_NAME - <?php echo $_SERVER['SERVER_NAME'];?></li>
<li>SERVER_ADDR - <?php echo $_SERVER['SERVER_ADDR'];?></li>
<li>SERVER_PORT - <?php echo $_SERVER['SERVER_PORT'];?></li>
<li>SERVER_SOFTWARE - <?php echo $_SERVER['SERVER_SOFTWARE'];?></li>
<li>SERVER_PROTOCOL - <?php echo $_SERVER['SERVER_PROTOCOL'];?></li>
</ul>
</div>
</div>
