<?php

/**
 * Generate a relative asset path for the application.
 *
 * @param  string  $path
 * @param  bool|null  $secure
 * @return string
 */
if (!function_exists('relative_asset')) {
    function relative_asset($path)
    {
        return str_replace(asset(''), '', asset($path));
    }
}
