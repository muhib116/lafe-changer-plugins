<?php
// Add Admin Menu Page
add_action('admin_menu', 'life_changer_add_menu');
function life_changer_add_menu() {
    add_menu_page(
        'Life Changer Plugin',
        'Life Changer',
        'manage_options',
        'life-changer',
        'life_changer_render_admin_page',
        'dashicons-smiley',
        100
    );
}

// Render Admin Page
function life_changer_render_admin_page() {
    echo '<div id="life-changer-app"></div>'; // Vue app container
}