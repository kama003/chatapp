<?php

//Database_connection.php

class Database_connection
{
	function connect()
	{
		$connect = new PDO("mysql:host=localhost; dbname=chat", "root", "kamal001");

		return $connect;
	}
}

?>