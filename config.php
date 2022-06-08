<?php
define('DBSERVER','localhost'); //Db server
define('DBUSERNAME','root'); //Db username
define('DBPASSWORD',''); //db password
define('DBNAME','simple_phpweb_db'); //db name

/* connect to MySQL db */
$db = mysqli_connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME);

//check db connection
if($db === false){
    die("Error: connection error." .mysqli_connect_error());
}
?>