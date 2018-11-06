<?php
/*
Plugin Name: tofumatt.com's site-specific code
Description: Used for custom stuff I want to enable on the site.
*/

// Update all plugins; all of the time. I hate managing updates and my plugins
// are simple.
add_filter( 'auto_update_plugin', '__return_true' );
