<?php

#Just an example about how to create a "model" with the DB class

class Person extends DB{

    public static function add($name, $bithdate){

	$query = "INSERT INTO person (name, birthdate) VALUES ('$name', '$bithdate');";

	$result = self::connect()->query($query);

	return $result;
    }

    public static function get_all(){

	$query = "SELECT id, name, birthdate FROM person;";

	$result = self::connect()->query($query);

	return ($result->num_rows > 0) ? $result : false;
    }

}
