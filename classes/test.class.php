<?php 
class test extends page
{

    public function get()
    {
        $this->html .= '<h1>Test page get</h1>';
    }
    public function post()
    {
        $this->html .= '<h1>Test page post</h1>';
    }

}

?>