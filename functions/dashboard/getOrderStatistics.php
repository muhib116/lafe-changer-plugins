<?php
function get_woocommerce_order_statistics() {
    // Check if WooCommerce is active
    if (!class_exists('WooCommerce')) {
        return new WP_Error('woocommerce_not_active', 'WooCommerce is not active', ['status' => 404]);
    }

    // Retrieve order counts
    $total_orders = wc_orders_count();
    $pending_orders = wc_orders_count('pending');
    $canceled_orders = wc_orders_count('cancelled');
    $completed_orders = wc_orders_count('completed');

    return [
        'total_orders' => $total_orders,
        'pending_orders' => $pending_orders,
        'canceled_orders' => $canceled_orders,
        'completed_orders' => $completed_orders,
    ];
}

// Register REST API route
add_action('rest_api_init', function () {
    register_rest_route('wc/v1', '/order-stats', [
        'methods' => 'GET',
        'callback' => 'get_woocommerce_order_statistics',
        'permission_callback' => function () {
            // Check if the user is logged in and has admin capabilities
            return current_user_can('manage_options');
        },
    ]);
});
