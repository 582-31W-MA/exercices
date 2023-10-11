<?php

/** 
 * Plugin Name: Books
 * Description: Add a new post type named books.
 */

if (!function_exists('books_add_post_type')) {
	function books_add_post_type()
	{
		register_post_type('book', [
			'public' => true,
			'label' => "Books"
		]);
	}
}

add_action('init', 'books_add_post_type');
