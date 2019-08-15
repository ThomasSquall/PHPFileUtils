<?php

/**
 * Requires all the files in a folder that matches the provided pattern.
 * @param string $dir
 * @param string $pattern
 * @param callback $callback
 */
function require_all_files($dir, $pattern = "*.php", $callback = null) {
    foreach (glob($dir . "/" . $pattern) as $file) {
        require $file;

        if (!empty($callback))
            call_user_func($callback, $file);
    }
}

/**
 * Requires once all the files in a folder that matches the provided pattern.
 * @param string $dir
 * @param string $pattern
 * @param callback $callback
 */
function require_once_all_files($dir, $pattern = "*.php", $callback = null) {
    foreach (glob($dir . "/" . $pattern) as $file) {
        require_once $file;

        if (!empty($callback))
            call_user_func($callback, $file);
    }
}

/**
 * Includes all the files in a folder that matches the provided pattern.
 * @param string $dir
 * @param string $pattern
 * @param callback $callback
 */
function include_all_files($dir, $pattern = "*.php", $callback = null) {
    foreach (glob($dir . "/" . $pattern) as $file) {
        include $file;

        if (!empty($callback))
            call_user_func($callback, $file);
    }
}

/**
 * Includes once all the files in a folder that matches the provided pattern.
 * @param string $dir
 * @param string $pattern
 * @param callback $callback
 */
function include_once_all_files($dir, $pattern = "*.php", $callback = null) {
    foreach (glob($dir . "/" . $pattern) as $file) {
        include_once $file;

        if (!empty($callback))
            call_user_func($callback, $file);
    }
}
