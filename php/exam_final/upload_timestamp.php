<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Upload file</h1>
<?php

if(isset($_POST['submit'])){
    
    // echo"<pre>";
    //     print_r($_FILES);

    $name = $_FILES['file']['name'];
    $ext = explode(".",$name);
    $ext =strtolower(end($ext));

    $time =time();
    $newname = $time. "." .$ext;

    

    $type = $_FILES['file']['type'];
    $tmp = $_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];
    $size = $_FILES['file']['size'];

    $filetypes = array("jpg","jpeg","pdf","txt","png");
    $errors = array();


    if($size>1024*400){
        $errors[] = "Photo must be within 400KB ";
    }


    if(!in_array($ext,$filetypes)){
        $errors[] = "File type must be jpg, JPEG, pdf, txt or png";

     }
    
    if(count($errors)>0){
        foreach($errors as $err){
            echo $err ."<br>";
        }
    }

    else{
        $result= move_uploaded_file($tmp, 'uploads/'. $newname);
        if($result==1){
            echo "Logged in successful";
        }
    }
}

    ?>


    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file"> <br>
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>