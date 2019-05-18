<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost:3309');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '123456');
define('DB_NAME', 'epiz_23425579_rmhs');

/*define('DB_SERVER', 'sql103.epizy.com');
define('DB_USERNAME', 'epiz_23425579');
define('DB_PASSWORD', 'zvWlkoFOeWy');
define('DB_NAME', 'epiz_23425579_rmhs');
*/


//$conn = mysqli_connect('sql103.epizy.com', 'epiz_23425579', 'zvWlkoFOeWy', 'epiz_23425579_rmhs');
 
/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>