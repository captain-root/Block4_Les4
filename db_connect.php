<?php
$db_host = 'localhost';
$db_user = 'saltanov';
$db_pass = 'neto1341';
$db_name = 'saltanov';

$link =  new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_pass);
