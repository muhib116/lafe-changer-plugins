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
require_once __DIR__ . '/functions/loadAdminScripts.php';
// require_once __DIR__ . '/functions/wooCommerceExist.php';
// require_once __DIR__ . '/functions/pluginUpdateNotice.php';

// Handle AJAX Request
add_action('wp_ajax_life_changer_fetch_data', 'life_changer_fetch_data');



function life_changer_fetch_data() {
    check_ajax_referer('life_changer_nonce', 'security');

    // Simulate fetching data
    $data = [
        ['id' => 1, 'name' => 'Change your habits'],
        ['id' => 2, 'name' => 'Stay consistent'],
        ['id' => 3, 'name' => 'Embrace positivity'],
        ['id' => 3, 'name' => 'Embrace positivity'],
    ];

    wp_send_json_success($data);
}