<?php

namespace QuadLayers\TTF\Api\Rest\Endpoints\Frontend;

use QuadLayers\TTF\Api\Rest\Endpoints\Base as Endpoints;
use QuadLayers\TTF\Models\Feeds as Models_Feeds;

/**
 * Base Class for Frontend Endpoints
 *
 * Provides security validation to ensure open_ids are only accessible
 * if they are associated with at least one published feed.
 */
abstract class Base extends Endpoints {

	/**
	 * Validates that an open_id is associated with at least one feed
	 *
	 * @param string $open_id The open ID to validate
	 * @return bool True if open_id is in a feed, false otherwise
	 */
	protected function validate_open_id_in_feeds( $open_id ) {
		// Validate open_id is provided
		if ( empty( $open_id ) ) {
			return false;
		}

		$open_id = trim( $open_id );

		// Get all feeds
		$feeds = ( new Models_Feeds() )->get_all();

		// If no feeds exist, deny access
		if ( empty( $feeds ) ) {
			return false;
		}

		// Check if the open_id exists in any feed
		foreach ( $feeds as $feed ) {
			if ( isset( $feed['open_id'] ) && trim( $feed['open_id'] ) === $open_id ) {
				return true; // open_id is associated with a published feed
			}
		}

		// open_id not found in any feed
		return false;
	}

	/**
	 * Permission callback for REST API endpoints
	 *
	 * Validates that the open_id parameter corresponds to an account
	 * that is being used in at least one published feed.
	 *
	 * @param \WP_REST_Request $request The REST API request
	 * @return bool True if authorized, false otherwise
	 */
	public function get_rest_permission( $request = null ) {
		// Allow admin users with proper capabilities to access any connected account
		if ( current_user_can( 'manage_options' ) ) {
			return true;
		}

		// For frontend/non-admin requests, validate that the open_id is in at least one published feed
		// Extract open_id from request body (POST requests)
		if ( $request ) {
			$body = json_decode( $request->get_body(), true );
			if ( isset( $body['feedSettings']['open_id'] ) ) {
				$open_id = $body['feedSettings']['open_id'];
				return $this->validate_open_id_in_feeds( $open_id );
			}
		}

		// If we can't extract open_id, deny access
		return false;
	}
}
