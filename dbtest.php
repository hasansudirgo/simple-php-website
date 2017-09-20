<?php

$dbhost = getenv("POSTGRESQL_SERVICE_HOST");
$dbport = getenv("POSTGRESQL_SERVICE_PORT");
$dbname = getenv("POSTGRESQL_DATABASE");

$dbuser1 = getenv("POSTGRESQL_USER");
$dbpassword1 = getenv("POSTGRESQL_PASSWORD");

$dbuser2 = getenv("OPENSHIFT_POSTGRESQL_DB_USERNAME");
$dbpassword2 = getenv("OPENSHIFT_POSTGRESQL_DB_PASSWORD");

$appname = getenv("OPENSHIFT_APP_NAME");

echo 'dbhost='.$dbhost;
echo '<br>';
echo 'dbport='.$dbport;
echo '<br>';
echo 'dbname='.$dbname;
echo '<br>';
echo 'dbuser1='.$dbuser1;
echo '<br>';
echo 'dbpassword1='.$dbpassword1;
echo '<br>';
echo 'dbuser2='.$dbuser2;
echo '<br>';
echo 'dbpassword2='.$dbpassword2;
echo '<br>';
echo 'appname='.$appname;
echo '<br>';