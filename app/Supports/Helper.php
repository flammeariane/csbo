<?php

/**
 * An example of a custom function.
 *
 * @return boolean
*/
if (!function_exists('myCustomFunction')) {
	function myCustomFunction(): bool
	{
		return true;
	}
}