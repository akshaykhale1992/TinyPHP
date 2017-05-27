<?php

/**
 * A simple function which
 * demonstrated working of
 * helpers which returns
 * simple string blade
 * file name
 * @return String  Name of the Blade File
 */
function sayHello()
{
	return "index";
}

/**
 * This function returns the Application URL
 * for the given folder location
 * @param  String $location Folder Location
 * @return String           Folder URL
 */
function baseUrl($location)
{
	$url = (isset($_SERVER['HTTPS'])) ? 'https://' : 'http://';
	$url .= $_SERVER['HTTP_HOST'];
	return $url.$location;
}

/**
 * This function is simply like an alias
 * to getenv function 
 * https://github.com/vlucas/phpdotenv
 * 
 * @param  String $veriable_name ENV Variable you want to select
 * @param  String $default_value Default value if the veriable not found
 * @return String 				 Value of variable from .env file
 */
function env($variable_name, $default_value)
{
	$return_value = getenv($variable_name);
	if ($return_value) {
		return $return_value;
	}
	return $default_value;
}