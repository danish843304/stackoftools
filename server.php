<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? ''
);

// Check if the requested URI is a valid file in the "public" directory
if ($uri !== '/' && file_exists(__DIR__ . '/public' . $uri)) {
    return false;
}

// Require the Laravel public index file
require_once __DIR__ . '/public/index.php';
