# String Utils for php

## List of available functions

1) [require_all_files](#require_all_files)
2) [require_once_all_files](#require_once_all_files)
3) [include_all_files](#include_all_files)
4) [include_once_all_files](#include_once_all_files)
5) [get_all_files](#get_all_files)

### require_all_files

#### Description

Requires all the files in a folder that matches the provided pattern.

#### Definition

require_all_files($dir, $pattern = "*.php", $callback = null)

Where:
1) $dir is the directory where the files are located
2) $pattern is the pattern used to find the files (*.php by default)
3) $recursive will fetch also the child folders if set to true (default is false)
4) $callback is the callback called per each file (null by default, the file path will be passed as parameter)

#### Usage

``` php
function callback($file) {
    echo "file $file has been loaded..." . EOF;
}

require_all_fields("my/dir", "*.php", "callback");
```

### require_once_all_files

#### Description

Requires once all the files in a folder that matches the provided pattern.

#### Definition

require_once_all_files($dir, $pattern = "*.php", $callback = null)

Where:
1) $dir is the directory where the files are located
2) $pattern is the pattern used to find the files (*.php by default)
3) $recursive will fetch also the child folders if set to true (default is false)
4) $callback is the callback called per each file (null by default, the file path will be passed as parameter)

#### Usage

``` php
function callback($file) {
    echo "file $file has been loaded..." . EOF;
}

require_once_all_fields("my/dir", "*.php", "callback");
```

### include_all_files

#### Description

Includes all the files in a folder that matches the provided pattern.

#### Definition

include_all_files($dir, $pattern = "*.php", $callback = null)

Where:
1) $dir is the directory where the files are located
2) $pattern is the pattern used to find the files (*.php by default)
3) $recursive will fetch also the child folders if set to true (default is false)
4) $callback is the callback called per each file (null by default, the file path will be passed as parameter)

#### Usage

``` php
function callback($file) {
    echo "file $file has been loaded..." . EOF;
}

include_all_fields("my/dir", "*.php", "callback");
```

### include_once_all_files

#### Description

Includes once all the files in a folder that matches the provided pattern.

#### Definition

include_once_all_files($dir, $pattern = "*.php", $callback = null)

Where:
1) $dir is the directory where the files are located
2) $pattern is the pattern used to find the files (*.php by default)
3) $recursive will fetch also the child folders if set to true (default is false)
4) $callback is the callback called per each file (null by default, the file path will be passed as parameter)

#### Usage

``` php
function callback($file) {
    echo "file $file has been loaded..." . EOF;
}

include_once_all_files("my/dir", "*.php", "callback");
```

### get_all_files

#### Description

Get all the files in a folder that matches the provided pattern.

#### Definition

get_all_files($dir, $pattern = "*", $recursive = false)

Where:
1) $dir is the directory where the files are located
2) $pattern is the pattern used to find the files (*.php by default)
3) $recursive will fetch also the child folders if set to true (default is false)

#### Usage

``` php
print_r(get_all_files("my/dir"));
```

## More utilities coming...
