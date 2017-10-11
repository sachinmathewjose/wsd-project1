<?php 
class homePage extends page
{

    public function get()
    {

        /*$form = '<form action="index.php?uploadForm" method="post">';
        $form .= '<input type="file" name="fileToUpload" id="fileToUpload">';
        $form .= '<input type="submit" value="Upload Image" name="submit">';
        $form .= '</form> ';*/
        $form = '';
        $form .= '<form action="index.php?page=uploadForm" method="post" enctype="multipart/form-data">';
        $form .= 'Select image to upload:';
        $form .= '<input type="file" name="fileToUpload" id="fileToUpload">';
        $form .= '<input type="submit" value="Upload Image" name="submit">';
        $form .= '</form>';
        $this->html .= '<h1>Upload Form</h1>';
        $this->html .= $form;
    }

}

?>