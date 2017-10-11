<?php 
class uploadForm
{

    public function get()
    {
        echo "post";
    }

    public function post()
    {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $fileType = pathinfo($target_file,PATHINFO_EXTENSION);
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"]))
        {
            if($fileType == 'csv')
            {
            $uploadOk = 1;
            }
            else
            {
            $uploadOk = 0;
            }
        }

        if ($uploadOk == 0)
        {
            //$this->html .= 'success';
            header('Location: index.php?page=errorReport&errorMsg=Sorry');
            exit;
        }
        else
        {
            //$this->html .= 'fail';
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
            {
                header("Location: index.php?page=table&file=$target_file");
                exit;
            }
            else
            {
                header('Location: index.php?page=errorReport&errorMsg=Sorry2.');
                exit;
            }
         }     
    }
}

?>