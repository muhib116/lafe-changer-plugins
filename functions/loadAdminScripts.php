<?php
// Enqueue Scripts and Styles
add_action('admin_enqueue_scripts', 'life_changer_enqueue_scripts');
$manifest_path = plugin_dir_path(__DIR__) . 'dist/.vite/manifest.json';
$manifest = json_decode(file_get_contents($manifest_path), true);
$css_file_name = $manifest['src/main.ts']['css'][0] ?? null;

function life_changer_enqueue_scripts($hook_suffix) {
    global $manifest;
    global $manifest_path;
    global $css_file_name;

    if (file_exists($manifest_path)) {
        $file_name = $manifest['src/main.ts']['file'] ?? null;
        if ($file_name) {
            wp_enqueue_script(
                'life-changer-app',
                plugins_url('dist/' . $file_name, __DIR__),
                [],
                null,
                true
            );
        }
        if ($css_file_name) {
            wp_enqueue_style(
                'life-changer-app-style',
                plugins_url('dist/' . $css_file_name, __DIR__),
                [],
                null
            );
        }
    }

    // Pass data to Vue
    wp_localize_script('life-changer-app', 'lifeChangerData', [
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('life_changer_nonce'),
    ]);
}


add_filter('script_loader_tag', function ($tag, $handle, $src) {
    if ('life-changer-app' === $handle) {
        $tag = '<script type="module" src="' . esc_url($src) . '"></script>';
    }
    return $tag;
}, 10, 3);