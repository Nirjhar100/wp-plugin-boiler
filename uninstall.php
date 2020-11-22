<?php

/**
 * Trigger this file on plugin uninstall
 * 
 * @package L2it-player
 */

if( !defined('WP_UNINSTALL_PLUGIN')){
    die;
}

//Clear db
$books = get_posts(array('post_type'=>'book', 'numberposts'=> -1));

foreach($books as $book){
    wp_delete_posts($book->ID, true);
}