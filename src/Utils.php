<?php

/**
 * Requires all the files in a folder that matches the provided pattern.
 * @param string $dir
 * @param string $pattern
 * @param bool $recursive
 * @param callback $callback
 */
function require_all_files($dir, $pattern = "*.php", $recursive = false, $callback = null) {
    foreach (glob("$dir/$pattern") as $file) {
        if (!is_dir($file))
            require $file;
        elseif ($recursive)
            require_all_files($file, $pattern, $recursive, $callback);

        if (!empty($callback))
            call_user_func($callback, $file);
    }
}

/**
 * Requires once all the files in a folder that matches the provided pattern.
 * @param string $dir
 * @param string $pattern
 * @param bool $recursive
 * @param callback $callback
 */
function require_once_all_files($dir, $pattern = "*.php", $recursive = false, $callback = null) {
    foreach (glob("$dir/$pattern") as $file) {
        if (!is_dir($file))
            require_once $file;
        elseif ($recursive)
            require_once_all_files($file, $pattern, $recursive, $callback);

        if (!empty($callback))
            call_user_func($callback, $file);
    }
}

/**
 * Includes all the files in a folder that matches the provided pattern.
 * @param string $dir
 * @param string $pattern
 * @param bool $recursive
 * @param callback $callback
 */
function include_all_files($dir, $pattern = "*.php", $recursive = false, $callback = null) {
    foreach (glob("$dir/$pattern") as $file) {
        if (!is_dir($file))
            include $file;
        elseif ($recursive)
            include_all_files($file, $pattern, $recursive, $callback);

        if (!empty($callback))
            call_user_func($callback, $file);
    }
}

/**
 * Includes once all the files in a folder that matches the provided pattern.
 * @param string $dir
 * @param string $pattern
 * @param bool $recursive
 * @param callback $callback
 */
function include_once_all_files($dir, $pattern = "*.php", $recursive = false, $callback = null) {
    foreach (glob("$dir/$pattern") as $file) {
        if (!is_dir($file))
            include_once $file;
        elseif ($recursive)
            include_once_all_files($file, $pattern, $recursive, $callback);

        if (!empty($callback))
            call_user_func($callback, $file);
    }
}

/**
 * Get all the files in a folder that matches the provided pattern.
 * @param string $dir
 * @param string $pattern
 * @param bool $recursive
 * @return array
 */
function get_all_files($dir, $pattern = "*", $recursive = false) {
    $result = [];

    foreach (glob("$dir/$pattern") as $file) {
        if (!is_dir($file))
            $result[] = $file;
        elseif ($recursive)
            $result = array_merge(
                $result,
                get_all_files(
                    $file,
                    $pattern,
                    $recursive
                )
            );
    }

    return $result;
}

/**
 * Returns all the directories in a given directory.
 * @param string $dir
 * @param bool $recursive
 * @return array
 */
function get_all_dirs($dir, $recursive = false) {
    $result = [];

    if (!string_ends_with($dir, "/"))
        $dir .= "/";

    $dir .= "*";

    if ($recursive)
        foreach (glob($dir, GLOB_ONLYDIR|GLOB_NOSORT) as $dir) {
            $result []= $dir;
            $result = array_merge($result, get_all_dirs($dir, $recursive));
        }
    else
        $result = glob($dir, GLOB_ONLYDIR|GLOB_NOSORT);

    return $result;
}
