<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://wordpress.org
 * @since             1.0.0
 * @package           Vimeo_Video_Gallery
 *
 * @wordpress-plugin
 * Plugin Name:       Vimeo Video Gallery
 * Plugin URI:        https://wordpress.org
 * Description:       Video Gallery with Vimeo
 * Version:           1.0.0
 * Author:            Lavinia
 * Author URI:        https://wordpress.org/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       vimeo-video-gallery
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'VIMEO_VIDEO_GALLERY_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-vimeo-video-gallery-activator.php
 */
function activate_vimeo_video_gallery() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-vimeo-video-gallery-activator.php';
	Vimeo_Video_Gallery_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-vimeo-video-gallery-deactivator.php
 */
function deactivate_vimeo_video_gallery() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-vimeo-video-gallery-deactivator.php';
	Vimeo_Video_Gallery_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_vimeo_video_gallery' );
register_deactivation_hook( __FILE__, 'deactivate_vimeo_video_gallery' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-vimeo-video-gallery.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_vimeo_video_gallery() {

	$plugin = new Vimeo_Video_Gallery();
	$plugin->run();

}
run_vimeo_video_gallery();
