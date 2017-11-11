<?php
function uploadImage($imgUrl){
    if(isset($_FILES["$imgUrl"]) && $_FILES["$imgUrl"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["$imgUrl"]["name"];
        $filetype = $_FILES["$imgUrl"]["type"];
        $filesize = $_FILES["$imgUrl"]["size"];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);

        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
        $count=1;
        while(true){
            if(file_exists("images/" . $filename)){
                $filename=$count.$filename;
                $count=$count+1;
            }
            else
                break;
        }
        if(in_array($filetype, $allowed)){
            $imgPath="images/".$_FILES["$imgUrl"]["name"];
            if(move_uploaded_file($_FILES["$imgUrl"]["tmp_name"], "images/" . $_FILES["$imgUrl"]["name"])){
                return $imgPath;
            }
        }
    }
}
/*$password = "123456789";*/
$abc=uploadImage("fileToUpload");
echo $abc;/*.md5($password);/*
?>
<! DOCTYPE html>
<html>
<body>
<form  method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
</body>
<html>