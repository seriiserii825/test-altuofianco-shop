<?php
function restrictedArea($atts, $content = null)
{
    $site_url = get_site_url();
    return "<div id='restrictedArea' data-url='{$site_url}'>
  </div>";
}

add_shortcode('restricted-area', 'restrictedArea');
