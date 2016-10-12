<?php

/*
* Auto Include Metaboxes, PostTypes, Widgets, etc..
*/
$autoinclude_base_dir = dirname(__FILE__) . '/';
$autoinclude_folders = array(
    'metaboxes/'
);
foreach ($autoinclude_folders as $folder) {
    if (file_exists($autoinclude_base_dir . $folder)) {
        $dir = opendir($autoinclude_base_dir . $folder);
        while (false !== ($d = readdir($dir))) {
            if (strpos($d, '.php')) {
                require_once $autoinclude_base_dir . $folder . $d;
            }
        }
    }
}