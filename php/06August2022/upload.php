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

        // print_r($_FILES);

        $name= $_FILES['image']['name'];
        
        $type= $_FILES['image']['type'];
        $tmp= $_FILES['image']['tmp_name'];
        $error= $_FILES['image']['error'];
        $size= $_FILES['image']['size'];

        // $filetypes = array("jpg", "png");

        if($size>1024*400){
            echo "File size must be 400KB";
        }




        else{
            echo move_uploaded_file(<img src="\uploads/"..$name>);

        }

    




    }
    


    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image"><br>
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>