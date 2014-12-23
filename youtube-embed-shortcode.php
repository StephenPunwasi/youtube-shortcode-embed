<?php
/*
Plugin Name: YouTube Shortcode Embeding
Plugin URI:
Description: Adds a shortcode for embedding YouTube videos
interface
Version: 1.0
Author: Stephen Punwasi
License: GPLv2
*/

add_shortcode('youtube', 'pkwst_youtube_shortcode');

function pkwst_youtube_shortcode($atts){
  extract( shortcode_atts( array(
    'id' => ''
  ), $atts));
  $output = '<iframe width="560" height="315" src="http://www.youtube.com/embed/' . $id . '"
    frameborder="0" allowfullscreen></iframe>';
  return $output;
}


?>
