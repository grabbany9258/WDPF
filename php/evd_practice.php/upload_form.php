<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // echo "<pre>";
    //     print_r($_FILES);
    if(isset($_POST['submit'])){

        $name= $_FILES['file']['name'];
        $ext= explode(".", $name);
        $ext=strtolower(end($ext));
        


        $photo= $_FILES['file']['type'];
        $temp= $_FILES['file']['tmp_name'];
        $error=$_FILES['file']['error'];
        $size=$_FILES['file']['size']; //1st condition

       $filetypes = array("jpg","png");

        $errors = array();

        if($size>1024*200){
            $errors[]= "Size must be within 100KB";  
         }

         if(!in_array($ext, $filetypes)){
            $errors[] = "File type must be jpg or png";

         }

         if(count($errors)>0){
            foreach($errors as $err){
                echo $err . "<br>";
            }
         }
        else{
            $result= move_uploaded_file($temp, 'uploads/' .$name);
            if($result==1){
                echo "You have uploaded your file successfully";
            }
        }
    }

        

    ?>


    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file"><br>
        <input type="submit" name="submit" value="UPLOAD">
    </form>
</body>
</html>