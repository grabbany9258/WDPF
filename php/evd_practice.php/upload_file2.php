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

    $name = $_FILES['grb']['name'];
    $ext = explode(".",$name);
    $ext =strtolower(end($ext));

    

    $type = $_FILES['grb']['type'];
    $tmp = $_FILES['grb']['tmp_name'];
    $error = $_FILES['grb']['error'];
    $size = $_FILES['grb']['size'];

    $filetypes = array("jpg", "png");
    $errors = array();


    if($size>1024*200){
        $errors[] = "Photo must be within 200KB ";
    }


    if(!in_array($ext,$filetypes)){
        $errors[] = "File type must be jpg or png";

     }
    
    if(count($errors)>0){
        foreach($errors as $err){
            echo $err ."<br>";
        }
    }

    else{
        $result= move_uploaded_file($tmp, 'upload/'. $name);
        if($result==1){
            echo "Logged in successful";
        }
    }
}

    ?>


    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="grb"> <br>
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>