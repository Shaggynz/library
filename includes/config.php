<?php 
// DB credentials.
define('AZURE_MYSQL_HOST','localhost');
define('AZURE_MYSQL_USERNAME','root');
define('AZURE_MYSQL_PASSWORD','');
define('DB_NAME','library');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".AZURE_MYSQL_HOST.";dbname=".DB_NAME,AZURE_MYSQL_USERNAME, AZURE_MYSQL_PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
