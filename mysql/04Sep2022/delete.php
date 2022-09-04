<?php $db = new mysqli('localhost', 'root', '', 'wdpf51_exam')?>
    
<!-- For Delete -->
<?php

 
    if(isset($_POST['submit'])){
       $id = $_POST['manu_id'];
       $sql = "DELETE FROM manufacturer WHERE id = '$id'";
       $db->query($sql);
       if($db->affected_rows>0){
        // echo "Deleted";
        echo "<h2 style='color: red;'>Deleted</h2>";
       }
    }

?>

  <!-- For Manufacturer List $ DELETE -->
<h1> manufacturers List</h1>
    <form action="" method="post">
        <select name="manu_id">
            <option value=""disabled selected>Select one</option>
    <?php   
       $sql = "SELECT * FROM manufacturer";
       $result = $db->query($sql);
      while($row = $result->fetch_assoc()){ ?>

       <option value="<?php echo $row['id']?>"><?php echo $row['name'] ?> </option>         
         

    <?php  } ?>
    </select> <br>
    <input type="submit" name="submit" value="DELETE">
    </form>