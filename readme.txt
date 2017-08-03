=== BBCode Deluxe ===
Contributors: DevynCJohnson
Donate link: http://dcjtech.info/donations/
Tags: bbpress, bbpress2, bbpress-plugin, bbcode, shortcode, forum, html5, markup
Requires at least: 3.9
Tested up to: 4.5.1
Stable tag: trunk
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

BBCode Deluxe adds BBCode markup (and other shortcodes) to Wordpress and BBPress.

== Description ==

BBCode Deluxe adds BBCode markup (and other shortcodes) to Wordpress and BBPress. These BBCodes create HTML5 tags, so be sure that your site supports HTML5.

* Plugin Name: BBCode Deluxe
* Plugin URI: https://wordpress.org/plugins/bbcode-deluxe/
* Description: Adds support for BBCode to Wordpress and BBPress
* Version: 2016.04.10
* Author: Devyn Collier Johnson (DevynCJohnson)
* Author URI: http://dcjtech.info/
* Email: DevynCJohnson@Gmail.com
* License: GNU General Public License version 3 (GPL3)
* License URI: http://www.gnu.org/licenses/gpl-3.0.html

This plugin includes code from the below listed developers and their plugins.

* Copyright (C) 2013 Anton Channing ("Video and Audio BBCodes" and "bbPress2 BBCode")
* Copyright (C) 2010 b0ingBall (b0ingBall BBCode plugin)
* Copyright (C) 2008 Viper007Bond (the original BBCode plugin)

Feel free to submit suggestions, bug reports, concerns, etc. to me. If a user donates more than twenty USD to my PayPal account, then I will give that user my phone-number to allow the user to call me for bug reports, suggestions, help, concerns, etc.

The BBCodes can be typed in all lowercase or all uppercase, but the opening and closing BBCodes must match. For instance, `[b]bold[/b] = [B]bold[/B]`.

`*Inline Styling*
Bold: [b]bold[/b] [strong]bold[/strong]
Italic: [i]italic[/i] [em]italic[/em]
Underline: [u]underline[/u]
Strikeout:[s]striked-out/strike-through[/s] [del]deleted[/del]
Color (name): [color color="blue"]named blue[/color]
Color (hex string): [color color="0000ff"]hex blue[/color]
Color (hex number): [color color=#00ff00]this is green instead of blue[/color]
Center Text: [center]center me[/center]
Font Size: [size size=10]10px font size[/size]
Justify Alignment: [justify]justify text[/justify]
Left Alignment: [left]left-aligned text[/left]
Subscript: [subscript]subscript text[/subscript]
Superscript: [superscript]superscript text[/superscript]
Right Alignment: [right]right-aligned text[/right]
Reverse Text: [reverse]reverse text[/reverse] [bdo]reverse text[/bdo]

*Images, Links, and Embedded Content*
Email: [email email=user@www.example.com]text[/email] [email]user@www.example.com[/email]
Freesound: [freesound]ID[/freesound] [freesound=large]ID[/freesound]
Gvideo: [gvideo]ID[/gvideo]
Image: [img]http://dcjtech.info/DCJTech_128.jpg[/img] [img img=DCJTech Logo]http://dcjtech.info/DCJTech_128.jpg[/img]
URL: [url]http://dcjtech.info/[/url] [url url=http://dcjtech.info/]DCJTech[/url]
Vimeo: [vimeo]ID[/vimeo]
Youtube: [youtube]ID[/youtube]

*Quotes and Code*
Abbreviation: [abbr title="HyperText Markup Language"]HTML[/abbr]
Cite: [cite]Relevant source[/cite]
Computer Code: [code]function HelloWorld($greet = 'World') { return 'Hello '.$greet } [/code]
Keyboard Keys: [kbd]Ctrl[/kbd]+[kbd]S[/kbd] [keyboard]Ctrl[/keyboard]+[keyboard]S[/keyboard]
Quote: [quote]KISS - Keep It Simple, Stupid[/quote]
Quote (NAME): [quote quote=NAME]Life is what you make of it[/quote] [quote quote="NAME"]Persistance is the main ingredient for success[/quote]
Quote (author=NAME): [quote author=NAME]Quitters never succeed, and successors never quit[/quote] [quote author="Martin Jones"]Kissing arses is pointless. However, knowing whose arse to kiss and whose to kick and when is priceless.[/quote]

*Lists and Tables*
Ordered Lists: [ol][li]Ordered-list[/li][/ol]
Unordered Lists: [ul][li]Unordered-list[/li][/ul]
Table: [table]
Thead: [thead]
Tbody: [tbody]
Tfoot: [tfoot]
th: [th]
tr: [tr]
td: [td]

*Special Content*
Client IP: [ip/]
Contents appear to registered users: [user]This is a secret message[/user]
Contents appear to non-registered users: [guest]Login to see less ads and content hidden from guests. (CODE TO DISPLAY AD)[/guest]
Horizontal Ruler (Line): [hr/]
Spoiler: [spoiler]Surprise![/spoiler]
Spoiler (Named): [spoiler spoiler=one plus one]is 10 (in binary)[/spoiler]
Useragent: [useragent/]`

`[quote quote=NAME]QUOTE[/quote]`

will render as

`<div class="bbcode-quote bbcode-quote-NAME"><strong>NAME wrote: </strong><blockquote>QUOTE</blockquote></div>`

If "NAME" matches the login name of a user on the system, it will render as

`<div class="bbcode-quote bbcode-quote-user bbcode-quote-NAME"><strong>DISPLAY_NAME wrote: </strong><blockquote>QUOTE</blockquote></div>`

Where "DISPLAY_NAME" is the display name that user. With BuddyPress installed, the name also becomes a link to their profile page. Otherwise, if BBPress is installed, it becomes a link to their forum user-page.

== License ==

"BBCode Deluxe" is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

"BBCode Deluxe" is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with "BBCode Deluxe".  If not, see <http://www.gnu.org/licenses/>.

== Installation ==

1. Upload the "bbcode-deluxe" folder and its contents to the "/wp-content/plugins/" directory
2. Activate the plugin through the "Plugins" menu in WordPress

== Screenshots ==

None

== Frequently Asked Questions ==
= Where are the FAQs? =

No FAQs, yet.

== Upgrade Notice ==

Migrating from "bbpress2-bbcode" to "BBCode Deluxe" maybe desirable to many admins for updates, new features, optimization, and HTML5 support.

== Changelog ==
= 2016.04.10 =
* Wordpress 4.5
* Still no donations, so do not expect too many improvements (^u^)
= 2015.12.22 =
* Optimized some code and fixed some bugs
* Still no donations, so do not expect too many improvements (^u^)
= 2015.10.01 =
* Added shortcodes
* Optimized some code
* Fixed a bug in the URL and EMAIL shortcode
= 2015.08.27 =
* First release
