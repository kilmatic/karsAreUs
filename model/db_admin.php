<?php

require_once 'model/db.php';
$db = new Database;

$get_admin = $db->getRows('SELECT * FROM admins');
