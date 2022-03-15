<?php
/**
 * Plugin Name:       Tailwind Blocks
 * Description:       Example static block scaffolded with Create Block tool.
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       tailwind-blocks
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function create_block_tailwind_blocks_block_init() {
	register_block_type( __DIR__ . '/build/block1' );
	register_block_type( __DIR__ . '/build/block2' );
	register_block_type( __DIR__ . '/build/block3' );
}
add_action( 'init', 'create_block_tailwind_blocks_block_init' );
