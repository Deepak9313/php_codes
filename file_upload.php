<?php
// For uploading files we use $_FILES variable
if(isset($_FILES["file"])){
    echo "<pre>";
    print_r($_FILES["file"]);
    $name = $_FILES["file"]["name"];
    $type = $_FILES["file"]["type"];
    $tmp_name = $_FILES["file"]["tmp_name"];
    $size = $_FILES["file"]["size"];
    echo "</pre>";
    if(file_exists("uploads/".$name)){
        echo "Soory file exists: ";
    }
    if($type != "image/jpg" && $type != "image/png" && $type != "image/jpeg"
        && $type != "image/gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
         $uploadOk = 0;
    }else{
         move_uploaded_file($tmp_name,"uploads/".$name);
         echo "You uploaded successfully";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" enctype="multipart/form-data">
        File to Upload : <input type="file" name="file"><br>
        <input type="submit" value="Upload File">
    </form>
</body>
</html>