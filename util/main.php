<?php
    # Get document root 
    $d_root = filter_var($_SERVER['DOCUMENT_ROOT']);

    # Get app path
    $uri = filter_var($_SERVER['REQUEST_URI']);
    $dirs = explode('/', $uri);
    $app_path = '/'.$dirs[0].'/';

    # Set include path
    ini_set($d_root,$app_path);
    # set_include_path($d_root.$app_path);
?>