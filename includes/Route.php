<?php

#The "set" method sets the name of the route and an anonymous function
#associated with it.
#The anonymous function calls the "process" function that is defined in the the
#"Controller" class wich is (and must be) extended by all the routes.
#A role can be passed as a third parameter. This is used for session; can restrict
#sessions for users with a certain role in the app. The use of the role can be
#optional, so you can modify the "process" function to fit your project.

class Route{
    public static $valid_routes = array();

    #Registers a path name which will be available for users.
    public static function set($route, $function, $role = NULL){
	self::$valid_routes[] = $route;

	#If the URL matches this route name, then will check for a role. If a role
	#is not set for this route, it will just run the function inside.
	if(URL == $route){
	    if($role){
		if(Session::get_role() == $role){
		    $function->__invoke();
		}else{
		    echo "<script>window.location = 'index.php';</script>";
		}
	    }else{
		$function->__invoke();
	    }
	}
    }
}

?>
