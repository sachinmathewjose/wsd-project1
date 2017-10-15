<?php 
//class page
abstract class page
{
	protected $html;
	public function __construct()
	{
		$this->html .= '<html>';
		$this->html .= '<head>';
		$this->html .= '<title>My Project 1</title>';
        $this->html .= '<link rel="stylesheet" type="text/css" href="styles/style.css">';
        $this->html .= '</head>';
        $this->html .= '<body>';
	}
	public function __destruct()
    {
        $this->html .= '</body></html>';
        stringFunction::print_this($this->html);
    }
}
?>