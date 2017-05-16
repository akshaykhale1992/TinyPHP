<?php

/**
 * Loading all Libraries
 */
require __DIR__ . '/../vendor/autoload.php';

/**
 * Loading main Controller Class and
 * helpers file to load helper function
 * and to load Controller
 * Once can skip helpers file if
 * don't want the helper functions
 * in the framework.
 */
require __DIR__.'/../controllers/controller.php';
require __DIR__.'/../helpers.php';

$path = explode('/',trim(strtolower($_SERVER['REQUEST_URI']), '/'));
$paths = array(__DIR__ . '/../views');
$cache_path = array('cache_path' => __DIR__ . '/../cache');

$default_pages = ['index','home','default'];

if (empty($path[0]) || in_array($path[0], $default_pages)) {
	$method = 'index'; // Loading default index method from the controller for homepage
} else {
	$method = implode('_', $path); // Calling method from the URL
}

$controller = new Controller($paths, $cache_path);
if (method_exists ($controller, $method)) {
	echo $controller->{ $method }(); // Calling the method from the Controller
} else {
	echo $controller->notFound(); // Calling 404 Page if method not found
}

exit();
