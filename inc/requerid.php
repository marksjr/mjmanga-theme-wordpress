<?php
require_once __DIR__ . '/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'prefix_register_required_plugins' );
function prefix_register_required_plugins() {
    $plugins = [
        [
            'name'     => 'Meta Box',
            'slug'     => 'meta-box',
            'required' => true,
        ],
        [
            'name'     => 'Addon MJManga', // The plugin name.
            'slug'     => 'addon-mjmanga', // The plugin slug (typically the folder name).
            'source'   => get_stylesheet_directory() . '/inc/plugin/addon.zip', // The plugin source.
            'required' => true, // If false, the plugin is only 'recommended' instead of required.
        ],
        // More plugins
    ];
    $config  = [
        'id' => 'your-id',
    ];
    tgmpa( $plugins, $config );
}
