<?php 

//WEB CONFIG
$WEB_CONFIG = [
	'app_name' => 'SIM SMK', 
	'base_url' => 'http://localhost/SBD/mama/'
];

//DATABASE CONFIG
$DB_CONFIG = [
	'host' => 'localhost',
	'user' => 'root',
	'passwd' => '',
	'db_name' => 'db_smk'
];		
$connect = mysqli_connect($DB_CONFIG['host'], $DB_CONFIG['user'], $DB_CONFIG['passwd'], $DB_CONFIG['db_name']);