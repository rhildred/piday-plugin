<?php
/*
Plugin Name: Today's Weather
*/
function weather_shortcodes_init()
{
    function weather_shortcode($atts = [], $content = null)
    {
        
        $content .= file_get_contents(dirname(__FILE__)."/weather.html");
        return $content;
    }
    add_shortcode('weather-plugin', 'weather_shortcode');
}
add_action('init', 'weather_shortcodes_init');