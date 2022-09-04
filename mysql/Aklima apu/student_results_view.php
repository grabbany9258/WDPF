<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Students Result View</h1>

    <table border="1">
        <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Module_name</td>
        <td>Total Marks</td>
        <td>Mobile</td>
        </tr>
<!-- for showing data into table -->
        <?php
        $db = new mysqli('localhost','root','','idb_bisew');   
        $sql = "SELECT * FROM student_info_view ORDER BY st_name";
        $result = $db->query($sql);
        while($data =$result->fetch_assoc()){
            ?>
            <tr>
                <td><?=$data['student_id']; ?></td>
                <td><?=$data['st_name']; ?></td>
                <td><?=$data['rmodule_name']; ?></td>
                <td><?=$data['rtotal_marks']; ?></td>
                <td><?=$data['st_mobile']; ?></td>
            </tr>

       <?php
        }

        ?>


    </table>

    <!-- for deleting data -->

    <?php

    if(isset($_POST['submit'])){
        $id = $_POST['stid'];
        $sql = "DELETE FROM students WHERE student_id = '$id'";
        $db->query($sql);
        if($db->affected_rows>0){
            echo "DELETED";
        }
    }
?>
    <h1>Students Data</h1>
    <form action="" method="post">
        <select name="stid">
            <option value="" disabled selected>Selected One</option>
            
               <?php
                $sql= "SELECT * FROM students";
                $result = $db->query($sql);
                while($row = $result->fetch_assoc()){
                    ?>
                    <option value="<?php echo $row['student_id'] ?>"><?php echo $row['st_name'] ?></option>
                
                    <?php } ?>
        
        </select>
        <input type="submit" name="submit" value="Deleted">
    </form>

    <!-- for Entry -->
    
<h1>Added Data</h1>
    <?php
    if(isset($_POST['add_submit'])){
        extract($_POST);
        $sql = "CALL add_delete('$st_name','$st_address','$st_mobile')";
        $db->query($sql);
        if($db->affected_rows>0){
            echo "ADDED";
        }

    }



?>
    <form action="" method="post">
      <input type="text" name="st_name" placeholder="Enter Your Name"><br>
      <input type="text" name="st_address" placeholder="Enter Your Address"><br>
      <input type="text" name="st_mobile" placeholder="Enter Your Contact"><br>
      <input type="submit" name="add_submit" value="SAVE DATA">
    </form>

</body>
</html>