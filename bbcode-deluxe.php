<?php /*
Plugin Name: BBCode Deluxe
Plugin URI: http://dcjtech.info/
Description: Adds support for BBCode to Wordpress and BBPress.
Version: 2016.04.10
Author: Devyn Collier Johnson (DevynCJohnson)
Author URI: http://dcjtech.info/
License: GNU General Public License version 3 (GPL3)
License URI: http://www.gnu.org/licenses/gpl-3.0.html
This plugin includes code from the below listed developers and their plugins.
Copyright (C) 2013 Anton Channing (Video and Audio BBCodes and bbPress2 BBCode)
Copyright (C) 2010 b0ingBall (b0ingBall BBCode plugin)
Copyright (C) 2008 Viper007Bond (the original BBCode plugin)
*** GPL3 ***
"BBCode Deluxe" is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
"BBCode Deluxe" is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
You should have received a copy of the GNU General Public License along with "BBCode Deluxe". If not, see <http://www.gnu.org/licenses/>.*/
defined('ABSPATH') or die('Invalid Entrance!');
require_once(dirname(__FILE__).'/bbcode-admin.php');
require_once(dirname(__FILE__).'/class-bbcode.php');
add_action('plugins_loaded',function(){global $BBCode; $BBCode = new BBCode();},14);
?>
