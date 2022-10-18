<?php
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

define('URL', $url);
define('BASE_URL', 'http://localhost:8080/pwpb-project/pertemuan7/public');

// Database Creds
//define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'pwpb_php_mvc');
define('SALT', '32randomstring');

const DB_HOST = 'localhost';