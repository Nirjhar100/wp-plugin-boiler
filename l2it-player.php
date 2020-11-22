<?php
/**
 * @package L2it-player
 * @version 0.0.1
 */
/*
Plugin Name: L2it player
Description: Wp plugin to convert your blog posts to audio 
Author: Listen2It
Version: 0.0.1
Author URI: https://listen2it.co/
License: GPLv2  
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; i

Copyright 2020  Inc.
*/

defined('ABSPATH') or die('Hey, what are you doing here you silly human');

// Require once the composer autoload
if( file_exists(dirname(__FILE__).'/vendor/autoload.php')){
    require_once dirname(__FILE__).'/vendor/autoload.php';  
}

// define CONSTANTS
define('PLUGIN_PATH', plugin_dir_path(__FILE__));
define( 'PLUGIN_URL', plugin_dir_url(__FILE__));
define('PLUGIN', plugin_basename(__FILE__));

use Inc\Base\Activate;
use Inc\Base\Deactivate;

#plugin activation
function activate_l2it_plugin(){
    Activate::activate();
}

#plugin deactivation 
function deactivate_l2it_plugin(){
    Deactivate::deactivate();
}

register_activation_hook(__FILE__, 'activate_l2it_plugin');
register_deactivation_hook(__FILE__, 'deactivate_l2it_plugin');

//Initialize all core classes
if (class_exists('Inc\\Init')){
    Inc\Init::register_services();
}








