<?php

#This class just sets the database info and contains a function wich creates
#the connection and returns it
class DB{

    private static $host;
    private static $user;
    private static $password;
    private static $db;

    protected static function connect(){
	self::$host = "localhost";
	self::$user = "root";
	self::$password = "your_password";
	self::$db = "your_DB_name";

	$connection = new mysqli(self::$host,
				 self::$user,
				 self::$password,
				 self::$db);

	if($connection->connect_errno){
	    Controller::render_view("NoDBConnection", NULL);
	    die();
	}
	else{
	    $connection->set_charset("utf8");
	    return $connection;
	}
    }
}

?>
