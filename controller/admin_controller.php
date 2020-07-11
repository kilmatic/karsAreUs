<?php 
    require_once '..\model\db_admin.php';

    $admin = new Admin;
    $get_admins = $admin->getAdmin();
?>jn