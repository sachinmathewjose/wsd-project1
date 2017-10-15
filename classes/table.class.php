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

    public function displayWaring($filename)
    {
    	$this->html .= '<div class="alert">';
		$this->html .= '<span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>';
		$this->html .= "file \'<strong>$filename</strong>\' already existed in the filesystem. replaced the existing file.";       
		$this->html .= '</div>';
    }

    public function readcsv($filename)
    {
    	if(globalFunctions::get_from_get('existed'))
    	{
    		$this->displayWaring($filename);
    	}
		$handle = fopen($filename, "r");
		$this->html .= '<table id="table1">';
		//Display heading
		$this->html .= "<caption>$filename</caption>";
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