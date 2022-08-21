<h1>File Upload</h1>
<form action=""method ="post" enctype="multipart/form-data">
    <input type="file" name="grb" > <br>
    <input type="submit" name="submit" value="CHECK">
</form>
<?php
// echo "<pre>";
//     print_r($_FILES);
if(isset($_POST['submit'])){
    $name = $_FILES['grb']['name'];
    $ext = explode("." , $name);
    $ext = strtolower(end($ext));
    $type = $_FILES['grb']['type'];
    $tmp = $_FILES['grb']['tmp_name'];
    $error = $_FILES['grb']['error'];
    $size = $_FILES['grb']['size'];

    $filetypes = array("jpg", "png", "pdf");
    $errors = array();

    if($size>1024*400){
        $errors[] = "File size must be 400KB";
    }
    if(!in_array($ext , $filetypes)){
        $errors[] = " File types must be jpg, png , pdf";
    }

    if(count($errors)>0){
       foreach($errors as $err)
        echo $err ."<br>";   
    }
   
    else{
        $result = move_uploaded_file($tmp, 'uploads/' .$name);
        echo "You have logged in succesfully";
    }
}

?>