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
        stringFunction::print_this($this->html);
    }
}
?>