<?php
/*
Plugin Name: Days Until PiDay
*/

add_action('init', function(){
    add_shortcode('piday-plugin', function($atts = [], $content = null){
        //put the attributes into javascript in case they are needed client side
        $content .= "<script>var atts = " .
            json_encode($atts) .
            "</script>";
        $daysuntilpiday = ceil((mktime(0,0,0,3,14,date('Y')) - time()) / 86400);
        $content .= $daysuntilpiday;
        return $content;
    });
    
});
