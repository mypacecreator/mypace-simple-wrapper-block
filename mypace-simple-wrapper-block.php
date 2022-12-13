<?php
/**
 * Plugin Name:       Mypace Simple Wrapper Block
 * Description:       It is just a block that wraps blocks with a div element. If you are struggling with CSS for core group blocks, this plugin is for you.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.1
 * Author:            Kei Nomura
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       mypace-simple-wrapper-block
 *
 * @package           mypace-simple-wrapper-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function mypace_simple_wrapper_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'mypace_simple_wrapper_block_init' );
