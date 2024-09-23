<?php

if ( class_exists( 'QuadLayers\\WP_Notice_Plugin_Promote\\Load' ) ) {
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
	define( 'QLTTF_PROMOTE_PREMIUM_INSTALL_URL', 'https://quadlayers.com/product/tiktok-feed/?utm_source=qlttf_admin' );
	define( 'QLTTF_PROMOTE_PREMIUM_SELL_URL', QLTTF_PREMIUM_SELL_URL );
	/**
	 * Notice cross sell 1
	 */
	define( 'QLTTF_PROMOTE_CROSS_INSTALL_1_SLUG', 'ai-copilot' );
	define( 'QLTTF_PROMOTE_CROSS_INSTALL_1_NAME', 'AI Copilot' );
	define( 'QLTTF_PROMOTE_CROSS_INSTALL_1_DESCRIPTION', esc_html__( 'Boost your productivity in WordPress content creation with AI-driven tools, automated content generation, and enhanced editor utilities.', 'wp-tiktok-feed' ) );
	define( 'QLTTF_PROMOTE_CROSS_INSTALL_1_URL', 'https://quadlayers.com/products/ai-copilot/?utm_source=qlttf_admin' );
	define( 'QLTTF_PROMOTE_CROSS_INSTALL_1_LOGO_SRC', plugins_url( '/assets/backend/img/ai-copilot.png', QLTTF_PLUGIN_FILE ) );
	/**
	 * Notice cross sell 2
	 */
	define( 'QLTTF_PROMOTE_CROSS_INSTALL_2_SLUG', 'wp-whatsapp-chat' );
	define( 'QLTTF_PROMOTE_CROSS_INSTALL_2_NAME', 'Social Chat' );
	define( 'QLTTF_PROMOTE_CROSS_INSTALL_2_DESCRIPTION', esc_html__( 'Social Chat allows your users to start a conversation from your website directly to your WhatsApp phone number with one click.', 'wp-tiktok-feed' ) );
	define( 'QLTTF_PROMOTE_CROSS_INSTALL_2_URL', 'https://quadlayers.com/product/whatsapp-chat/?utm_source=qlttf_admin' );
	define( 'QLTTF_PROMOTE_CROSS_INSTALL_2_LOGO_SRC', plugins_url( '/assets/backend/img/wp-whatsapp-chat.jpeg', QLTTF_PLUGIN_FILE ) );

	new \QuadLayers\WP_Notice_Plugin_Promote\Load(
		QLTTF_PLUGIN_FILE,
		array(
			array(
				'type'               => 'ranking',
				'notice_delay'       => MONTH_IN_SECONDS,
				'notice_logo'        => QLTTF_PROMOTE_LOGO_SRC,
				'notice_title'       => sprintf(
					esc_html__(
						'Hello! Thank you for choosing the %s plugin!',
						'wp-tiktok-feed'
					),
					QLTTF_PLUGIN_NAME
				),
				'notice_description' => esc_html__( 'Could you please give it a 5-star rating on WordPress? Your feedback boosts our motivation, helps us promote, and continues to improve this product. Your support matters!', 'wp-tiktok-feed' ),
				'notice_link'        => QLTTF_PROMOTE_REVIEW_URL,
				'notice_link_label'  => esc_html__(
					'Yes, of course!',
					'wp-tiktok-feed'
				),
				'notice_more_link'   => QLTTF_SUPPORT_URL,
				'notice_more_label'  => esc_html__(
					'Report a bug',
					'wp-tiktok-feed'
				),
			),
			array(
				'plugin_slug'          => QLTTF_PROMOTE_PREMIUM_SELL_SLUG,
				'plugin_install_link'  => QLTTF_PROMOTE_PREMIUM_INSTALL_URL,
				'plugin_install_label' => esc_html__(
					'Purchase Now',
					'wp-tiktok-feed'
				),
				'notice_delay'         => MONTH_IN_SECONDS,
				'notice_logo'          => QLTTF_PROMOTE_LOGO_SRC,
				'notice_title'         => esc_html__(
					'Hello! We have a special gift!',
					'wp-tiktok-feed'
				),
				'notice_description'   => sprintf(
					esc_html__(
						'Today we have a special gift for you. Use the coupon code %1$s within the next 48 hours to receive a %2$s discount on the premium version of the %3$s plugin.',
						'wp-tiktok-feed'
					),
					'ADMINPANEL20%',
					'20%',
					QLTTF_PROMOTE_PREMIUM_SELL_NAME
				),
				'notice_more_link'     => QLTTF_PROMOTE_PREMIUM_SELL_URL,
				'notice_more_label'    => esc_html__(
					'More info!',
					'wp-tiktok-feed'
				),
			),
			array(
				'plugin_slug'        => QLTTF_PROMOTE_CROSS_INSTALL_1_SLUG,
				'notice_delay'       => MONTH_IN_SECONDS * 4,
				'notice_logo'        => QLTTF_PROMOTE_CROSS_INSTALL_1_LOGO_SRC,
				'notice_title'       => sprintf(
					esc_html__(
						'Hello! We want to invite you to try our %s plugin!',
						'wp-tiktok-feed'
					),
					QLTTF_PROMOTE_CROSS_INSTALL_1_NAME
				),
				'notice_description' => QLTTF_PROMOTE_CROSS_INSTALL_1_DESCRIPTION,
				'notice_more_link'   => QLTTF_PROMOTE_CROSS_INSTALL_1_URL,
				'notice_more_label'  => esc_html__(
					'More info!',
					'wp-tiktok-feed'
				),
			),
			array(
				'plugin_slug'        => QLTTF_PROMOTE_CROSS_INSTALL_2_SLUG,
				'notice_delay'       => MONTH_IN_SECONDS * 6,
				'notice_logo'        => QLTTF_PROMOTE_CROSS_INSTALL_2_LOGO_SRC,
				'notice_title'       => sprintf(
					esc_html__(
						'Hello! We want to invite you to try our %s plugin!',
						'wp-tiktok-feed'
					),
					QLTTF_PROMOTE_CROSS_INSTALL_2_NAME
				),
				'notice_description' => QLTTF_PROMOTE_CROSS_INSTALL_2_DESCRIPTION,
				'notice_more_link'   => QLTTF_PROMOTE_CROSS_INSTALL_2_URL,
				'notice_more_label'  => esc_html__(
					'More info!',
					'wp-tiktok-feed'
				),
			),
		)
	);
}
