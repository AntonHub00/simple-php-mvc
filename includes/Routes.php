<?php

#The "set" method sets the name of the route and an anonymous function
#associated with it.
#The anonymous function calls the "process" function that is defined in the the
#"Controller" class wich is (and must be) extended by all the routes.
#A role can be passed as a third parameter. This is used for session; can restrict
#sessions for users with a certain role in the app. The use of the role can be
#optional, so you can modify the "process" function to fit your project.

Route::set("index.php", function(){
    IndexController::process();
});

#If the route the user typed doesn't exist, then render 404 page
if(!in_array(URL, Route::$valid_routes))
    Controller::render_view("404", NULL);

?>
