<?php
// setting error reporting on
ini_set('display_errors','On');
error_reporting(E_ALL);

//Class to load class
Class Manage 
{
	public static function autoload($class)
	{
		include 'classes/'.$class.'.class.php';
	}
}

//register auto load function
spl_autoload_register(array('Manage','autoload'));

$obj = new main();

//main class
class main
{
	public function __construct()
	{
		// requested page will initilally be homepage
		$requested_page = 'homePage';
		if (isset($_REQUEST['page']))
		{
			$requested_page = $_REQUEST['page'];
		}
		$page = new $requested_page;
		// Calling get function from requested page
		if($_SERVER['REQUEST_METHOD'] == 'GET')
		{
            $page->get();
        }
        else
        {
            $page->post();
        }
	}
}

?>
