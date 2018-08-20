<?php 
//db.php
class Database {
	public static function GetConnection($user, $pass, $host, $dbName) {
		return new \PDO(
	        "mysql:host={$host};dbname={$dbName};charset=utf8",
	        $user,
	        $pass,
	        [
	            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
	            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
	        ]
	    );
	}
}