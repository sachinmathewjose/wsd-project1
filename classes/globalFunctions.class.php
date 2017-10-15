<?php 
class globalFunctions
{
	static public function get_from_GET($string)
	{
		if (isset($_GET[$string]))
		{
			return $_GET[$string];
		}
		else
		{
			return 0;
		}
	}

	static public function get_from_REQUEST($string)
	{
		if (isset($_REQUEST[$string]))
		{
			return $_REQUEST[$string];
		}
		else
		{
			return 0;
		}
	}

	static public function get_filename_from_path($path)
	{
		return basename($path);
	}
}

?>