<?php
use Windwalker\Renderer\BladeRenderer;

class Controller
{
	private $renderer;

	/**
	 * Loading the default blade
	 * rendered
	 * @author Akshay Khale
	 * @param Array $paths       Array of default Directories
	 * @param Array $cache_path  Array of Cache Path
	 */
	function __construct($paths, $cache_path)
	{
		$this->renderer = new BladeRenderer($paths, $cache_path);
	}

	/**
	 * Index method which gets loaded
	 * on default URL
	 * @return String 	HTML Content of the Page
	 */
	public function index()
	{
		return $this->renderer->render(sayHello(), []);
	}

	/**
	 * This function returns default
	 * 404 Error Page
	 * @return [type] [description]
	 */
	public function notFound()
	{
		return $this->renderer->render('errors.404', []);
	}

	/**
	 * About page which gets loaded
	 * on <host_name>/about URL
	 * @return String 	HTML Content of the Page
	 */
	public function about()
	{
		return $this->renderer->render('about', []);
	}
}
