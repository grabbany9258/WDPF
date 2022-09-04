<?php $db = new mysqli('localhost', 'root', '', 'wdpf51_exam')?>
    
<?php

// For Delete
    if(isset($_POST['submit'])){
       $id = $_POST['manu_id'];
       $sql = "DELETE FROM manufacturer WHERE id = '$id'";
       $db->query($sql);
       if($db->affected_rows>0){
        echo "Deleted"; 
       }
    }

?>

    <?php

// For Entry
    if(isset($_POST['manu_submit'])){
        extract($_POST);  
        // CALL `manufacture_entry`(@p0, @p1, @p2); ai basis a hbe call
       $sql = "CALL add_manufacturer('$m_name', '$m_address', '$m_contact')";
       $db->query($sql);
       if($db->affected_rows>0){
        echo "Successfully Added";
       }
    }

?>

//  For Manufacturer List $ DELETE
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

    // For Manufacturer Entry 

    <h1>Manufacturer Entry</h1>
        <form action="" method="post">
            <input type="text" name="m_name" placeholder="Manufacturer Name"> <br>
            <input type="text" name="m_address" placeholder="Manufacturer Address "> <br>
            <input type="text" name="m_contact" placeholder="Manufacturer Contact"> <br>
            <input type="submit" name="manu_submit" value="ADD Manufacturer"> <br>

        </form>

    <br>
    <a href="products.php">Show Products</a>
</table>