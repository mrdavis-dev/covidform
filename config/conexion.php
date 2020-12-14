<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'b3qajqq6lfwdsr6ws14a-mysql.services.clever-cloud.com');
define('DB_USERNAME', 'uc0f6ao5ishkocbt');
define('DB_PASSWORD', 'cOyjXDkavOhABTLXPXAi');
define('DB_NAME', 'b3qajqq6lfwdsr6ws14a');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
