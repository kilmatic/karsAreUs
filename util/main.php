<?php
    $doc_root = filter_var($_SERVER['DOCUMENT_ROOT']);
    $uri = filter_var($_SERVER['REQUEST_URI']);

    # Get app path
    $dirs = explode('/', $uri);
    $app_path = '/'.$dirs[1].'/'.$dirs[2].'/';

    # Set include path
    set_include_path($doc_root.$app_path);
?>