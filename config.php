<?php
// session_start();
// // // // servername => localhost
// // // 		// username => root
// // // 		// password => empty
// // // 		// database name => staff
//   		$conn = mysqli_connect("localhost", "root", "", "facault");

// // 		// Check connection
//  	if($conn === false){
// 		die("ERROR: Could not connect. "
// 			. mysqli_connect_error());
// 	 }



session_start();
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);