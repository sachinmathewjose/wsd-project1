<?php 
//class page
abstract class page
{
	protected $html;

	public function __construct()
	{
		$this->html .= '<html>';
        $this->html .= '<link rel="stylesheet" href="styles\\styles.css">';
        $this->html .= '<body>';
	}
	public function __destruct()
    {
        $this->html .= '</body></html>';
        echo $this->html;
        //stringFunctions::printThis($this->html); need to move this into class
    }
}
?>