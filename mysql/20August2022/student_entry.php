<?php
   $db = new mysqli("localhost","root", "", "wdpf51");
?>
<h1>Student Entry Form</h1>
<form action="" method="post">
    Student ID: <br>
    <input type="number" name="id" placeholder= "Enter Your ID"><br>
    Student Name: <br>
    <input type="text" name="name" placeholder= "Enter Your Name"><br>
    Student Email: <br>
    <input type="text" name="email" placeholder= "Enter Your Email"><br>
    Student Phone: <br>
    <input type="text" name="phone" placeholder= "Enter Your Phone"><br>
    <input type="submit" name="submit" value= "submit"><br> <br>
    <a href="student_list2.php"><h2>Show Student</h2></a>
   
</form>

<?php
    if(isset($_POST['submit'])){
        extract($_POST);

        $sql = "INSERT INTO students VALUES('$id', '$name', '$email', '$phone')";
        $db->query($sql);
       if($db->affected_rows>0){
        echo "Information inserted Succesfully";
       }

    }

?>
