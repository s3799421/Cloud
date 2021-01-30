
 <?php


// Connect to the database
define('db_host', 'database.c4o82g4mbb8f.ap-southeast-2.rds.amazonaws.com');
define('db_user', 'admin');
define('db_pass', 'Satyam123*');
define('db_db', 'database');
 
 $db = mysqli_connect(db_host, db_user, db_pass, db_db); 

// Check db connection
if($db === false) {
	die("Error: connection error." . mysqli_connect_error());
}
?>