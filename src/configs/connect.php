<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = '';
$connect = mysqli_connect($db_host, $db_user, $db_password, $db_name);
mysqli_set_charset($connect, 'utf8');