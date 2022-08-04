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
    // echo "<Pre>";
    //     print_r($_FILES);

    $name = $_FILES['image']['name'];
    $type = $_FILES['image']['type'];
    $tmp = $_FILES['image']['tmp_name'];
    $error = $_FILES['image']['error'];
    $size = $_FILES['image']['size'];

    if($size>1024*200){
        echo $size = "Photo size must be 100KB";
    }

    else{
        move_uploaded_file($tmp, 'upload/' . $name);
    }

    

    

}

    ?>



    <form action="" method=post enctype="multipart/form-data">
        <input type="file" name="image"> <br>
        <input type="submit" name="submit" value="UPLOAD";>
    </form>
</body>
</html>