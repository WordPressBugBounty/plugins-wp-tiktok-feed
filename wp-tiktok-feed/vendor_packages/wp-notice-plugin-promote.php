<?php

if ( class_exists( 'QuadLayers\\WP_Notice_Plugin_Promote\\Load' ) ) {

	add_action('init', function() {
		/**
		 *  Promote constants
		 */
		define( 'QLTTF_PROMOTE_LOGO_SRC', plugins_url( '/assets/backend/img/logo.jpg', QLTTF_PLUGIN_FILE ) );
		/**
		 * Notice review
		 */
		define( 'QLTTF_PROMOTE_REVIEW_URL', 'https://wordpress.org/support/plugin/wp-tiktok-feed/reviews/?filter=5#new-post' );
		/**
		 * Notice premium sell
		 */
		define( 'QLTTF_PROMOTE_PREMIUM_SELL_SLUG', 'wp-tiktok-feed-pro' );
		define( 'QLTTF_PROMOTE_PREMIUM_SELL_NAME', 'Tiktok Feed PRO' );
		define( 'QLTTF_PROMOTE_PREMIUM_INSTALL_URL', 'https://quadlayers.com/products/tiktok-feed/?utm_source=qlttf_plugin&utm_medium=dashboard_notice&utm_campaign=premium_upgrade&utm_content=premium_install_button' );
		define( 'QLTTF_PROMOTE_PREMIUM_SELL_URL', 'https://quadlayers.com/products/tiktok-feed/?utm_source=qlttf_plugin&utm_medium=dashboard_notice&utm_campaign=premium_upgrade&utm_content=premium_link' );
		/**
		 * Notice cross sell 1
		 */
		define( 'QLTTF_PROMOTE_CROSS_INSTALL_1_SLUG', 'wp-whatsapp-chat' );
		define( 'QLTTF_PROMOTE_CROSS_INSTALL_1_NAME', 'Social Chat' );
		define(
			'QLTTF_PROMOTE_CROSS_INSTALL_1_TITLE',
			wp_kses(
				sprintf(
					'<h3 style="margin:0">%s</h3>',
					esc_html__( 'Turn more visitors into customers.', 'wp-tiktok-feed' )
				),
				array(
					'h3' => array(
						'style' => array()
					)
				)
			)
		);
		define( 'QLTTF_PROMOTE_CROSS_INSTALL_1_DESCRIPTION', esc_html__( 'Social Chat allows your users to start a conversation from your website directly to your WhatsApp phone number with one click.', 'wp-tiktok-feed' ) );
		define( 'QLTTF_PROMOTE_CROSS_INSTALL_1_URL', 'https://quadlayers.com/products/whatsapp-chat/?utm_source=qlttf_plugin&utm_medium=dashboard_notice&utm_campaign=cross_sell&utm_content=social_chat_link' );
		define( 'QLTTF_PROMOTE_CROSS_INSTALL_1_LOGO_SRC', plugins_url( '/assets/backend/img/wp-whatsapp-chat.jpeg', QLTTF_PLUGIN_FILE ) );
		/**
		 * Notice cross sell 2
		 */
		define( 'QLTTF_PROMOTE_CROSS_INSTALL_2_SLUG', 'insta-gallery' );
		define( 'QLTTF_PROMOTE_CROSS_INSTALL_2_NAME', 'Social Feed Gallery' );
		define(
			'QLTTF_PROMOTE_CROSS_INSTALL_2_TITLE',
			wp_kses(
				sprintf(
					'<h3 style="margin:0">%s</h3>',
					esc_html__( 'Display Instagram feeds beautifully.', 'wp-tiktok-feed' )
				),
				array(
					'h3' => array(
						'style' => array()
					)
				)
			)
		);
		define( 'QLTTF_PROMOTE_CROSS_INSTALL_2_DESCRIPTION', esc_html__( 'Display Instagram photos from any account with responsive galleries, custom layouts, and an engaging lightbox popup.', 'wp-tiktok-feed' ) );
		define( 'QLTTF_PROMOTE_CROSS_INSTALL_2_URL', 'https://quadlayers.com/products/instagram-feed-gallery/?utm_source=qlttf_plugin&utm_medium=dashboard_notice&utm_campaign=cross_sell&utm_content=instagram_feed_link' );
		define( 'QLTTF_PROMOTE_CROSS_INSTALL_2_LOGO_SRC', plugins_url( '/assets/backend/img/insta-gallery.jpg', QLTTF_PLUGIN_FILE ) );

		new \QuadLayers\WP_Notice_Plugin_Promote\Load(
			QLTTF_PLUGIN_FILE,
			array(
				array(
					'type'               => 'ranking',
					'notice_delay'       => 0,
					'notice_logo'        => QLTTF_PROMOTE_LOGO_SRC,
					'notice_title'       => wp_kses(
						sprintf(
							'<h3 style="margin:0">%s</h3>',
							esc_html__( 'Enjoying TikTok Feed?', 'wp-tiktok-feed' )
						),
						array(
							'h3' => array(
								'style' => array()
							)
						)
					),
					'notice_description' => esc_html__( 'A quick 5-star review helps us keep improving the plugin and supporting users like you. It only takes 2 seconds — thank you!', 'wp-tiktok-feed' ),
					'notice_link'        => QLTTF_PROMOTE_REVIEW_URL,
					'notice_more_link'   => 'https://quadlayers.com/account/support/?utm_source=qlttf_plugin&utm_medium=dashboard_notice&utm_campaign=support&utm_content=report_bug_button',
					'notice_more_label'  => esc_html__(
						'Report a bug',
						'wp-tiktok-feed'
					),
				),
				array(
					'plugin_slug'        => QLTTF_PROMOTE_PREMIUM_SELL_SLUG,
					'plugin_install_link'   => QLTTF_PROMOTE_PREMIUM_INSTALL_URL,
					'plugin_install_label'  => esc_html__(
						'Purchase Now',
						'wp-tiktok-feed'
					),
					'notice_delay'       => WEEK_IN_SECONDS,
					'notice_logo'        => QLTTF_PROMOTE_LOGO_SRC,
					'notice_title'       => wp_kses(
						sprintf(
							'<h3 style="margin:0">%s</h3>',
							esc_html__( 'Save 20% today!', 'wp-tiktok-feed' )
						),
						array(
							'h3' => array(
								'style' => array()
							)
						)
					),
					'notice_description' => sprintf(
						esc_html__(
							'Today we have a special gift for you. Use the coupon code %1$s within the next 48 hours to receive a %2$s discount on the premium version of the %3$s plugin.',
							'wp-tiktok-feed'
						),
						'ADMINPANEL20%',
						'20%',
						QLTTF_PROMOTE_PREMIUM_SELL_NAME
					),
					'notice_more_link'   => QLTTF_PROMOTE_PREMIUM_SELL_URL,
				),
				array(
					'plugin_slug'        => QLTTF_PROMOTE_CROSS_INSTALL_1_SLUG,
					'notice_delay'       => MONTH_IN_SECONDS * 3,
					'notice_logo'        => QLTTF_PROMOTE_CROSS_INSTALL_1_LOGO_SRC,
					'notice_title'       => QLTTF_PROMOTE_CROSS_INSTALL_1_TITLE,
					'notice_description' => QLTTF_PROMOTE_CROSS_INSTALL_1_DESCRIPTION,
					'notice_more_link'   => QLTTF_PROMOTE_CROSS_INSTALL_1_URL
				),
				array(
					'plugin_slug'        => QLTTF_PROMOTE_CROSS_INSTALL_2_SLUG,
					'notice_delay'       => MONTH_IN_SECONDS * 6,
					'notice_logo'        => QLTTF_PROMOTE_CROSS_INSTALL_2_LOGO_SRC,
					'notice_title'       => QLTTF_PROMOTE_CROSS_INSTALL_2_TITLE,
					'notice_description' => QLTTF_PROMOTE_CROSS_INSTALL_2_DESCRIPTION,
					'notice_more_link'   => QLTTF_PROMOTE_CROSS_INSTALL_2_URL
				),
			)
		);
	});
}
