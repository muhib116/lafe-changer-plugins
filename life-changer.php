<?php
/*
Plugin Name: Life Changer
Description: A WordPress plugin using Vue 3 and Tailwind CSS in the admin panel.
Version: 1.0
Author: Your Name
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}


require_once __DIR__ . '/functions/createAdminMenu.php';
require_once __DIR__ . '/functions/wooCommerceExist.php';
require_once __DIR__ . '/functions/loadAdminScripts.php';

add_action('init', function (){
    // require_once __DIR__ . '/functions/pluginUpdateNotice.php';

    // Register a REST API endpoint to get the site name.
    add_action('rest_api_init', function () {
        register_rest_route('custom/v1', '/site-name', array(
            'methods' => 'GET',
            'callback' => 'get_site_name',
            'permission_callback' => '__return_true', // Makes it accessible to anyone.
        ));
    });

    // Callback function to return the site name.
    function get_site_name() {
        return array(
            'site_name' => get_bloginfo('name'), // Get the site name.
        );
    }

});
