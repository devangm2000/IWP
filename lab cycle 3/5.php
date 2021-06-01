<?php
if(isset($_POST["submit"]))
{
    if ((($_FILES["file"]["type"] == "application/pdf")&&($_FILES["file"]["size"] <=5242880)))
    {
        if ($_FILES["file"]["error"] > 0)
        {
            echo "Error: " . $_FILES["file"]["error"] . "<br>";
        }
        else
        {
            $path=$_FILES['file']['name'];
            $pathto="C:\\xampp\\htdocs\\cyclesheet3\\".$path;
            move_uploaded_file( $_FILES['file']['tmp_name'],$pathto); 
            echo "Upload: " . $_FILES["file"]["name"] . "<br>";
            echo "Type: " . $_FILES["file"]["type"] . "<br>";
            echo "Size: " . ($_FILES["file"]["size"]/1024 ) . " Kb<br>";
            echo "Stored in: " . $_FILES["file"]["tmp_name"];
        }
    }
    else
    {
        echo "Invalid file";
    }
}
else
    {
        echo "Try Again";
    }

?> 
