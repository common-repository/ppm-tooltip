<?php
/*
Plugin Name: PPM Tooltip
Plugin URI: http://perfectpointmarketing.com/plugins/ppm-tooltip
Description: This plugin will enable tooltip in your Wordpress theme.
Author: Perfect Point Marketing
Author URI: http://perfectpointmarketing.com
Version: 1.0
*/


/*Some Set-up*/
define('PPM_TOOLTIP_PLUGIN_PATH', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );


/* Adding Latest jQuery from Wordpress */
function ppm_tooltip_latest_jquery() {
	wp_enqueue_script('jquery');
}
add_action('init', 'ppm_tooltip_latest_jquery');

/* Adding plugin javascript Main file */
wp_enqueue_script('ppm-tooltip-plugin-main', PPM_TOOLTIP_PLUGIN_PATH.'js/ppm-tooltip.js', array('jquery'));

/* Adding plugin javascript active file */
wp_enqueue_script('ppm-tooltip-plugin-active', PPM_TOOLTIP_PLUGIN_PATH.'js/ppm-tooltip-active.js', array('jquery'), '1.0', true);

/* Adding Plugin custm CSS file */
wp_enqueue_style('ppm-tooltip-plugin-style', PPM_TOOLTIP_PLUGIN_PATH.'css/style.css');

?>