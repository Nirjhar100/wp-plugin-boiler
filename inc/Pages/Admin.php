<?php
/**
 * @package L2itPlayer
*/

namespace Inc\Pages;

class Admin{

    public function register(){
        add_action('admin_menu', array( $this, 'add_admin_pages'));  
    }

    public function add_admin_pages(){
        add_menu_page('Listen2It Player', 'Listen2It', 'manage_options', 'l2it_player', array( $this, 'admin_index'),'dashicons-store', 110);
    }

    public function admin_index(){
        require_once PLUGIN_PATH. 'templates/admin.php';
    }

    public function register_custom_fields(){
        //register setting 
        register_settings('', '', array(''));

        // add settings section
        // add  settings field
    }
}