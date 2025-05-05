<?php

if ( class_exists( 'QuadLayers\\WP_Plugin_Table_Links\\Load' ) ) {
	add_action('init', function() {
		new \QuadLayers\WP_Plugin_Table_Links\Load(
			QLTTF_PLUGIN_FILE,
			array(
				array(
					'text'   => esc_html__( 'Settings', 'wp-tiktok-feed' ),
					'url'    => admin_url( 'admin.php?page=qlttf_backend' ),
					'target' => '_self',
				),
				array(
					'text' => esc_html__( 'Premium', 'wp-tiktok-feed' ),
					'url'  => QLTTF_PURCHASE_URL,
					'color' => 'green',
					'target' => '_blank',
				),
				array(
					'place' => 'row_meta',
					'text'  => esc_html__( 'Support', 'wp-tiktok-feed' ),
					'url'   => QLTTF_SUPPORT_URL,
				),
				array(
					'place' => 'row_meta',
					'text'  => esc_html__( 'Documentation', 'wp-tiktok-feed' ),
					'url'   => QLTTF_DOCUMENTATION_URL,
				),
			)
		);	
	});

}
