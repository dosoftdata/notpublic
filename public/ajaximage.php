<?php

require_once dirname(dirname(__file__)) . '/config/classes.inc';
session_start();
$path = "images/fphotos/";
function getExtension($str)
{
    $i = strrpos($str, ".");
    if (!$i)
    {
        return "";
    }
    $l = strlen($str) - $i;
    $ext = substr($str, $i + 1, $l);
    return $ext;
}

$valid_formats = array(
    "jpg",
    "jpeg",
    "JPG",
    "JPEG");
if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{
    $name = $_FILES['photoimg']['name'];
    $size = $_FILES['photoimg']['size'];
    if (strlen($name))
    {
        $ext = getExtension($name);
        if (in_array($ext, $valid_formats))
        {
            if ($size < (1024 * 1024))
            {
                //Image filter for xxx images
                $score = ImageFilter::GetScore($_FILES['photoimg']['tmp_name']);		
                if(isset($score) && $score >= 40 )
                {
                    echo "Image scored ".$score."%, It seems that you have uploaded a nude picture :-(";
                
                }//if
                else{
                session_regenerate_id();
                $actual_image_name = session_id() . "." . $ext;
                $tmp = $_FILES['photoimg']['tmp_name'];
                if (move_uploaded_file($tmp, $path . $actual_image_name))
                {
                    //	mysql_query("UPDATE users SET profile_image='$actual_image_name' WHERE uid='session_id()'");

                    print "<img src='images/fphotos/" . $actual_image_name . "'  class='preview'>";
                } else{
                    echo "Fail upload folder with read access.";
                    }//else
                }//else     
            } //if
            else
                echo "Image file size max 1 MB";
        } else
            echo "Invalid file format..";
    } else
        echo "Please select image..!";

    exit;
}

?>