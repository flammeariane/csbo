<?php

/**
 * Return authenticated user.
 *
 * @return void
*/
if (!function_exists('user')) {
	function user()
	{
		if (!auth()->check()) return;

		return auth()->user();
	}
}