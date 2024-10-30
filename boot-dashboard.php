<?php
/*
Plugin Name: Boot Dashbaord
Plugin URI:  https://wordpress.org/plugins/boot-dashbaord/
Description: It’s an awosome ui/ux wordpress dashboard template. Easy to install and use. After install the plugin your wordpress default dashboard style change and get awosome, professional look.
Version:     1.0.1
Author:      Dipto Paul
Author URI:  http://bootdiv.com/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // disable direct access
}

// Bootstrap Dashbaord file include
function boot_dashbaord_admin_script() {
    
    // js include
    wp_enqueue_script( 'ds-script-dashboard', plugins_url( 'asses/js/boot-dashboard.js', __FILE__), false, '1.0.0', true);
    
    // css include
    wp_enqueue_style( 'ds-style-bootstrap', plugins_url( 'asses/css/bootstrap.min.css', __FILE__), false, '4.7.5', false );
    wp_enqueue_style( 'ds-style-boottheme', plugins_url( 'asses/css/bootstrap-theme.min.css', __FILE__), false, '3.3.7', false );
    wp_enqueue_style( 'ds-style-dashboard', plugins_url( 'asses/css/boot-dashboard.css', __FILE__), false, '1.0.0', false );

}
add_action( 'admin_enqueue_scripts', 'boot_dashbaord_admin_script' );
