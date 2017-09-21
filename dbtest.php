<?php
$dbhost = getenv("POSTGRESQL_SERVICE_HOST");
$dbport = getenv("POSTGRESQL_SERVICE_PORT");
$dbname = getenv("DB_NAME");

$dbuser = getenv("POSTGRESQL_USER");
$dbpassword = getenv("POSTGRESQL_PASSWORD");

echo 'dbhost='.$dbhost;
echo '<br>';
echo 'dbport='.$dbport;
echo '<br>';
echo 'dbname='.$dbname;
echo '<br>';
echo 'dbuser='.$dbuser;
echo '<br>';
echo 'dbpassword='.$dbpassword;
echo '<br>';


$phpdb = "pgsql:"
		. "host=".$dbhost.";"
		. "dbname=".$dbname.";"
		. "user=".$dbuser.";"
		. "port=".$dbport.";"
		 //."sslmode=require;"
		. "password=".$dbpassword."";

//$db = new PDO($remotePhp);
$db = new PDO($phpdb);


if (!$db) {
	echo "Could not connect to database";
} else {
	echo "Connected to database.<br>";
}
