<?php

function call($controller, $action) {
    // require the file that matches the controller name
    require_once('controllers/' . $controller . '_controller.php');

    // create a new instance of the needed controller
    switch ($controller) {
        //for non-data-driven pages use the PagesController class
        case 'pages':
            $controller = new PagesController();

            break;



        default:
            //for all data-driven pages use a specific Controller class
            //we need the model to query the database later in the process
            require_once("models/{$controller}.php");
            $controllerClassName = $controller . 'Controller';
            $controller = new $controllerClassName();
            break;
    }
    // call the requested action
    $controller->{ $action }();
}

// for validation we list the allowed controllers and their actions
// Add an entry for each new controller and its actions
$controllers = array('pages' => ['home', 'error'],

    'user' => ['register', 'login', 'logout', 'read', 'readallusers', 'update', 'delete'],

    'post' => ['readAllPosts', 'read', 'create', 'delete', 'update'],
    'cuisine' => [ 'readCuisine','readAllCuisines'],
);




if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('pages', 'error');
    }
} else {
    call('pages', 'error');
}
?>