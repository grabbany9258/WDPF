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

        if(isset($_POST['submit'])){

        
        echo "<pre>";
            print_r($_FILES);


             $name= $_FILES['file']['name'];
        //     $ext = explode (".", $name);
        //     $ext = strtolower(end($ext));
            
             $file= $_FILES['file']['type'];
            //  print_r($file);
             $tmp= $_FILES['file']['tmp_name'];
             $error= $_FILES['file']['error'];
             $size= $_FILES['file']['size'];

        //     $filetypes=array("jpg", "png");

        //     $errors =array(); // errors gulo k blank error a store kora holo

            if($size>1024*1024){
                $errors[] = "Size must be within 500KB";
            }

        //     if(!in_array($ext, $filetypes)){
        //         $errors[] = "File type  must be JPG or PNG";

        //     }

        //     if(count($errors)>0){
        //         foreach($errors as $err){
        //             echo $err . "<br>";
        //         }
        //     }else{
        //             $result= move_uploaded_file($tmp, 'uploads/' .$name);
        //             if($result==1){
        //                 echo "Uploaded succesfully";
        //             }

        //         }  
            
         }
        ?>


    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" name="submit" value="UPLOAD">
    </form>

</body>
</html>