<?php
session_start();
// require 'session.php';
$_SESSION['data']['first_name'] = 'Danu';
$_SESSION['data']['last_name'] = 'Artha';

// session_unset();

echo $_SESSION['data']['first_name'] ?? 'Anonymous';
echo '<br>';
echo $_SESSION['data']['last_name'] ?? 'Anonymous';
echo '<br>';

?>