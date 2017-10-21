<?php 
class stringFunction
{
	static public function print_this($string)
	{
		echo $string;
	}

	static public function convert_lower_rmspace($string)
	{
		//returns the string converted to lowercase and remove spaces
		return preg_replace('/\s+/', '', strtolower($string) );
	}
}

?>