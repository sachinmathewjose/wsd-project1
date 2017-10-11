<?php 
class table extends page
{

    public function get()
    {
        if (isset($_GET['file']))
		{
			$this->readcsv($_GET['file']);
		}
    }

    public function readcsv($filename)
    {
		$handle = fopen($filename, "r");
		$this->html .= '<table>';
		//Display heading
    	$csvContents = fgetcsv($handle);
    	$this->html .= '<tr>';
    	foreach ($csvContents as $headercolumn)
    	{
        	$this->html .= "<th>$headercolumn</th>";
    	}
   		$this->html .= '</tr>';

		// displaying contents
		while ($csvcontents = fgetcsv($handle))
		{
		    $this->html .= '<tr>';
		    foreach ($csvcontents as $column)
		    {
		        $this->html .= "<td>$column</td>";
		    }
    	$this->html .= '</tr>';
		}
		$this->html .= '</table>';
		fclose($handle);
	}

    public function post()
    {
        $this->html .= '<h1>Test page post</h1>';
    }

}

?>