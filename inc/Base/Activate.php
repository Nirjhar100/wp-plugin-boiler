<?php
/**
 * @package L2it-player
 */

namespace Inc\Base;

class Activate
{
    public static function activate(){
        flush_rewrite_rules();
    } 
}