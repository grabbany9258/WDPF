<?php $db = new mysqli('localhost', 'root', '', 'wdpf51_exam')?>

<!-- For Entry -->
<?php

    if(isset($_POST['manu_submit'])){
        extract($_POST);  

       $sql = "CALL add_manufacturer('$m_name', '$m_address', '$m_contact')";
       $db->query($sql);
       if($db->affected_rows>0){
        // echo "Successfully Added";
        echo "<h2 style='color: blue;'>Successfully Added</h2>";
       }
    }

?>

    <h1>Manufacturer Entry</h1>
        <form action="" method="post">
            Manufacturer Name: <br> 
            <input type="text" name="m_name" placeholder="Manufacturer Name"> <br> <br>
            Manufacturer Address: <br> 
            <input type="text" name="m_address" placeholder="Manufacturer Address "> <br> <br>
            Manufacturer Contact: <br> 
            <input type="text" name="m_contact" placeholder="Manufacturer Contact"> <br><br>
            <input type="submit" name="manu_submit" value="ADD Manufacturer"> <br>

        </form>

    <br>
    <a href="products_view_list.php">Show Products</a>
</table>