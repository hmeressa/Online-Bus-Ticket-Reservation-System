<?php
if(isset($_POST['save']))
{
    // $targetfile = $targetdir.$filename;
    $file=$_FILES['file'];
    print_r($file);
    $filename = $_FILES["file"]["filename"];
    $filetemp = $_FILES["file"]["filetemp"];
    $filesize = $_FILES["file"]["filesize"];
    $fileerror = $_FILES["file"]["fileerror"];
    $filetype = $_FILES["file"]["filetype"];

    $fileextesion=explode('.',$filename);
    $fileactual=strtolower(end($fileextesion));

    $allowed=array('jpg','jpeg','png');
    if(in_array($fileactual,$allowed))
    {
      $newname=uniqid('',true).".".$fileactual;
      $filedestination='uploads/'.$newname;
      move_uploaded_file($filetemp,$filedestination);
     header("location:image.php?sucess"); 
 }
    else {
        echo "not alloed";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="image.php" method="POST" enctype="multipart/form-data">
<input type="file" name ="file">
<input type="submit" name="save" value="upload"> 
</form>
</body>
</html>