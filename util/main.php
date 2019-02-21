<?php
    # Get document root 
    $document_root = filter_input(INPUT_SERVER, 'DOCUMENT_ROOT');

    # Get app path
    $uri = filter_input(INPUT_SERVER, 'REQUEST_URI');
    $dirs = explode('/', $uri);
    $app_path = '/'.$dirs[1].'/'.$dirs.'/';

    # Set include path
    set_include_path($document_root.$app_path);
?>