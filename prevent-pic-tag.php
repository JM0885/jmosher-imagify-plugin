<?php

/*
Plugin Name: Prevent Picture Tag
Plugin URI:
Description: Prevent replacing <img> tags with <picture> tags when Imagify's WebP feature is enabled.
Version: 1.0
Author: Jared Mosher
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: prevent-picture-tag
*/

	add_filter( 'imagify_allow_picture_tags_for_webp', 'prevent_picture_tags' );
/**
	 * Do not use <picture> tags when WebP is enabled.
	 */
	function prevent_picture_tags( ) {
		return false;
	};
