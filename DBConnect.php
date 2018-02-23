<?php

	define('DB_SERVER','localhost');
	define('DB_USER','root');
	define('DB_PASS' ,'password');
	define('DB_NAME', 'judocomm');
	$conn = mysql_connect(DB_SERVER,DB_USER,DB_PASS) or die('Connection Problem'.mysql_error());
	mysql_select_db(DB_NAME, $conn);

?>