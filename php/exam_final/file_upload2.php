<form action="" method="post" enctype="multipart/form-data">
    Attach File: <br>
    <input type="file" name=grb > <br>
    <input type="submit" name="submit" value="CHECK">
</form>

<?php
// echo "<pre>";
// print_r($_FILES);

if(isset($_POST['submit'])){
    $name=$_FILES['grb']['name'];
    $ext = explode(".", $name);
    $ext = strtolower(end($ext));

    $type=$_FILES['grb']['type'];
    $tmp=$_FILES['grb']['tmp_name'];
    $error=$_FILES['grb']['error'];
    $size=$_FILES['grb']['size'];

    $filetypes = array("jpg","png");
    $errors =array();

if($size>1024*400){
    $errors[] = "File size must be 400KB";
}
if(!in_array($ext, $filetypes)){
    $errors[] = "file type must be jpg or png";

}
if(count($errors)>0){
    foreach($errors as $err)
    echo $err .  "<br>";
}

else{
    $results= move_uploaded_file($tmp, 'uploads/' .$name);
    echo "Logged in succesful";
}
}
?>