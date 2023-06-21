<?php 
// DB credentials.
define('AZURE_MYSQL_HOST','aislibrarywebpage-server.mysql.database.azure.com');
define('AZURE_MYSQL_USERNAME','daqzrclbpt');
define('AZURE_MYSQL_PASSWORD','S5SZTZS6TU78ZC0T$');
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
