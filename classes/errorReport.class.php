<?php 
class errorReport extends page
{

    public function get()
    {
    	$this->html .= $this->dispError();
    }
    public function dispError()
    {
    	$errorMsg = '';
    	$msg = '';
    	if (isset($_GET['errorMsg']))
		{
			$msg = $_GET['errorMsg'];
		}
    	$errorMsg .= "<h4>$msg</h4>";
    	$errorMsg .= '<form action="index.php" method="get">';
    	$errorMsg .= '<button type="submit">home page</button>';
    	$errorMsg .= '</form>';
    	return $errorMsg;
    }
    public function post()
    {
        $this->html .= '<h1>error post</h1>';
    }
}

?>