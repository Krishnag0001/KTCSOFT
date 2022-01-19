<?php
	//db details
	$dbHost = 'localhost:3306';
	$dbUsername = 'root';
	$dbPassword = '';
	$dbName = 'khandelwal_sales';

	//Connect and select the database
	$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

	if ($db->connect_error)
	{
	    die("Connection failed: " . $db->connect_error);
	}

	$conn=mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);

	if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	//set for insert,delete,update selsct etc of UTF8 character set

    mysqli_query($conn,'SET character_set_results=utf8');
    mysqli_query($conn,'SET names=utf8');
    mysqli_query($conn,'SET character_set_client=utf8');
    mysqli_query($conn,'SET character_set_connection=utf8');
    mysqli_query($conn,'SET character_set_result<s></s>=utf8');
    mysqli_query($conn,'SET collation_connection=utf8_general_ci');
?>
