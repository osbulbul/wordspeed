<?php
/*
Plugin Name:  WordSpeed
Plugin URI:   http://wpati.com/wordspeed
Description:  The best WordPress productivity plugin. It can make faster your admin actions. Install and press Shift+M
Version:      0.1.4 beta
Author:       Wpati
Author URI:   http://wpati.com
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wordspeed
Domain Path:  /languages
*/

//imports
require_once('core/class-wordspeed.php');

require_once('commands/class-navigation.php');
require_once('commands/class-plugins.php');
require_once('commands/class-settings.php');

//initiate
$wordspeed = new WordSpeed();

//add commands
require_once('commands/definations.php');
