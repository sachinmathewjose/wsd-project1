<?php 
class homePage extends page
{

    public function get()
    {
        $this->html .= '<h1>File Upload</h1>';
        $form = '';
        $form .= '<form action="index.php" method="post" enctype="multipart/form-data">';
        $form .= 'Select file to upload:<br>';
        $form .= '<input class="button_upload" type="file" name="fileToUpload" accept=".csv" id="fileToUpload">';
        $form .= '<br>';
        $form .= '<input type="submit" value="Upload CSV" name="submit" id="submit">';
        $form .= '</form>';  

        $this->html .= $form;
    }

    public function post()
    {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $fileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $existed = '';
        if ($this->fileExisted($target_file))
        {
            $existed = '&existed=TRUE';
        }
        if(isset($_POST["submit"]))
        {
            if ($fileType != 'csv')
            {
                header('Location: index.php?page=errorReport&errorMsg=Sorry! no csv file found');
                exit;
            }
            elseif (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
            {
                header("Location: index.php?page=table&file=$target_file$existed");
                exit;
            }
            else
            {
                header('Location: index.php?page=errorReport&errorMsg=Sorry an error occured. The file is not saved');
                exit;
            }
        }     
    }

    public function fileExisted($target_file)
    {
        return file_exists($target_file);
    }

}

?>