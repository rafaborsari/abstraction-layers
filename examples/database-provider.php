<?php 
// Example of how to apply the class
// Autoload :D
include ('../DataBaseProvider.php');

// Use Statement

use Provider\DataBaseProvider;

$db = 
array(
	'dsn'		=> 'mysql',
	'host'		=> 'localhost',
	'dbname'	=> 'app_rjmid',
	'username'	=> 'root',
	'password'	=> 'rafa1991',
);

$dbh = new DataBaseProvider($db);

$sql = 
"SELECT 
	name
FROM 
	clients
LIMIT 10
";

$clients = $dbh->listAll($sql);

foreach ($clients as $client) {
	var_dump($client);
}

